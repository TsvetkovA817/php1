<?php

$path1 = "img/small/" . $_FILES['myPhoto']['name'];
$path2 = "img/big/"   . $_FILES['myPhoto']['name'];
$pfile = $_FILES['myPhoto']['name'];

if (move_uploaded_file($_FILES['myPhoto']['tmp_name'], $path2)) { //Переносим в основную папку

    if (copy($path2, $path1)) { //и Копируем в папку эскизов
        resize($path2, 600);    // Изменяем размер изображения  в основной
        resize($path1, 250);    // Изменяем размер изображения в эскизах

     } else {
        echo "не удалось скопировать $pfile...\n";
    }

    header("Location: z06_5.php");
}


function resize($image, $w = false, $h = false)
{
    if (($w < 0) || ($h < 0)) {
        echo "Некорректные входные параметры";
        return false;
    }
    list($w0, $h0, $type) = getimagesize($image); // Получаем размеры и тип изображения (число)
    $types = array("", "gif", "jpeg", "png"); // Массив с типами изображений
    $ext = $types[$type]; // Зная "числовой" тип изображения, узнаём название типа
    if ($ext) {
        $func = 'imagecreatefrom' . $ext; // Получаем название функции, соответствующую типу, для создания изображения
        $img_i = $func($image); // Создаём дескриптор для работы с исходным изображением
    } else {
        echo 'Некорректное изображение'; // Выводим ошибку, если формат изображения недопустимый
        return false;
    }
    /* Если указать только 1 параметр, то второй подстроится пропорционально */
    if (!$h) $h = $w / ($w0 / $h0);
    if (!$w) $w = $h / ($h0 / $w0);
    $img_o = imagecreatetruecolor($w, $h); // Создаём дескриптор для выходного изображения
    imagecopyresampled($img_o, $img_i, 0, 0, 0, 0, $w, $h, $w0, $h0); // Переносим изображение из исходного в выходное, масштабируя его
    $func = 'image' . $ext; // Получаем функция для сохранения результата
    return $func($img_o, $image); // Сохраняем изображение в тот же файл, что и исходное, возвращая результат этой операции
}
