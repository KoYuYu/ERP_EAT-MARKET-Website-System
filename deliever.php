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
        <h1> 新增訂單主檔</h1>
        <form method="post" action="deliever1.php">
          <br>
         </br>
          <br>
          訂單編號(訂貨月+日)：
          <input type="text" name="number" />
          </br>
          <br>
          客戶編號：
          <input type="text" name="account" />
          </br>
          <br>
          員工編號：
          <input type="text" name="member" />
          </br>
          <br>
          訂單日期：
          <input type="text" name="order_date" />
          </br>
          <br>
          要貨日期：
          <input type="text" name="ask_date" />
          </br>
          <br>
          送貨日期：
          <input type="text" name="deliever_date" />
          </br>
          <br>
          送貨方式：
          <input type="text" name="deliever_way" />
          </br>
          <br>
          運費：
          <input type="text" name="deliever_price" />
          </br>
          <br>
          收貨人：
          <input type="text" name="customer" />
          </br>
          <br>
          送貨地址：
          <input type="text" name="address" />
          </br>
          <br>
          送貨城市：
          <input type="text" name="city" />
          </br>
          <br>
          送貨行政區：
          <input type="text" name="area" />
          </br>
          <br>
          送貨郵遞區號：
          <input type="text" name="point" />
          </br>
          <br>
          送貨國家地區：
          <input type="text" name="country" />
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
      </div>
      <article class="module width_full"> </article>
      <div class="spacer"></div>
    </section>
</body>
</html>