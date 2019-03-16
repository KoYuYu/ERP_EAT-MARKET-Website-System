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
        <h1>訂單審核成功</h1>
        <?php
$number=$_POST[number];
$account=$_POST[account];
$member=$_POST[member];
$order_date=$_POST[order_date];
$ask_date=$_POST[ask_date];
$deliever_date=$_POST[deliever_date];
$deliever_way=$_POST[deliever_way];
$deliever_price=$_POST[deliever_price];
$customer=$_POST[customer];
$address=$_POST[address];
$city=$_POST[city];
$area=$_POST[area];
$point=$_POST[point];
$country=$_POST[country];

header("Content-Type:text/html; charset=utf8");
error_reporting(0);
$link=@mysql_connect("localhost" , "root" ,"cycu_team08");
if(!$link) echo "資料庫無法連線";
//設定使用UTF8編碼
mysql_query("SET NAMES 'utf8'");
//選擇資料庫
mysql_select_db('10144109');
//設定SQL語法
$sql="INSERT INTO `10144109`.`訂貨主檔` (`COL 1`, `COL 2`, `COL 3`, `COL 4`, `COL 5`, `COL 6`, `COL 7`, `COL 8`, `COL 9`, `COL 10`, `COL 11`, `COL 12`, `COL 13`, `COL 14`) VALUES ( '".$number."', '".$account."', '".$member."', '".$order_date."', '".$ask_date."', '".$deliever_date."', '".$deliever_way."', '".$deliever_price."', '".$customer."', '".$address."', '".$city."', '".$area."', '".$point."', '".$country."');";
//執行SQL語法
$result = mysql_query($sql) or die("執行錯誤：".mysql_error());
echo "新增成功";
$sql="select * from 訂貨主檔";
//執行SQL語法
$result = mysql_query($sql) or die("執行錯誤：".mysql_error());
$main="<table border=1>";
while($data=mysql_fetch_assoc($result)){
$main.="
<tr>
<td>{$data['COL 1']}</td> 
<td>{$data['COL 2']}</td>
<td>{$data['COL 3']}</td>
<td>{$data['COL 4']}</td>
<td>{$data['COL 5']}</td> 
<td>{$data['COL 6']}</td> 
<td>{$data['COL 7']}</td>
<td>{$data['COL 8']}</td>
<td>{$data['COL 9']}</td>
<td>{$data['COL 10']}</td> 
<td>{$data['COL 11']}</td> 
<td>{$data['COL 12']}</td>
<td>{$data['COL 13']}</td>
<td>{$data['COL 14']}</td> 
</tr>";
}
$main.="</table>";
echo $main;
?>
        <form method="post" action="admin.php">
          <input type="submit" value="回到後臺管理">
        </form>
      </div>
      <article class="module width_full"> </article>
      <div class="spacer"></div>
    </section>
</body>
</html>