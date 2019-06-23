<?php
// Соединяемся, выбираем базу данных
//$link = mysql_connect('localhost', 'root_db', 'fktiby123');
//mysql_select_db('database_rel');
// Выполняем SQL-запрос

if (isset($_POST['input'])) {
  $var = $_POST['input'];
} else {
  $var = $_GET['input'];
}
$cur_date = DATE("Y-m-d H:i");
$ip = $_SERVER["REMOTE_ADDR"];
//mysql_query("INSERT INTO `select_r`(`id`, `ip`, `date_r`, `input_r`) VALUES (null,'$ip','$cur_date','$var')");
//$query = "INSERT INTO `select_php`(`id`, `date_new`, `ip`, `select_i`) VALUES (null,'$cur_date','$ip','$var')";
//$result = mysql_query($query) or die('Запрос не удался: ' . mysql_error());
$arr_error = [ 'file_put_contents', 'fwrite','fgets', 'shell_exec', 'escapeshellarg',
'escapeshellcmd','passthru','proc_close','proc_get_status', 'proc_nice', 'proc_open', 'proc_terminate',
'ini_get','ini_get_all','parse_ini_file','php_uname','popen','show_source','unlink','`'];
for ($i=0; $i<count($arr_error); $i++) {
   $pos = strrpos($var, $arr_error[$i]);
if ($pos != false) { // обратите внимание: три знака равенства
    echo "Функция ".$arr_error[$i]." заблокирована. Приносим свои извинения!) По всем вопросам обращайтесь в обратную связь";
    return ;
}
}
$pos = strrpos($var, "<br>");
if ($pos != false) { // обратите внимание: три знака равенства
    $var = str_replace("<br>", "\n", $var);
}

ini_set('disable_functions', 'system');
$fp = fopen('code.php', 'w');
fwrite($fp, $var);
fclose($fp);

/**
 * Обработчик ошибок
 * @param int $errno уровень ошибки
 * @param string $errstr сообщение об ошибке
 * @param string $errfile имя файла, в котором произошла ошибка
 * @param int $errline номер строки, в которой произошла ошибка
 * @return boolean
 */
function error_handler($errno, $errstr, $errfile, $errline)
{
    // если ошибка попадает в отчет (при использовании оператора "@" error_reporting() вернет 0)
    if (error_reporting() & $errno)
    {
        $errors = array(
            E_ERROR => 'ERROR',
            E_WARNING => 'WARNING',
            E_PARSE => 'PARSE',
            E_NOTICE => 'NOTICE',
            E_CORE_ERROR => 'E_CORE_ERROR',
            E_CORE_WARNING => 'E_CORE_WARNING',
            E_COMPILE_ERROR => 'E_COMPILE_ERROR',
            E_COMPILE_WARNING => 'E_COMPILE_WARNING',
            E_USER_ERROR => 'E_USER_ERROR',
            E_USER_WARNING => 'E_USER_WARNING',
            E_USER_NOTICE => 'E_USER_NOTICE',
            E_STRICT => 'E_STRICT',
            E_RECOVERABLE_ERROR => 'E_RECOVERABLE_ERROR',
            E_DEPRECATED => 'E_DEPRECATED',
            E_USER_DEPRECATED => 'E_USER_DEPRECATED',
        );

        // выводим свое сообщение об ошибке
        echo "{$errors[$errno]}[$errno] $errstr in $errline line\n";
    }

    // не запускаем внутренний обработчик ошибок PHP
    return TRUE;
}

/**
 * Функция перехвата фатальных ошибок
 */
function fatal_error_handler()
{
    // если была ошибка и она фатальна
    if ($error = error_get_last() AND $error['type'] & ( E_ERROR | E_PARSE | E_COMPILE_ERROR | E_CORE_ERROR))
    {
        // очищаем буффер (не выводим стандартное сообщение об ошибке)
        ob_end_clean();
        // запускаем обработчик ошибок
        error_handler($error['type'], $error['message'], $error['file'], $error['line']);
    }
    else
    {
        // отправка (вывод) буфера и его отключение
        ob_end_flush();
    }
}

// определеяем уровень протоколирования ошибок
error_reporting(E_ALL | E_STRICT);
// определяем режим вывода ошибок
ini_set('display_errors', 'On');
// включаем буфферизацию вывода (вывод скрипта сохраняется во внутреннем буфере)
ob_start();
// устанавливаем пользовательский обработчик ошибок
set_error_handler("error_handler");
// регистрируем функцию, которая выполняется после завершения работы скрипта (например, после фатальной ошибки)
register_shutdown_function('fatal_error_handler');

require 'code.php';

/*function shutdown() {
    $error = error_get_last();
    if (is_array($error)) {
      error_clear_last();
      print_r($error);
      return true;

    }
}

register_shutdown_function('shutdown');
include_once 'code.php';*/

//print_r($vv);
/*function exceptions_error_handler($severity, $message, $filename, $lineno) {
  print_r("ok");
}
set_error_handler('exceptions_error_handler');
*/?>
