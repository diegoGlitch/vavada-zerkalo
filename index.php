<?php
// Устанавливаем код ответа сервера на 301 Moved Permanently
header("HTTP/1.1 301 Moved Permanently");
// Указываем новый адрес для редиректа
header("Location: https://vavada.icu");
exit();
?>
