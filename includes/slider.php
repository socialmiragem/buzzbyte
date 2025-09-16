<div id="text-slider" class="bg-secondary m-0 position-relative z-3 py-2">
    <div class="features-slider">
        <div class="feature-item">
            <h2 class="align-items-center d-flex gap-2 text-center"><img src="./assets/images/star.png" alt="">SOCIAL MEDIA MANAGEMENT</h2>
        </div>
        <div class="feature-item">
            <h2 class="align-items-center d-flex gap-2 text-center"><img src="./assets/images/star.png" alt="">SEARCH ENGINE OPTIMIZATION</h2>
        </div>
        <div class="feature-item">
            <h2 class="align-items-center d-flex gap-2 text-center"><img src="./assets/images/star.png" alt="">GOOGLE / META / TIKTOK ADS</h2>
        </div>
        <div class="feature-item">
            <h2 class="align-items-center d-flex gap-2 text-center"><img src="./assets/images/star.png" alt="">BRANDING</h2>
        </div>
        <div class="feature-item">
            <h2 class="align-items-center d-flex gap-2 text-center"><img src="./assets/images/star.png" alt="">WEBSITE DESIGN & DEV</h2>
        </div>
    </div>
</div>
<script>
    $(document).ready(function($) {
        $('.features-slider').slick({
            dots: false,
            infinite: true,
            arrows: false,
            speed: 2000,
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            variableWidth: true,
            autoplaySpeed: 0, // must be 0 to enable seamless effect
            cssEase: "linear", // creates smooth scrolling
            pauseOnHover: true,
            responsive: [{
                    breakpoint: 1367,
                    settings: {
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1
                    }
                }
            ]
        });
    });
</script>