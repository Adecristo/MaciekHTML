// Flex slider
$(window).load(function () {
    $('.flexslider').flexslider({
        directionNav: false,
        slideshowSpeed: 2000
    });

    opinie()


});

$('body').smoothScroll({
    delegateSelector: '#menu .navbar-nav a',
    offset: -60
});

//walidacja formularza
$("#formularzkontaktowy").validate({
    rules: {
        name: "required",
        message: "required",
        email: {
            required: true,
            email: true
        }
    },
    messages: {
        name: "To pole jest wymagane.",
        message: "To pole jest wymagane.",
        email: {
            required: "Email jest wymagany.",
            email: "Podaj prawidłowy adress email!"
        }
    }
});

//lightbox gallery
$(document).on('click', '[data-toggle="lightbox"]', function (event) {
    event.preventDefault();
    $(this).ekkoLightbox();
});