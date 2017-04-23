<?php

/**
 * Класс Db
 * Компонент для работы с базой данных
 */
class Db
{

    /**
     * Устанавливает соединение с базой данных
     * @return \PDO <p>Объект класса PDO для работы с БД</p>
     */
    public static function getConnection()
    {
        // Получаем параметры подключения из файла
        $paramsPath = ROOT . '/config/db_params.php';
        $params = include($paramsPath);

        // Устанавливаем соединение
        $dsn = "mysql:host={$params['host']};dbname={$params['dbname']}";
        $db = new PDO($dsn, $params['user'], $params['password']);

        // Задаем кодировку
        $db->exec("set names utf8");

        return $db;
    }

}

// class Db
// {

//     /**
//      * Устанавливает соединение с базой данных
//      * @return \PDO <p>Объект класса PDO для работы с БД</p>
//      */
//     public static function getConnection()
//     {
//         // Получаем параметры подключения из файла
//         $paramsPath = ROOT . '/config/db_params.php';
//         $params = include($paramsPath);

//         // Устанавливаем соединение
//         $dsn = "mysql:host={$params['host']};dbname={$params['dbname']}";
//         // $db = new PDO($dsn, $params['user'], $params['password']);

//         // // Задаем кодировку
//         // $db->exec("set names utf8");

//         // return $db;

//           try{  
//             $db = new PDO($dsn, $params['user'], $params['password']);

//             return $db;
//          }
//         catch(PDOException $e)
//         {
//             printme(' подключиться к MySQL не получилось', 1);
//             printme(' проверьте настройки в коде скрипта (поля класса DBO этого скрипта), а также убедитесь что PHP PDO включено | текст ошибки:');
//             printme("Error: ".$e->getMessage());
//             //  exit(); 
//         }

//         // Задаем кодировку
//         $db->exec("set names utf8");
//     }

// }

