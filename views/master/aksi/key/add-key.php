<?php
if(isset($_POST['add_key'])){
    $hari_ini           = date('Y-m-d H:i:s');
    $master_key         = rand(100000,999999);
    $valid_until        = $_POST['valid_until'];
    $kelurahan          = $_POST['kel'];
    $prov               = substr($kelurahan, 0,2);
    $kota               = substr($kelurahan, 0,4);;
    $kecamatan          = substr($kelurahan, 0,8);;
    $has_m_key          = md5(uniqid());
    $sql_m_key          = mysqli_query($host, "SELECT * FROM master_key WHERE master_key='$master_key'");
    $count              = mysqli_num_rows($sql_m_key);
    if($count < 1 ){
        $input_data     = mysqli_query($host, "INSERT INTO master_key SET 
                            master_key      = '$master_key',
                            valid_until     = '$valid_until',
                            prov            = '$prov',
                            kota            = '$kota',
                            kecamatan       = '$kecamatan',
                            kelurahan       = '$kelurahan',
                            created_at      = '$hari_ini',
                            created_by      = '$user_check',
                            has_master_key  = '$has_m_key'");
        if($input_data){
            $_SESSION['status']="Data berhasil disimpan";
            $_SESSION['status_info']="success";
            echo "<script>document.location=\"$site_url/master/key.php\"</script>";
        }else{
            $_SESSION['status']="Data gagal disimpan";
            $_SESSION['status_info']="danger";
            echo "<script>document.location=\"$site_url/master/key.php\"</script>";
        }
    }else{
        $_SESSION['status']="Data gagal disimpan karena data sudah terdaftar di sistem";
        $_SESSION['status_info']="danger";
        echo "<script>document.location=\"$site_url/master/key.php\"</script>";

    }
}
?>