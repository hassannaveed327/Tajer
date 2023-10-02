// var csrfToken = $('meta[name="csrf-token"]').attr('content');
//
// // Set up a global jQuery AJAX default
// $.ajaxSetup({
//     headers: {
//         'X-CSRF-TOKEN': csrfToken
//     }
// });
//
// // Path: public/app/js/login_signup.js
//
// // Login form
// $('#register-form').submit(function(e) {
//     e.preventDefault();
//     var formData = {
//         name: $('#login-form input[name=reg_name]').val(),
//         email: $('#login-form input[name=reg_email]').val(),
//         password: $('#login-form input[name=reg_password]').val(),
//         confirm_password: $('#login-form input[name=reg_confpassword]').val(),
//         usertype: $('#login-form input[name=usertype]').val(),
//         reg_mobile: $('#login-form input[name=reg_mobile]').val(),
//     };
//     $.ajax({
//         type: 'POST',
//         url: "/register ",
//         data: formData,
//         dataType: 'json',
//         encode: true
//     }).done(function(data) {
//         if (data.success) {
//             window.location.href = '/dashboard';
//         } else {
//             $('#register-form .alert-danger').html(data.message).show();
//         }
//     });
// });
