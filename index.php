<?php
    include "dao/pdo.php";
    include "view/header.php";

    if(isset($_GET['pg'])){
        //chuyen trang
        switch ($_GET['pg']) {
            case 'login':
                include "view/login.php";
                break;
            case 'logout':
                    include "view/logout.php";
                    break;
            default:
                # code...
                break;
        }
    }
    else{
        include "view/main.php";
    }
    include "view/footer.php";
    
?>