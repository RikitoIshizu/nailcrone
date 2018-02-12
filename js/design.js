$(function() {

  $('.left_img').on('click', function() {
    $('.center_img ul').animate({'marginLeft':'0'});
  });

  $('.right_img').on('click', function() {
    $('.center_img ul').animate({'marginLeft':'-930px'});
  });

  $('#photo_next').on('click', function() {
    var id = $("#photo ul").data("id");
    var next_id = id + 1;
    var left = (next_id * (-780));
    // alert(id);

    if(id < 5) {
      $("#photo ul").animate({"marginLeft": left});
      $("#photo ul").data("id", next_id);
      if(id < 5) {
        id += 1;
      }
    }

  });

  $('#photo_prev').on('click', function() {
    var id = $("#photo ul").data("id");
    var prev_id = id - 1;
    var right = prev_id * (-780);
    // alert(id);

    if(id >= 1) {
      $("#photo ul").animate({"marginLeft": right});
      $("#photo ul").data("id", prev_id);
      if (id > 1) {
        id -= 1;
      }
    }

  });

  $('.nail').on('click', function() {
    var index = $('.nail').index(this) + 1;
    var page = (index - 1) * (-800);
    // alert(index);

    for(i=0; i<=5; i++) {
      var count = i + 1;
      $("#photo ul li:eq(" + i + ") img").attr("src", "img/naildesign/nail" + index + "/photo" + count + ".jpg");
      // $("#photo ul li:eq(1) img").attr("src", "img/naildesign/nail" + index + "/photo2.jpg");
      // $("#photo ul li:eq(2) img").attr("src", "img/naildesign/nail" + index + "/photo3.jpg");
      // $("#photo ul li:eq(3) img").attr("src", "img/naildesign/nail" + index + "/photo4.jpg");
      // $("#photo ul li:eq(4) img").attr("src", "img/naildesign/nail" + index + "/photo5.jpg");
      // $("#photo ul li:eq(5) img").attr("src", "img/naildesign/nail" + index + "/photo6.jpg");
    }
    $("#description").animate({'marginLeft': page});
    $("#photo ul").animate({'marginLeft':'0'});
    $("#photo ul").data("id", 0);
  });

});
