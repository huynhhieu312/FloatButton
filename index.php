
<!DOCTYPE html>
<html lang="en">
<head>

	

	<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
	<title>FLoat Button</title>
<?php include_once("js/jquery.php");?>
	
</head>
<style>
.backdrop {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: #ECECEC;
    opacity: 0.9;
    display: none;
}
.fab.child {
   right: 30px;
    width: 37px;
    height: 37px;
    display: none;
    opacity: 0;
    font-size: 2em;
}
.fab span {
    vertical-align: middle;
}
.fab {

    width: 37px;
    height: 37px;
    text-align: center;
    color: #FFF;
    position: fixed;
    top: 18%;
    right: 30px;
    font-size: 85%;
    display: inline-block;
    cursor: default;
}
.tbd-alo-ph-img-circle {
	width: 34px;
    height: 34px;
	margin:2px;
  
    background: rgba(30,30,30,0.1) url(img/icon/call.png) no-repeat center center;
	   background-size:85%;
    -webkit-border-radius: 100%;
    -moz-border-radius: 100%;
    border-radius: 100%;
    border: 2px solid transparent;
    opacity: .7;
    -webkit-animation: tbd-alo-circle-img-anim 1s infinite ease-in-out;
    -moz-animation: tbd-alo-circle-img-anim 1s infinite ease-in-out;
    -ms-animation: tbd-alo-circle-img-anim 1s infinite ease-in-out;
    -o-animation: tbd-alo-circle-img-anim 1s infinite ease-in-out;
    animation: tbd-alo-circle-img-anim 1s infinite ease-in-out;
    -webkit-transform-origin: 50% 50%;
    -moz-transform-origin: 50% 50%;
    -ms-transform-origin: 50% 50%;
    -o-transform-origin: 50% 50%;
    transform-origin: 50% 50%;
    background-color: #ff0000;
}
    @-moz-keyframes tbd-alo-circle-img-anim {
    0% {
        transform: rotate(0) scale(1) skew(1deg)
    }
    10% {
        -moz-transform: rotate(-25deg) scale(1) skew(1deg)
    }
    20% {
        -moz-transform: rotate(25deg) scale(1) skew(1deg)
    }
    30% {
        -moz-transform: rotate(-25deg) scale(1) skew(1deg)
    }
    40% {
        -moz-transform: rotate(25deg) scale(1) skew(1deg)
    }
    50% {
        -moz-transform: rotate(0) scale(1) skew(1deg)
    }
    100% {
        -moz-transform: rotate(0) scale(1) skew(1deg)
    }
}

@-webkit-keyframes tbd-alo-circle-img-anim {
    0% {
        -webkit-transform: rotate(0) scale(1) skew(1deg)
    }
    10% {
        -webkit-transform: rotate(-25deg) scale(1) skew(1deg)
    }

    20% {
        -webkit-transform: rotate(25deg) scale(1) skew(1deg)
    }
    30% {
        -webkit-transform: rotate(-25deg) scale(1) skew(1deg)
    }
    40% {
        -webkit-transform: rotate(25deg) scale(1) skew(1deg)
    }
    50% {
        -webkit-transform: rotate(0) scale(1) skew(1deg)
    }
    100% {
        -webkit-transform: rotate(0) scale(1) skew(1deg)
    }
}
@-o-keyframes tbd-alo-circle-img-anim {
    0% {
        -o-transform: rotate(0) scale(1) skew(1deg)
    }
    10% {
        -o-transform: rotate(-25deg) scale(1) skew(1deg)
    }
    20% {
        -o-transform: rotate(25deg) scale(1) skew(1deg)
    }
    30% {
        -o-transform: rotate(-25deg) scale(1) skew(1deg)
    }
    40% {
        -o-transform: rotate(25deg) scale(1) skew(1deg)
    }
    50% {
        -o-transform: rotate(0) scale(1) skew(1deg)
    }
    100% {
        -o-transform: rotate(0) scale(1) skew(1deg)
    }
}
</style>
<div class="backdrop"></div>
<div class="fab child" data-subitem="1"><a href="GoiDienThoai"><div class="tbd-alo-ph-img-circle delaiso"></div></a></div>
<div class="fab child" data-subitem="2"><a href="LinkFB" target="_blank"><img src="img/icon/facebook.png" alt="điện thoại"/></a></div>
<div class="fab child" data-subitem="3"><a href="LinkZalo" target="_blank"><img src="img/icon/zalo.png" alt="điện thoại"/></a></div>
<div class="fab" id="masterfab"><img src="img/icon/clickbut.gif" alt="điện thoại"/></div>

<script>
$(function(){
	$(".fab,.backdrop").click(function(){
		if($(".backdrop").is(":visible")){
			$(".backdrop").fadeOut(125);
			$(".fab.child")
				.stop()
				.animate({
					bottom	: $("#masterfab").css("top"),
					opacity	: 0
				},125,function(){
					$(this).hide();
				});
		}else{
			$(".backdrop").fadeIn(125);
			$(".fab.child").each(function(){
				$(this)
					.stop()
					.show()
					.animate({
						top	: (parseInt($("#masterfab").css("top")) + parseInt($("#masterfab").outerHeight()) + 50 * $(this).data("subitem") - $(".fab.child").outerHeight()) + "px",
						opacity	: 1
					},125);
			});
		}
	});
});
</script>


</body>
</html>