<?php
include_once "db.php";

$res=$User->count(['acc'=>$_POST['acc']]);
if($res>0){
    echo 1;  // 帳號正確
}else{
    echo 0;  // 查無帳號
}

?>