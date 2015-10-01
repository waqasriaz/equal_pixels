/*---------BLINKING DOT EFFECT-----------*/

function blink() {
    setInterval(function () {
        $(".dot").toggleClass("transparent-font");
    }, 1000);
}
setTimeout(blink, 0);

/*--------------MENU BUTTON--------------------*/

var ddmenuOut = false;

function toggleDDMenu() {

    var button = $(".menu-button");
    var menu = $(".drop-down-menu");


    button.on("click", function () {
        if (!ddmenuOut && !contactsOut) {
            menu.slideDown();
            ddmenuOut = true;
        } else if (!ddmenuOut && contactsOut) {
            $("#contact").hide('slow');
            contactsOut = false;
            menu.slideDown();
            ddmenuOut = true;
        }
        else {
            menu.slideUp();
            ddmenuOut = false;
        }
    });
}

toggleDDMenu();



/*---------------INSTANTIATE PORTFOLIO-------------------*/

function intantiatePortfolio(width) {
    if (width > 991 - 15) {
        renderPortfolio(4);   //pass desired number of items in view as int param
    } else if ((width <= 991 - 15) && (width > 768 - 15)) {
        renderPortfolio(2);
    } else {
        renderPortfolio(1);
    }
}

intantiatePortfolio($(window).width());



/*==============PIXELATION EFFECT=====================*/

var numOfImages = $(".pixel-image").length; //Calculates the amount of images with the .pixelate class

//Pixelate header image 

var $pix = $('#pixel-img1').PixelFlow({'resolution': 1});
var offset = $("#pixel-img1").offset();
var posY = offset.top - $(window).scrollTop();

if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
    console.log("not PC");
} else {
    $(window).scroll(function () {
        posY = offset.top - $(window).scrollTop();
        var startPoint = 1020;
        var finishPoint = 50;
        if (posY <= startPoint && posY > finishPoint) {
            $pix.PixelFlow('update', {'resolution': ((posY) / 10) - 5});
        } else if (posY < finishPoint) {
            $pix.PixelFlow('update', {'resolution': ((posY) / -10) + 5});
        }
    });
}





/* --------SERVICES HOVER EFFECT --------*/


$('.dh-container').directionalHover({
    overlay: "dh-overlay", // CSS class for the overlay
    easing: "swing", // Linear or swing
    speed: 500
});
$(".service-box").hover(
        function () {
            $(this).children("h3").fadeOut("slow");
        }, function () {
    $(this).children("h3").fadeIn("slow");
});



/* ---------EVENT LISTENERS TO SHOW CONTACTS DROP-DOWN---------*/

var contactsOut = false;

function toggleContacts() {
    var contactWrapper = $("#contact");

    if (contactWrapper.is(":hidden")) {

        $(".drop-down-menu").hide('slow');
        ddmenuOut = false;

        $(".top-nav li").last().children("a").css("background", "gray").css("border-radius", "0");
        contactWrapper.slideDown("slow");

        contactsOut = true;

    } else {
        $(".top-nav li").last().children("a").css("background", "transparent");
        contactWrapper.slideUp("slow");
        contactsOut = false;
    }
}
;

$(".contact-trigger").on("click", function () {
    toggleContacts();
});


/*=============SCROLL ANIMATIONS===============*/

var $animation_elements = $('.step-square, .step-rect, .service-box, h2, h3, h4, h5, .left-skill, .mid-skill, .right-skill');
var $window = $(window);


function check_if_in_view() {
    var window_height = $window.height();
    var window_top_position = $window.scrollTop();
    var window_bottom_position = (window_top_position + window_height);
    $.each($animation_elements, function () {
        var $element = $(this);
        var element_height = $element.outerHeight();
        var element_top_position = $element.offset().top;
        var element_bottom_position = (element_top_position + element_height);

        //check to see if this current container is within viewport
        if ((element_bottom_position >= window_top_position) &&
                (element_top_position <= window_bottom_position)) {

            $element.css("opacity", "1")
                    .css("left", "0");
            if ($element.hasClass("service-box-middle") ||
                    $element.is("h2") ||
                    $element.hasClass("mid-skill")) {
                $element.css("top", "0");
            }

            if ($element.hasClass("step-square")) {
                $element.css("width", "20%");
            } else if ($element.hasClass("step-rect")) {
                $element.css("width", "80%");
            }
        }
    });
}


if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
    console.log("not PC");
    $animation_elements
            .css("opacity", "1")
            .css("left", "0")
            .css("top", "0")
            .css("top", "0")
            .css("transition", "0s");
} else {
    $window.on('scroll', check_if_in_view);
    $window.on('scroll resize', check_if_in_view);

}

$(window).scroll(function () {
    if ($(window).scrollTop() + $(window).height() == $(document).height()) {
        $(".logo-footer").removeClass("monochrome");
    }
});


//=============SMOOTH SCROLLING================//

$(function () {
    $('a[href*=#]:not([href=#])').click(function () {
        if ($(this).parent().parent("ul").hasClass("top-nav") ||
                $(this).last().prop("href").indexOf("#portfolio") != -1 ||
                $(this).parent().parent("ul").hasClass("dd-list")) {

            $(".drop-down-menu").slideUp();
            ddmenuOut = false;

            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top - 50
                    }, 1000);
                    return false;
                }
            }
        }
    });
});

