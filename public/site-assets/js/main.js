$(window).on("load", function () {
  "use strict";
  // Loading
  $(".load_cont").fadeOut(function () {
    $(this).parent().fadeOut();
    $("body").css({
      "overflow-y": "visible",
    });
  });
  $(".intro_cont .animated , .intro_img").addClass("fadeInUp");

  // Animation
  AOS.init({
    offset: 100,
    duration: 700,
    easing: "ease-in-out",
  });
});

$(document).ready(function () {
  "use strict";
  // Header
  $(".menu-btn").click(function () {
    $(this).toggleClass("fa-times");
  });
  // Search btn
  $(".search_btn").click(function () {
    $(".search_form").toggleClass("move");
  });
  // Header Scroll
  $(window).scroll(function () {
    let scroll = $(window).scrollTop();
    if (scroll >= 3) {
      $(" header").addClass("shadow");
    } else {
      $(" header").removeClass("shadow");
    }
  });
  // Tilt
  $(".tilt").tilt({
    maxTilt: 10,
    perspective: 900,
  });
  $(".partner_item").tilt({
    maxTilt: 30,
    perspective: 1000,
  });
  // Cart
  $(document).on('click' , '.cart_btn' ,function () {
    $(".cart_box").addClass("move");
  });
  $(".cart_head").click(function(){
      $(".cart_box").addClass("move");
  });
  $(document).on('click','.cart_box .title .icon', function () {
    $(".cart_box").removeClass("move");
  });
  
  //up button
  var scrollbutton = $(".up_btn");
  $(window).scroll(function () {
    $(this).scrollTop() >= 1000
      ? scrollbutton.addClass("show")
      : scrollbutton.removeClass("show");
  });

  // Mouse
  function mousecursor() {
    if ($("body")) {
      const e = document.querySelector(".cursor-inner"),
        t = document.querySelector(".cursor-outer");
      let n,
        i = 0,
        o = !1;
      (window.onmousemove = function (s) {
        o ||
          (t.style.transform =
            "translate(" + s.clientX + "px, " + s.clientY + "px)"),
          (e.style.transform =
            "translate(" + s.clientX + "px, " + s.clientY + "px)"),
          (n = s.clientY),
          (i = s.clientX);
      }),
        $("body").on("mouseenter", "a, .cursor-pointer", function () {
          e.classList.add("cursor-hover"), t.classList.add("cursor-hover");
        }),
        $("body").on("mouseleave", "a, .cursor-pointer", function () {
          ($(this).is("a") && $(this).closest(".cursor-pointer").length) ||
            (e.classList.remove("cursor-hover"),
            t.classList.remove("cursor-hover"));
        }),
        (e.style.visibility = "visible"),
        (t.style.visibility = "visible");
    }
  }
  $(function () {
    mousecursor();
  });
  // Number
  $(".number-up").on("click", function () {
    var e = $(this).closest(".cat-number").find('input[type="number"]').val();
    return (
      $(this)
        .closest(".cat-number")
        .find('input[type="number"]')
        .val(parseFloat(e) + 1)
        .attr("value", parseFloat(e) + 1),
      !1
    );
  });
  $(".number-down").on("click", function () {
    var e = $(this).closest(".cat-number").find('input[type="number"]').val();
    return (
      e > 1 &&
        $(this)
          .closest(".cat-number")
          .find('input[type="number"]')
          .val(parseFloat(e) - 1)
          .attr("value", parseFloat(e) - 1),
      !1
    );
  });
  $(".cat-number")
    .find('input[type="number"]')
    .on("keyup", function () {
      $(this).attr("value", $(this).val());
    });
});

