$(document).ready(function(){
    $('.b-contact-quick-title').click(function(){
        $('.b-contact-quick').toggleClass('b-contact-quick-show');
    });
});

// function readURL(input) {
//     if (input.files && input.files[0]) {
//         var reader = new FileReader();
        
//         reader.onload = function (e) {
//             $('.up_img_tag').attr('src', e.target.result);
//         }
//         reader.readAsDataURL(input.files[0]);
//     }
// }
// $(".up_img").change(function(){
//     readURL(this);
// });