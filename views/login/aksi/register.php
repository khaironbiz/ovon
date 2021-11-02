<?php
if(isset($_POST['password1'])){
    $user_nama      = $_POST['user_nama'];
    $email          = $_POST['email'];
    $password1      = $_POST['password1'];
    $password2      = $_POST['password2'];
    if($password1==$password2){
        $password       = md5($password1);
        $kode_aktifasi  = uniqid();
        $has_user       = md5($kode_aktifasi);
        $time           = date("Y-m-d H:i:s");
        $secret_key     = $_POST['key'];
    }
    $sql_email      = mysqli_query($host,"SELECT * FROM users WHERE email ='$email'");
    $count_email    = mysqli_num_rows($sql_email);
    if($count_email<1){
        $tambah_user=mysqli_query($host, "INSERT INTO users SET
                        user_nama       = '$user_nama',
                        email           = '$email',
                        pass            = '$password',
                        kode_aktifasi   = '$kode_aktifasi',
                        created_at      = '$time',
                        secret_key      = '$secret_key',
                        has_user        = '$has_user'");
    }
    
}

