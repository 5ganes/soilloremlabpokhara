// -----------------------------------------------------------------------------------
// http://wowslider.com/
// JavaScript Wow Slider is a free software that helps you easily generate delicious 
// slideshows with gorgeous transition effects, in a few clicks without writing a single line of code.
// Generated by WOW Slider 8.7
//
//***********************************************
// Obfuscated by Javascript Obfuscator
// http://javascript-source.com
//***********************************************
function ws_rotate(i,h,a){var d=jQuery;var g=d(this);var e=d(".ws_list",a);var b={position:"absolute",left:0,top:0};var f=d("<div>").addClass("ws_effect ws_rotate").css(b).css({height:"100%",width:"100%",overflow:"hidden"}).appendTo(a);var c;this.go=function(j,k){var m=d(h[0]);m={width:m.width(),height:m.height(),marginTop:parseFloat(m.css("marginTop")),marginLeft:parseFloat(m.css("marginLeft")),maxHeight:"none",maxWidth:"none",};if(c){c.stop(true,true)}c=d(h.get(j)).clone().css(b).css(m).appendTo(f);if(!i.noCross){var l=d(h.get(k)).clone().css(b).css(m).appendTo(f);wowAnimate(l,{opacity:1,rotate:0,scale:1},{opacity:0,rotate:i.rotateOut||180,scale:i.scaleOut||10},i.duration,"easeInOutExpo",function(){l.remove()})}wowAnimate(c,{opacity:1,rotate:-(i.rotateIn||180),scale:i.scaleIn||10},{opacity:1,rotate:0,scale:1},i.duration,"easeInOutExpo",function(){c.remove();c=0;g.trigger("effectEnd")})}};// -----------------------------------------------------------------------------------
// http://wowslider.com/
// JavaScript Wow Slider is a free software that helps you easily generate delicious 
// slideshows with gorgeous transition effects, in a few clicks without writing a single line of code.
// Generated by WOW Slider 8.7
//
//***********************************************
// Obfuscated by Javascript Obfuscator
// http://javascript-source.com
//***********************************************
jQuery("#wowslider-container1").wowSlider({effect:"rotate",prev:"",next:"",duration:20*100,delay:35*100,width:260,height:220,autoPlay:true,autoPlayVideo:false,playPause:true,stopOnHover:true,loop:false,bullets:1,caption:true,captionEffect:"parallax",controls:true,controlsThumb:false,responsive:1,fullScreen:false,gestures:2,onBeforeStep:0,images:0});