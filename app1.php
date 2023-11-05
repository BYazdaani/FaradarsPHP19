<?php

/*
  1402-06-19 sunday
 */
$db = new SQLite3('mydata.db');

$db->query("
    CREATE TABLE IF NOT EXISTS  tblOPTION (
                OPTION_ID INTEGER PRIMARY KEY AUTOINCREMENT,
                OPTION_NAME TEXT NOT NULL,
                 OPTION_VALUE TEXT NOT NULL
               );"
);

$db->query("INSERT INTO tblOPTION(OPTION_NAME,OPTION_VALUE) VALUES
('test1', 'white'),
('test2', 'black');
");

//function create_db_table() {
//
//    global $db;
//
//    $db->query(
//            "CREATE TABLE IF NOT EXISTS  tblUSER (
//                USER_ID INTEGER PRIMARY KEY AUTOINCREMENT,
//                USER_NAME TEXT NOT NULL,
//                PASSWORD  TEXT NOT NULL,
//                EMAIL TEXT NOT NULL,
//                FIRST_NAME TEXT NOT NULL,
//                LAST_NAME TEXT NOT NULL
//                );
//        ");
//}
//
//create_db_table();
