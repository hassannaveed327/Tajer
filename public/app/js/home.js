<script type="text/javascript">
    jQuery.validator.addMethod("validateEmail", function(value, element) {
    return this.optional( element ) || /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test( value );
}, 'Please enter valid Email Address.');
    jQuery.validator.addMethod("noSpace", function(value, element) {
    return value == '' || value.trim().length != 0;
});

    $(document).ready(function(){
    $('#newsletterformid').validate({
        rules:{
            newsletter_email:{
                required:true,
                validateEmail:true,
                noSpace:true,
            },
        },
        messages:{
            newsletter_email:{
                required:"Please enter Email Address.",
                noSpace:"Please enter valid Email Address.",
            },
        },

        submitHandler: submitnewsletter
    });//validate close
});//document ready close

    function submitnewsletter()
    {
        document.getElementById('subscribedscuccess').style.display='none';

        document.getElementById('subscribedfailed').style.display='none';

        var data = $("#newsletterformid").serialize();


        $.ajax({
        type: "POST",
        data:data,
        url: "https://thetajer.com/ajax_pages/submitnewsletter.php",
        success: function(result) {

        if(result==1)
    {
        newsletterformid.reset()



        document.getElementById('subscribedscuccess').style.display='block';
    }
        else{


        document.getElementById('subscribedfailed').style.display='block';
    }

        setTimeout(function () {
        document.getElementById('subscribedscuccess').style.display='none';
        document.getElementById('subscribedfailed').style.display='none';
    }, 4000);

    },

        error: function(result) {}
    });

    }

</script>
<script>

    $('.js-typeahead-game_v3').on('keydown', function(e) {
    if (e.keyCode == 13) {
    //alert('ss')
    $('.search_form').submit();
}
})



    $(".js-typeahead-game_v3").typeahead({

    hint: true,

    highlight: true,

    resultContainer: '#champion-list',

    minLength:1,

    trimValue: true,

    source: function(query, process) {

    query=query.replace(/^\s+|\s+$/g, '');

    $.ajax({

    url: 'https://thetajer.com/ajax_pages/livesearch.php',

    type: 'GET',

    data: 'query=' + query,

    dataType: 'JSON',

    async: true,

    success: function(data) {

    //process(data);

    //console.log(data);

    process($.map(data, function(item) {

    return {

    url: item.url,

    value: item.name

}

}));

}





});

},
    freeInput:true,
    limit: Infinity,
    autoSelect: false,

    displayText: function(item) {

    return item.value;

},

    updater: function(item) {

    window.location.href = item.url;

}



});

    $('.all-offers a').click(function() {

    $('.all-offers ul').toggleClass('offeractive');

    $('.all-offers ul li').toggle();

    return false

})
</script>
<script>

    var $loop = $('#tabCarousel-03')

    if ($loop.length > 0) {

    $loop.owlCarousel({

        loop: false,

        nav: true,

        center: false,

        dots: true,

        autoplay: false,

        autoplayTimeout: 2000,

        margin: 20,

        responsive: {

            320: {

                items: 3,

                margin: 10

            },

            481: {

                items: 5,

                margin: 20,

            },

            991: {

                items: 7

            }

        }

    });

}


</script>
<script>
    $(document).ready(function() {

    $('[data-toggle="tooltip"]').tooltip();

});



    $('#main-slider').owlCarousel({

    autoplaySpeed: 1000,

    loop: true,

    margin: 10,

    nav: true,

    autoplay: true,

    animateOut: 'fadeOut',

    nav: true,

    navText: ["", ""],

    dots: true,

    items: 1,



})



    /* ==========================================================================

    Screenshot carousel

    ========================================================================== */

    var $loop = $('[id^="tabCarousel"], #tabCarousel-02')

    if ($loop.length > 0) {

    $loop.owlCarousel({

        loop: true,

        nav: true,

        center: false,

        dots: true,

        autoplay: false,

        autoplayTimeout: 2000,

        margin: 20,

        responsive: {

            320: {

                items: 2,
                margin: 20

            },

            481: {

                items: 3,
                margin: 20

            },

            991: {

                items: 5,

            }

        }

    });

}




