<?php
if(isset($_POST['forgot_password'])){
    $email          = $_POST['username'];
    $kode_aktifasi  = uniqid();
    $time           = date("Y-m-d H:i:s");
    $sql_email      = mysqli_query($host,"SELECT * FROM users WHERE email ='$email'");
    $count_email    = mysqli_num_rows($sql_email);
    if($count_email>0){
    $update_user    = mysqli_query($host, "UPDATE users SET
                        kode_aktifasi   = '$kode_aktifasi',
                        updated_at      = '$time' WHERE
                        email           = '$email'");
        ini_set( 'display_errors', 1 );
        error_reporting( E_ALL );
        $from       = "admin@ppni.or.id";
        $to         = $email;
        $subject    = "Reset Password";
        $message    = "Silahkan klik url berikut";
        $headers    = "From:" . $from;
        $send_email = mail($to,$subject,$message, $headers);
    }
}

