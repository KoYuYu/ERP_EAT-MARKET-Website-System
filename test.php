<?php
include_once('class/db.con.php'); //這可以不用
include_once('class/t_log.php');//路徑要改
$do="creat";
$m_log=new m_log();
$action=$m_log->insertaction($_SESSION["username"],$do);
?>