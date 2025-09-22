<style>

</style>

<div id="vision" class="py-md-5 py-3 px-2 px-md-5 position-relative bg-white">
    <div class="row m-0">
        <div class="col-md-12">
            <h2 class="fs-71 text-uppercase text-primary text-center fw-bold">
                From Vision to
                <span class="text-secondary">Victory</span>
            </h2>
        </div>
    </div>
    <!-- horizontal scroll -->
    <section id="horizontal-scoll">
        <div class="horizontal-scoll-wrapper">
            <div class="horizontal">
                <div class="col-md-6 col-12">
                    <div class="card">
                        <div class="wrap">
                            <img src="./assets/images/10.png" alt="" class="img-fluid w-100">
                        </div>
                        <div class="content mt-4 pb-3">
                            <h3 class="text-uppercase fs-29 text-whiter">apache restoration - web design</h3>
                            <p class="text-white fs-20">We designed a modern, user-friendly landing page that highlights interior design services with elegant layouts, smooth navigation, and stunning visuals.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="card">
                        <div class="wrap">
                            <img src="./assets/images/11.png" alt="" class="img-fluid w-100">
                        </div>
                        <div class="content mt-4 pb-3">
                            <h3 class="text-uppercase fs-29 text-whiter">noble service - web design & google ads</h3>
                            <p class="text-white fs-20">We design modern IT agency landing pages with sleek layouts, clear messaging, and smart flows that convert visitors into loyal clients effectively.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="card">
                        <div class="wrap">
                            <img src="./assets/images/32.png" alt="" class="img-fluid w-100">
                        </div>
                        <div class="content mt-4 pb-3">
                            <h3 class="text-uppercase fs-29 text-whiter">cleaning services - branding & web design</h3>
                            <p class="text-white fs-20">We crafted a vibrant brand identity for a travel and tour company, blending creativity and strategy to inspire exploration and lasting journeys.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="card">
                        <div class="wrap">
                            <img src="./assets/images/33.png" alt="" class="img-fluid w-100">
                        </div>
                        <div class="content mt-4 pb-3">
                            <h3 class="text-uppercase fs-29 text-whiter">cherry poppers - seo & smm</h3>
                            <p class="text-white fs-20">We boosted a beauty eCommerce brand with targeted SEO and SMM, driving higher traffic, stronger engagement, and measurable sales growth online.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- horizontal scroll end -->

</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollTrigger.min.js"></script>
<script>
    gsap.registerPlugin(ScrollTrigger);

    let horizontalSection = document.querySelector('.horizontal');

    console.log(horizontalSection.scrollWidth);

    if(window.innerWidth > 500){
        gsap.to('.horizontal', {
            x: () => horizontalSection.scrollWidth * -1,
            xPercent: 100,
            scrollTrigger: {
                trigger: '.horizontal',
                start: 'center center',
                end: '+=2000px',
                pin: '#horizontal-scoll',
                scrub: true,
                invalidateOnRefresh: true
            }
        });
    }

</script>