<?php

/*
 * 1402-06-25 saturday
 * شهادت امام رضا   تعطیل
 */

$db = null;

function connect_2_db() {
    global $db;
    if (!$db) {
        $db = new SQLite3('mydata.db');
    }
    create_table();
}

function create_table() {
    global $db;
    $db->query("
                CREATE TABLE IF NOT EXISTS  tblOPTION (
                OPTION_ID INTEGER PRIMARY KEY AUTOINCREMENT,
                OPTION_NAME TEXT NOT NULL,
                OPTION_VALUE TEXT NOT NULL
          );"
    );
}

function get_option($option_name, $full_row = false) {

    connect_2_db();
    if (!$option_name) {
        die('ERROR: Option name could not be null or empty.');
    }

    global $db;
    $result = $db->query("
                SELECT *   
                FROM tblOPTION  
                WHERE OPTION_NAME='$option_name';
        ");

    $row = $result->fetcharray(SQLITE3_ASSOC);
    if ($row) {
        if ($full_row) {
            return $row;
        } else {
            return $row['OPTION_VALUE'];
        }
    } else {
        return null;
    }
}

function option_exist($option_name) {
    $row = get_option($option_name, true);
    echo $row['OPTION_ID'];
    
    return (isset($row['OPTION_ID']));
}

function add_option($option_name, $option_value = null) {

    connect_2_db();
    if (!$option_name) {
        die('ERROR: Option name could not be null or empty.');
    }

    if (!$option_value) {
        $option_value = '0';
    }

    global $db;

    if (!option_exist($option_name)) {
        $db->query("
                        INSERT INTO tblOPTION(OPTION_NAME,OPTION_VALUE) VALUES
                        ('$option_name','$option_value');
                ");
    } else {
        $db->query("
                UPDATE tblOPTION
                SET OPTION_VALUE='$option_value'
                WHERE OPTOIN_NAME ='$option_name';
        ");
    }
}

function Update_option($option_name, $option_value = null) {
    add_option($option_name, $option_value);
}

function delete_option($option_name) {


    connect_2_db();
    if (!$option_name) {
        die('ERROR: Option name could not be null or empty.');
    }

    global $db;
    echo "A";
    if (option_exist($option_name)) {
        echo "<br/>" . "B";
        $db->query("
                      DELETE FROM tblOPTION  
                      WHERE   OPTION_NAME='$option_name';
                     ");
    }
    echo "<br/> C";
}
