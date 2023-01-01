/*Side Menu
==============================*/
$(document).ready(function () {
  "use strict";
  $(".side-menu ul li a").click(function (e) {
    $(".side-menu ul li ul").slideUp("slow"),
      $(this).next().is(":visible") || $(this).next().slideDown("slow"),
      e.stopPropagation();
  });
});

/* Tags input
============================*/
$(document).ready(function () {
  "use strict";
  $('.tags').tagsInput({
      defaultText: ' ',
      width: 'auto',
      height: 'auto'
  });
  $(".jfilestyle").jfilestyle({
    theme: "blue",
    text: " Add Image ",
    placeholder: " Add image ",
  });
  $('#select').select2({
    tags: true,
    tokenSeparators: [',']
});
});
/* Toggle Icon
==============================*/
$(document).ready(function () {
  "use strict";
  $(".toggle-btn").click(function () {
    $(".side-menu").toggleClass("move");
    $(".main").toggleClass("move");
  });
});

/* Full screen Mode
================================*/
$(document).ready(function () {
  "use strict";
  $(".open_fullscreen").click(function () {
    var elem = document.getElementById("body");
    if (elem.requestFullscreen) {
      elem.requestFullscreen();
    } else if (elem.mozRequestFullScreen) {
      /* Firefox */
      elem.mozRequestFullScreen();
    } else if (elem.webkitRequestFullscreen) {
      /* Chrome, Safari & Opera */
      elem.webkitRequestFullscreen();
    } else if (elem.msRequestFullscreen) {
      /* IE/Edge */
      elem.msRequestFullscreen();
    }
    $(this).hide();
    $(".exist_fullscreen").show();
  });
  $(".exist_fullscreen").click(function () {
    if (document.exitFullscreen) {
      document.exitFullscreen();
    } else if (document.mozCancelFullScreen) {
      document.mozCancelFullScreen();
    } else if (document.webkitExitFullscreen) {
      document.webkitExitFullscreen();
    } else if (document.msExitFullscreen) {
      document.msExitFullscreen();
    }
    $(this).hide();
    $(".open_fullscreen").show();
  });
});

/* Timer
==============================*/
var v_count = "0";
$(window).on("load", function () {
  "use strict";
  $(".timer").each(function () {
    var imagePos, topOfWindow;
    $(this).offset().top < $(window).scrollTop() + 600 &&
      "0" === v_count &&
      $(function ($) {
        function count(options) {
          (v_count = "1"),
            (options = $.extend(
              {},
              options || {},
              $(this).data("countToOptions") || {}
            )),
            $(this).countTo(options);
        }
        $(".timer").each(count);
      });
  });
});

/*Loading
==========================*/
$(window).on("load", function () {
  "use strict";
  $(".spinner").fadeOut(function () {
    $(this).parent().fadeOut();
    $("body").css({ "overflow-y": "visible" });
  });
});
