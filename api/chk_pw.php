<?php
include_once "db.php";

$res = $User->count($_POST);

if ($res) {
    $_SESSION['user'] = $_POST['acc'];
}
echo $res;

/**
 * 1.數筆數 傳來的$_POST 
 * 2.判斷如果變數res為真，執行大括號中的
 */


