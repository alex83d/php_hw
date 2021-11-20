<?php
/*
 * Задание #1
   * Функция должна принимать массив строк и выводить каждую строку в отдельном параграфе (тег <p>)
   * Если в функцию передан второй параметр
   * true, то возвращать (через return) результат в виде одной объединенной строки.
 */
$array = array("foo", "bar", "hallo", "world");
function task1($array, $param = true): string
{
    $getPrintArray = "";
    if ($param == false) {
        foreach ($array as $value) {
            $getPrintArray .= "<p>$value</p>";
        }
    } elseif ($param == true) {
        return implode(',', $array);
    }
    return $getPrintArray;
}

// echo task1($array);

/*
 * Задание #2
   * Функция должна принимать переменное число аргументов.
   * Первым аргументом обязательно должна быть строка,
   * обозначающая арифметическое действие, которое необходимо выполнить со всеми передаваемыми аргументами.
   * Остальные аргументы это целые и/или вещественные числа.
 */
function task2($operator, ...$nums)
{

    if ($operator != '' && !empty($nums)) {
        $acc = array_shift($nums);
        // echo $acc;
        foreach ($nums as $num) {
            switch ($operator) {
                case '-':
                    $acc -= $num;
                    break;
                case '+':
                    $acc += $num;
                    break;
                case '*':
                    $acc *= $num;
                    break;
                case '/':
                    $acc /= $num;
                    break;
                default:
                    $acc = 'operator unknown!';
            }

        }
        return $acc;
    } else {
        return 'input all arguments!';
    }
}

// echo task2('?', 5,5);

/*
 * Задание #3 (Использование рекурсии не обязательно)
   * Функция должна принимать два параметра – целые числа.
   * Если в функцию передали 2 целых числа, то функция должна отобразить таблицу умножения
   * размером со значения параметров, переданных в функцию.
   * (Например если передано 8 и 8, то нарисовать от 1х1 до 8х8).
   * Таблица должна быть выполнена с использованием тега <table>
   * В остальных случаях выдавать корректную ошибку.
 */
function task3($a, $b)
{
    $table = '<table>';
    if (is_int($a) && is_int($b)) {
        for ($i = 1; $i <= $a; $i++) {
            $table .= "<th>$i</th>";
            for ($j = 1; $j <= $b; $j++) {
                $table .= '<td>' . $i * $j . '</td>';
            }
            // echo '</br>' . PHP_EOL;
            $table .= '</tr>';
        }
    } else {
        print "Non valid arguments";
    }
    print_r($table);
}

// task3(12, 8);

/* Задание #4
    * Выведите информацию о текущей дате в формате 31.12.2016 23:59
    * Выведите unix_time время соответствующее 24.02.2016 00:00:00.
*/

function task4()
{
    echo '<pre>' . PHP_EOL;
    date_default_timezone_set('Europe/Moscow');
    // var_dump(date_default_timezone_get());
    echo date("d.m.Y H:i:s");
    echo '<pre>' . PHP_EOL;
    $date = date_parse_from_format("d.m.Y g:i:s", '24.02.2016 00:00:00');
    $getUnixTime = mktime($date['hour'], $date['minute'],
        $date['second'], $date['month'],
        $date['day'], $date['year']);
    echo 'unix time: ' . $getUnixTime;
    echo '</pre>';
}
// echo task4();

/*
 * Задание #5
    * Дана строка: “Карл у Клары украл Кораллы”.
    * Удалить из этой строки все заглавные буквы “К”.
     *Дана строка: “Две бутылки лимонада”. Заменить “Две”, на “Три”.
 */
$str = "Карл у Клары украл Кораллы";
$str2 = "Две бутылки лимонада";
$str = str_replace('К', ' ', $str);
$str2 = str_replace('Две', 'Три', $str2);
// echo '<pre>';
// echo $str . '</br>' . PHP_EOL;
// echo $str2;

/*
 * Задание #6
    * Создайте файл test.txt средствами PHP. Поместите в него текст - “Hello again!”
    * Напишите функцию, которая будет принимать имя файла, открывать файл и выводить содержимое на экран.
 */
function createFile($name) {
   return file_put_contents($name, "Hello again!", FILE_APPEND );
}
 // print createFile('test.txt');


function task6($file) {
    return file_get_contents($file);
}
print task6('test.txt');



