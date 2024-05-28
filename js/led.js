$(".step").click( function() {
	$(this).addClass("active").prevAll().addClass("active");
	$(this).nextAll().removeClass("active");
});

$(".step01").click( function() {
	$("#line-progress").css("width", "3%");
	$(".discovery").addClass("active").siblings().removeClass("active");
});

$(".step02").click( function() {
	$("#line-progress").css("width", "20%");
	$(".strategy").addClass("active").siblings().removeClass("active");
});

$(".step03").click( function() {
	$("#line-progress").css("width", "40%");
	$(".creative").addClass("active").siblings().removeClass("active");
});

$(".step04").click( function() {
	$("#line-progress").css("width", "60%");
	$(".production").addClass("active").siblings().removeClass("active");
});

$(".step05").click( function() {
	$("#line-progress").css("width", "80%");
	$(".analysis").addClass("active").siblings().removeClass("active");
});
$(".step06").click( function() {
	$("#line-progress").css("width", "100%");
	$(".brand-new").addClass("active").siblings().removeClass("active");
});

$("#color").click( function() {
	$("body").toggleClass("blue")
});

//popup
function togglePopup() {
	var popup = document.getElementById("myPopup");
	var overlay = document.getElementById("overlay");
	if (popup.style.display === "block") {
	  popup.style.display = "none";
	  overlay.style.display = "none";
	} else {
	  popup.style.display = "block";
	  overlay.style.display = "block";
	}
  }

  function togglePopupone() {
	var popup = document.getElementById("myPopupone");
	var overlay = document.getElementById("overlay");
	if (popup.style.display === "block") {
	  popup.style.display = "none";
	  overlay.style.display = "none";
	} else {
	  popup.style.display = "block";
	  overlay.style.display = "block";
	}
  }

  function togglePopuptwo() {
	var popup = document.getElementById("myPopuptwo");
	var overlay = document.getElementById("overlay");
	if (popup.style.display === "block") {
	  popup.style.display = "none";
	  overlay.style.display = "none";
	} else {
	  popup.style.display = "block";
	  overlay.style.display = "block";
	}
  }
  function togglePopupthree() {
	var popup = document.getElementById("myPopupthree");
	var overlay = document.getElementById("overlay");
	if (popup.style.display === "block") {
	  popup.style.display = "none";
	  overlay.style.display = "none";
	} else {
	  popup.style.display = "block";
	  overlay.style.display = "block";
	}
  }
  function togglePopupfour() {
	var popup = document.getElementById("myPopupfour");
	var overlay = document.getElementById("overlay");
	if (popup.style.display === "block") {
	  popup.style.display = "none";
	  overlay.style.display = "none";
	} else {
	  popup.style.display = "block";
	  overlay.style.display = "block";
	}
  }
  