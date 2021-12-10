<?php
if (isset($_GET['mess'])){
$a = $_GET['mess'];
echo "<script>
alert('$a');
</script>";
}
if (isset($_GET['message'])){
$b = $_GET['message'];
echo "<script>
alert('$b');
</script>";
}
?>
<html>
<head>
<title>Register and Login</title>
<style>
          h1{
              text-align: center;
              border-color: black;  
              border-width: 3px;
              border-style: inset;
              margin-top:200px;
              margin-left:100px;
              margin-right:100px;
              margin-bottom:10px;
}
         body{
			 text-align: center;
             border-color: black;  
             border-width: 20px;  
             border-style: inset;
             background-color:yellow;
             margin:0px;

}
        form{
             margin:25px;
}
        label{
            cursor: pointer;
            display: inline-block;
            padding: 3px 6px;
            text-align: right;
            width: 150px;
            vertical-align: top;
        }
    </style>  
</head>
<body>
<h2> Login Form </h2>
<div class="login-page" id="log_page">
<div class="form">
<form class="login-form" action="practical.php" method="post" id="log_form">
<input type="text" placeholder="username" value="" name="log_uname" required/><br><br>
<input type="password" placeholder="password" name="log_pwd" required/><br><br>
<button onclick="log_func()" name="login_btn">Login</button>
<p class="message">Not Registered? <a href="javascript:toggle()">Register</a></p>
</form>
</div>
</div>
<script src='https://code.jquery.com/jquery-3.3.1.min.js'></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>
function toggle(){
$('form').animate({height: "toggle", opacity: "toggle"}, "slow");
}
function reg_func(){
$.ajax({
type: 'POST',
url: 'register.php'
});
}
function log_func(){
$.ajax({
type: 'POST',
url: 'practical.php'
});
}
</script>
</body>
</html>