@extends('layouts.app')

@section('content') @php $isProcessing = false; @endphp
<ul class="mmenu-js d-lg-none d-block" style="background: #555;padding: 2px 5px;height:35px;">
    <div class="col-12">
        <div class="minicart minicart-js col">
            <a href="#!" onclick="window.location.href='https://thetajer.com/help'" class="float-right" title="Help"><img class="iconi-ii" src="https://thetajer.com/images/header-icon/help.svg" style="opacity: 1;width: 20px;"> <span class="text-white" style="font-size: 12px;">Help</span> </a>

            <a href="#!" onclick="movetotrackyourorder()" class="" title="Track Your Order"> <img class="iconi-ii" src="https://thetajer.com/images/header-icon/map.svg" style="opacity: 1;width: 20px;"> <span class="text-white" style="font-size: 12px;">Track Order</span> </a> </div>
    </div>
</ul>

<script>
    var images = [];
    function changeImg(id) {

        imgsrc = images[id].src;

        //alert(images[id].src)

        console.log(imgsrc)

        $('#iconimg').attr('src', imgsrc);

    }
</script>

<div class="page-content">
    <!-- BN Slider 1 -->
    <div class="holder fullwidth full-nopad mt-0">
        <div class="container-fluid p-0">
            <h1 class="sr-only">home</h1>
            <div id="main-slider" class="owl-carousel owl-theme">


                <div class="item">
                    <a href="https://dev.thecodeessential.com/tajernew" title="">


                        <img class="web" src="https://thetajer.com/upload/MjAyMy0wNi0yMyAxMjowMzoxNA==_Instagram Story 3.jpg" >
                    </a>
                </div>

            </div>
        </div>
    </div>
    <!-- /BN Slider 1 -->
    <div class="container" style="padding:50px 0px;">
        <h2 class="title title-center mb-5">Featured Products </h2>
        <div class="row">
            <div class="col mb-4">
                <div class="category category-default1 category-absolute banner-radius overlay-zoom">
                    <a href="#">
                        <figure class="category-media">
                            <img src="images/featured01.jpg" alt="category" width="280" height="280" style="background-color: #e8eded;" />
                        </figure>
                    </a>
                    <div class="category-content font-weight-bold">
                        <h4 class="category-name font-weight-bold ls-l"><a href="#">Denims </a>
                        </h4>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="category category-default1 category-absolute banner-radius overlay-zoom">
                    <a href="#">
                        <figure class="category-media">
                            <img src="images/featured02.jpg" alt="category" width="280" height="280" style="background-color: #8c8c8d;" />
                        </figure>
                    </a>
                    <div class="category-content">
                        <h4 class="category-name font-weight-bold ls-l"><a href="#">Unstitched Fabric</a></h4>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="category category-default1 category-absolute banner-radius overlay-zoom">
                    <a href="#">
                        <figure class="category-media">
                            <img src="images/featured03.jpg" alt="category" width="280" height="280" style="background-color: #bcbdb7;" />
                        </figure>
                    </a>
                    <div class="category-content">
                        <h4 class="category-name font-weight-bold ls-l"><a href="#">Printed Lawn Fabric</a></h4>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="category category-default1 category-absolute banner-radius overlay-zoom">
                    <a href="#">
                        <figure class="category-media">
                            <img src="images/featured04.jpg" alt="category" width="280" height="280" style="background-color: #ececef;" />
                        </figure>
                    </a>
                    <div class="category-content">
                        <h4 class="category-name font-weight-bold ls-l"><a href="#">Graphic Tees
                            </a></h4>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <section style="padding: 40px 0 0;">

        <div class="container text-center">
            <h2 class="title title-center mb-5">Popular Professional Services</h2>
            <img src="images/final-icon.jpg" alt="" style="
    width: 80%;
    height: 80%;
