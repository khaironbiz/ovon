<?php
if(isset($_POST['add_key'])){
    $hari_ini           = date('Y-m-d H:i:s');
    $master_key         = $_POST['master_key'];
    $has_m_key          = md5(uniqid());
    $sql_m_key          = mysqli_query($host, "SELECT * FROM master_key WHERE master_key='$master_key'");
    $count              = mysqli_num_rows($sql_m_key);
    if($count < 1 ){
        $input_data     = mysqli_query($host, "INSERT INTO master_pendidikan SET 
                            master_key      = '$nama_pendidikan',
                            created_at      = '$hari_ini',
                            created_by      = '$user_check',
                            has_master_key  = '$has_m_pendidikan'");
        if($input_data){
            $_SESSION['status']="Data berhasil disimpan";
            $_SESSION['status_info']="success";
            echo "<script>document.location=\"$site_url/reg/\"</script>";
        }else{
            $_SESSION['status']="Data gagal disimpan";
            $_SESSION['status_info']="danger";
            echo "<script>document.location=\"$site_url/reg/\"</script>";
        }
    }else{
        $_SESSION['status']="Data gagal disimpan karena data sudah terdaftar di sistem";
        $_SESSION['status_info']="danger";
        echo "<script>document.location=\"$site_url/reg/\"</script>";

    }
}
?>