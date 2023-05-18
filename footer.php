<!-- info section -->
<section class="info_section layout_padding">
    <div class="container">
        <div class="info_form">

            <div class="row">
                <div class="offset-lg-3 col-lg-3">
                    <h5 class="form_heading">
                        Newsletter
                    </h5>
                </div>
                <div class="col-md-6">
                    <form action="#">
                        <input type="text" placeholder="Enter Your email">
                        <button>
                            subscribe
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="info_logo">
                    <div>
                        <a href="">
                            <img src="images/logo.png" alt="" />
                            <span>
                                Brighton
                            </span>
                        </a>
                    </div>
                    <p>
                        There are many variations of passages of Lorem Ipsum available,
                        but the majority have suffered alteration
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="info_links ">
                    <h5>
                        Contact Us
                    </h5>
                    <p class="pr-0 pr-md-4 pr-lg-5">
                        Donec odio. Quisque volutpat mattis eros.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec
                        odio. Quisque volutpat mattis eros
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="info_insta">
                    <h5>
                        INFORMATION
                    </h5>
                    <p class="pr-0 pr-md-4 pr-md-5">
                        Donec odio. Quisque volutpat mattis eros.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec
                        odio. Quisque volutpat mattis eros
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="pl-0 pl-lg-5 pl-md-4">
                    <h5>
                        MY ACCOUNT

                    </h5>
                    <p>
                        Donec odio. Quisque volutpat mattis eros.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec
                        odio. Quisque volutpat mattis eros
                    </p>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- end info_section -->

<!-- footer section -->
<section class="container-fluid footer_section">
    <p>
        &copy; 2019 All Rights Reserved By
        <a href="https://html.design/">Free Html Templates</a>
    </p>
</section>
<!-- footer section -->

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/bootstrap.js"></script>

<script>
    // This example adds a marker to indicate the position of Bondi Beach in Sydney,
    // Australia.
    function initMap() {
        var map = new google.maps.Map(document.getElementById("map"), {
            zoom: 11,
            center: {
                lat: 40.645037,
                lng: -73.880224
            }
        });

        var image = "<?php bloginfo('template_directory'); ?>/images/maps-and-flags.png";
        var beachMarker = new google.maps.Marker({
            position: {
                lat: 40.645037,
                lng: -73.880224
            },
            map: map,
            icon: image
        });
    }
</script>
<!-- google map js -->

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap">
</script>
<!-- end google map js -->

<script>
    function openNav() {
        document.getElementById("myNav").style.width = "100%";
    }

    function closeNav() {
        document.getElementById("myNav").style.width = "0%";
    }
</script>
<?php wp_footer(); ?>
</body>

</html>