">
        </div>
    </section>


    <section class="banner-group mt-4 pt-5 pb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="banner banner-3 overlay-zoom banner-fixed banner-radius content-middle appear-animate fadeInLeftShorter appear-animation-visible" data-animation-options="{'name': 'fadeInLeftShorter', 'duration': '1s', 'delay': '.2s'}" style="animation-duration: 1s;">
                        <figure>
                            <img src="images/b1.jpg" alt="banner" width="380" height="207" style="background-color: #836648;">
                        </figure>

                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4 order-lg-auto order-sm-last">
                    <div class="banner banner-4 banner-fixed banner-radius overlay-effect2 content-middle content-center appear-animate fadeIn appear-animation-visible" data-animation-options="{'name': 'fadeIn', 'duration': '1s', 'delay': '.2s'}" style="animation-duration: 1s;">
                        <figure>
                            <img src="images/b2.jpg" alt="banner" width="350" height="177" style="background-color: #1e1e1e;">
                        </figure>

                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="banner overlay-zoom banner-5 banner-fixed banner-radius content-middle appear-animate fadeInRightShorter appear-animation-visible" data-animation-options="{'name': 'fadeInRightShorter', 'duration': '1s', 'delay': '.2s'}" style="animation-duration: 1s;">
                        <figure>
                            <img src="images/b3.jpg" alt="banner" width="380" height="207" style="background-color: #97928b;">
                        </figure>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="container text-center">
        <!--<h2 class="title title-center mb-5">Poular Professional Services</h2>-->
        <img src="images/2.jpg" alt="" style="
    width: 70%;
    height: 70%;
">
    </div>

    <section class="customer-section pt-10 pb-10 appear-animate fadeIn appear-animation-visible" style="animation-duration: 1.2s;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7 mb-4">
                    <figure>
                        <img src="images/customer.jpg" alt="Happy Customer" width="580" height="507" class="banner-radius" style="background-color: #BDD0DE;">
                    </figure>
                </div>
                <div class="col-md-5 mb-4">
                    <h3 class="section-title lh-1 font-weight-bold" style="font-size:17px;">The first Pakistani platform for clothing and accessories</h3>
                    <p class="section-desc text-grey">
                        <b><em>Tajer</em></b> is the first of its kind platform which aim to bridge the textile and apparel industries in Pakistan. Tajer aims to connect businesses within the industry to help meet supply and demand and strengthen small and medium enterprises.<br/><br/> Individual owners or private clothing manufacturers, entrepreneurs, designers can equally participate and manage their businesses digitally through this platform.<br/><br/> Consumers can now access markets across Pakistan with ease, as <b><em>Tajer</em></b> helps locate reliable sellers and products in the market.
                    </p>
                    <!--<a href="#" class="btn btn-dark btn-link btn-underline ls-m">Visit Our Store<i class="d-icon-arrow-right"></i></a>-->
                </div>
            </div>
        </div>
    </section>
    <div class="holder fullboxed bgcolor mt-0 py-2 py-sm-1">
        <div class="">

        </div>
    </div>

    <div class="container mt-8 mb-10">
        <h3 class="title title-center mb-5">Top Rated Vendors</h3>
        <div class="owl-carousel1 1owl-theme row cols-xl-6 cols-lg-5 cols-md-4 cols-sm-3 cols-2" data-owl-options="{
                            'nav': false,
                            'dots': false,
                            'autoplay': true,
                            'margin': 20,
                            'responsive': {
                                '0': {
                                    'items': 2
                                },
                                '576': {
                                    'items': 3
                                },
                                '768': {
                                    'items': 4
                                },
                                '992': {
                                    'items': 5
                                },
                                '1200': {
                                    'items': 6
                                }
                            }
                        }">
            <figure class="brand-wrap bg-white banner-radius">
                <img src="images/brands/1.png" alt="Brand" width="180" height="100" />
            </figure>
            <figure class="brand-wrap bg-white banner-radius">
                <img src="images/brands/2.png" alt="Brand" width="180" height="100" />
            </figure>
            <figure class="brand-wrap bg-white banner-radius">
                <img src="images/brands/3.png" alt="Brand" width="180" height="100" />
            </figure>
            <figure class="brand-wrap bg-white banner-radius">
                <img src="images/brands/4.png" alt="Brand" width="180" height="100" />
            </figure>
            <figure class="brand-wrap bg-white banner-radius">
                <img src="images/brands/5.png" alt="Brand" width="180" height="100" />
            </figure>
            <figure class="brand-wrap bg-white banner-radius">
                <img src="images/brands/6.png" alt="Brand" width="180" height="100" />
            </figure>
        </div>
    </div>

    <div class="holder shop-list" style="padding-bottom:20px; padding-top:20px !important;margin-top:0px">


        <!------------Testimonial Code Start--------->
        <div class="holder shop-list" style="padding-bottom:20px; padding-top:20px !important;margin-top:0px">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-with-right">
                            <h2 class="h1-style home-heading">WHAT OUR CUSTOMERS ARE SAYING</h2>
                        </div>
                        <div id="testimonial-slider" class="owl-carousel">
                            <div class="testimonial">
                                <span class="icon fa fa-quote-left"></span>
                                <div class="testiheight">
                                    <p class="description">
                                    <p>Tajer really helped me grow my business and made everything easier for me.</p>
                                    </p>
                                    <!-- <div class="testimonial-content" style="background: !important" id="111"> -->
                                </div>
                                <div class="testimonial-content" >

                                    <div class="pic"><img src="https://thetajer.com/photos/MjAyMy0wOS0wNSAwMTozODo0OQ==_profile.png" alt=""></div>
                                    <h3 class="title">Usman</h3>
                                    <span class="post">"" | Customer</span>
                                </div>
                            </div>
                            <div class="testimonial">
                                <span class="icon fa fa-quote-left"></span>
                                <div class="testiheight">
                                    <p class="description">
                                    <p>Tajer made running my business from home very easy and effective.</p>
                                    </p>
                                    <!-- <div class="testimonial-content" style="background: !important" id="111"> -->
                                </div>
                                <div class="testimonial-content" >

                                    <div class="pic"><img src="https://thetajer.com/photos/MjAyMy0wOS0wNSAwMTozOTo1NA==_profile.png" alt=""></div>
                                    <h3 class="title">Zainab</h3>
                                    <span class="post">"" | Customer</span>
                                </div>
                            </div>
                            <div class="testimonial">
                                <span class="icon fa fa-quote-left"></span>
                                <div class="testiheight">
                                    <p class="description">
                                    <p>Tajer helped me scale up and enter new markets, I wish&nbsp;that i did know about it before.</p>
                                    </p>
                                    <!-- <div class="testimonial-content" style="background: !important" id="111"> -->
                                </div>
                                <div class="testimonial-content" >

                                    <div class="pic"><img src="https://thetajer.com/photos/MjAyMy0wOS0wNSAwMTo0MzoxNg==_profile.png" alt=""></div>
                                    <h3 class="title">Ali</h3>
                                    <span class="post">"" | Customer</span>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>






    </div>
