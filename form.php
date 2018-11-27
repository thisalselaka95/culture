<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

	<title></title>
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.4/jquery.mobile-1.4.4.min.css">
<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.4/jquery.mobile-1.4.4.min.js"></script>

<!-- <style>

html { 
  background-color: lightblue; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
</style> -->

</head>
<body onload="myFunction(); myFunction1(); myFunction2(); myFunction3(); myFunction4(); myFunction5(); myFunction6(); myFunction7() ; ">

<center><img src="Images/header1.png" height="200" width="1530"></center>

<form action="payment.php" method="POST">

<p hidden><input type='text' name='ip' value='<?php
ob_start(); // Turn on output buffering
system('ipconfig /all'); //Execute external program to display output
$mycom=ob_get_contents(); // Capture the output into a variable
ob_clean(); // Clean (erase) the output buffer
$findme = "Physical";
$pmac = strpos($mycom, $findme); // Find the position of Physical text
$mac=substr($mycom,($pmac+36),17); // Get Physical Address
echo $mac;
?>'
 ></p>
<p hidden><input type='date' name='date' value='<?php echo date('Y-m-d');?>'></p>

<center>
<table style="border-spacing:40px;">
	<tr>
		<td><img src="Images/gender.png" width="100" height="50"></td>
		<td><select name="gender" required>
  <option value="">--------Select--------</option>
  <option value="Male">Male</option>
  <option value="Female">Female</option>
</select></td>

		<td><img src="Images/age.png" width="70" height="50"></td>
		<td><select name="age" required>
		<option value="">--------Select--------</option>
  <option value="Below 20">Below 20</option>
  <option value="20-25">20-25</option>
  <option value="25-30">25-30</option>
  <option value="30-40">30-40</option>
  <option value="40-50">40-50</option>
  <option value="50+">50+</option>
</select></td>

		<td><img src="Images/tenure.png" width="100" height="50"></td>
		<td><select name="tenure" required>
		<option value="">--------Select--------</option>
  <option value="Less than 1 year">Less than 1 year</option>
  <option value="1-3 years">1-3 years</option>
  <option value="3-5 years">3-5 years</option>
  <option value="5-10 years">5-10 years</option>
  <option value="More than 10 years">More than 10 years</option>
</select></td>
	</tr>
</table>
</center>

<script>

var col1=[0,0,0,0,0,0,0,0];
var col2=[0,0,0,0,0,0,0,0];
var col3=[0,0,0,0,0,0,0,0];

</script>

<script>
//-------------------col1_1----------------------------------

function column(){
var totals = [col1[0], col1[1], col1[2], col1[3], col1[4], col1[5], col1[6], col1[7]];
    totals.sort(function(a, b){return b - a});
	
	//alert(Math.max.apply(null,col1));

	$(document).ready(function(){
		$('#table1 td.color1').each(function(){
			if ($(this).text() == totals[0] || $(this).text() == totals[1]) { //highest and lowest values
					$(this).css('background-color','#32CD32');
					var Row = document.getElementById("max");
					var Cells = Row.getElementsByClassName("col1max");
					var temp=Cells[0].innerText;
					$("#table9 td.col1max").html("&nbsp;");
					//console.log(Cells[0].innerText);
					console.log(temp);
					if (temp.includes("caring")) {
						//$('#table9 td.col1max').text(temp);
					} else {

						//$('#table9 td.col1max').text(temp+"caring ");
					}
					

			}
			else if ($(this).text() == totals[6] || $(this).text() == totals[7]){
					$(this).css('background-color','#ffa500');
					
					var Row = document.getElementById("min");
					var Cells = Row.getElementsByClassName("col1min");
					var temp=Cells[0].innerText;
					$("#table9 td.col1min").html("&nbsp;");
					//console.log(Cells[0].innerText);
					console.log(temp);
					if (temp.includes("caring")) {
						//$('#table9 td.col1min').text(temp);
					} else {

						//$('#table9 td.col1min').text(temp+"caring ");
					}
			}
			else{

				$(this).css('background-color','#00688B');
			}
		});
	});
//-------------------col1_2----------------------------------

	$(document).ready(function(){
		$('#table2 td.color2').each(function(){
			if ($(this).text() == totals[0] || $(this).text() == totals[1]) { //highest and lowest values
					$(this).css('background-color','#32CD32');
					var Row = document.getElementById("max");
					var Cells = Row.getElementsByClassName("col1max");
					var temp=Cells[0].innerText;
					$("#table9 td.col1max").html("&nbsp;");
					//console.log(Cells[0].innerText);
					console.log(temp);
					if (temp.includes("purpose")) {
						//$('#table9 td.col1max').text(temp);
					} else {

						//$('#table9 td.col1max').text(temp+"purpose ");
					}
			}
			else if ($(this).text() == totals[6] || $(this).text() == totals[7]){
					$(this).css('background-color','#ffa500');
					
					var Row = document.getElementById("min");
					var Cells = Row.getElementsByClassName("col1min");
					var temp=Cells[0].innerText;
					$("#table9 td.col1min").html("&nbsp;");
					//console.log(Cells[0].innerText);
					console.log(temp);
					if (temp.includes("purpose")) {
					//	$('#table9 td.col1min').text(temp);
					} else {

					//	$('#table9 td.col1min').text(temp+"purpose ");
					}
			}
			else{

				$(this).css('background-color','#00688B');
			}
		});
	});
//-------------------col1_3----------------------------------

	$(document).ready(function(){
		$('#table3 td.color3').each(function(){
			if ($(this).text() == totals[0] || $(this).text() == totals[1]) { //highest and lowest values
					$(this).css('background-color','#32CD32');
					var Row = document.getElementById("max");
					var Cells = Row.getElementsByClassName("col1max");
					var temp=Cells[0].innerText;
					$("#table9 td.col1max").html("&nbsp;");
					
					if (temp.includes("learning")) {
						//$('#table9 td.col1max').text(temp);
					} else {

						//$('#table9 td.col1max').text(temp+"learning ");
					}
				}
			else if ($(this).text() == totals[6] || $(this).text() == totals[7]){
					$(this).css('background-color','#ffa500');
					var Row = document.getElementById("min");
					var Cells = Row.getElementsByClassName("col1min");
					var temp=Cells[0].innerText;
					$("#table9 td.col1min").html("&nbsp;");
					
					if (temp.includes("learning")) {
						//$('#table9 td.col1min').text(temp);
					} else {

						//$('#table9 td.col1min').text(temp+"learning ");
					}
			}
			else{

				$(this).css('background-color','#00688B');
			}
		});
	});
	//-------------------col1_4----------------------------------
	$(document).ready(function(){
		$('#table4 td.color4').each(function(){
			if ($(this).text() == totals[0] || $(this).text() == totals[1]) { //highest and lowest values
					$(this).css('background-color','#32CD32');
					var Row = document.getElementById("max");
					var Cells = Row.getElementsByClassName("col1max");
					var temp=Cells[0].innerText;
					$("#table9 td.col1max").html("&nbsp;");
					
					if (temp.includes("enjoyment")) {
						//$('#table9 td.col1max').text(temp);
					} else {

						//$('#table9 td.col1max').text(temp+"enjoyment ");
					}
			}
			else if ($(this).text() == totals[6] || $(this).text() == totals[7]){
					$(this).css('background-color','#ffa500');
					var Row = document.getElementById("min");
					var Cells = Row.getElementsByClassName("col1min");
					var temp=Cells[0].innerText;
					$("#table9 td.col1min").html("&nbsp;");
					
					if (temp.includes("enjoyment")) {
						//$('#table9 td.col1min').text(temp);
					} else {

						//$('#table9 td.col1min').text(temp+"enjoyment ");
					}
			}
			else{

				$(this).css('background-color','#00688B');
			}
		});
	});

	//-------------------col1_5----------------------------------
	$(document).ready(function(){
		$('#table5 td.color5').each(function(){
			if ($(this).text() == totals[0] || $(this).text() == totals[1]) { //highest and lowest values
					$(this).css('background-color','#32CD32');
					var Row = document.getElementById("max");
					var Cells = Row.getElementsByClassName("col1max");
					var temp=Cells[0].innerText;
					$("#table9 td.col1max").html("&nbsp;");
					
					if (temp.includes("results")) {
						//$('#table9 td.col1max').text(temp);
					} else {

						//$('#table9 td.col1max').text(temp+"results ");
					}
			}
			else if ($(this).text() == totals[6] || $(this).text() == totals[7]){
					$(this).css('background-color','#ffa500');
					var Row = document.getElementById("min");
					var Cells = Row.getElementsByClassName("col1min");
					var temp=Cells[0].innerText;
					$("#table9 td.col1min").html("&nbsp;");
					
					if (temp.includes("results")) {
						//$('#table9 td.col1min').text(temp);
					} else {

						//$('#table9 td.col1min').text(temp+"results ");
					}
			}
			else{

				$(this).css('background-color','#00688B');
			}
		});
	});

	//-------------------col1_6----------------------------------
	$(document).ready(function(){
		$('#table6 td.color6').each(function(){
			if ($(this).text() == totals[0] || $(this).text() == totals[1]) { //highest and lowest values
					$(this).css('background-color','#32CD32');
					var Row = document.getElementById("max");
					var Cells = Row.getElementsByClassName("col1max");
					var temp=Cells[0].innerText;
					$("#table9 td.col1max").html("&nbsp;");
					
					if (temp.includes("authority")) {
						//$('#table9 td.col1max').text(temp);
					} else {

						//$('#table9 td.col1max').text(temp+"authority ");
					}
			}
			else if ($(this).text() == totals[6] || $(this).text() == totals[7]){
					$(this).css('background-color','#ffa500');
					var Row = document.getElementById("min");
					var Cells = Row.getElementsByClassName("col1min");
					var temp=Cells[0].innerText;
					$("#table9 td.col1min").html("&nbsp;");
					
					if (temp.includes("authority")) {
						//$('#table9 td.col1min').text(temp);
					} else {

						//$('#table9 td.col1min').text(temp+"authority ");
					}
			}
			else{

				$(this).css('background-color','#00688B');
			}
		});
	});

	//-------------------col1_7----------------------------------
	$(document).ready(function(){
		$('#table7 td.color7').each(function(){
			if ($(this).text() == totals[0] || $(this).text() == totals[1]) { //highest and lowest values
					$(this).css('background-color','#32CD32');
					var Row = document.getElementById("max");
					var Cells = Row.getElementsByClassName("col1max");
					var temp=Cells[0].innerText;
					$("#table9 td.col1max").html("&nbsp;");
					
					if (temp.includes("authority")) {
						//$('#table9 td.col1max').text(temp);
					} else {

						//$('#table9 td.col1max').text(temp+"safety ");
					}
			}
			else if ($(this).text() == totals[6] || $(this).text() == totals[7]){
					$(this).css('background-color','#ffa500');
					var Row = document.getElementById("min");
					var Cells = Row.getElementsByClassName("col1min");
					var temp=Cells[0].innerText;
					$("#table9 td.col1min").html("&nbsp;");
					
					if (temp.includes("safety")) {
						//$('#table9 td.col1min').text(temp);
					} else {

						//$('#table9 td.col1min').text(temp+"safety ");
					}
			}
			else{

				$(this).css('background-color','#00688B');
			}
		});
	});

	//-------------------col1_8----------------------------------
	$(document).ready(function(){
		$('#table8 td.color8').each(function(){
			if ($(this).text() == totals[0] || $(this).text() == totals[1]) { //highest and lowest values
					$(this).css('background-color','#32CD32');
					var Row = document.getElementById("max");
					var Cells = Row.getElementsByClassName("col1max");
					var temp=Cells[0].innerText;
					$("#table9 td.col1max").html("&nbsp;");
					
					if (temp.includes("order")) {
						//$('#table9 td.col1max').text(temp);
					} else {

						//$('#table9 td.col1max').text(temp+"order ");
					}
			}
			else if ($(this).text() == totals[6] || $(this).text() == totals[7]){
					$(this).css('background-color','#ffa500');
					var Row = document.getElementById("min");
					var Cells = Row.getElementsByClassName("col1min");
					var temp=Cells[0].innerText;
					$("#table9 td.col1min").html("&nbsp;");
					
					if (temp.includes("order")) {
						//$('#table9 td.col1min').text(temp);
					} else {

						//$('#table9 td.col1min').text(temp+"order ");
					}
			}
			else{

				$(this).css('background-color','#00688B');
			}
		});
	});

}

</script>
<script>
//-------------------col2_1----------------------------------

function column1(){
var totals = [col2[0], col2[1], col2[2], col2[3], col2[4], col2[5], col2[6], col2[7]];
    totals.sort(function(a, b){return b - a});
	

	$(document).ready(function(){
		$('#table1 td.color9').each(function(){
			if ($(this).text() == totals[0] || $(this).text() == totals[1]) { //highest and lowest values
					$(this).css('background-color','#009900');
					var Row = document.getElementById("max");
					var Cells = Row.getElementsByClassName("col2max");
					var temp=Cells[0].innerText;
					$("#table9 td.col2max").html("&nbsp;");
					
					if (temp.includes("caring")) {
						//$('#table9 td.col2max').text(temp);
					} else {

						//$('#table9 td.col2max').text(temp+"caring ");
					}
			}
			else if ($(this).text() == totals[6] || $(this).text() == totals[7]){
					$(this).css('background-color','#ffa500');
					var Row = document.getElementById("min");
					var Cells = Row.getElementsByClassName("col2min");
					var temp=Cells[0].innerText;
					$("#table9 td.col2min").html("&nbsp;");
					
					if (temp.includes("caring")) {
						//$('#table9 td.col2min').text(temp);
					} else {

						//$('#table9 td.col2min').text(temp+"caring ");
					}
			}
			else{

				$(this).css('background-color','#00688B');
			}
		});
	});
//-------------------col2_2----------------------------------

	$(document).ready(function(){
		$('#table2 td.color10').each(function(){
			if ($(this).text() == totals[0] || $(this).text() == totals[1]) { //highest and lowest values
					$(this).css('background-color','#009900');
					var Row = document.getElementById("max");
					var Cells = Row.getElementsByClassName("col2max");
					var temp=Cells[0].innerText;
					$("#table9 td.col2max").html("&nbsp;");
					
					if (temp.includes("purpose")) {
						//$('#table9 td.col2max').text(temp);
					} else {

						//$('#table9 td.col2max').text(temp+"purpose ");
					}
			}
			else if ($(this).text() == totals[6] || $(this).text() == totals[7]){
					$(this).css('background-color','#ffa500');
					var Row = document.getElementById("min");
					var Cells = Row.getElementsByClassName("col2min");
					var temp=Cells[0].innerText;
					$("#table9 td.col2min").html("&nbsp;");
					
					if (temp.includes("purpose")) {
						//$('#table9 td.col2min').text(temp);
					} else {

						//$('#table9 td.col2min').text(temp+"purpose ");
					}
			}
			else{

				$(this).css('background-color','#00688B');
			}
		});
	});
//-------------------col2_3----------------------------------

	$(document).ready(function(){
		$('#table3 td.color11').each(function(){
			if ($(this).text() == totals[0] || $(this).text() == totals[1]) { //highest and lowest values
					$(this).css('background-color','#009900');
					var Row = document.getElementById("max");
					var Cells = Row.getElementsByClassName("col2max");
					var temp=Cells[0].innerText;
					$("#table9 td.col2max").html("&nbsp;");
					
					if (temp.includes("learning")) {
						//$('#table9 td.col2max').text(temp);
					} else {

						//$('#table9 td.col2max').text(temp+"learning ");
					}
			}
			else if ($(this).text() == totals[6] || $(this).text() == totals[7]){
					$(this).css('background-color','#ffa500');
					var Row = document.getElementById("min");
					var Cells = Row.getElementsByClassName("col2min");
					var temp=Cells[0].innerText;
					$("#table9 td.col2min").html("&nbsp;");
					
					if (temp.includes("learning")) {
						//$('#table9 td.col2min').text(temp);
					} else {

						//$('#table9 td.col2min').text(temp+"learning ");
					}
			}
			else{

				$(this).css('background-color','#00688B');
			}
		});
	});
	//-------------------col2_4----------------------------------
	$(document).ready(function(){
		$('#table4 td.color12').each(function(){
			if ($(this).text() == totals[0] || $(this).text() == totals[1]) { //highest and lowest values
					$(this).css('background-color','#009900');
					var Row = document.getElementById("max");
					var Cells = Row.getElementsByClassName("col2max");
					var temp=Cells[0].innerText;
					$("#table9 td.col2max").html("&nbsp;");
					
					if (temp.includes("enjoyment")) {
						//$('#table9 td.col2max').text(temp);
					} else {

						//$('#table9 td.col2max').text(temp+"enjoyment ");
					}
			}
			else if ($(this).text() == totals[6] || $(this).text() == totals[7]){
					$(this).css('background-color','#ffa500');
					var Row = document.getElementById("min");
					var Cells = Row.getElementsByClassName("col2min");
					var temp=Cells[0].innerText;
					$("#table9 td.col2min").html("&nbsp;");
					
					if (temp.includes("enjoyment")) {
						//$('#table9 td.col2min').text(temp);
					} else {

						//$('#table9 td.col2min').text(temp+"enjoyment ");
					}
			}
			else{

				$(this).css('background-color','#00688B');
			}
		});
	});

	//-------------------col2_5----------------------------------
	$(document).ready(function(){
		$('#table5 td.color13').each(function(){
			if ($(this).text() == totals[0] || $(this).text() == totals[1]) { //highest and lowest values
					$(this).css('background-color','#009900');
					var Row = document.getElementById("max");
					var Cells = Row.getElementsByClassName("col2max");
					var temp=Cells[0].innerText;
					$("#table9 td.col2max").html("&nbsp;");
					
					if (temp.includes("results")) {
						//$('#table9 td.col2max').text(temp);
					} else {

						//$('#table9 td.col2max').text(temp+"results ");
					}
			}
			else if ($(this).text() == totals[6] || $(this).text() == totals[7]){
					$(this).css('background-color','#ffa500');
					var Row = document.getElementById("min");
					var Cells = Row.getElementsByClassName("col2min");
					var temp=Cells[0].innerText;
					$("#table9 td.col2min").html("&nbsp;");
					
					if (temp.includes("results")) {
						//$('#table9 td.col2min').text(temp);
					} else {

						//$('#table9 td.col2min').text(temp+"results ");
					}
			}
			else{

				$(this).css('background-color','#00688B');
			}
		});
	});

	//-------------------col2_6----------------------------------
	$(document).ready(function(){
		$('#table6 td.color14').each(function(){
			if ($(this).text() == totals[0] || $(this).text() == totals[1]) { //highest and lowest values
					$(this).css('background-color','#009900');
					var Row = document.getElementById("max");
					var Cells = Row.getElementsByClassName("col2max");
					var temp=Cells[0].innerText;
					$("#table9 td.col2max").html("&nbsp;");
					
					if (temp.includes("authority")) {
						//$('#table9 td.col2max').text(temp);
					} else {

						//$('#table9 td.col2max').text(temp+"authority ");
					}
			}
			else if ($(this).text() == totals[6] || $(this).text() == totals[7]){
					$(this).css('background-color','#ffa500');
					var Row = document.getElementById("min");
					var Cells = Row.getElementsByClassName("col2min");
					var temp=Cells[0].innerText;
					$("#table9 td.col2min").html("&nbsp;");
					
					if (temp.includes("authority")) {
						//$('#table9 td.col2min').text(temp);
					} else {

						//$('#table9 td.col2min').text(temp+"authority ");
					}
			}
			else{

				$(this).css('background-color','#00688B');
			}
		});
	});

	//-------------------col2_7----------------------------------
	$(document).ready(function(){
		$('#table7 td.color15').each(function(){
			if ($(this).text() == totals[0] || $(this).text() == totals[1]) { //highest and lowest values
					$(this).css('background-color','#009900');
					var Row = document.getElementById("max");
					var Cells = Row.getElementsByClassName("col2max");
					var temp=Cells[0].innerText;
					$("#table9 td.col2max").html("&nbsp;");
					
					if (temp.includes("safety")) {
						//$('#table9 td.col2max').text(temp);
					} else {

						//$('#table9 td.col2max').text(temp+"safety ");
					}
			}
			else if ($(this).text() == totals[6] || $(this).text() == totals[7]){
					$(this).css('background-color','#ffa500');
					var Row = document.getElementById("min");
					var Cells = Row.getElementsByClassName("col2min");
					var temp=Cells[0].innerText;
					$("#table9 td.col2min").html("&nbsp;");
					
					if (temp.includes("safety")) {
						//$('#table9 td.col2min').text(temp);
					} else {

						//$('#table9 td.col2min').text(temp+"safety ");
					}
			}
			else{

				$(this).css('background-color','#00688B');
			}
		});
	});

	//-------------------col2_8----------------------------------
	$(document).ready(function(){
		$('#table8 td.color16').each(function(){
			if ($(this).text() == totals[0] || $(this).text() == totals[1]) { //highest and lowest values
					$(this).css('background-color','#009900');
					var Row = document.getElementById("max");
					var Cells = Row.getElementsByClassName("col2max");
					var temp=Cells[0].innerText;
					$("#table9 td.col2max").html("&nbsp;");
					
					if (temp.includes("order")) {
						//$('#table9 td.col2max').text(temp);
					} else {

						//$('#table9 td.col2max').text(temp+"order ");
					}
			}
			else if ($(this).text() == totals[6] || $(this).text() == totals[7]){
					$(this).css('background-color','#ffa500');
					var Row = document.getElementById("min");
					var Cells = Row.getElementsByClassName("col2min");
					var temp=Cells[0].innerText;
					$("#table9 td.col2min").html("&nbsp;");
					
					if (temp.includes("order")) {
						//$('#table9 td.col2min').text(temp);
					} else {

						//$('#table9 td.col2min').text(temp+"order ");
					}

			}
			else{

				$(this).css('background-color','#00688B');
			}
		});
	});

}

</script>
<script>
//-------------------col3_1----------------------------------

function column2(){
var totals = [col3[0], col3[1], col3[2], col3[3], col3[4], col3[5], col3[6], col3[7]];
    totals.sort(function(a, b){return b - a});
	
	//alert(Math.max.apply(null,col1));

	$(document).ready(function(){
		$('#table1 td.color17').each(function(){
			if ($(this).text() == totals[0] || $(this).text() == totals[1]) { //highest and lowest values
					$(this).css('background-color','#009900');
					var Row = document.getElementById("max");
					var Cells = Row.getElementsByClassName("col3max");
					var temp=Cells[0].innerText;
					$("#table9 td.col3max").html("&nbsp;");
					
					if (temp.includes("caring")) {
						//$('#table9 td.col3max').text(temp);
					} else {

						//$('#table9 td.col3max').text(temp+"caring ");
					}
			}
			else if ($(this).text() == totals[6] || $(this).text() == totals[7]){
					$(this).css('background-color','#ffa500');
					$('#table9 td.col3min').text("caring ");
			}
			else{

				$(this).css('background-color','#00688B');
			}
		});
	});
//-------------------col3_2----------------------------------

	$(document).ready(function(){
		$('#table2 td.color18').each(function(){
			if ($(this).text() == totals[0] || $(this).text() == totals[1]) { //highest and lowest values
					$(this).css('background-color','#009900');
					//$('#table9 td.col3max').text("purpose ");
			}
			else if ($(this).text() == totals[6] || $(this).text() == totals[7]){
					$(this).css('background-color','#ffa500');
					//$('#table9 td.col3min').text("purpose ");
			}
			else{

				$(this).css('background-color','#00688B');
			}
		});
	});
//-------------------col3_3----------------------------------

	$(document).ready(function(){
		$('#table3 td.color19').each(function(){
			if ($(this).text() == totals[0] || $(this).text() == totals[1]) { //highest and lowest values
					$(this).css('background-color','#009900');
					//$('#table9 td.col3max').text("learning ");
			}
			else if ($(this).text() == totals[6] || $(this).text() == totals[7]){
					$(this).css('background-color','#ffa500');
					//$('#table9 td.col3min').text("learning ");
			}
			else{

				$(this).css('background-color','#00688B');
			}
		});
	});
	//-------------------col3_4----------------------------------
	$(document).ready(function(){
		$('#table4 td.color20').each(function(){
			if ($(this).text() == totals[0] || $(this).text() == totals[1]) { //highest and lowest values
					$(this).css('background-color','#009900');
					//$('#table9 td.col3max').text("enjoyment ");
			}
			else if ($(this).text() == totals[6] || $(this).text() == totals[7]){
					$(this).css('background-color','#ffa500');
					//$('#table9 td.col3min').text("enjoyment ");
			}
			else{

				$(this).css('background-color','#00688B');
			}
		});
	});

	//-------------------col3_5----------------------------------
	$(document).ready(function(){
		$('#table5 td.color21').each(function(){
			if ($(this).text() == totals[0] || $(this).text() == totals[1]) { //highest and lowest values
					$(this).css('background-color','#009900');
					//$('#table9 td.col3max').text("results ");
			}
			else if ($(this).text() == totals[6] || $(this).text() == totals[7]){
					$(this).css('background-color','#ffa500');
					//$('#table9 td.col3min').text("results ");
			}
			else{

				$(this).css('background-color','#00688B');
			}
		});
	});

	//-------------------col3_6----------------------------------
	$(document).ready(function(){
		$('#table6 td.color22').each(function(){
			if ($(this).text() == totals[0] || $(this).text() == totals[1]) { //highest and lowest values
					$(this).css('background-color','#009900');
					//$('#table9 td.col3max').text("authority ");
			}
			else if ($(this).text() == totals[6] || $(this).text() == totals[7]){
					$(this).css('background-color','#ffa500');
					//$('#table9 td.col3min').text("authority ");
			}
			else{

				$(this).css('background-color','#00688B');
			}
		});
	});

	//-------------------col3_7----------------------------------
	$(document).ready(function(){
		$('#table7 td.color23').each(function(){
			if ($(this).text() == totals[0] || $(this).text() == totals[1]) { //highest and lowest values
					$(this).css('background-color','#009900');
					//$('#table9 td.col3max').text("safety ");
			}
			else if ($(this).text() == totals[6] || $(this).text() == totals[7]){
					$(this).css('background-color','#ffa500');
					//$('#table9 td.col3min').text("safety ");
			}
			else{

				$(this).css('background-color','#00688B');
			}
		});
	});

	//-------------------col3_8----------------------------------
	$(document).ready(function(){
		$('#table8 td.color24').each(function(){
			if ($(this).text() == totals[0] || $(this).text() == totals[1]) { //highest and lowest values
					$(this).css('background-color','#009900');
					//$('#table9 td.col3max').text("order ");
			}
			else if ($(this).text() == totals[6] || $(this).text() == totals[7]){
					$(this).css('background-color','#ffa500');
					//$('#table9 td.col3min').text("order ");
			}
			else{

				$(this).css('background-color','#00688B');
			}
		});
	});

}

</script>

<center>
<img src="Images/caring.png" width="250" height="100">
	

</center>

<center>
<table id="table1" class="ui-content">

<script>
		function myFunction() {
		$('.add').change(function(){
  var sum = 0

  $('.add').each(function(){
    sum += isNaN(this.value) || $.trim(this.value) === '' ? 0 : parseFloat(this.value);
  });

  $('#total').html(sum);

	col1[0]=sum;
	
	column();
	}) 



		$('.add1').change(function(){
  var sum = 0
  $('.add1').each(function(){
    sum += isNaN(this.value) || $.trim(this.value) === '' ? 0 : parseFloat(this.value);
  });

  $('#total1').html(sum);

  	col2[0]=sum;

  	column1();
 
	})


		$('.add2').change(function(){
  var sum = 0
  $('.add2').each(function(){
    sum += isNaN(this.value) || $.trim(this.value) === '' ? 0 : parseFloat(this.value);
  });

  $('#total2').html(sum);
  col3[0]=sum;

  column2();

})

	}
	</script>

	<tr bgcolor="#093145">
		<td><font color="ffffff">Drivers</font>&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td><font color="ffffff">Words that best reflect the given particular culture</font>&nbsp;&nbsp;&nbsp;&nbsp;</b></td>
	    <td><font color="ffffff">MAS Intimates - 5 Years Ago</font>&nbsp;&nbsp;&nbsp;</td>
	    <td><font color="ffffff">MAS Intimates - At Present</font>&nbsp;&nbsp;&nbsp;</td>
	    <td><font color="ffffff">MAS Intimates - 5 years in the future</font>&nbsp;&nbsp;&nbsp;</td>
	</tr>

	<tr bgcolor="#B9D3EE">
		<td>Focuses on&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td>Relationships / Mutual Trust&nbsp;&nbsp;&nbsp;&nbsp;</td>
	    <td><center><input class="add" name="caring_past_1" type="range" min="0" max="10" data-highlight="true" required /></center>&nbsp;&nbsp;&nbsp;</td>
	    <td><center><input class="add1" name="caring_present_1" type="range" min="0" max="10" data-highlight="true" required /></center>&nbsp;&nbsp;&nbsp;</td>
	    <td><center><input class="add2" name="caring_future_1" type="range" min="0" max="10" data-highlight="true" required /></center>&nbsp;&nbsp;&nbsp;</td>
	</tr>

	</tr>

	<tr>
		<td>Work Environment&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td style="max-width:150px;">Warm / Collaborative / People help and support one another&nbsp;&nbsp;&nbsp;&nbsp;</td>
	    <td><center><input class="add" name="caring_past_2" type="range" min="0" max="10" data-highlight="true" required /></center>&nbsp;&nbsp;&nbsp;</td>
	    <td><center><input class="add1" name="caring_present_2" type="range" min="0" max="10" data-highlight="true" required/></center>&nbsp;&nbsp;&nbsp;</td>
	    <td><center><input class="add2" name="caring_future_2" type="range" min="0" max="10" data-highlight="true" required/></center>&nbsp;&nbsp;&nbsp;</td>
	</tr>

	<tr bgcolor="#B9D3EE">
		<td>Employees united by &nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td>Loyalty&nbsp;&nbsp;&nbsp;&nbsp;</td>
	    <td><center><input class="add" name="caring_past_3" type="range" min="0" max="10" data-highlight="true" required/></center>&nbsp;&nbsp;&nbsp;</td>
	    <td><center><input class="add1" name="caring_present_3" type="range" min="0" max="10" data-highlight="true" required/></center>&nbsp;&nbsp;&nbsp;</td>
	    <td><center><input class="add2" name="caring_future_3" type="range" min="0" max="10" data-highlight="true" required/></center>&nbsp;&nbsp;&nbsp;</td>
	</tr>

	<tr>
		<td>Leadership&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td>Sincerity / Team Work / Positive Relationships&nbsp;&nbsp;&nbsp;&nbsp;</td>
	    <td><center><input class="add" name="caring_past_4" type="range" min="0" max="10" data-highlight="true" required/></center>&nbsp;&nbsp;&nbsp;</td>
	    <td><center><input class="add1" name="caring_present_4" type="range" min="0" max="10" data-highlight="true" required/></center>&nbsp;&nbsp;&nbsp;</td>
	    <td><center><input class="add2" name="caring_future_4" type="range" min="0" max="10" data-highlight="true" required/></center>&nbsp;&nbsp;&nbsp;</td>
	</tr>

	<tr bgcolor="#00688B" id="row1">
		<td><b><font color="ffffff">TOTAL</font></b>&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
	    <td class="color1"><center><p id="total"><font color="ffffff"></font></p></center>&nbsp;&nbsp;&nbsp;</td>
	    <td class="color9"><center><p id="total1"><font color="ffffff"></font></p></center>&nbsp;&nbsp;&nbsp;</td>
	    <td class="color17"><center><p id="total2"><font color="ffffff"></font></p></center>&nbsp;&nbsp;&nbsp;</td>
	</tr>

</table>
</center>
<br>
<hr>

<center>
<table>

<script>
		function myFunction1() {
		$('.add3').change(function(){
  var sum = 0

  $('.add3').each(function(){
    sum += isNaN(this.value) || $.trim(this.value) === '' ? 0 : parseFloat(this.value);
  });

  $('#total3').html(sum);
  col1[1]=sum;

  column();

}) 

		$('.add4').change(function(){
  var sum = 0
  $('.add4').each(function(){
    sum += isNaN(this.value) || $.trim(this.value) === '' ? 0 : parseFloat(this.value);
  });

  $('#total4').html(sum);
  col2[1]=sum;

  column1();

})

		$('.add5').change(function(){
  var sum = 0
  $('.add5').each(function(){
    sum += isNaN(this.value) || $.trim(this.value) === '' ? 0 : parseFloat(this.value);
  });

  $('#total5').html(sum);
  col3[1]=sum;

  column2();

})

	}
	</script>

<img src="Images/purpose.png" width="280" height="100">
	</table>
</center>

<center>
<table id="table2">
	<tr bgcolor="#093145">
		<td><font color="ffffff">Drivers</font>&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td><font color="ffffff">Words that best reflect the given particular culture</font>&nbsp;&nbsp;&nbsp;&nbsp;</b></td>
	    <td><font color="ffffff">MAS Intimates - 5 Years Ago</font>&nbsp;&nbsp;&nbsp;</td>
	    <td><font color="ffffff">MAS Intimates - At Present</font>&nbsp;&nbsp;&nbsp;</td>
	    <td><font color="ffffff">MAS Intimates - 5 years in the future</font>&nbsp;&nbsp;&nbsp;</td>
	</tr>

	<tr bgcolor="#B9D3EE">
		<td>Focuses on&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td>Idealism / Altruism / Doing what is right&nbsp;&nbsp;&nbsp;&nbsp;</td>
	    <td><center><input class="add3" name="purpose_past_1" type="range" min="0" max="10" data-highlight="true" required/></center>&nbsp;&nbsp;&nbsp;</td>
	    <td><center><input class="add4" name="purpose_present_1" type="range" min="0" max="10" data-highlight="true" required/></center>&nbsp;&nbsp;&nbsp;</td>
	    <td><center><input class="add5" name="purpose_future_1" type="range" min="0" max="10" data-highlight="true" required/></center>&nbsp;&nbsp;&nbsp;</td>
	</tr>


	<tr>
		<td>Work Environment&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td style="max-width:150px;">Tolerant / Compassionate / Doing good for the long-term future of the world&nbsp;&nbsp;&nbsp;&nbsp;</td>
	    <td><center><input class="add3" name="purpose_past_2" type="range" min="0" max="10" data-highlight="true" required/></center>&nbsp;&nbsp;&nbsp;</td>
	    <td><center><input class="add4" name="purpose_present_2" type="range" min="0" max="10" data-highlight="true" required/></center>&nbsp;&nbsp;&nbsp;</td>
	    <td><center><input class="add5" name="purpose_future_2" type="range" min="0" max="10" data-highlight="true" required/></center>&nbsp;&nbsp;&nbsp;</td>
	</tr>

	<tr bgcolor="#B9D3EE">
		<td>Employees united by &nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td>Sustainability / Global Communities&nbsp;&nbsp;&nbsp;&nbsp;</td>
	    <td><center><input class="add3" name="purpose_past_3" type="range" min="0" max="10" data-highlight="true" required/></center>&nbsp;&nbsp;&nbsp;</td>
	    <td><center><input class="add4" name="purpose_present_3" type="range" min="0" max="10" data-highlight="true" required/></center>&nbsp;&nbsp;&nbsp;</td>
	    <td><center><input class="add5" name="purpose_future_3" type="range" min="0" max="10" data-highlight="true" required/></center>&nbsp;&nbsp;&nbsp;</td>
	</tr>

	<tr>
		<td>Leadership&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td>Shared Ideals / Contributing to a greater cause&nbsp;&nbsp;&nbsp;&nbsp;</td>
	    <td><center><input class="add3" name="purpose_past_4" type="range" min="0" max="10" data-highlight="true" required/></center>&nbsp;&nbsp;&nbsp;</td>
	    <td><center><input class="add4" name="purpose_present_4" type="range" min="0" max="10" data-highlight="true" required/></center>&nbsp;&nbsp;&nbsp;</td>
	    <td><center><input class="add5" name="purpose_future_4" type="range" min="0" max="10" data-highlight="true" required/></center>&nbsp;&nbsp;&nbsp;</td>
	</tr>

	<tr bgcolor="#00688B">
		<td><b><font color="ffffff">TOTAL</font></b>&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
	    <td class="color2"><center><p id="total3"><font color="ffffff"></font></p></center>&nbsp;&nbsp;&nbsp;</td>
	    <td class="color10"><center><p id="total4"><font color="ffffff"></font></p></center>&nbsp;&nbsp;&nbsp;</td>
	    <td class="color18"><center><p id="total5"><font color="ffffff"></font></p></center>&nbsp;&nbsp;&nbsp;</td>
	</tr>

</table>
</center>

<br>
<hr>

<center><table>

<script>
		function myFunction2() {
		$('.add6').change(function(){
  var sum = 0

  $('.add6').each(function(){
    sum += isNaN(this.value) || $.trim(this.value) === '' ? 0 : parseFloat(this.value);
  });

  $('#total6').html(sum);
  col1[2]=sum;

  column();

}) 

		$('.add7').change(function(){
  var sum = 0
  $('.add7').each(function(){
    sum += isNaN(this.value) || $.trim(this.value) === '' ? 0 : parseFloat(this.value);
  });

  $('#total7').html(sum);
  col2[2]=sum;

  column1();
})

		$('.add8').change(function(){
  var sum = 0
  $('.add8').each(function(){
    sum += isNaN(this.value) || $.trim(this.value) === '' ? 0 : parseFloat(this.value);
  });

  $('#total8').html(sum);
  col3[2]=sum;

  column2();
})

	}
	</script>

<img src="Images/learning.png" width="300" height="100">
	</table>
</center>

<center>
<table id="table3">
	<tr bgcolor="#093145">
		<td><font color="ffffff">Drivers</font>&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td><font color="ffffff">Words that best reflect the given particular culture</font>&nbsp;&nbsp;&nbsp;&nbsp;</b></td>
	    <td><font color="ffffff">MAS Intimates - 5 Years Ago</font>&nbsp;&nbsp;&nbsp;</td>
	    <td><font color="ffffff">MAS Intimates - At Present</font>&nbsp;&nbsp;&nbsp;</td>
	    <td><font color="ffffff">MAS Intimates - 5 years in the future</font>&nbsp;&nbsp;&nbsp;</td>
	</tr>

	<tr bgcolor="#B9D3EE">
		<td>Focuses on&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td>Exploration / Expansiveness / Creativity&nbsp;&nbsp;&nbsp;&nbsp;</td>
	    <td><center><input class="add6" name="learning_past_1" type="range" min="0" max="10" data-highlight="true" required/></center>&nbsp;&nbsp;&nbsp;</td>
	    <td><center><input class="add7" name="learning_present_1" type="range" min="0" max="10" data-highlight="true" required/></center>&nbsp;&nbsp;&nbsp;</td>
	    <td><center><input class="add8" name="learning_future_1" type="range" min="0" max="10" data-highlight="true" required/></center>&nbsp;&nbsp;&nbsp;</td>
	</tr>


	<tr>
		<td>Work Environment&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td style="max-width:150px;">Inventive / Open-minded / New ideas / Explore alternatives&nbsp;&nbsp;&nbsp;&nbsp;</td>
	    <td><center><input class="add6" name="learning_past_2" type="range" min="0" max="10" data-highlight="true" required/></center>&nbsp;&nbsp;&nbsp;</td>
	    <td><center><input class="add7" name="learning_present_2" type="range" min="0" max="10" data-highlight="true" required/></center>&nbsp;&nbsp;&nbsp;</td>
	    <td><center><input class="add8" name="learning_future_2" type="range" min="0" max="10" data-highlight="true" required/></center>&nbsp;&nbsp;&nbsp;</td>
	</tr>

	<tr bgcolor="#B9D3EE">
		<td>Employees united by &nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td>Curiosity&nbsp;&nbsp;&nbsp;&nbsp;</td>
	    <td><center><input class="add6" name="learning_past_3" type="range" min="0" max="10" data-highlight="true" required/></center>&nbsp;&nbsp;&nbsp;</td>
	    <td><center><input class="add7" name="learning_present_3" type="range" min="0" max="10" data-highlight="true" required/></center>&nbsp;&nbsp;&nbsp;</td>
	    <td><center><input class="add8" name="learning_future_3" type="range" min="0" max="10" data-highlight="true" required/></center>&nbsp;&nbsp;&nbsp;</td>
	</tr>

	<tr>
		<td>Leadership&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td>Innovation / Knowledge / Adventure&nbsp;&nbsp;&nbsp;&nbsp;</td>
	    <td><center><input class="add6" name="learning_past_4" type="range" min="0" max="10" data-highlight="true" required/></center>&nbsp;&nbsp;&nbsp;</td>
	    <td><center><input class="add7" name="learning_present_4" type="range" min="0" max="10" data-highlight="true" required/></center>&nbsp;&nbsp;&nbsp;</td>
	    <td><center><input class="add8" name="learning_future_4" type="range" min="0" max="10" data-highlight="true" required/></center>&nbsp;&nbsp;&nbsp;</td>
	</tr>

	<tr bgcolor="#00688B">
		<td><b><font color="ffffff">TOTAL</font></b>&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
	    <td class="color3"><center><p id="total6"><font color="ffffff"></font></p></center>&nbsp;&nbsp;&nbsp;</td>
	    <td class="color11"><center><p id="total7"><font color="ffffff"></font></p></center>&nbsp;&nbsp;&nbsp;</td>
	    <td class="color19"><center><p id="total8"><font color="ffffff"></font></p></center>&nbsp;&nbsp;&nbsp;</td>
	</tr>

</table>
</center>
<br>
<hr>


<center><table>
<img src="Images/enjoyment.png" width="350" height="100">
	</table>
</center>

<center>
<table id="table4">

<script>
		function myFunction3() {
		$('.add9').change(function(){
  var sum = 0

  $('.add9').each(function(){
    sum += isNaN(this.value) || $.trim(this.value) === '' ? 0 : parseFloat(this.value);
  });

  $('#total9').html(sum);
  col1[3]=sum;
  column();
  
}) 

		$('.add10').change(function(){
  var sum = 0
  $('.add10').each(function(){
    sum += isNaN(this.value) || $.trim(this.value) === '' ? 0 : parseFloat(this.value);
  });

  $('#total10').html(sum);
  col2[3]=sum;

  column1();
})

		$('.add11').change(function(){
  var sum = 0
  $('.add11').each(function(){
    sum += isNaN(this.value) || $.trim(this.value) === '' ? 0 : parseFloat(this.value);
  });

  $('#total11').html(sum);
  col3[3]=sum;

  column2();
})

	}
	</script>

	<tr bgcolor="#093145">
		<td><font color="ffffff">Drivers</font>&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td><font color="ffffff">Words that best reflect the given particular culture</font>&nbsp;&nbsp;&nbsp;&nbsp;</b></td>
	    <td><font color="ffffff">MAS Intimates - 5 Years Ago</font>&nbsp;&nbsp;&nbsp;</td>
	    <td><font color="ffffff">MAS Intimates - At Present</font>&nbsp;&nbsp;&nbsp;</td>
	    <td><font color="ffffff">MAS Intimates - 5 years in the future</font>&nbsp;&nbsp;&nbsp;</td>
	</tr>

	<tr bgcolor="#B9D3EE">
		<td>Focuses on&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td>Fun / Excitement&nbsp;&nbsp;&nbsp;&nbsp;</td>
	    <td><center><input class="add9" name="enjoyment_past_1" type="range" min="0" max="10" data-highlight="true" required/></center>&nbsp;&nbsp;&nbsp;</td>
	    <td><center><input class="add10" name="enjoyment_present_1" type="range" min="0" max="10" data-highlight="true" required/></center>&nbsp;&nbsp;&nbsp;</td>
	    <td><center><input class="add11" name="enjoyment_future_1" type="range" min="0" max="10" data-highlight="true" required/></center>&nbsp;&nbsp;&nbsp;</td>
	</tr>

	<tr>
		<td>Work Environment&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td>Light hearted places / Happy&nbsp;&nbsp;&nbsp;&nbsp;</td>
	    <td><center><input class="add9" name="enjoyment_past_2" type="range" min="0" max="10" data-highlight="true" required/></center>&nbsp;&nbsp;&nbsp;</td>
	    <td><center><input class="add10" name="enjoyment_present_2" type="range" min="0" max="10" data-highlight="true" required/></center>&nbsp;&nbsp;&nbsp;</td>
	    <td><center><input class="add11" name="enjoyment_future_2" type="range" min="0" max="10" data-highlight="true" required/></center>&nbsp;&nbsp;&nbsp;</td>
	</tr>

	<tr bgcolor="#B9D3EE">
		<td>Employees united by &nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td>Playfulness / Stimulation&nbsp;&nbsp;&nbsp;&nbsp;</td>
	    <td><center><input class="add9" name="enjoyment_past_3" type="range" min="0" max="10" data-highlight="true" required/></center>&nbsp;&nbsp;&nbsp;</td>
	    <td><center><input class="add10" name="enjoyment_present_3" type="range" min="0" max="10" data-highlight="true" required/></center>&nbsp;&nbsp;&nbsp;</td>
	    <td><center><input class="add11" name="enjoyment_future_3" type="range" min="0" max="10" data-highlight="true" required/></center>&nbsp;&nbsp;&nbsp;</td>
	</tr>

	<tr>
		<td>Leadership&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td>Spontaineity / Sense of humour&nbsp;&nbsp;&nbsp;&nbsp;</td>
	    <td><center><input class="add9" name="enjoyment_past_4" type="range" min="0" max="10" data-highlight="true" required/></center>&nbsp;&nbsp;&nbsp;</td>
	    <td><center><input class="add10" name="enjoyment_present_4" type="range" min="0" max="10" data-highlight="true" required/></center>&nbsp;&nbsp;&nbsp;</td>
	    <td><center><input class="add11" name="enjoyment_future_4" type="range" min="0" max="10" data-highlight="true" required/></center>&nbsp;&nbsp;&nbsp;</td>
	</tr>

	<tr bgcolor="#00688B">
		<td><b><font color="ffffff">TOTAL</font></b>&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
	    <td class="color4"><center><p id="total9"><font color="ffffff"></font></p></center>&nbsp;&nbsp;&nbsp;</td>
	    <td class="color12"><center><p id="total10"><font color="ffffff"></font></p></center>&nbsp;&nbsp;&nbsp;</td>
	    <td class="color20"><center><p id="total11"><font color="ffffff"></font></p></center>&nbsp;&nbsp;&nbsp;</td>
	</tr>

</table>
</center>
<br>
<hr>

<center><table>
<img src="Images/results.png" width="300" height="100">
	</table>
</center>

<center>
<table id="table5">

<script>
		function myFunction4() {
		$('.add12').change(function(){
  var sum = 0

  $('.add12').each(function(){
    sum += isNaN(this.value) || $.trim(this.value) === '' ? 0 : parseFloat(this.value);
  });

  $('#total12').html(sum);
  col1[4]=sum;

  column(); 

}) 

		$('.add13').change(function(){
  var sum = 0
  $('.add13').each(function(){
    sum += isNaN(this.value) || $.trim(this.value) === '' ? 0 : parseFloat(this.value);
  });

  $('#total13').html(sum);
  col2[4]=sum;

  column1();
})

		$('.add14').change(function(){
  var sum = 0
  $('.add14').each(function(){
    sum += isNaN(this.value) || $.trim(this.value) === '' ? 0 : parseFloat(this.value);
  });

  $('#total14').html(sum);
  col3[4]=sum;

  column2();
})

	}
	</script>

	<tr bgcolor="#093145">
		<td><font color="ffffff">Drivers</font>&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td><font color="ffffff">Words that best reflect the given particular culture</font>&nbsp;&nbsp;&nbsp;&nbsp;</b></td>
	    <td><font color="ffffff">MAS Intimates - 5 Years Ago</font>&nbsp;&nbsp;&nbsp;</td>
	    <td><font color="ffffff">MAS Intimates - At Present</font>&nbsp;&nbsp;&nbsp;</td>
	    <td><font color="ffffff">MAS Intimates - 5 years in the future</font>&nbsp;&nbsp;&nbsp;</td>
	</tr>

	<tr bgcolor="#B9D3EE">
		<td>Focuses on&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td>Strength / Decisiveness / Boldness&nbsp;&nbsp;&nbsp;&nbsp;</td>
	    <td><center><input class="add12" name="results_past_1" type="range" min="0" max="10" data-highlight="true" required/></center>&nbsp;&nbsp;&nbsp;</td>
	    <td><center><input class="add13" name="results_present_1" type="range" min="0" max="10" data-highlight="true" required/></center>&nbsp;&nbsp;&nbsp;</td>
	    <td><center><input class="add14" name="results_future_1" type="range" min="0" max="10" data-highlight="true" required/></center>&nbsp;&nbsp;&nbsp;</td>
	</tr>

	<tr>
		<td>Work Environment&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td>Competitive Places / Personal Advantage&nbsp;&nbsp;&nbsp;&nbsp;</td>
	    <td><center><input class="add12" name="results_past_2" type="range" min="0" max="10" data-highlight="true" required/></center>&nbsp;&nbsp;&nbsp;</td>
	    <td><center><input class="add13" name="results_present_2" type="range" min="0" max="10" data-highlight="true" required/></center>&nbsp;&nbsp;&nbsp;</td>
	    <td><center><input class="add14" name="results_future_2" type="range" min="0" max="10" data-highlight="true" required/></center>&nbsp;&nbsp;&nbsp;</td>
	</tr>

	<tr bgcolor="#B9D3EE">
		<td>Employees united by &nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td>Strong Control&nbsp;&nbsp;&nbsp;&nbsp;</td>
	    <td><center><input class="add12" name="results_past_3" type="range" min="0" max="10" data-highlight="true" required/></center>&nbsp;&nbsp;&nbsp;</td>
	    <td><center><input class="add13" name="results_present_3" type="range" min="0" max="10" data-highlight="true" required/></center>&nbsp;&nbsp;&nbsp;</td>
	    <td><center><input class="add14" name="results_future_3" type="range" min="0" max="10" data-highlight="true" required/></center>&nbsp;&nbsp;&nbsp;</td>
	</tr>

	<tr>
		<td>Leadership&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td>Confidence / Dominance&nbsp;&nbsp;&nbsp;&nbsp;</td>
	    <td><center><input class="add12" name="results_past_4" type="range" min="0" max="10" data-highlight="true" required/></center>&nbsp;&nbsp;&nbsp;</td>
	    <td><center><input class="add13" name="results_present_4" type="range" min="0" max="10" data-highlight="true" required/></center>&nbsp;&nbsp;&nbsp;</td>
	    <td><center><input class="add14" name="results_future_4" type="range" min="0" max="10" data-highlight="true" required/></center>&nbsp;&nbsp;&nbsp;</td>
	</tr>

	<tr bgcolor="#00688B">
		<td><b><font color="ffffff">TOTAL</font></b>&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
	    <td class="color5"><center><p id="total12"><font color="ffffff"></font></p></center>&nbsp;&nbsp;&nbsp;</td>
	    <td class="color13"><center><p id="total13"><font color="ffffff"></font></p></center>&nbsp;&nbsp;&nbsp;</td>
	    <td class="color21"><center><p id="total14"><font color="ffffff"></font></p></center>&nbsp;&nbsp;&nbsp;</td>
	</tr>

</table>
</center>
<br>
<hr>

<center><table>
<img src="Images/authority1.png" width="320" height="100">
	</table>
</center>

<center>
<table id="table6">

<script>
		function myFunction5() {
		$('.add15').change(function(){
  var sum = 0

  $('.add15').each(function(){
    sum += isNaN(this.value) || $.trim(this.value) === '' ? 0 : parseFloat(this.value);
  });

  $('#total15').html(sum);
  col1[5]=sum;

  column();
    
}) 

		$('.add16').change(function(){
  var sum = 0
  $('.add16').each(function(){
    sum += isNaN(this.value) || $.trim(this.value) === '' ? 0 : parseFloat(this.value);
  });

  $('#total16').html(sum);
  col2[5]=sum;

  column1();
})

		$('.add17').change(function(){
  var sum = 0
  $('.add17').each(function(){
    sum += isNaN(this.value) || $.trim(this.value) === '' ? 0 : parseFloat(this.value);
  });

  $('#total17').html(sum);
  col3[5]=sum;

  column2();
})

	}
	</script>

	<tr bgcolor="#093145">
		<td><font color="ffffff">Drivers</font>&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td><font color="ffffff">Words that best reflect the given particular culture</font>&nbsp;&nbsp;&nbsp;&nbsp;</b></td>
	    <td><font color="ffffff">MAS Intimates - 5 Years Ago</font>&nbsp;&nbsp;&nbsp;</td>
	    <td><font color="ffffff">MAS Intimates - At Present</font>&nbsp;&nbsp;&nbsp;</td>
	    <td><font color="ffffff">MAS Intimates - 5 years in the future</font>&nbsp;&nbsp;&nbsp;</td>
	</tr>

	<tr bgcolor="#B9D3EE">
		<td>Focuses on&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td>Strength / Decisiveness / Boldness&nbsp;&nbsp;&nbsp;&nbsp;</td>
	    <td><center><input class="add15" name="authority_past_1" type="range" min="0" max="10" data-highlight="true" required/></center>&nbsp;&nbsp;&nbsp;</td>
	    <td><center><input class="add16" name="authority_present_1" type="range" min="0" max="10" data-highlight="true" required/></center>&nbsp;&nbsp;&nbsp;</td>
	    <td><center><input class="add17" name="authority_future_1" type="range" min="0" max="10" data-highlight="true" required/></center>&nbsp;&nbsp;&nbsp;</td>
	</tr>

	<tr>
		<td>Work Environment&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td>Competitive Places / Personal Advantage&nbsp;&nbsp;&nbsp;&nbsp;</td>
	    <td><center><input class="add15" name="authority_past_2" type="range" min="0" max="10" data-highlight="true" required/></center>&nbsp;&nbsp;&nbsp;</td>
	    <td><center><input class="add16" name="authority_present_2" type="range" min="0" max="10" data-highlight="true" required/></center>&nbsp;&nbsp;&nbsp;</td>
	    <td><center><input class="add17" name="authority_future_2" type="range" min="0" max="10" data-highlight="true" required/></center>&nbsp;&nbsp;&nbsp;</td>
	</tr>

	<tr bgcolor="#B9D3EE">
		<td>Employees united by &nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td>Strong Control&nbsp;&nbsp;&nbsp;&nbsp;</td>
	    <td><center><input class="add15" name="authority_past_3" type="range" min="0" max="10" data-highlight="true" required/></center>&nbsp;&nbsp;&nbsp;</td>
	    <td><center><input class="add16" name="authority_present_3" type="range" min="0" max="10" data-highlight="true" required/></center>&nbsp;&nbsp;&nbsp;</td>
	    <td><center><input class="add17" name="authority_future_3" type="range" min="0" max="10" data-highlight="true" required/></center>&nbsp;&nbsp;&nbsp;</td>
	</tr>

	<tr>
		<td>Leadership&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td>Confidence / Dominance&nbsp;&nbsp;&nbsp;&nbsp;</td>
	    <td><center><input class="add15" name="authority_past_4" type="range" min="0" max="10" data-highlight="true" required/></center>&nbsp;&nbsp;&nbsp;</td>
	    <td><center><input class="add16" name="authority_present_4" type="range" min="0" max="10" data-highlight="true" required/></center>&nbsp;&nbsp;&nbsp;</td>
	    <td><center><input class="add17" name="authority_future_4" type="range" min="0" max="10" data-highlight="true" required/></center>&nbsp;&nbsp;&nbsp;</td>
	</tr>

	<tr bgcolor="#00688B">
		<td><b><font color="ffffff">TOTAL</font></b>&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
	    <td class="color6"><center><p id="total15"><font color="ffffff"></font></p></center>&nbsp;&nbsp;&nbsp;</td>
	    <td class="color14"><center><p id="total16"><font color="ffffff"></font></p></center>&nbsp;&nbsp;&nbsp;</td>
	    <td class="color22"><center><p id="total17"><font color="ffffff"></font></p></center>&nbsp;&nbsp;&nbsp;</td>
	</tr>

</table>
</center>
<br>
<hr>

<center><table>
<img src="Images/safety1.png" width="220" height="100">
	</table>
</center>

<center>
<table id="table7">

<script>
		function myFunction6() {
		$('.add18').change(function(){
  var sum = 0

  $('.add18').each(function(){
    sum += isNaN(this.value) || $.trim(this.value) === '' ? 0 : parseFloat(this.value);
  });

  $('#total18').html(sum);
  col1[6]=sum;

  column();

}) 

		$('.add19').change(function(){
  var sum = 0
  $('.add19').each(function(){
    sum += isNaN(this.value) || $.trim(this.value) === '' ? 0 : parseFloat(this.value);
  });

  $('#total19').html(sum);
  col2[6]=sum;

  column1();
})

		$('.add20').change(function(){
  var sum = 0
  $('.add20').each(function(){
    sum += isNaN(this.value) || $.trim(this.value) === '' ? 0 : parseFloat(this.value);
  });

  $('#total20').html(sum);
  col3[6]=sum;

  column2();
})

	}
	</script>

	<tr bgcolor="#093145">
		<td><font color="ffffff">Drivers</font>&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td><font color="ffffff">Words that best reflect the given particular culture</font>&nbsp;&nbsp;&nbsp;&nbsp;</b></td>
	    <td><font color="ffffff">MAS Intimates - 5 Years Ago</font>&nbsp;&nbsp;&nbsp;</td>
	    <td><font color="ffffff">MAS Intimates - At Present</font>&nbsp;&nbsp;&nbsp;</td>
	    <td><font color="ffffff">MAS Intimates - 5 years in the future</font>&nbsp;&nbsp;&nbsp;</td>
	</tr>

	<tr bgcolor="#B9D3EE">
		<td>Focuses on&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td>Planning / Caution / Preparedness&nbsp;&nbsp;&nbsp;&nbsp;</td>
	    <td><center><input class="add18" name="safety_past_1" type="range" min="0" max="10" data-highlight="true" required/></center>&nbsp;&nbsp;&nbsp;</td>
	    <td><center><input class="add19" name="safety_present_1" type="range" min="0" max="10" data-highlight="true" required/></center>&nbsp;&nbsp;&nbsp;</td>
	    <td><center><input class="add20" name="safety_future_1" type="range" min="0" max="10" data-highlight="true" required/></center>&nbsp;&nbsp;&nbsp;</td>
	</tr>

	<tr>
		<td>Work Environment&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td style="max-width:150px;">Predictable / Risk Conscious / Think things through carefully&nbsp;&nbsp;&nbsp;&nbsp;</td>
	    <td><center><input class="add18" name="safety_past_2" type="range" min="0" max="10" data-highlight="true" required/></center>&nbsp;&nbsp;&nbsp;</td>
	    <td><center><input class="add19" name="safety_present_2" type="range" min="0" max="10" data-highlight="true" required/></center>&nbsp;&nbsp;&nbsp;</td>
	    <td><center><input class="add20" name="safety_future_2" type="range" min="0" max="10" data-highlight="true" required/></center>&nbsp;&nbsp;&nbsp;</td>
	</tr>

	<tr bgcolor="#B9D3EE">
		<td>Employees united by &nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td>Desire to feel protected / Ability to anticipate change&nbsp;&nbsp;&nbsp;&nbsp;</td>
	    <td><center><input class="add18" name="safety_past_3" type="range" min="0" max="10" data-highlight="true" required/></center>&nbsp;&nbsp;&nbsp;</td>
	    <td><center><input class="add19" name="safety_present_3" type="range" min="0" max="10" data-highlight="true" required/></center>&nbsp;&nbsp;&nbsp;</td>
	    <td><center><input class="add20" name="safety_future_3" type="range" min="0" max="10" data-highlight="true" required/></center>&nbsp;&nbsp;&nbsp;</td>
	</tr>

	<tr>
		<td>Leadership&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td>Realistic / Plan ahead&nbsp;&nbsp;&nbsp;&nbsp;</td>
	    <td><center><input class="add18" name="safety_past_4" type="range" min="0" max="10" data-highlight="true" required/></center>&nbsp;&nbsp;&nbsp;</td>
	    <td><center><input class="add19" name="safety_present_4" type="range" min="0" max="10" data-highlight="true" required/></center>&nbsp;&nbsp;&nbsp;</td>
	    <td><center><input class="add20" name="safety_future_4" type="range" min="0" max="10" data-highlight="true" required/></center>&nbsp;&nbsp;&nbsp;</td>
	</tr>

	<tr bgcolor="#00688B">
		<td><b><font color="ffffff">TOTAL</font></b>&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
	    <td class="color7"><center><p id="total18"><font color="ffffff"></font></p></center>&nbsp;&nbsp;&nbsp;</td>
	    <td class="color15"><center><p id="total19"><font color="ffffff"></font></p></center>&nbsp;&nbsp;&nbsp;</td>
	    <td class="color23"><center><p id="total20"><font color="ffffff"></font></p></center>&nbsp;&nbsp;&nbsp;</td>
	</tr>

</table>
</center>
<br>
<hr>

<center><table>
<img src="Images/order2.png" width="220" height="100">
	</table>
</center>

<center>
<table id="table8">

<script>
		function myFunction7() {
		$('.add21').change(function(){
  var sum = 0

  $('.add21').each(function(){
    sum += isNaN(this.value) || $.trim(this.value) === '' ? 0 : parseFloat(this.value);
  });

  $('#total21').html(sum);
  col1[7]=sum;

  column();

}) 

		$('.add22').change(function(){
  var sum = 0
  $('.add22').each(function(){
    sum += isNaN(this.value) || $.trim(this.value) === '' ? 0 : parseFloat(this.value);
  });

  $('#total22').html(sum);
  col2[7]=sum;

  column1();
})

		$('.add23').change(function(){
  var sum = 0
  $('.add23').each(function(){
    sum += isNaN(this.value) || $.trim(this.value) === '' ? 0 : parseFloat(this.value);
  });

  $('#total23').html(sum);
  col3[7]=sum;

  column2();
})

	}
	</script>

	<tr bgcolor="#093145">
		<td><font color="ffffff">Drivers</font>&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td><font color="ffffff">Words that best reflect the given particular culture</font>&nbsp;&nbsp;&nbsp;&nbsp;</b></td>
	    <td><font color="ffffff">MAS Intimates - 5 Years Ago</font>&nbsp;&nbsp;&nbsp;</td>
	    <td><font color="ffffff">MAS Intimates - At Present</font>&nbsp;&nbsp;&nbsp;</td>
	    <td><font color="ffffff">MAS Intimates - 5 years in the future</font>&nbsp;&nbsp;&nbsp;</td>
	</tr>

	<tr bgcolor="#B9D3EE">
		<td>Focuses on&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td>Respect / Structure / Shared norms&nbsp;&nbsp;&nbsp;&nbsp;</td>
	    <td><center><input class="add21" name="order_past_1" type="range" min="0" max="10" data-highlight="true" required/></center>&nbsp;&nbsp;&nbsp;</td>
	    <td><center><input class="add22" name="order_present_1" type="range" min="0" max="10" data-highlight="true" required/></center>&nbsp;&nbsp;&nbsp;</td>
	    <td><center><input class="add23" name="order_future_1" type="range" min="0" max="10" data-highlight="true" required/></center>&nbsp;&nbsp;&nbsp;</td>
	</tr>

	<tr>
		<td>Work Environment&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td>Methodical / Play by the rules / Want to fit in&nbsp;&nbsp;&nbsp;&nbsp;</td>
	    <td><center><input class="add21" name="order_past_2" type="range" min="0" max="10" data-highlight="true" required/></center>&nbsp;&nbsp;&nbsp;</td>
	    <td><center><input class="add22" name="order_present_2" type="range" min="0" max="10" data-highlight="true" required/></center>&nbsp;&nbsp;&nbsp;</td>
	    <td><center><input class="add23" name="order_future_2" type="range" min="0" max="10" data-highlight="true" required/></center>&nbsp;&nbsp;&nbsp;</td>
	</tr>

	<tr bgcolor="#B9D3EE">
		<td>Employees united by &nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td>Cooperation&nbsp;&nbsp;&nbsp;&nbsp;</td>
	    <td><center><input class="add21" name="order_past_3" type="range" min="0" max="10" data-highlight="true" required/></center>&nbsp;&nbsp;&nbsp;</td>
	    <td><center><input class="add22" name="order_present_3" type="range" min="0" max="10" data-highlight="true" required/></center>&nbsp;&nbsp;&nbsp;</td>
	    <td><center><input class="add23" name="order_future_3" type="range" min="0" max="10" data-highlight="true" required/></center>&nbsp;&nbsp;&nbsp;</td>
	</tr>

	<tr>
		<td>Leadership&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td>Shared procedures / time honoured customs&nbsp;&nbsp;&nbsp;&nbsp;</td>
	    <td><center><input class="add21" name="order_past_4" type="range" min="0" max="10" data-highlight="true" required/></center>&nbsp;&nbsp;&nbsp;</td>
	    <td><center><input class="add22" name="order_present_4" type="range" min="0" max="10" data-highlight="true" required/></center>&nbsp;&nbsp;&nbsp;</td>
	    <td><center><input class="add23" name="order_future_4" type="range" min="0" max="10" data-highlight="true" required/></center>&nbsp;&nbsp;&nbsp;</td>
	</tr>

	<tr bgcolor="#00688B">
		<td><b><font color="ffffff">TOTAL</font></b>&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
	    <td class="color8"><center><p id="total21"><font color="ffffff"></font></p></center>&nbsp;&nbsp;&nbsp;</td>
	    <td class="color16"><center><p id="total22"><font color="ffffff"></font></p></center>&nbsp;&nbsp;&nbsp;</td>
	    <td class="color24"><center><p id="total23"><font color="ffffff"></font></p></center>&nbsp;&nbsp;&nbsp;</td>
	</tr>

</table>
<br><br>

<input type="submit" name="ok" value="Submit"> </input> 


<style type="text/css">input[type=submit] {

    background-color: #ff0000;
    color: white;
    font-size:32px;
  
}</style>

</center>
</form>
<br>
<center>
<table id="table9">
<tr bgcolor="#093145">
		<td style="visibility:hidden;"><font color="ffffff">Employees united by</font>&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td style="visibility:hidden;"><font color="ffffff">Words that best reflect the given particular culture</font>&nbsp;&nbsp;&nbsp;&nbsp;</b></td>
	    <td style="visibility:hidden;"><font color="ffffff">MAS Intimates - 5 Years Ago</font>&nbsp;&nbsp;&nbsp;</td>
	    <td style="visibility:hidden;"><font color="ffffff">MAS Intimates - At Present</font>&nbsp;&nbsp;&nbsp;</td>
	    <td style="visibility:hidden;"><font color="ffffff">MAS Intimates - 5 years in the future</font>&nbsp;&nbsp;&nbsp;</td>
	</tr>

	<tr bgcolor="#ffffff" id="max">
		<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<!-- <td><b>Most significant characteristics&nbsp;&nbsp;&nbsp;&nbsp;</b></td> -->
	    <td class="col1max"><center></center>&nbsp;&nbsp;&nbsp;</td>
	    <td class="col2max"><center></center>&nbsp;&nbsp;&nbsp;</td>
	    <td class="col3max"><center></center>&nbsp;&nbsp;&nbsp;</td>
	</tr>
	<tr bgcolor="#ffffff" id="min">
		<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<!-- <td><b>Least significant characteristics&nbsp;&nbsp;&nbsp;&nbsp;</b></td> -->
	    <td class="col1min"><center></center>&nbsp;&nbsp;&nbsp;</td>
	    <td class="col2min"><center></center>&nbsp;&nbsp;&nbsp;</td>
	    <td class="col3min"><center></center>&nbsp;&nbsp;&nbsp;</td>
	</tr>
</table>
</center>
</body>
</html>