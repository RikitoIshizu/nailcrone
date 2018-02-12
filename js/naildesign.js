$(function() {
  $(".button").on("click", function() {
    if($(this).hasClass("on")) {
      $(this).removeClass("on");
    } else {
      $(".button").removeClass("on");
      $(this).addClass("on");
    }
  });

  $(".button_a").on("click", function() {
    if($(this).hasClass("on")) {
      $(this).removeClass("on");
    } else {
      $(".button_a").removeClass("on");
      $(this).addClass("on");
    }
  });

  $(".button_b").on("click", function() {
    if($(this).hasClass("on")) {
      $(this).removeClass("on");
    } else {
      $(".button_b").removeClass("on");
      $(this).addClass("on");
    }
  });
});