@section('extra_js')
    <script>
        /*!

    * Based on articles on

    * https://gomakethings.com

    */



        var drawer = function() {



            /**

             * Element.closest() polyfill

             * https://developer.mozilla.org/en-US/docs/Web/API/Element/closest#Polyfill

             */

            if (!Element.prototype.closest) {

                if (!Element.prototype.matches) {

                    Element.prototype.matches = Element.prototype.msMatchesSelector || Element.prototype.webkitMatchesSelector;

                }

                Element.prototype.closest = function(s) {

                    var el = this;

                    var ancestor = this;

                    if (!document.documentElement.contains(el)) return null;

                    do {

                        if (ancestor.matches(s)) return ancestor;

                        ancestor = ancestor.parentElement;

                    } while (ancestor !== null);

                    return null;

                };

            }





            //

            // Settings

            //

            var settings = {

                speedOpen: 50,

                speedClose: 350,

                activeClass: 'is-active',

                visibleClass: 'is-visible',

                selectorTarget: '[data-drawer-target]',

                selectorTrigger: '[data-drawer-trigger]',

                selectorClose: '[data-drawer-close]',



            };





            //

            // Methods

            //



            // Toggle accessibility

            var toggleAccessibility = function(event) {

                if (event.getAttribute('aria-expanded') === 'true') {

                    event.setAttribute('aria-expanded', false);

                } else {

                    event.setAttribute('aria-expanded', true);

                }

            };



            // Open Drawer

            var openDrawer = function(trigger) {



                // Find target

                var target = document.getElementById(trigger.getAttribute('aria-controls'));



                // Make it active

                target.classList.add(settings.activeClass);



                // Make body overflow hidden so it's not scrollable

                document.documentElement.style.overflow = 'hidden';



                // Toggle accessibility

                toggleAccessibility(trigger);



                // Make it visible

                setTimeout(function() {

                    target.classList.add(settings.visibleClass);

                }, settings.speedOpen);



            };



            // Close Drawer

            var closeDrawer = function(event) {



                // Find target

                var closestParent = event.closest(settings.selectorTarget),

                    childrenTrigger = document.querySelector('[aria-controls="' + closestParent.id + '"');



                // Make it not visible

                closestParent.classList.remove(settings.visibleClass);



                // Remove body overflow hidden

                document.documentElement.style.overflow = '';



                // Toggle accessibility

                toggleAccessibility(childrenTrigger);



                // Make it not active

                setTimeout(function() {

                    closestParent.classList.remove(settings.activeClass);

                }, settings.speedClose);



            };



            // Click Handler

            var clickHandler = function(event) {



                // Find elements

                var toggle = event.target,

                    open = toggle.closest(settings.selectorTrigger),

                    close = toggle.closest(settings.selectorClose);



                // Open drawer when the open button is clicked

                if (open) {

                    openDrawer(open);

                }



                // Close drawer when the close button (or overlay area) is clicked

                if (close) {

                    closeDrawer(close);

                }



                // Prevent default link behavior

                if (open || close) {

                    event.preventDefault();

                }



            };



            // Keydown Handler, handle Escape button

            var keydownHandler = function(event) {



                if (event.key === 'Escape' || event.keyCode === 27) {



                    // Find all possible drawers

                    var drawers = document.querySelectorAll(settings.selectorTarget),

                        i;



                    // Find active drawers and close them when escape is clicked

                    for (i = 0; i < drawers.length; ++i) {

                        if (drawers[i].classList.contains(settings.activeClass)) {

                            closeDrawer(drawers[i]);

                        }

                    }



                }



            };





            //

            // Inits & Event Listeners

            //

            document.addEventListener('click', clickHandler, false);

            document.addEventListener('keydown', keydownHandler, false);





        };



        drawer();
    </script>
    <a class="back-to-top js-back-to-top compensate-for-scrollbar" style="cursor:pointer;" title="Scroll To Top"><i class="icon icon-angle-up"></i></a>

