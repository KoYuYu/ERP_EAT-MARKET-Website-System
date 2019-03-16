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
<form method="post" action="CreateInformation1.php">
	<h1>填寫購買資料</h1><br>
	<br>購買客戶編號：<input type="text" name="buyerid" /></br>
	<br>產品編號：<input type="text" name="number" /></br>
	<br>訂購數量：<input type="text" name="amount" /></br>
	<br>今日日期：<input type="date" name="today"/></br>
	<br>收貨人：<input type="text" name="name"/></br>
	<br>送貨地址：<input type="text" name="add"/></br>
	<input type ="button" onclick="javascript:location.href='CreateInformation1.php'" value="送出確認"></input>&nbsp;&nbsp;
	<input type ="button" onclick="javascript:location.href='admin.php'" value="回首頁"></input>
</form>
        <?php
header("Content-Type:text/html; charset=utf8");
error_reporting(0);
$link=@mysql_connect("localhost" , "root" ,"cycu_team08");
if(!$link) echo "資料庫無法連線";
//設定使用UTF8編碼
mysql_query("SET NAMES 'utf8'");
//選擇資料庫
mysql_select_db('10144109');
//設定SQL語法
$sql="select * from 產品資料";
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
</tr>";
}
$main.="</table>";
echo $main;
?>
        <form method="post" action="CreateInformation1.php">
          <br>
          新增訂單</br>
          <br>
          訂單編號(訂貨月+日)：
          <input type="text" name="number" />
          </br>
          <br>
          產品編號：
          <input type="text" name="name" />
          </br>
          <br>
          單價：
          <input type="text" name="price" />
          </br>
          <br>
          數量：
          <input type="text" name="amount" />
          </br>
          <br>
          折扣：
          <select type="text" name="free">
            <option>0</option>
            <option>0.05</option>
            <option>0.15</option>
            <option>0.2</option>
          </select>
          </br>
          <input type="submit" value="ok">
        </form>
        <?php
header("Content-Type:text/html; charset=utf8");
error_reporting(0);
$link=@mysql_connect("localhost" , "root" ,"cycu_team08");
if(!$link) echo "資料庫無法連線";
//設定使用UTF8編碼
mysql_query("SET NAMES 'utf8'");
//選擇資料庫
mysql_select_db('10144109');
//設定SQL語法
$sql="select * from 產品資料";
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
</tr>";
}
$main.="</table>";
echo $main;
?>
      </div>
      <article class="module width_full"> </article>
      <div class="spacer"></div>
    </section>
</body>
</html>