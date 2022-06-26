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
     
     if(isset($_POST["clear"]) && $_POST["clear"]){
       $name = $url = $genre = "";
     }
   ?>
   <form action=php000b.php method=post>
    <input name=name value="<?php echo $name ?>">
    <input name=url  value="<?php echo $url  ?>">
    <select name=genre>
     <option>* 選択してください *
     <option <?php if($genre == "音楽") echo "selected";  ?> >音楽
     <option <?php if($genre == "ニュース") echo "selected";  ?> >ニュース
     <option <?php if($genre == "ゲーム") echo "selected";  ?> >ゲーム
     <option <?php if($genre == "読書") echo "selected";  ?> >読書
     <option <?php if($genre == "辞書") echo "selected";  ?> >辞書
    </select>
    <input type=submit name=save  value="登録">
    <input type=submit name=clear value="クリア" onClick='document.forms[0].action ="php000a.php"; submit();'>
   </form>
 </body>
</html>
