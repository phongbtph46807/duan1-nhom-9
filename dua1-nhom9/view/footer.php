<div class="footer">
                    <div class="container">
                        <div class="row">
                            <div class="footer-col">
                                <h4>Thông tin</h4>
                                <ul>
                                    <li><a href="#">Về chúng tôi</a></li>
                                    <li><a href="#">Tin tức</a></li>
                                    <li><a href="#">Theo dõi đơn hàng</a></li>
                                    <li><a href="#"></a></li>
                                </ul>
                            </div>
                            <div class="footer-col">
                                <h4>Giải đáp</h4>
                                <ul>
                                    <li><a href="#">Các câu hỏi thường gặp</a></li>
                                    <li><a href="#">Dịch vụ vận chuyển</a></li>
                                    <li><a href="#">Chính sách đổi trả</a></li>
                                    <li><a href="#">Chính sách bảo mật thông tin khách hàng</a></li>
                                    <li><a href="#">Chính sách mua hàng Online</a></li>
                                </ul>
                            </div>
                            <div class="footer-col">
                                <h4>Danh Mục Sản Phẩm</h4>
                                <ul>
                                    <li><a href="#">Xiaomi</a></li>
                                    <li><a href="#">Oppo</a></li>
                                    <li><a href="#">SamSung</a></li>
                                    <li><a href="#">Huawei</a></li>
                                </ul>
                            </div>
                            <div class="footer-col">
                                <h4>Kết nối với Tikitaka</h4>
                                <div class="social-links">
                                    <p>Tikitaka@gmail.com</p>
                                    <br>
                                    <p>+84999999999</p>
                                    <BR></BR>
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        

    </div>
   
    </div>


    <script>
        $(document).ready(function () {
            $(".toggleButton").click(function () {
                $(".productList").slideToggle(); // Hiển thị hoặc ẩn danh sách sản phẩm khi click
            });
        });

        let slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function showSlides(n) {
            let i;
            const slides = document.getElementsByClassName("mySlides");
            if (n > slides.length) { slideIndex = 1; }
            if (n < 1) { slideIndex = slides.length; }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slides[slideIndex - 1].style.display = "block";
        }
        // Auto slide change
        let slideInterval = setInterval(() => {
            plusSlides(1);
        }, 2000); // Change slides every 2 seconds

        // Pause on hover
        const slideshowContainer = document.getElementsByClassName('slideshow-container')[0];
        slideshowContainer.addEventListener('mouseenter', () => {
            clearInterval(slideInterval);
        });

        slideshowContainer.addEventListener('mouseleave', () => {
            slideInterval = setInterval(() => {
                plusSlides(1);
            }, 2000);
        });



    </script>

</body>

</html>