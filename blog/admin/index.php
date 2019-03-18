<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
session_start();

require('../autoload.php');

define('ADMIN_VIEW', 1);

if(isset($_GET['loguj']) && isset($_POST['email']) && isset($_POST['password'])){
   
    $result = checkAndLogin($dbh, $_POST);
    
    if($result['success']){
        $_SESSION['auth'] = $result['user'];
    }
   
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link type="text/css" rel="stylesheet" href="<?php echo BOOTSTRAP_FOLDER; ?>css/bootstrap.min.css">
</head>
<body>
    
    <?php
    
    if(!isset($_SESSION['auth'])){
        include(__DIR__.'/views/loginform.php');
    }else{
        include(__DIR__.'/views/panel.php');
    }
    
    
    
    ?>
    
</body>
</html>