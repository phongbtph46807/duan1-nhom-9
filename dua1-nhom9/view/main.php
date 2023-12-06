<?php 
    $html_dssp_new='';
    foreach ($dssp_moi as $sp) {
        extract($sp);
        $html_dssp_new.='
                <div class="khung-moi">
                <img src="html-css/img/'.$image.'" alt="Hình ảnh" width="136" height="136">
                <p>'.$name.'</p>
            </div>';
    }
    

    $html_dssp_view='';

    foreach ($dssp_view as $spv) {
    extract($spv);
    $html_dssp_view.='    <div class="trong-khung-container">
    <img class="imgsp" src="html-css/img/'.$image.'" alt="">
    <p>'.$name.'</p>
    <div class="mo-ta">
        '.$mota.'
    </div>
    <div class="gia">'.$giasp.'đ
    </div>
    <form action="index.php?pg=addcart" method="post">
    <input type ="hidden" name="tensp" value="'.$name.'">
    <input type ="hidden" name="image" value="'.$image.'">
    <input type ="hidden" name="giasp" value="'.$giasp.'">
    <input type ="hidden" name="soLuong" value="1">
    <button  class="nut-mua-hang">Mua Ngay</button>
    <button type="submit" name="addcart"><div class="gio-hang-mua"><img src="html-css/img/shopping_cart.png" alt=""></div></button> 
     </form>   
    </div>';
    }

    $html_dmsp_view='';
    extract($dmsp_view);
    $html_dmsp_view.='<p class="tieu-de">'.$name.'</p>';
?>
<div class="khung">
    <div class="slideshow-container">
        <div class="mySlides">
            <img src="html-css/img/banner1.png" style="width:100%">
        </div>

        <div class="mySlides">
            <img src="html-css/img/banner2.png" style="width:100%">
        </div>

        <div class="mySlides">
            <img src="html-css/img/banner3.png" style="width:100%">
        </div>

        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a>
    </div>

    <div class="trong-duoi-khung">
        <div class="cac-loai-dien-thoai">
            <p>CÁC LOẠI ĐIỆN THOẠI</p>
        </div>
        <div class="cac-khung-moi">
            <!-- Các khung-moi nằm dưới phần tiêu đề "CÁC LOẠI ĐIỆN THOẠI" -->
           <?= $html_dssp_new?>
        
        </div>
        <!-- Phần còn lại của "trong-duoi-khung" -->
        <div class="duoi-cac-loai-dt">
            <button class="xem-them">Xem Thêm</button>
        </div>

    </div>

    <div class="duoi-xem-them">
        <?=$html_dmsp_view?>
        <div class="khung-container">
            <!-- 10 khung được chia thành 5 hàng 2 cột -->
            <?=$html_dssp_view?>
        </div>
        
    </div>
    

   

