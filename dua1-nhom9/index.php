<?php
    session_start();
    if(!isset($_SESSION['giohang'])){
        $_SESSION['giohang']=[];
    }

    include "dao/pdo.php";
    include "dao/user.php";
    include "dao/sanpham.php";
    include "view/header.php";
    


    //data danh cho trang chu
    $dssp_moi=get_dssp_moi();
    $dssp_view=get_dssp_view();
    $dmsp_view=get_dmsp_view();

    if(isset($_GET['pg'])){
        //chuyen trang
        switch ($_GET['pg']) {
            case 'dangnhap-dangki':
                include "view/dangnhap-dangki.php";
                break;
            case 'addcart':
                    //lay du lieu tu form
                    if(isset($_POST['addcart'])){
                            $name=$_POST['tensp'];
                            $image=$_POST['image'];
                            $giasp=$_POST['giasp'];
                            $soluong=$_POST['soLuong'];
                            $sp=[$name, $image, $giasp, $soluong];
                            //add vao gio hang // luu vao session
                            array_push($_SESSION['giohang'], $sp);
                    }
                    echo var_dump($_SESSION['giohang']);
                    // include "view/viewcart.php";
                    break;   
            case 'adduser':
                    // Xac dinh gia tri input
                    if(isset($_POST["dangki"])&&($_POST["dangki"])){
                        $username = $_POST["username"];
                        $pass = $_POST["pass"];
                        $email = $_POST["email"];
                        // xu li input
                        user_insert($username, $pass, $email);
                    }
                    //
                    include "view/dangnhap-dangki.php";
                    break;
            default:
                    include "view/main.php";
                    break;
        }
    }
    else{
        include "view/main.php";
    }
    include "view/footer.php";
    
?>