</div>
</div>
</div>
</div>
<!-- END # MODAL LOGIN -->

<style>
    .search.collapsed {

        width: 2em;

        margin-left: 10em;

    }

    .search.collapsed input {

        width: 0;

    }

    .search.collapsed a {

        color: #999;

    }

    .search.collapsed a:hover {

        color: #bbb;

    }
</style>
<script>
    $(".btn_search_mob").click(function() {

        // assumes element with id='button'





        $(".search_mob_wp").css("display", "block");



        $(".js-typeahead-game_v3").focus();

    });





    $(".btn_search_mob_close").click(function() {

        // assumes element with id='button'



        $(".search_mob_wp").css("display", "none");



    });











    $(document).ready(function() {

        $(window).scroll(function() {

            if ($(document).scrollTop() > 50) {

                $(".fixed-col_container").addClass("fix-bar");

            } else {

                $(".fixed-col_container").removeClass("fix-bar");

            }

        });

    });
</script>
<style>
    .ldsvg {

        position: fixed;

        top: 0;

        bottom: 0;

        right: 0;

        left: 0;

        display: flex;

        align-items: center;

        justify-content: center;

        z-index: 9999;

        background: rgba(0, 0, 0, 0.5)
    }
</style>
<!--<div class="ldsvg" style="display:none" id="ldsvg"><img src="https://thetajer.com/images/ld1.svg"></div>

-->
<script>
    /********** Session Check ***********/

    var refreshTime = 600000; // every 10 minutes in milliseconds

    window.setInterval(function() {

        $.ajax({

            cache: false,

            type: "GET",

            url: "https://thetajer.com/ajax_pages/recheck_session.php",

            error: function(jqXHR) {

                if (jqXHR.status == 0) {

                    alert(" fail to connect, please check your internet connection settings");

                }

            },

            success: function(data) {

            }

        });

    }, refreshTime);

    /************End Session Check **********/
