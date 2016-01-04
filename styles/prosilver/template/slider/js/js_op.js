/*global $:false */

$(document).ready(function() {

	$(".switcher-input").bootstrapSwitch();

	$("#picker-logo-icon").spectrum({showInput:true,showPalette:true,showInitial:true,preferredFormat:"hex",palette:[["#00aff0","#81D339","#D4AF37","#A06424","#FCAD3F","#5B6E7A","#BC427F","#5B6E7A","#4FBFB1","#F96570","#3C3C3C","#6D6D6D"]],move:function(e){
		$("#picker-logo-icon").css("background-color",e.toRgbString());
		$("#logo i").css("color",e.toRgbString());$("#picker-logo-icon").val(e.toRgbString())}});
	$("#picker-logo-text").spectrum({showInput:true,showPalette:true,showInitial:true,preferredFormat:"hex",palette:[["#00aff0","#81D339","#D4AF37","#A06424","#FCAD3F","#5B6E7A","#BC427F","#5B6E7A","#4FBFB1","#F96570","#3C3C3C","#6D6D6D"]],move:function(e){
		$("#picker-logo-text").css("background-color",e.toRgbString());
		$(".logo-text").css("color",e.toRgbString());$("#picker-logo-text").val(e.toRgbString())}});
	$("#picker-skbg-col1").spectrum({showInput:true,showPalette:true,showInitial:true,preferredFormat:"hex",palette:[["#00aff0","#81D339","#D4AF37","#A06424","#FCAD3F","#5B6E7A","#BC427F","#5B6E7A","#4FBFB1","#F96570","#3C3C3C","#6D6D6D"]],move:function(e){
		$("#picker-skbg-col1").css("background-color",e.toRgbString());
		$("#nav-main	> li > a,#nav-main	li.small-cube > a,#nav-main ul.dropdown-menu,#responsive-menu-button a,.cube-bg-1,#tabs .tab > a,#navigation a").css("background-color",e.toRgbString());
		$("#picker-skbg-col1").val(e.toRgbString())}});
	$("#picker-skbg-col2").spectrum({showInput:true,showPalette:true,showInitial:true,preferredFormat:"hex",palette:[["#00aff0","#81D339","#D4AF37","#A06424","#FCAD3F","#5B6E7A","#BC427F","#5B6E7A","#4FBFB1","#F96570","#3C3C3C","#6D6D6D"]],move:function(e){
		$("#picker-skbg-col2").css("background-color",e.toRgbString());
		$("#nav-main > li > a:hover,#nav-main	li.small-cube > a:hover,#nav-main .dropdown-menu li a:hover,#tabs .activetab > a,#navigation a:hover,#navigation #active-subsection a,body .options-panel #navigation .tab.activetab a").css("background-color",e.toRgbString());
		$("#picker-skbg-col2").val(e.toRgbString())}});
	$("#picker-sop-skbody-col").spectrum({showInput:true,showPalette:true,showInitial:true,preferredFormat:"hex",palette:[["#00aff0","#81D339","#D4AF37","#A06424","#FCAD3F","#5B6E7A","#BC427F","#5B6E7A","#4FBFB1","#F96570","#3C3C3C","#6D6D6D"]],move:function(e){
		$("#picker-sop-skbody-col").css("background-color",e.toRgbString());
		$("body").css("background-color",e.toRgbString());
		$("#picker-sop-skbody-col").val(e.toRgbString())}});
	$("#picker_sop_skcol_link").spectrum({showInput:true,showPalette:true,showInitial:true,preferredFormat:"hex",palette:[["#00aff0","#81D339","#D4AF37","#A06424","#FCAD3F","#5B6E7A","#BC427F","#5B6E7A","#4FBFB1","#F96570","#3C3C3C","#6D6D6D"]],move:function(e){
		$("#picker_sop_skcol_link").css("background-color",e.toRgbString());
		$("#picker_sop_skcol_link").val(e.toRgbString())}});
	$("#picker_sop_skcol_linkhov").spectrum({showInput:true,showPalette:true,showInitial:true,preferredFormat:"hex",palette:[["#00aff0","#81D339","#D4AF37","#A06424","#FCAD3F","#5B6E7A","#BC427F","#5B6E7A","#4FBFB1","#F96570","#3C3C3C","#6D6D6D"]],move:function(e){
		$("#picker_sop_skcol_linkhov").css("background-color",e.toRgbString());
		$("#picker_sop_skcol_linkhov").val(e.toRgbString())}});
	$("#picker_sop_skcol_linkforvis").spectrum({showInput:true,showPalette:true,showInitial:true,preferredFormat:"hex",palette:[["#00aff0","#81D339","#D4AF37","#A06424","#FCAD3F","#5B6E7A","#BC427F","#5B6E7A","#4FBFB1","#F96570","#3C3C3C","#6D6D6D"]],move:function(e){
		$("#picker_sop_skcol_linkforvis").css("background-color",e.toRgbString());
		$("#picker_sop_skcol_linkforvis").val(e.toRgbString())}});
	$("#picker-sop-skboxed-bgcol").spectrum({showInput:true,showPalette:true,showInitial:true,preferredFormat:"hex",palette:[["#00aff0","#81D339","#D4AF37","#A06424","#FCAD3F","#5B6E7A","#BC427F","#5B6E7A","#4FBFB1","#F96570","#3C3C3C","#6D6D6D"]],move:function(e){
		$("#picker-sop-skboxed-bgcol").css("background-color",e.toRgbString());
		$("#wrap").css("background-color",e.toRgbString());
		$("#picker-sop-skboxed-bgcol").val(e.toRgbString())}});

	$('#slides .alwayson').show();
	$('#showLess').hide();
	var items =	10;
	var shown =	0;
	$('#loadMore').click(function () {
		$('#showLess').show();
		shown = $('#slides li:visible').size()+1;
		if(shown< items) {$('#myList li:lt('+shown+')').show();}
		else {$('#slides li:lt('+items+')').show();
		$('#loadMore').hide();
		}
	});
	$('#showLess').click(function () {
		$('#slides li').not('.alwayson').hide();
		$('#loadMore').show();
		$('#showLess').hide();
	});
});

