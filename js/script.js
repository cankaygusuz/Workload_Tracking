$( document ).ready(function() {
alert("test");
$('.special.cards .image').dimmer({
    on: 'hover'
}); 
    
$('#card1').click(function(){
    $('.ui.modal.modal1').modal('toggle');
});
    
$('#card2').click(function(){
    $('.ui.modal.modal1').modal('toggle');
});
    
$(function () {
  var range = $("#range")[0];
    console.log($("#range"));
    range.value = 2;
    range.value = range.value*10;
  var percent = ((range.value - range.min) / (range.max - range.min)) * 5;
  var percentshow = Math.round(
    ((range.value - range.min) / (range.max - range.min)) * 10
  );
    document.getElementById('range').value = 55;
    range.value = 55;
  if (percent < 5) {
    $(".progress .circle").attr("style", "animation-delay:-" + percent + "s");
    $("body").append(
      "<div id='meterstyle'><style>.progress:after{animation-delay:-" +
        percent +
        "s;}</style></div>"
    );
  } else {
    $(".progress .circle").attr("style", "animation-delay:5s");
    $("body").append(
      "<div id='meterstyle'><style>.progress:after{animation-delay:5s;}</style></div>"
    );
  }
  $(".progress .precent").text(percentshow + " Projects");
  $(document).on("input", "#range", function () {
    var percent = ((this.value - this.min) / (this.max - this.min)) * 5;
    var percentshow = Math.round(
      ((this.value - this.min) / (this.max - this.min)) * 100
    );
    $("#meterstyle").remove();
    if (percent < 5) {
      $(".progress .circle").attr("style", "animation-delay:-" + percent + "s");
      $("body").append(
        "<div id='meterstyle'><style>.progress:after{animation-delay:-" +
          percent +
          "s;}</style></div>"
      );
    } else {
      $(".progress .circle").attr("style", "animation-delay:5s");
      $("body").append(
        "<div id='meterstyle'><style>.progress:after{animation-delay:5s;}</style></div>"
      );
    }
    $(".progress .precent").text(percentshow + " Works");
  });
});


$(function () {
  var range = $("#range1")[0];
    console.log($("#range1"));
    range.value = 1;
    range.value = range.value*10;
  var percent = ((range.value - range.min) / (range.max - range.min)) * 5;
  var percentshow = Math.round(
    ((range.value - range.min) / (range.max - range.min)) * 10
  );
    document.getElementById('range1').value = 55;
    range.value = 55;
  if (percent < 5) {
    $(".progress1 .circle1").attr("style", "animation-delay:-" + percent + "s");
    $("body").append(
      "<div id='meterstyle'><style>.progress1:after{animation-delay:-" +
        percent +
        "s;}</style></div>"
    );
  } else {
    $(".progress1 .circle1").attr("style", "animation-delay:5s");
    $("body").append(
      "<div id='meterstyle'><style>.progress1:after{animation-delay:5s;}</style></div>"
    );
  }
  $(".progress1 .precent1").text(percentshow + " Projects");
  $(document).on("input", "#range1", function () {
    var percent = ((this.value - this.min) / (this.max - this.min)) * 5;
    var percentshow = Math.round(
      ((this.value - this.min) / (this.max - this.min)) * 100
    );
    $("#meterstyle").remove();
    if (percent < 5) {
      $(".progress1 .circle1").attr("style", "animation-delay:-" + percent + "s");
      $("body").append(
        "<div id='meterstyle'><style>.progress1:after{animation-delay:-" +
          percent +
          "s;}</style></div>"
      );
    } else {
      $(".progress1 .circle1").attr("style", "animation-delay:5s");
      $("body").append(
        "<div id='meterstyle'><style>.progress1:after{animation-delay:5s;}</style></div>"
      );
    }
    $(".progress1 .precent1").text(percentshow + " Works");
  });
});





//third gauge

$(function () {
  var range = $("#range2")[0];
    console.log($("#range2"));
    range.value = 3;
    range.value = range.value*10;
  var percent = ((range.value - range.min) / (range.max - range.min)) * 5;
  var percentshow = Math.round(
    ((range.value - range.min) / (range.max - range.min)) * 10
  );
    document.getElementById('range2').value = 55;
    range.value = 5;
  if (percent < 5) {
    $(".progress2 .circle2").attr("style", "animation-delay:-" + percent + "s");
    $("body").append(
      "<div id='meterstyle'><style>.progress2:after{animation-delay:-" +
        percent +
        "s;}</style></div>"
    );
  } else {
    $(".progress2 .circle2").attr("style", "animation-delay:5s");
    $("body").append(
      "<div id='meterstyle'><style>.progress2:after{animation-delay:5s;}</style></div>"
    );
  }
  $(".progress2 .precent2").text(percentshow + " Projects");
  $(document).on("input", "#range2", function () {
    var percent = ((this.value - this.min) / (this.max - this.min)) * 5;
    var percentshow = Math.round(
      ((this.value - this.min) / (this.max - this.min)) * 100
    );
    $("#meterstyle").remove();
    if (percent < 5) {
      $(".progress2 .circle2").attr("style", "animation-delay:-" + percent + "s");
      $("body").append(
        "<div id='meterstyle'><style>.progress2:after{animation-delay:-" +
          percent +
          "s;}</style></div>"
      );
    } else {
      $(".progress2 .circle2").attr("style", "animation-delay:5s");
      $("body").append(
        "<div id='meterstyle'><style>.progress2:after{animation-delay:5s;}</style></div>"
      );
    }
    $(".progress2 .precent2").text(percentshow + " Works");
  });
});


    
});