</script>
<script>
    const btn = document.querySelector(".btn");



    // Listen for click event

    btn.onclick = function(e) {



        // Create span element

        let ripple = document.createElement("span");



        // Add ripple class to span

        ripple.classList.add("ripple");



        // Add span to the button

        this.appendChild(ripple);



        // Get position of X

        let x = e.clientX - e.target.offsetLeft;



        // Get position of Y

        let y = e.clientY - e.target.offsetTop;



        // Position the span element

        ripple.style.left = `${x}px`;

        ripple.style.top = `${y}px`;



        // Remove span after 0.3s

        setTimeout(() => {

            ripple.remove();

        }, 300);



    };


    function addToWishlistAndRemove(pid, size, color) {



        $.ajax({

            method: 'post',

            data: {
                pid: pid
            },

            dataType: "json",

            url: 'https://thetajer.com/ajax_pages/addtowishlist.php',

            success: function(response) {



                //return response.status;

                wcount = response.count;

                wstatus = response.status



                $('.wishlistcount').text(wcount);

                if (wcount == 0) {

                    $('.wishlistcount').addClass('redwish')

                    $('.wishlistcount').removeClass('greenwish')

                } else {

                    $('.wishlistcount').addClass('greenwish')

                    $('.wishlistcount').removeClass('redwish')

                }



                if (wstatus == 1)

                {

                    $('.addtowishlist' + pid).addClass('active')

                    // $('.error'+pid).text("Already Added In Wishlist")



                    showErrorMsg(pid, "Moving Item To Wishlist...")

                    //$.notify("Moving Item To Wishlist...", "base");

                    setTimeout(function() {

                        deleteStock(pid, size, color)

                    }, 2000)





                } else if (wstatus == 2)

                {

                    $('.addtowishlist' + pid).addClass('active')

                    // $('.error'+pid).text("Already Added In Wishlist")

                    showErrorMsg(pid, "Already Added In Wishlist")



                } else

                {

                    $.notify("Wishlist not added successfully.", "warning");

                    //$("#error_msg_opt_step").html('<span class="text-center text-danger">'+response.error +'</span>');

                }







            }



        })







    }

    function showErrorMsg(pid, msg) {

        //	alert(pid)

        $('.error' + pid).text(msg)

        $('.error' + pid).slideDown(300);

        setTimeout(function() {



            $('.error' + pid).slideUp(350);

            // $('.error'+pid).text('')

        }, 2000)

    }
</script>
<script>
    $(".btn").click(function(e) {



        // Remove any old one

        $(".ripple").remove();



        // Setup

        var posX = $(this).offset().left,

            posY = $(this).offset().top,

            buttonWidth = $(this).width(),

            buttonHeight = $(this).height();



        // Add the element

        $(this).append("<div class='ripple'></div>");





        // Make it round!

        if (buttonWidth >= buttonHeight) {

            buttonHeight = buttonWidth;

        } else {

            buttonWidth = buttonHeight;

        }



        // Get the center of the element

        var x = e.pageX - posX - buttonWidth / 2;

        var y = e.pageY - posY - buttonHeight / 2;





        // Add the ripples CSS and start the animation

        $(".ripple").css({

            width: buttonWidth,

            height: buttonHeight,

            top: y + 'px',

            left: x + 'px'

        }).addClass("rippleEffect");

    });