</script>
<script>
    $(".email-signup").hide();

    $("#signup-box-link").click(function() {

    $(".email-login").fadeOut(100);

    $(".otp-form").fadeOut(100);

    $(".email-signup").delay(100).fadeIn(100);

});

    $("#login-box-link").click(function() {

    $(".email-login").delay(100).fadeIn(100);;

    $(".email-signup").fadeOut(100);

    $(".otp-form").fadeOut(100);

});

    $("#forget-box-link").click(function() {

    $(".otp-form").delay(100).fadeIn(100);;

    $(".email-signup").fadeOut(100);

    $(".email-login").fadeOut(100);

});
</script>
<script>
    $(document).ready(function() {

    $(window).scroll(function() {

        if ($(document).scrollTop() > 50) {

            $(".fix-img").addClass("fix-bar");

        } else {

            $(".fix-img").removeClass("fix-bar");

        }

    });

});
</script>
<script>
    $(document).ready(function() {

    $('[data-toggle="tooltip"]').tooltip();

});



    $('#pro-slider').owlCarousel({

    autoplaySpeed: 1000,

    loop: true,

    margin: 10,

    nav: true,

    autoplay: false,

    animateOut: 'fadeOut',

    nav: true,

    navText: ["", ""],

    dots: true,

    items: 1,



})
</script>
<script>
    $('.qty-input i').click(function() {

    val = parseInt($(this).parent('.qty-input').find('input').val());



    if ($(this).hasClass('less')) {

    val = val - 1;

} else if ($(this).hasClass('more')) {

    val = val + 1;

}



    if (val < 1) {

    val = 1;

}



    $(this).parent('.qty-input').find('input').val(val);

})
</script>
<script src="https://thetajer.com/js/notify.min.js"></script>
<script>
    $('.qh').text('0')

    $('#tph').text('0')
</script>
<link rel="stylesheet" href="https://thetajer.com/css/jquery-confirm.min.css">
    <script src="https://thetajer.com/js/jquery-confirm.min.js"></script>
    <script>
        function showAlert(msg) {

        $.alert({

            title: 'Alert!',

            content: msg,

        });

    }



        /*

        function showConfirm(msg){

        $.confirm({

            title: 'Confirm!',

            content: msg,

            buttons: {

                confirm: function () {

                    //$.alert('Confirmed!');

                    return true

                },

                cancel: function () {

                    //$.alert('Canceled!');

                    return false

                }



            }

        });

    }

        */
    </script>
    <script>
        $(document).ready(function() {

        $(".drawer__close").click(function() {

            $(".drawer").removeClass("is-active is-visible");

        });

    });
    </script>
    <script>
        function addToWishlist(pid) {



        //alert('d')

        sessId = ''

        if (sessId == '') {

        $('#hidRef').val(pid)

        $(".icon-person").trigger("click");

        /*$.ajax({

  method:'post',

   dataType: "json",

  url:'https://thetajer.com/ajax_pages/checksession.php',

  success:function(response){



  sessId=response.status

  if(sessId==0){

      $('#hidRef').val(pid)





      //$("#login-bar").addClass("is-visible is-active drawer",'normal');



  }else{

          proceedtoAddWishlist(pid)	;



          setTimeout(function(){



          window.location.href=location

          },1000)





      }



  }



  })*/

    } else {

        proceedtoAddWishlist(pid);

    }

    }



        function proceedtoAddWishlist(pid) {

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

                    //$('.addtowishlist'+pid).addClass('active')

                    //$('.addtowishlist'+pid)

                    //$('.addtowishlist'+pid).notify("Added to Wishlist",{position:'top right',className:"simplesuccess"} );

                    $.notify("Added to Wishlist.", "success");

                    //$("#error_msg_opt_step").html('<span class="text-center text-success">'+response.success +'</span>');

                } else if (wstatus == 2)

                {

                    //		$('.addtowishlist'+pid).addClass('active')

                    $.notify("Already added in Wishlist.", "success");

                    //$('.addtowishlist'+pid).notify("Already added to Wishlist",{position:'top right',className:"simple"} );

                    //$("#error_msg_opt_step").html('<span class="text-center text-success">'+response.success +'</span>');

                } else

                {

                    $.notify("Wishlist not added successfully.", "warning");

                    //$("#error_msg_opt_step").html('<span class="text-center text-danger">'+response.error +'</span>');

                }







            }



        })



    }
    </script>
    <script>
        function movetowishlist() {

        sessId = ''

        if (sessId == '') {

        //	chekajaxsession('wishlist.php','1');



        $('#moveto').val('1')

        $(".icon-person").trigger("click");

    } else {

        window.location.href = 'https://thetajer.com/wishlist.php';

    }



    }





        function chekajaxsession(path, val) {

        $.ajax({

            method: 'post',

            dataType: "json",

            url: 'https://thetajer.com/ajax_pages/checksession.php',

            success: function(response) {



                result = response.status

                //alert(result)

                if (result == 1) {

                    window.location.href = 'https://thetajer.com/' + path;

                } else {

                    $('#moveto').val(val)

                    $(".icon-person").trigger("click");

                    // $("#login-bar").addClass("is-visible is-active drawer",'normal');

                }



            }



        })



    }



        function movetomyaccount() {

        sessId = ''

        if (sessId == '') {

        /*$('#moveto').val('4')

  $('#login').modal('show')*/

        $('#moveto').val('4')

        $(".icon-person").trigger("click");



        //	chekajaxsession('my-account','4');

    } else {



        window.location.href = 'https://thetajer.com/my-account';

        /*window.open('my-orders.php','_blank');*/

    }

    }
    </script>
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
    </script>
