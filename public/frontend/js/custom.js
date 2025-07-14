/*-----------------------------------------
 [MASTER STYLE SHEET]
 * THEME NAME - Wedding Matrimony HTML5 Template
 * Author: RN53 Themes
 * Descriptios: Wedding Matrimony HTML5 Template. Can be Used For Various Perposes.
 * Version: v1
 -----------------------------------------------*/

$(document).ready(function () {
    "use strict";

    //MOBILE MENU HIDE AND SHOW
    $('.desk-menu').on('click', function () {
        $('.menu-pop1, .pop-bg').addClass('act');
    });
    $('.menu-pop-clo').on('click', function () {
        $('.menu-pop, .pop-bg').removeClass('act');
    });
    //MOBILE MENU HIDE AND SHOW
    $('.pop-bg').on('click', function () {
        $('.pop-bg, .menu-pop, .mob-me-all').removeClass('act');
        $("body").css('overflow', 'visible');
    });
    //ON LOAD START ANIMATIONS
    $('.ban-wedd').addClass('anistart');

    //SHAREPOPUP
    $('.shar-1 .fa-share-alt').on('click', function () {
        $(this).toggleClass("act");
    });

    //SHARE URL
    var _cururl = window.location.href;
    $("#shareurl").val(_cururl);

    //AGENT WINDOW OPEN
    $('.head-pro').on('click', function () {
        $('.menu-pop2, .pop-bg').addClass('act');
    });
    $('.ser-open').on('click', function () {
        $('.pop-search').show();
    });
    $('.ser-clo').on('click', function () {
        $('.pop-search').hide();
        $('.pop-bg').removeClass('act');
    });

    /*$('.mobile-menu').on('click', function () {
        $('.pop-bg, .mob-me-all').addClass('act');
        $("body").css('overflow','hidden');
    });*/
    $('.mob-menu span').on('click', function () {
        var _Mobil = $(this).attr("data-mob");
        $("." + _Mobil + "_menu").addClass('act');
        $('.pop-bg').addClass('act');
        $("body").css('overflow', 'hidden');
    });
    $('.mob-me-clo').on('click', function () {
        $('.mob-me-all, .pop-bg').removeClass('act');
        $("body").css('overflow', 'visible');
    });

    //FILTER ON ALL LISTING PAGE - MOBILE VIEW ONLY
    $('.fil-mob').on('click', function () {
        $('.fil-mob-view').slideDown();
    });
    $('.filter-clo').on('click', function () {
        $('.fil-mob-view').slideUp();
    });

    //CHOOSEN SELECT
    var _cform = $(".cform");
    if (_cform.length > 0) {
        $(function () {
            $(".fvali").validate();
        });
    }


    //BOOTSTRAP TOOL TIP
    //$('[data-toggle="tooltip"]').tooltip();

    //ENQUIRY AND REVIEW LIKE
    $(".enq-sav i").on('click', function () {
        $(this).toggleClass('sav-act');
    });

    //ENQUIRY AND REVIEW LIKE
    $(".ldelik").on('click', function () {
        $(this).toggleClass('sav-act');
    });

    //HOME PAGE BANNER BG SLIDER HEIGHT SET
    if ($(window).width() < 1250) {
        var _homSerHei = $(".hom-head").outerHeight();
        $(".ban-sli li div img").css("height", _homSerHei + 70 + "px");
    }

    //PROFILE PAGE GET NAME AND IMAGE
    $(".cta-sendint, .cta-chat").on('click', function () {
        var _proname = $(this).parent().siblings(".s2").find("h1").text();
        var _proimg = $(this).parent().siblings(".s1").find("img").attr("src");
        $(".intename1").text(_proname);
        $(".intephoto1").attr("src", _proimg);

        var _pronameall = $(this).parent().siblings("h4").find("a").text();
        var _proimgall = $(this).parent().parent().siblings(".pro-img").find("img").attr("src");
        $(".intename2").text(_pronameall);
        $(".intephoto2").attr("src", _proimgall);
    });

    //CHAT WINDOW AVAILABLE STATUS
    $(".cta-chat").on('click', function () {
        var _avlsts = $(this).parent().parent().parent(".all-pro-box").attr("data-useravil");
        var _avltxt = $(this).parent().parent().parent(".all-pro-box").attr("data-aviltxt");
        $(".avlsta").removeClass("avilyes avilno");
        $(".avlsta").addClass(_avlsts);
        $(".avlsta").text(_avltxt);
    });

    //CHAT WINDOW OPEN
    $(".cta-chat").on('click', function () {
        $(".chatbox").addClass("open")
    });
    //CHAT WINDOW CLOSE
    $(".comm-msg-pop-clo").on('click', function () {
        $(".chatbox").removeClass("open")
    });

    //COPY RIGHTS YEAR
    $('#cry').text("2023");

    //PRE LOADING
    $('#status').fadeOut();
    $('#preloader').delay(350).fadeOut('slow');
    $('body').delay(350).css({
        'overflow': 'visible'
    });

    //GALLERY IMAGE PATH GET & SET TO A TAG
    $(".img-wrapper a").each(function () {
        var _galImgPath = $(this).children("img").attr("src");
        $(this).attr("href", _galImgPath);
    })

    //VIDEO PAGE VIDEO PLAY
    $(".vid-play").on('click', function () {
        $(".vid-play, .wedd-vid img").hide();
        $(".wedd-vid iframe").show();
        var _getVid = $(this).attr("data-video");
        $(".wedd-vid iframe").attr("src", _getVid);
    });

    //PROFILE SORT
    $(".sort-grid").on('click', function () {
        $(".sort-grid").removeClass("act");
        $(this).addClass("act");
    });
    $(".sort-grid-2").on('click', function () {
        $(".all-list-sh").removeClass("view-grid");
    });
    $(".sort-grid-1").on('click', function () {
        $(".all-list-sh").addClass("view-grid");
    });

    //TOOL TIP
    $('[data-toggle="tooltip"]').tooltip();

    //CHOOSEN SELECT
    var _chosel = $(".chosenini");
    if (_chosel.length > 0) {
        $(function () {
            //$('.chosen-select').chosen();
            $('.chosen-select').chosen({
                placeholder_text_single: "Select Project/Initiative...",
                no_results_text: "Oops, nothing found!"
            });
        });
    }
});

