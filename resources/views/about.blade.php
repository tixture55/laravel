<!DOCTYPE HTML>
<?php
if(isset($users)){
	print_r($users);
}
?>
<html>
<head>
    <title>About</title>
</head>
<body>
    <h1>About Me</h1>

<form action="/about" method="post">
  <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
  <div>
    全角カタカナ
    <input type="text" pattern="[\u30A1-\u30FF]*"/>
  </div>
<br>  
<br>  
    <div>
    郵便番号
    <input type="text" pattern="\d{3}-?\d{4}"/>
  </div>
  
  <button type="submit">送信</button>
</form>
</body>
</html>
