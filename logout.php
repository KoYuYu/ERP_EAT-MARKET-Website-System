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
        <h1>登出成功</h1>
        <?php session_start(); ?>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <?php
unset($_SESSION['username']);
echo "<script>alert('登出成功'); location.href = 'index.php';</script>";
?>
      </div>
      <article class="module width_full"> </article>
      <div class="spacer"></div>
    </section>
</body>
</html>