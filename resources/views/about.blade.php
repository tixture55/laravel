<!DOCTYPE HTML>
<?php
if(isset($users)){
	print_r($users);
}

?>

<html>
<head>
    <!-- cssの呼び出し -->
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/app.css" rel="stylesheet" type="text/css">
    <title>About</title>
</head>
<body>
    <h1>About Me</h1>
<table border="1">
<tbody>
        <tr>
	    <td>便名</td>
	    <td>航空会社：国籍</td>
	    <td>航空会社名</td>
	    <td>便発起日時</td>
	</tr>
    @foreach($users as $member)
	<tr>
            <td>{{ $member->name }}</td>
            <td>{{ $member->national_flg}}</td>
            <td>{{ $member->airline }}</td>
            <td>{{ $member->created_at }}</td>
        </tr>
    @endforeach
</tbody>
</table>
<br>
<br>
<br>
<form action="/about" method="post">
  {{ csrf_field() }}
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
