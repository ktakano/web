<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <style>
  </style>
 </head>
 <body>
   <p id=title>
   ブックマーク共有システム
   </p>
   下記の内容で登録してよろしいですか？<br><br>
   <?php
     $num   = count($_POST);
     $name = "";
     $url = "";
     $genre = "";
    
    if(isset($_POST["name"])) {
       $name  = $_POST["name"];
    }
    if(isset($_POST["url"])) {
       $url   = $_POST["url"];
    }
    if(isset($_POST["genre"])) {
       $genre = $_POST["genre"];
    }
     
   ?>
   <table>
   <tr>
    <td>サイト：</td>
    <td><?php echo $name ?> </td>
   </tr>
   <tr>
    <td>URL：</td>
    <td><?php echo $url ?></td>
   </tr>
   <tr>
    <td>ジャンル：</td>
    <td><?php echo $genre ?></td>
   </tr>
   </table>
   <br>
   <form name="regist" action=php000c.php method=post>
    <input type=hidden name=name  value="<?php echo $name ?>">
    <input type=hidden name=url  value="<?php echo $url ?>">
    <input type=hidden name=genre  value="<?php echo $genre ?>">
    <input type=submit name=save  value="登録">
    <input type=button name=modify value="修正" onClick='document.forms[0].action ="php000a.php"; submit();'>
   </form>
 </body>
</html>
