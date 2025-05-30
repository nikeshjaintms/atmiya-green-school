<script src="{{asset('frontend/assets/js/jquery-1.12.3.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/jquery-ui.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/fotorama.js')}}"></script>
<script src="{{asset('frontend/assets/js/jquery.magnific-popup.js')}}"></script>
<script src="{{asset('frontend/assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/custom.js')}}"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.7/jquery.inputmask.min.js"></script>
<script>
    $(document).ready(function () {
        $(".owl-carousel").owlCarousel({
            items: 1,
            nav: true,

            lazyLoad: true,
            autoplay: false,
            loop: true,
            dots: true,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,

                },
                550: {
                    items: 1,

                },
                750: {
                    items: 1,

                },
                991: {
                    items: 1,

                },
            }
        });
        $('#client').owlCarousel({
            items: 1,
            loop: true,
            nav: true,
            navigation: true,
            autoPlay: true,
            dots: false,
        });
    });
</script>
<script>
    $(document).ready(function () {
        $(".client").owlCarousel({

            navigation: true,
            slideSpeed: 300,
            paginationSpeed: 400,
            autoPlay: false,
            pagination: true,
            singleItem: true

        });
    });
</script>
<script>
    $(document).ready(function () {
        $(".school-b").owlCarousel({

            //navigation : true,  Show next and prev buttons
            slideSpeed: 300,
            paginationSpeed: 400,
            autoPlay: true,
            pagination: true,
            singleItem: true,
            nav: true,
        });
    });
</script>
<script>
    $(document).ready(function () {
        $('.home-blog-item').owlCarousel({
            items: 2,
            autoPlay: true,
            navigation: false,
            pagination: false,
            loop: false,
            itemsDesktop: [1199, 2],
            itemsDesktopSmall: [991, 1],
            itemsTablet: [768, 1],
            itemsTabletSmall: false,
            itemsMobile: [479, 1]
        });
    });
</script>