</script>
<script>

    function movetotrackyourorder(){
        sessId=''
        if(sessId==''){
            /*$('#moveto').val('4')
		$('#login').modal('show')*/

            chekajaxsession('my-orders','4');
        }else{

            window.location.href='https://thetajer.com/my-orders'	;
            /*window.open('my-orders.php','_blank');*/
        }
    }

    $(document).ready(function() {

        $('.drawer__overlay').click(function() {



            $('.drawer').removeClass('is-active');

            $('.drawer').removeClass('is-visible');

        });

    });
    function triggerClick(){
        // alert('d')
        $('#firstmenu span').trigger('click')
    }

    function trim(el) {
        el.value = el.value.trimStart();

        return;
    }


    jQuery.validator.addMethod("lettersonlyforsearch", function(value, element)
    {
        return this.optional(element) ||  /.*[^ ].*$/i.test(value);
    }, "Accepts letters,digits and special characters only");


    $("#search_form").validate({
        rules: {
            query:{
                required:true,
                lettersonlyforsearch:true,
            }
        },
        messages:{
            query:{
                required:"",
                lettersonlyforsearch:"",
            }
        },
    });


    $("#search_form_home").validate({
        rules: {
            query:{
                required:true,
                lettersonlyforsearch:true,
            }
        },
        messages:{
            query:{
                required:"",
                lettersonlyforsearch:"",
            }
        },
    });
</script>
<style>
    label.error{ color:white; }
</style>
<!--header-top-fixed start-->
<script>
    $(window).scroll(function() {
        if ($(window).scrollTop() >= 30) {
            $('.menu-full-new').addClass('navbar-fixed-top');
        } else {
            $('.menu-full-new').removeClass('navbar-fixed-top');
        }

    });
</script>
<!--header-top-fixed End-->
<script>


    var $loop = $('#carousel12')

    if ($loop.length > 0) {

        $loop.owlCarousel({

            loop: true,
            stagePadding: 50,

            nav: true,

            dots: false,

            autoplay: false,

            autoplayTimeout: 2000,

            margin: 20,

            responsive: {

                320: {

                    items: 1,
                    center: true,
                    stagePadding: 25,
                    margin: 10

                },

                481: {

                    items: 1.5,
                    center: true

                },

                991: {

                    items: 2

                }

            }

        });

    }


</script>
<script>
    function scrollTodiv(thisObj){
        //alert(thisObj)
        $('.footerToBottom').toggleClass('show-footer');
        //$('.footerToBottom').toggleClass('active-btn');
        if($('.footerToBottom').hasClass("show-footer")) {

            $('html, body').animate({
                scrollTop: $(".cs").offset().top - 250
            }, 1000);

        } else{
            // alert('dd')
            $('html, body').animate({
                scrollTop: $(".cs").offset().top - 10
            }, 1000);
        }


    }

    $(".cross-icon").click(function(){
        $("#search_form").hide();
        $(".search-icon").show();
        $(".cross-icon").hide();
    });

    $(".search-icon").click(function(){
        $("#search_form").show();
        $(".cross-icon").show();
        $(".search-icon").hide();
    });

    $('#newsletter-popup').show();
</script>

<script>
    window.fbAsyncInit = function() {
        // FB JavaScript SDK configuration and setup
        FB.init({
            appId      : '1139864830101661', // FB App ID
            cookie     : true,  // enable cookies to allow the server to access the session
            xfbml      : true,  // parse social plugins on this page
            version    : 'v13.0' // use graph api version 2.8
        });

        // Check whether the user already logged in
        FB.getLoginStatus(function(response) {
            if (response.status === 'connected') {

                //display user data
                //getFbUserData();
            }
        });
    };

    // Load the JavaScript SDK asynchronously
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

    // Facebook login with JavaScript SDK
    function fbLogin() {
        FB.login(function (response) {
            if (response.authResponse) {
                // Get and display the user profile data
                getFbUserData();
            } else {
                document.getElementById('status').innerHTML = 'User cancelled login or did not fully authorize.';
            }
        }, {scope: 'email'});
    }

    // Fetch the user profile data from facebook
    function getFbUserData(){
        FB.api('/me', {locale: 'en_US', fields: 'id,first_name,last_name,email'},
            function (response) {

                fname=response.first_name+' '+response.last_name;
                femail=response.email;
                oauthid=response.id;

                checkFbLogin(fname,femail,oauthid);



            } );
    }

    // Logout from facebook
    function fbLogout() {
        FB.logout(function() {
            document.getElementById('fbLink').setAttribute("onclick","fbLogin()");
            document.getElementById('fbLink').innerHTML = '<img src="images/fb-login-btn.png"/>';
            document.getElementById('userData').innerHTML = '';
            document.getElementById('status').innerHTML = '<p>You have successfully logout from Facebook.</p>';
        });
    }


    function  checkFbLogin(fname,femail,oauthid){

        $.ajax({
            type:'POST',
            dataType:'Json',
            url:'https://thetajer.com/ajax_pages/getfblogin.php',
            data:{fname:fname,femail:femail,oauthid:oauthid},
            beforeSend:function(){
                //	$("#checkp").html('<i class="fa fa-spinner" aria-hidden="true"></i>');
            },
            success: function(response)
            {
                status=response.status
                if(status){

                    // return false;
                    window.location.href='https://thetajer.com'

                }else{

                    alert("Some problem occoured.Please try another login method.")
                }

            },
            error:function(){


            }
        });



    }