var s = $(".hom-top");
$(window).scroll(function () {
    //HOME TOP MENU FIX
    var windowpos = $(window).scrollTop();
    if (windowpos >= 200) {
        s.addClass("act");
    } else {
        s.removeClass("act");
    }

    //VIDEO PAGE BANNER ANIMATION
    var _wtpx = "-" + windowpos / 3 + "px";
    var _wtpx1 = windowpos / 3 + "px";
    $(".wedd-vid-tre-1").css({
        transform: 'translateX(' + _wtpx + ')'
    });
    $(".wedd-vid-tre-2").css({
        transform: 'translateX(' + _wtpx1 + ')'
    });
});

//HOME PAGE - ON SCROLL ANIMATION
$(window).scroll(function () {
    var windowpos1 = $(window).scrollTop();
    //ANIMATE ADD CLASS
    $(".animate").each(function () {
        var _anisec = $(this).offset().top + $(this).outerHeight() - 10;
        var _whei = $(window).scrollTop() + $(window).height();
        var _aniname = $(this).attr("data-ani");
        var _anidely = $(this).attr("data-dely");
        if (_whei >= _anisec) {
            $(this).addClass(_aniname);
            $(this).addClass("anistart");
            $(this).css("animation-delay", _anidely + "s");
        }
    });
    //HOME PAGE ANIMATION
    if ($(".home-about, .count").length) {
        var _homfotban = $(".count").offset().top - 350;
        if (windowpos1 >= _homfotban) {
            $(".count").addClass("act");
        }
    }

});

//SHARE URL COPY & PASTE
function shareurl() {
    var copyText = document.getElementById("shareurl");
    copyText.select();
    copyText.setSelectionRange(0, 99999);
    navigator.clipboard.writeText(copyText.value);

    var tooltip = document.getElementById("myTooltip");
    tooltip.innerHTML = "Copied";
}

function shareurlout() {
    var tooltip = document.getElementById("myTooltip");
    tooltip.innerHTML = "Copy to clipboard";
}

//IF THIS(.slid-inn) CLASS NAME AVAILABE ANY PAGE AFTER ONLY BELOW SLIDER SCRIPT RUNS
var $lis = $('.slid-inn');
if ($lis.length > 0) {
    //COMMON SLIDER
    $('.slider3').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        responsive: [{
            breakpoint: 992,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                centerMode: false
            }
        }]

    });

    //HOME PAGE WRECENT COUPLES
    $('.couple-sli').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        responsive: [{
                breakpoint: 769,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    centerMode: false
                }
            },
            {
                breakpoint: 550,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    centerMode: false
                }
            }
        ]

    });
    //HOME PAGE BANNER SLIDER
    $('.ban-sli').slick({
        infinite: true,
        fade: true,
        cssEase: 'linear',
        autoplay: true,
        autoplaySpeed: 6000
    });

    //HOME PAGE WRECENT COUPLES
    $('.hom-qui-acc-sli').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        dots: true,
        autoplaySpeed: 3000,
        responsive: [{
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    centerMode: false
                }
            },
            {
                breakpoint: 550,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    centerMode: false,
                    arrows: false
                }
            }
        ]

    });

}