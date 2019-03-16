<!doctype html>

<html lang="en">
    <head>
    <title>吃貨購物中心-後臺管理</title>
    <?php include_once('tmp/t_style.php');?>
    </head>
    <body>
    <?php include_once('tmp/t_side.php')?>
    <section id="main" class="column">
      <div class="module_content">
        <h1>訂貨管理</h1>
<?php
$buyerid=$_POST[buyerid];
$amount=$_POST[amount];
$number=$_POST[number];
$today=$_POST[today];
$name=$_POST[name];
$add=$_POST[add];



header("Content-Type:text/html; charset=utf8");
error_reporting(0);
$link=@mysql_connect("localhost" , "root" ,"cycu_team08");
if(!$link) echo "資料庫無法連線";

mysql_query("SET NAMES 'utf8'");
mysql_select_db('10144109');
$sql="INSERT INTO `10144109`.`未核准訂單` (`未核准編號`, `客戶編號`, `訂貨日期`,`產品編號`,`訂購數量`,`收貨人`,`送貨地址`) 
								VALUES ('NULL', '".$buyerid."', '".$today."', '".$number."', '".$amount."', '".$name."', '".$add."');";
$result = mysql_query($sql) or die("執行錯誤：".mysql_error());
echo "訂單處理中...<br>";

?>
<form method="post" action="deliever.php">
	<input type="submit" value="下一步 選擇出貨資訊">
</form>
      </div>
      <article class="module width_full"> </article>
      <div class="spacer"></div>
    </section>
</body>
</html>