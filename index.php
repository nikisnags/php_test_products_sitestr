<?php
session_start();

if($_SESSION['admin']){
	header("Location: admin.php");
	exit;
}

$admin = 'admin';
$pass = 'a029d0df84eb5549c641e04a9ef389e5';

if($_POST['submit']){
	if($admin == $_POST['user'] AND $pass == md5($_POST['pass'])){
		$_SESSION['admin'] = $admin;
		header("Location: admin.php");
		exit;
	}else echo '<p>Error pass or login!</p>';
}
?>
<!DOCTYPE html>
<html class="sss">
<head>
  <title>Welcome!</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <style>
    * {
      margin: 0;
      padding: 0;
      border: 0 none;
      background: none;
    }
    body {
      font-weight: normal;
      font-size: 11px;
      font-family: Arial;
    }
    #login-wrapper {
      width: 270px;
      left: 50%;
      margin-left: -135px;
      position: absolute;
      margin-top: -180px;
      top: 50%;
    }
    #login-form {
      width: 270px;
      background: #78a5df;
      height: 270px;
      -webkit-border-radius: 135px;
      -moz-border-radius: 135px;
      border-radius: 135px;
    }
    ul li {
      list-style: none;
    }
    .body-login-form .tab-content {
      position: inherit;
      padding: inherit;
    }
    .b-title {
      text-align: center;
      padding-top: 90px;
      color: white;
      margin-bottom: 0px;
      font-size: 27px;
    }
    .b-content {
      font-size: 12px;
      color: #FFF;
      text-align: center;
    }
    .b-copyright {
      margin-top: 40px;
      text-align: center;
    }
    .b-copyright__link {
      color: #587b9d;
    }
    .b-text_lang_ru {
      display: none;
    }
    
    .l_input {
        border : 1px solid white;
        margin-left: 5px;
        background-color: #FFF;
        outline:none;
    }
    .p_input {
        margin-top: 5px;
        border : 1px solid white;
        margin-left: 5px;
        background-color: #FFF;
        outline:none;
    }
    .b_enter {
        border: 1px solid white;
        color: white;
        height: 24px;
        width: 50px;
        border-radius: 3px;
        margin-top: 10px;
    }
  </style>
</head>
<body class="body-login-form">
<div id="main-wrapper">
  <div id="overlay" class="hide"></div>
  <div id="content" class="tab-content active" data-tabid="tab1"><div id="login-wrapper">
    <div id="login-form">
      <div id="login-form-form">
        <h2 class="b-title b-text b-text_lang_en">Welcome!</h2>
        <h2 class="b-title b-text b-text_lang_ru">Приветствуем!</h2>
        <div class="b-content">
          <form action="/" method="POST">
              Login:<input class="l_input" type="text" name="user" />
              </br>
              Pass:<input class="p_input" type="password" name="pass" />
              </br>
              <input class="b_enter" type="submit" name="submit" value="Enter"  />
        </div>
      </div>
    </div>
    
    <div class="b-copyright">
      <a class="b-copyright__link" href="http://ispsystem.com/external/ispmanager.html" target="_blank" rel="nofollow">ISPsystem © 1997-<script type="text/javascript">document.write(new Date().getFullYear())</script></a>
    </div>
    <div id="error-log" style="display: none;"></div>
  </div></div>
</div>
<script type="text/javascript">
  var platformLanguage = navigator && (
      navigator.language ||
        navigator.browserLanguage ||
        navigator.systemLanguage ||
        navigator.userLanguage ||
        null ),
    elemsRU, elemsEN;
  if (platformLanguage.match("ru") && document.getElementsByClassName) {
    elemsRU = document.getElementsByClassName("b-text_lang_ru");
    elemsEN = document.getElementsByClassName("b-text_lang_en");
    var l = elemsEN.length;
    while(l--) {
      elemsEN[l].style.display = "none";
    }
    l = elemsRU.length;
    while(l--) {
      elemsRU[l].style.display = "block";
    }
    document.title = "Приветствуем!";
  }
</script>
</body>
</html>
