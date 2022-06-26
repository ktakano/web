<html>
 <head>
  <meta charset=UTF-8">
  <style>
  </style>
 </head>
 <body>
   <div id=title>
   ブックマーク共有システム
   </div>

   <form action="php001.php" method="post">
	サイト名: <input name="sitename" size=40><br>
	URL　　: <input name="url" size=40><br>
	ジャンル: <select name="genre">
		<option>* 選択してください *</option>
		<option>検索エンジン</option>
		<option>ニュースサイト</option>
		<option>ポータルサイト</option>
		<option>メーカー</option>
	</select>
	<br><br>
	<input type=submit name="save" value='登録'>
	<input type=reset name="clear" value='クリア'>
   </form>

 </body>
</html>
