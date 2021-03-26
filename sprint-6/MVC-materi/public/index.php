<?php
// require_once 'config/config.php';

if( !session_id()) {
    // session_start();
    
    session_start();
    
    
    require_once '../app/init.php';
    
    $app = new App;
    // if (empty($_SESSION['username'])) {
    //     header('Location:' . BASEURL . 'Login');
    //     echo $_SESSION['username'];
    // }

}
        
?>