</script>

<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>-->



<script>
    $.ajax({
        type:'POST',
        dataType:'Json',
        url:'https://thetajer.com/ajax_pages/getEventAndRelationData.php',
        // data:'id='+lastID+'&fconstruct='+id+'&fprice=&fcategory=&fsort=&fsize=&page=1&ptype=1',
        beforeSend:function(){
            //	$("#checkp").html('<i class="fa fa-spinner" aria-hidden="true"></i>');
        },
        success: function(response)
        {
            events=response.event.length
            relations=response.event.length
            if(events>0){
                _html='';
                $(response.event).each(function() {
                    name=this.name;
                    url=this.url;
                    imagepath=this.iconpath;
                    if(imagepath==''){
                        imagepath='noimage.jpg';
                    }
                    _html+='<div class="col-md-3 col-4"><div class="item-event mb-2"><div class="home-ico-box">';
                    _html+='<a href="https://thetajer.com/'+url+'"><img class="img-prod-svg" src="https://thetajer.com/photos/'+imagepath+'"></a><h5><a href="https://thetajer.com/'+url+'">'+name+'</a></h5>';
                    _html+='</div></div></div>';


                });

                _html+='<div class="col-md-3 col-4"><div class="item-event mb-2"><div class="home-ico-box">';
                _html+='<a href="https://thetajer.com/events/allevents"><img class="img-prod-svg" src="https://thetajer.com/images/iconplus.png"></a><h5><a href="https://thetajer.com/events/allevents">View All</a></h5>';
                _html+='</div></div></div>';

                $('#eventRow').append(_html)

            }else{
                $('#eventsDiv').hide();
            }




            if(relations>0){

                _html='';
                $(response.relation).each(function() {
                    name=this.name;
                    url=this.url;
                    imagepath=this.iconpath;
                    if(imagepath==''){
                        imagepath='noimage.jpg';
                    }

                    _html+='<div class="col-md-3 col-4"><div class="item-event mb-2"><div class="home-ico-box">';
                    _html+='<a href="https://thetajer.com/'+url+'"><img class="img-prod-svg" src="https://thetajer.com/photos/'+imagepath+'"></a><h5><a href="https://thetajer.com/'+url+'">'+name+'</a></h5>';
                    _html+='</div></div></div>';


                });
                _html+='<div class="col-md-3 col-4"><div class="item-event mb-2"><div class="home-ico-box">';
                _html+='<a href="https://thetajer.com/relations/allrelations"><img class="img-prod-svg" src="https://thetajer.com/images/iconplus.png"></a><h5><a href="https://thetajer.com/relations/allrelations">View All</a></h5>';
                _html+='</div></div></div>';
                $('#relationRow').append(_html)
            }else{

                $('#relationsDiv').hide();
            }

        },
        error:function(){
            //$("#checkp").html("Check");

        }
    });
</script>



<!----------Testimonial Slider Start----------->
<script>
    $(document).ready(function(){
        $("#testimonial-slider").owlCarousel({
            items:3,
            itemsDesktop:[1000,3],
            itemsDesktopSmall:[979,2],
            itemsTablet:[768,2],
            itemsMobile:[650,1],
            pagination:true,
            autoPlay:true,
            responsive : {
                // breakpoint from 0 up
                0 : {
                    items:1,
                },
                // breakpoint from 480 up
                480 : {
                    items:3,
                },
                // breakpoint from 768 up
                768 : {
                    items:3,
                }
            }
        });
    });
</script> <!----------Testimonial Slider End----------->
        @stop
@stop
