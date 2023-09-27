<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas</title>
</head>
<style>
    html {
    height: 100%;
  }
  body {
    margin:0;
    padding:0;
    font-family: sans-serif;
    background: linear-gradient(#a9aeb8, #1e7718);
  }
  
  .login{
    position: absolute;
    top: 50%;
    left: 50%;
    width: 400px;
    padding: 40px;
    transform: translate(-50%, -50%);
    background: rgba(0,0,0,.5);
    box-sizing: border-box;
    box-shadow: 0 15px 25px rgba(0,0,0,.6);
    border-radius: 10px;
  }
  
  .login h2 {
    margin: 0 0 30px;
    padding: 0;
    color: #fff;
    text-align: center;
  }
   
  .login .box input {
    width: 100%;
    padding: 10px 0;
    font-size: 16px;
    color: #fff;
    margin-bottom: 30px;
    border: none;
    border-bottom: 1px solid #fff;
    outline: none;
    background: transparent;
  }

  
  .login .box {
    position: relative;
  }

  .box input {
    background: transparent;
  }
  button {
    padding: 10px 20px;
    border: none;
    background-color: #f0f3f1;
    outline:auto;
    font-size: px;
    font-family: sans-serif;
  }
button:hover {
    background-color: #0056b3;
    background: transparent;
}

</style>

<body>
<form method="POST">
<div class="login">
  <h2>Login</h2>
  <form>
    <div class="box">
    <label>Username</label>
      <input type="text" name="username" required="" placeholder="Masukkan Username Anda">
    </div>
    <div class="box">
    <label>Password</label>
      <input type="password" name="password" required="" placeholder="Masukkan Password Anda">
    </div>
    <tfoot>
        <tr>
            <th><button name="login">Login</button></th>
        </tr>
    </tfoot>
   </form>
   
<?php 

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];


    function ceklogin($username, $password){
        if ($username =="admin" && $password =="mimin"){
            header("Location: admin.php");
                exit();
        }else{
        echo "<br> <br> password atau username anda Salah !";
        }
    }
   ceklogin($username,$password);
}
?>
  </div>
 </body>
</html>


