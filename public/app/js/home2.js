
    function showAlert(msg) {

    $.alert({

        title: 'Alert!',

        content: msg,

    });

}




        function addProduct(type = '1') {

        if ((document.getElementById('hidSize').value == '0') || (document.getElementById('hidSize').value == '')) {

        //showAlert("Please select a size");

        //$.notify("Please select a size ! ", "error");

        //   $('.errorsize').show();



        $('.errorsize').slideDown(250);

        $(".errorsize").effect("shake", {

        times: 2

    }, 1000);

        goToByScroll('err')

        //	$(this)=$('.errorsize')



        if (type == '1') {

        //	$.notify("Please select Size ", "error");

    }



        if (type == '2') {

        //	$.notify("Please select Size ", "error");

    }



        return false;

    }



        qty = $('#quantity').val();
//alert(qty)
        stock = document.getElementById('hidSizeStock').value;





        if (parseInt(qty) > parseInt(stock)) {



        $.notify("Stock is limited to  " + stock + " pieces only", "error");

        //alert()

        return false;



    }





        $.ajax({

        type: "GET",

        url: 'https://thetajer.com/ajax_pages/addtocart.php',

        data: $('#cartform').serialize() + "&qty=" + qty,

        beforeSend: function() {

        isProcessing = true;

        //alert('Processing input: ');

        $('#ldsvg').show();

    },

        success: function(server_response) {





        response = server_response.trim();

        if (response == '1') {

        $('.notifyjs-wrapper').trigger('notify-hide');

        //	$.notify("Item added to your Cart ", "success");

        //alert(server_response);

        populateCart()

    } else if (response == '2') {

        $('#ldsvg').hide();

        $.notify("Maximum quantity already added in cart", "error");

        return false;

    } else {

        $('#ldsvg').hide();

        $.notify("Some problem occoured, try again later", "error");

        return false;

    }





    },

        error: function() {

        $('#ldsvg').show();

        $.notify("Stock is limited to  " + stock + " pieces only", "error");

        //alert()

        return false;

    }

    });



    }



        function adjustStock(pid, size, color, qty) {

        //  qty=$('#qty').val();

        //alert("pid="+pid+'&type='+type+'&size='+size+'&color='+color)

        $.ajax({

            type: "GET",

            url: 'https://thetajer.com/ajax_pages/adjuststock.php',

            data: "pid=" + pid + '&qty=' + qty + '&size=' + size + '&color=' + color,

            beforeSend: function() {

                isProcessing = true;



                $('.imgloading').css('display', 'flex');

                //alert('Processing input: ');

            },

            success: function(server_response) {

                $('.imgloading').hide();

                //alert('Wait for processing...');

                /*$('#searchresultdata').html(server_response).show('fast', function() {

          alert('Processing done');

        isProcessing = false;

        });*/

                response = server_response.trim();

                populateCart()





            },

            error: function() {

                alert('Some problem occoured try again later...');

            }

        });



    }







        function changestock(pid, size, color, qty, newsize) {

        $.ajax({

            type: "GET",

            url: 'https://thetajer.com/ajax_pages/changestock.php',

            data: "pid=" + pid + '&qty=' + qty + '&size=' + size + '&color=' + color + '&newsize=' + newsize,

            beforeSend: function() {

                isProcessing = true;

                $('.imgloading').css('display', 'flex');

            },

            success: function(server_response) {

                $('.imgloading').hide();

                response = server_response.trim();

                populateViewCart();

            },

            error: function() {

                alert('Some problem occoured try again later...');

            }

        });



    }







        function changeMobilestock(pid, size, color, qty, newsize) {

        $.ajax({

            type: "GET",

            url: 'https://thetajer.com/ajax_pages/changestock.php',

            data: "pid=" + pid + '&qty=' + qty + '&size=' + size + '&color=' + color + '&newsize=' + newsize,

            beforeSend: function() {

                isProcessing = true;

                $('.imgloading').css('display', 'flex');

            },

            success: function(server_response) {

                $('.imgloading').hide();

                response = server_response.trim();

                populateMobileViewCart();



                $('#couponloader').text('');

                $('#couponloader').hide();

                $('#hidCoupon').val('0');



            },

            error: function() {

                alert('Some problem occoured try again later...');

            }

        });



    }





        function deleteStock(pid, size, color) {

        //  qty=$('#qty').val();

        //alert("pid="+pid+'&type='+type+'&size='+size+'&color='+color)

        $.ajax({

            type: "GET",

            url: 'https://thetajer.com/ajax_pages/deletestock.php',

            data: "pid=" + pid + '&size=' + size + '&color=' + color,

            beforeSend: function() {

                isProcessing = true;

                $('.imgloading').css('display', 'flex');

                //alert('Processing input: ');

            },

            success: function(server_response) {

                $('.imgloading').hide();

                //alert('Wait for processing...');

                /*$('#searchresultdata').html(server_response).show('fast', function() {

          alert('Processing done');

        isProcessing = false;

        });*/

                response = server_response.trim();

                populateCart()





            },

            error: function() {

                alert('Some problem occoured try again later...');

            }

        });



    }





        function populateCart() {



        $.ajax({

            type: "GET",

            url: 'https://thetajer.com/ajax_pages/populatecart.php',

            //data : $('#cartform').serialize() + "&qty="+qty,

            beforeSend: function() {

                //isProcessing = true;

                //alert('Processing input: ');

            },

            success: function(server_response) {



                $('#mycart').html(server_response).show('fast', function() {

                    //alert('Processing done');

                    isProcessing = false;

                    $('.minicart-drop').addClass('opened');

                    var price = $('#hidCartPriceheader').val();

                    var count = $('#hidCartCountheader').val();

                    // alert(parseFloat(price))

                    if (parseFloat(price) == 0) {

                        $('#mychkbtn').hide();

                    } else {

                        $('#mychkbtn').show();

                    }



                    $('.qh').text(count)

                    $('.cartcount').text(count)

                    if (count > 0) {

                        $('.cartcount').addClass('greenwish')

                        $('.cartcount').removeClass('redwish')

                        $('#paynowdiv').show()

                    } else {

                        $('.cartcount').addClass('redwish')

                        $('.cartcount').removeClass('greenwish')

                        $('#paynowdiv').hide()



                    }

                    $('#tph').text(price)







                });



                $("#cart-bar").addClass("is-visible is-active drawer", 'slow');

                $('#ldsvg').hide();

            },

            error: function() {

                //alert('Some problem occoured try again later...');

            }

        });



    }





        function populateCartWithoutOpen() {

        $.ajax({

            type: "GET",

            url: 'https://thetajer.com/ajax_pages/populatecart.php',

            //data : $('#cartform').serialize() + "&qty="+qty,

            beforeSend: function() {

                //isProcessing = true;

                //alert('Processing input: ');

            },

            success: function(server_response) {



                $('#mycart').html(server_response).show('fast', function() {

                    //alert('Processing done');

                    isProcessing = false;

                    //$('.minicart-drop').addClass('opened');

                    //  var price=$('#hidPriceheader').val();



                    /* if(parseFloat(price)==0){

		$('#mychkbtn').hide();

		}else{

		$('#mychkbtn').hide();

		}*/



                    /* var count=$('#hidCountheader').val();

           //alert(count)

           $('#qh').text(count)

           $('#tph').text(price)

           if(count==0){

             $('#giftdiv').hide();

             $('#pm').removeAttr('data-toggle');

             $('.progress-bar').css('width','75%');

             $('#totalitems').text(count)

           }else{

             $('#giftdiv').show();

             $('#pm').addAttr('href','#step4');

             $('.progress-bar').css('width','100%');

           }*/





                });







            },

            error: function() {

                //alert('Some problem occoured try again later...');

            }

        });



    }





        function populatebCartWithoutOpen() {

        $.ajax({

            type: "GET",

            url: 'https://thetajer.com/ajax_pages/populatebcart.php',

            //data : $('#cartform').serialize() + "&qty="+qty,

            beforeSend: function() {

                //isProcessing = true;

                //alert('Processing input: ');

            },

            success: function(server_response) {



                $('#mycart').html(server_response).show('fast', function() {

                    //alert('Processing done');

                    isProcessing = false;

                    //$('.minicart-drop').addClass('opened');

                    var price = $('#hidPriceheader').val();



                    if (parseFloat(price) == 0) {

                        $('#mychkbtn').hide();

                    } else {

                        $('#mychkbtn').hide();

                    }



                    var count = $('#hidCountheader').val();

                    //alert(count)

                    $('#qh').text(count)

                    $('#tph').text(price)

                    if (count == 0) {

                        $('#giftdiv').hide();

                        $('#pm').removeAttr('data-toggle');

                        $('.progress-bar').css('width', '75%');

                        $('#totalitems').text(count)

                    } else {

                        $('#giftdiv').show();

                        $('#pm').addAttr('href', '#step4');

                        $('.progress-bar').css('width', '100%');

                    }





                });







            },

            error: function() {

                //alert('Some problem occoured try again later...');

            }

        });



    }





        function goToByScroll(id) {

        // Remove "link" from the ID

        //  id = id.replace("link", "");

        // Scroll

        $('html,body').animate({

            scrollTop: $("#" + id).offset().top - 200

        }, 500);

    }





        function insertBefore(id, msg) {



        if ($("#" + id).prev('p.redmsg').length) {

        $("#" + id).prev('p.redmsg').effect("shake", {

        times: 1

    }, 1500);

    } else {

        $("<p class='redmsg'>" + msg + "</p>").insertBefore("#" + id);

        $("#" + id).prev('p.redmsg').effect("shake", {

        direction: "left",

        times: 1,

        distance: 10

    }, 1500);

    }



        /*setTimeout(function(){

    	$("#"+id).prev().hide()

    },2000) */



    }



        function removeError(thisdiv) {



        $target = $(thisdiv).prev('p.redmsg')

        $target.fadeOut('slow', function() {

        $target.remove();

    });

    }







        function ConfirmAndDelete(msg, pid, sid, cid) {



        //alert(pid);

        $.confirm({

            title: 'Confirm',

            content: msg,

            type: 'red',

            typeAnimated: true,

            buttons: {

                tryAgain: {

                    text: ' Yes ',

                    btnClass: 'btn-red',

                    action: function() {

                        deleteStock(pid, sid, cid)

                        //window.location.href='wishlist.php?pid='+pid

                    }

                },

                close: {

                    text: 'Cancel',

                    action: function() {





                    }

                }

            }

        });;

    }



        function moveandremove(msg, pid, size, color) {



        //alert(pid);

        $.confirm({

            title: 'Confirm',

            content: msg,

            type: 'red',

            typeAnimated: true,

            buttons: {

                tryAgain: {

                    text: ' Yes ',

                    btnClass: 'btn-red',

                    action: function() {

                        ///deleteStockinMobileCheckout(pid,sid,cid)

                        addToWishlistAndRemove(pid, size, color)

                        //window.location.href='wishlist.php?pid='+pid

                    }

                },

                close: {

                    text: 'Cancel',

                    action: function() {

                    }

                }

            }

        });
    }

        function selectSizeWiseProduct(val) {

        $('#sizefilters').val(val);

        filterData();

    }



        function myFunction() {
        var x = document.getElementById("search_form");
        if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
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

    $(document).ready(function() {

    $(".drawer__close").click(function() {

        $(".drawer").removeClass("is-active is-visible");

    });

});

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

