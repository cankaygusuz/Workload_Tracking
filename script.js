$( document ).ready(function() {
	//https://developer.mozilla.org/en-US/docs/Web/API/HTMLTableElement/insertRow
	window.leftrowCount = document.getElementById('myTable').rows.length;
	//console.log(arr);
	//console.log(arrdpt);
	//console.log(salarysum);
	$('.ui.dropdown')
	  .dropdown({
		values: [
		  {
			name: 'Male',
			value: 'male'
		  },
		  {
			name     : 'Female',
			value    : 'female',
			selected : true
		  }
		]
	  })
	;
    
$('.special.cards .image').dimmer({
    on: 'hover'
}); 
$('.example .teal.button')
  .popup({
    on: 'click'
  })
;
;
    
$('#card1').click(function(){
    $('.ui.modal.modal1').modal('toggle');
});
    
$('#card2').click(function(){
    $('.ui.modal.modal1').modal('toggle');
});
$('#card3').click(function(){
    $('.ui.modal.modal1').modal('toggle');
});
document.getElementById("image").style.marginLeft= "50px";
document.getElementById("op1").style.display= "none";
document.getElementById("op2").style.display= "none";
document.getElementById("op3").style.display= "none";
$(function () {
  var range = $("#range")[0];
 //   console.log($("#range"));
    range.value = phpval3;
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
 //   console.log($("#range1"));
    range.value = phpval1;
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
  //  console.log($("#range2"));
    range.value = phpval2;
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
function signtosql(){
	
}
function loginfnc(){
	$('.ui.modal.modal_login').modal('show');
	
}
function login(){
	window.mail_adress = $("#mail_id").val();
	window.passwort = $("#psw_id").val();
	window.info = window.mail_adress + "_" + window.passwort;
	console.log(window.info);
			$.ajax({
				type: "POST",
				url: 'login.php',
				data: {info : JSON.stringify(window.info)},
				success:function(res) {
					//var idval = "#row_" + window.disp_id;
					//$(idval).css("display","none");
					console.log(res);
				}
					
			});
	
	
}
function editfunction(clicked_id){
	$('#image').hide();
	$('.ui.modal.modal_edit').modal('show');
	var expected_id = clicked_id.split("_")[1];
	console.log("clicked id : " + expected_id);
	var text = "'#" + expected_id +"'";
	console.log(text);
	window.expected_name = $("#"+expected_id)[0].innerText;
	console.log(expected_name);
	var observed_id = clicked_id.split("_")[1];
	window.observed_name = $("#"+observed_id)[0].innerText;
	window.observed_dep = $("#depid"+observed_id)[0].innerText;
	window.observed_sal = $("#salid"+observed_id)[0].innerText;
	window.observed_gen = $("#gender"+observed_id)[0].innerText;
	console.log(observed_name);
	console.log(observed_dep);
	console.log(observed_sal);
	$("#dis_id")[0].value = observed_id;
	$("#dis_name")[0].value = observed_name;
	$("#dis_dep")[0].value = observed_dep;
	$("#dis_sal")[0].value = observed_sal;
	$("#dis_gender")[0].value = observed_gen;
	window.previous_dep = $("#dis_dep")[0].value;
	window.previous_sal = $("#dis_sal")[0].value;
}
function signup(){
	//alert("test");
	$('.ui.modal.modal_signup').modal('show');
}
function deleteme(click_id) {
	
	var rowCount = document.getElementById('myTable').rows.length;
	//alert(window.leftrowCount);
	var val = "#"+click_id;
	var $row = $(val).closest("tr");    // Find the row
	var $text = $row.find(".nr").text();
//	window.del_id = click_id.split("_")[1];
	window.del_id = $text;
	//alert(window.del_id);
	window.disp_id = click_id.split("_")[1];
	if(window.leftrowCount >= 5){
		if(confirm("Are you sure want to delete this item?")){
			window.leftrowCount = window.leftrowCount - 1 ;
			
			$.ajax({
				type: "POST",
				url: 'delete.php',
				data: {del_id : JSON.stringify(window.del_id)},
				success:function(res) {
					var idval = "#row_" + window.disp_id;
					$(idval).css("display","none");
					console.log(res);
					}
				
				
					});
			}
	}	else{
		alert("There are just 2 employees left. Your action may not be correct. For deleting this items, please get contact with database admin...");
			
			}
}
	
	/*window.del_count = 1; 
	if(confirm("Are you sure want to delete this item?")){
		alert(delid);
		window.location.href='delete.php?del_id=' +delid+'';
		return true;
		window.del_count = window.del_count +1;
	}*/
			
function getval(hovered_id){
	/*var observed_id = hovered_id.split("_")[1];
	window.observed_name = $("#"+observed_id)[0].innerText;
	window.observed_dep = $("#depid"+observed_id)[0].innerText;
	window.observed_sal = $("#salid"+observed_id)[0].innerText;
	window.observed_gen = $("#gender"+observed_id)[0].innerText;
	console.log(observed_name);
	console.log(observed_dep);
	console.log(observed_sal);*/
}

function editselectdrp(){
	
	var firstdropval = $("#select_feature").val();
	console.log("frstdrp" + firstdropval);
	console.log("expname" + expected_name);
  /*  var javascriptVariable = "John";
	window.history.pushState('variablepage', 'Title', '/page2.php');
    window.location.hash = "variablepage.php?expectedname=" + expected_name; 
	window.location.hash = "variablepage.php?firstdropval=" + firstdropval;
	return true;*/
	var var_array = {};
/*	var_array.firstdropval = firstdropval;
	var_array.expected_name = expected_name;
	console.log(var_array)*/

	var_array.observed_dep = $("#dis_dep")[0].value;
	var_array.observed_sal = $("#dis_sal")[0].value;//observed_sal;
	var_array.observed_name = observed_name;
	
	$.ajax({
		type: "POST",
		url: 'variablepage.php',
		data: {var_array : JSON.stringify(var_array)},
		beforeSend: function(){
			$('#image').show();
			$('#updt').hide();
		},
		complete: function(){
			$('#image').hide();
			$('#updt').show();
		},
		success:function(res) {
			console.log(res);
			if(window.previous_dep != $("#dis_dep")[0].value || window.previous_sal != $("#dis_sal")[0].value){
				alert("table updated successfully");
				location.reload();
			} else{
				alert("parameters were same...");
			}
		}
	});
/*	alert(phpval1);
	var textbox = "<?php echo $_SESSION['tb_text']"; 
	var textbox2 = '<?php echo "2"; ?>';
	//var textbox2 = 
	$("#fname")[0].value = text2;*/
	
	/*var ajax = new XMLHttpRequest();
	var method = "GET";
	var url = "variablepage.php";
	var asynchronous = true;
	ajax.open(method,url,asynchronous);
	ajax.send();
	
	ajax.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
		alert(this.responseText);
	}
}*/
}
$('#myTable').on( 'click', 'tr', function () {
    console.log( table.row(this).data() );
} );
/*$('#editfunction').click(function(){
    $('.ui.modal.modal_edit').modal('show');
});*/


