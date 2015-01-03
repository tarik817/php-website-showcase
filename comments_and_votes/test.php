<?php
function cut($string, $length){
$string = mb_substr($string, 0, $length,'UTF-8'); // обрезаем и работаем со всеми кодировками и указываем исходную кодировку
$position = mb_strrpos($string, ' ', 'UTF-8'); // определение позиции последнего пробела. Именно по нему и разделяем слова
$string = mb_substr($string, 0, $position, 'UTF-8'); // Обрезаем переменную по позиции
return $string;
}

$text = 'Северная война закончилась в 1721 году';
echo cut($text, 17); // выведет 'Северная война', без части слова 'закончилась'
?>