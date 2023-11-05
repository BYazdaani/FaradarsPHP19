<?php

/*
  1402-06-21 sunday
 * نکته دیباگ:
 * بعضی اوقات حتی نبود یک کاراکتر یا پرانتز در خطهای قبلی می تواند خطا ایجاد کند
 * چون کل صفحه یکجا پردازش می شود
 */


$db = new SQLite3('mydata.db');
$results = $db->query(" SELECT * FROM  tblOPTION;");

$c=0;
echo '<pre>';
while (true) {
    $row = $results->fetchArray();
    if (!$row) {
        break;
    }
    
    $c++;
    echo "Row: $c<br/>";
    echo $row[0]."  ".$row[1]."  ".$row[2];
    echo "<br/>";
}
echo '</pre>';

while (true) {
    $row = $results->fetchArray();
    if (!$row) {
        break;
    }
    
    $c++;
    echo "Row: $c<br/>";
    echo $row[0]."  ".$row[1]."  ".$row[2];
    echo "<br/>";
}