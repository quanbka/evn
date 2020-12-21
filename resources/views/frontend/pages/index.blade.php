<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

@include('frontend.head')

<body>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12"></script>

    <div id="front-wrapper">
        @include('frontend.header')
        <div id="front-content">
            <div id="cover-provider">
                <div class="ui container">
                    <div class="text-60 text-uppercase text-white text-bold text-shadow">{{ getConfig("title") }}</div>
                </div>
            </div>



            <div id="provider-section-2" class="mb-60">
                <div class="ui container">


                    <div class="ui stackable grid list-item provider-func">
                        <div class="two column row mb-20">
                            
                        </div>

                    </div>
                </div>
            </div>

            <div id="front-bottom">
                <div class="ui container">
                    <div class="ui stackable grid">
                        <div class="eight wide column">
                            <a class="text-30 anchor" href="/#dang-ky">
                                Đăng ký <strong> Gói vay</strong>
                            </a>
                        </div>
                        <div class="right aligned eight wide column">
                            <a href="#front-wrapper" class="text-20 anchor">
                                Lên đầu trang
                                <i class="ui icon arrow alternate circle up"></i>
                            </a>
                        </div>

                    </div>
                </div>
            </div>



        </div>

        <div class="footer-container">
            @include('frontend.footer')
        </div>

        <script type="text/javascript" src="/lib/jquery-3.3.1.min.js"></script>
        <script src="https://cdn.rawgit.com/mdehoog/Semantic-UI/6e6d051d47b598ebab05857545f242caf2b4b48c/dist/semantic.min.js"></script>
        <script type="text/javascript" src="/lib/fullpage/script.js"></script>
        <script type="text/javascript" src="/js/scripts.js"></script>

        <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

        <script type="text/javascript">
            var mySwiperw = new Swiper('.partners-swiper-container', {
                direction: 'horizontal',
                navigation: {
                    nextEl: '.partners-button-next',
                    prevEl: '.partners-button-prev',
                },
                centeredSlides: true,
                loop: true,
                breakpoints: {
                    640: {
                        slidesPerView: 3,
                        spaceBetween: 20,
                    },
                    768: {
                        slidesPerView: 3,
                        spaceBetween: 40,
                    },
                    1024: {
                        slidesPerView: 3,
                        spaceBetween: 50,
                    },
                }
            })

            function changeContent() {
                // console.log(mySwiperw.realIndex);
                // console.log($('.swiper-slide-active'))
                var all = $(".swiper-slide-active").map(function() {
                    // console.log($(this).attr("data-id"));
                    let id = $(this).attr("data-id");
                    // console.log(partners[id]);
                    $('#js-content').html(partners[id].content);
                    if (partners[id].banner) {
                        $('#inter').css('background-image', `url('${partners[id].banner}')`);
                    } else {
                        $('#inter').css('background-image', `none`);
                    }
                }).get();
            }
            changeContent();
            mySwiperw.on('slideChangeTransitionEnd', function() {
                changeContent();
            });
        </script>
        <style media="screen">
            .swiper-slide:not(.swiper-slide-active) img {
                filter: grayscale(1.0);
            }
        </style>

</body>

</html>
