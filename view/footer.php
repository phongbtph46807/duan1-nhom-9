

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