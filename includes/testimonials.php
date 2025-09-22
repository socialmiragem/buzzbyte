<div class="position-relative py-5 bg-white">
    <div id="reviews" class="position-relative py-5 bg-primary">
        <div class="row mx-0">
            <div class="col-md-12">
                <h2 class="fs-71 text-uppercase text-whiter text-center  ">
                    Success Through <span class="text-secondary">Their Eyes</span>
                </h2>
            </div>
        </div>
        <div class="review_slider mt-md-5 mt-3">
            <div>
                <div class="review_card">
                    <div class="wrap">
                        <img src="./assets/images/comma.png" alt="" class="img-fluid">
                    </div>
                    <div class="content my-md-5 my-3">
                        <p class="text-whiter fs-26">Sal and his team are fast, efficient, and deliver high-quality work. The process is simple, and the results exceeded my expectations. Highly recommend for digital marketing services.</p>

                    </div>
                    <div>
                        <div class="d-flex align-items-center gap-3">
                            <div>
                                <img src="./assets/images/20.png" alt="" class="img-fluid">
                            </div>
                            <div>
                                <h4 class="text-white fs-23 text-uppercase mb-1">riley r.</h4>
                                <img src="./assets/images/stars.png" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="review_card">
                    <div class="wrap">
                        <img src="./assets/images/comma.png" alt="" class="img-fluid">
                    </div>
                    <div class="content my-md-5 my-3">
                        <p class="text-whiter fs-26">Great communication, great team and Sal was always on time and the work was done well to my taste. They have pretty good response time</p>

                    </div>
                    <div>
                        <div class="d-flex align-items-center gap-3">
                            <div>
                                <img src="./assets/images/23.png" alt="" class="img-fluid">
                            </div>
                            <div>
                                <h4 class="text-white fs-23 text-uppercase mb-1">CHI</h4>
                                <img src="./assets/images/stars.png" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="review_card">
                    <div class="wrap">
                        <img src="./assets/images/comma.png" alt="" class="img-fluid">
                    </div>
                    <div class="content my-md-5 my-3">
                        <p class="text-whiter fs-26">Working with this team has been great — professional, detail-oriented, and committed to quality. They exceeded expectations. Well done!</p>

                    </div>
                    <div>
                        <div class="d-flex align-items-center gap-3">
                            <div>
                                <img src="./assets/images/21.png" alt="" class="img-fluid">
                            </div>
                            <div>
                                <h4 class="text-white fs-23 text-uppercase mb-1">Lorenzo G.</h4>
                                <img src="./assets/images/stars.png" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="review_card">
                    <div class="wrap">
                        <img src="./assets/images/comma.png" alt="" class="img-fluid">
                    </div>
                    <div class="content my-md-5 my-3">
                        <p class="text-whiter fs-26">The product and service are excellent, and the support provided throughout the process was particularly outstanding.</p>

                    </div>
                    <div>
                        <div class="d-flex align-items-center gap-3">
                            <div>
                                <img src="./assets/images/22.png" alt="" class="img-fluid">
                            </div>
                            <div>
                                <h4 class="text-white fs-23 text-uppercase mb-1">TicAll M.</h4>
                                <img src="./assets/images/stars.png" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function($) {
        $('.review_slider').slick({
            centerMode: true,
            centerPadding: '300px',
            slidesToShow: 2,
            dots: false,
            infinite: true,
            arrows: false,
            autoplay: true,
            autoplaySpeed: 0,
            speed: 3000, 
            cssEase: 'linear', 
            responsive: [{
                    breakpoint: 768,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 1
                    }
                }
            ]
        });
    })
</script>