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
   登録しました。<br><br>
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
 </body>
</html>
