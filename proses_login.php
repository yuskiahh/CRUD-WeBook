<?php
  session_start();
  include 'koneksi.php';

  if (isset($_POST['login'])) {
      $username = ['username'];
      $password = ['password'];
  }
  if($username && $password){
      $query = "SELECT * FROM user WHERE username = '$username', password = '$password'";
      $result = mysqli_query($koneksi, $query);

      if(mysqli_num_rows($result) > 0 ){
        $data = mysqli_fetch_assoc($result);
      
        $_SESSION['username'] = $data['username'];
        $_SESSION['password'] = $data['password'];
        header("Refresh: 1; URL= 'dashboard.php'");
        }else{
            echo 'username/password salah!';
        }
    }else{
        echo 'username dan password tidak boleh kosong!';
    }
?>