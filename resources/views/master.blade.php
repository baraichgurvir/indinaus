<!DOCTYPE html>
<html>
<head>
<title>Indinaus - @yield('title')</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
@import url('https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&subset=devanagari,latin-ext');
body{
   overflow-x: hidden;
    font-family: 'Poppins', sans-serif;
	font-size: 16px;
	line-height: 24px;
	font-weight: 400;
	color: #212112;
	background-color: #fff;
	overflow-x: hidden;
    transition: all 200ms linear;
}
::selection {
	color: #fff;
	background-color: #5720aa;
}
::-moz-selection {
	color: #fff;
	background-color: #5720aa;
}


/* #Navigation
================================================== */

.start-header {
	opacity: 1;
	transform: translateY(0);
	padding: 20px 0;
	box-shadow: 0 10px 30px 0 rgba(138, 155, 165, 0.15);
	-webkit-transition : all 0.3s ease-out;
	transition : all 0.3s ease-out;
}
.start-header.scroll-on {
	box-shadow: 0 5px 10px 0 rgba(138, 155, 165, 0.15);
	padding: 10px 0;
	-webkit-transition : all 0.3s ease-out;
	transition : all 0.3s ease-out;
}
.start-header.scroll-on .navbar-brand img{
	height: 24px;
	-webkit-transition : all 0.3s ease-out;
	transition : all 0.3s ease-out;
}
.navigation-wrap{
	position: fixed;
	width: 100%;
	top: 0;
	left: 0;
	z-index: 1000;
	-webkit-transition : all 0.3s ease-out;
	transition : all 0.3s ease-out;
   box-shadow: 0 -26px 32px 0 rgb(0 0 0 / 15%), 0 -58px 32px 64px rgb(0 0 0 / 10%);
}
.navbar{
	padding: 0;
}
.navbar-brand img{
	height: 28px;
	width: auto;
	display: block;
  filter: brightness(10%);
	-webkit-transition : all 0.3s ease-out;
	transition : all 0.3s ease-out;
}
.navbar-toggler {
	float: right;
	border: none;
	padding-right: 0;
}
.navbar-toggler:active,
.navbar-toggler:focus {
	outline: none;
}
.navbar-light .navbar-toggler-icon {
	width: 24px;
	height: 17px;
	background-image: none;
	position: relative;
	border-bottom: 1px solid #000;
    transition: all 300ms linear;
}
.navbar-light .navbar-toggler-icon:after, 
.navbar-light .navbar-toggler-icon:before{
	width: 24px;
	position: absolute;
	height: 1px;
	background-color: #000;
	top: 0;
	left: 0;
	content: '';
	z-index: 2;
    transition: all 300ms linear;
}
.navbar-light .navbar-toggler-icon:after{
	top: 8px;
}
.navbar-toggler[aria-expanded="true"] .navbar-toggler-icon:after {
	transform: rotate(45deg);
}
.navbar-toggler[aria-expanded="true"] .navbar-toggler-icon:before {
	transform: translateY(8px) rotate(-45deg);
}
.navbar-toggler[aria-expanded="true"] .navbar-toggler-icon {
	border-color: transparent;
}
.nav-link{
	color: #212121 !important;
	font-weight: 500;
    transition: all 200ms linear;
}
.nav-item:hover .nav-link{
	color: #5720aa !important;
}
.nav-item.active .nav-link{
	color: #777 !important;
}
.nav-link {
	position: relative;
	padding: 5px 0 !important;
	display: inline-block;
}
.nav-item:after{
	position: absolute;
	bottom: -5px;
	left: 0;
	width: 100%;
	height: 2px;
	content: '';
	background-color: #5720aa;
	opacity: 0;
    transition: all 200ms linear;
}
.nav-item:hover:after{
	bottom: 0;
	opacity: 1;
}
.nav-item.active:hover:after{
	opacity: 0;
}
.nav-item{
	position: relative;
    transition: all 200ms linear;
}

/* #Primary style
================================================== */

.bg-light {
	background-color: #fff !important;
    transition: all 200ms linear;
}
.section {
    position: relative;
	width: 100%;
	display: block;
}
.full-height {
    height: 100vh;
}
.over-hide {
    overflow: hidden;
}
.absolute-center {
	position: absolute;
	top: 50%;
	left: 0;
	width: 100%;
  margin-top: 40px;
	transform: translateY(-50%);
	z-index: 20;
}
h1{
	font-size: 48px;
	line-height: 1.2;
	font-weight: 700;
	color: #212112;
	text-align: center;
}
p{
	text-align: center;
	margin: 0;
	padding-top: 10px;
	opacity: 1;
	transform: translate(0);
    transition: all 300ms linear;
    transition-delay: 1700ms;
}
body.hero-anime p{
	opacity: 0;
	transform: translateY(40px);
    transition-delay: 1700ms;
}
h1 span{
	display: inline-block;
    transition: all 300ms linear;
	opacity: 1;
	transform: translate(0);
}
body.hero-anime h1 span:nth-child(1){
	opacity: 0;
	transform: translateY(-20px);
}
body.hero-anime h1 span:nth-child(2){
	opacity: 0;
	transform: translateY(-30px);
}
body.hero-anime h1 span:nth-child(3){
	opacity: 0;
	transform: translateY(-50px);
}
body.hero-anime h1 span:nth-child(4){
	opacity: 0;
	transform: translateY(-10px);
}
body.hero-anime h1 span:nth-child(5){
	opacity: 0;
	transform: translateY(-50px);
}
body.hero-anime h1 span:nth-child(6){
	opacity: 0;
	transform: translateY(-20px);
}
body.hero-anime h1 span:nth-child(7){
	opacity: 0;
	transform: translateY(-40px);
}
body.hero-anime h1 span:nth-child(8){
	opacity: 0;
	transform: translateY(-10px);
}
body.hero-anime h1 span:nth-child(9){
	opacity: 0;
	transform: translateY(-30px);
}
body.hero-anime h1 span:nth-child(10){
	opacity: 0;
	transform: translateY(-20px);
}
h1 span:nth-child(1){
    transition-delay: 1000ms;
}
h1 span:nth-child(2){
    transition-delay: 700ms;
}
h1 span:nth-child(3){
    transition-delay: 900ms;
}
h1 span:nth-child(4){
    transition-delay: 800ms;
}
h1 span:nth-child(5){
    transition-delay: 1000ms;
}
h1 span:nth-child(6){
    transition-delay: 700ms;
}
h1 span:nth-child(7){
    transition-delay: 900ms;
}
h1 span:nth-child(8){
    transition-delay: 800ms;
}
h1 span:nth-child(9){
    transition-delay: 600ms;
}
h1 span:nth-child(10){
    transition-delay: 700ms;
}
body.hero-anime h1 span:nth-child(11){
	opacity: 0;
	transform: translateY(30px);
}
body.hero-anime h1 span:nth-child(12){
	opacity: 0;
	transform: translateY(50px);
}
body.hero-anime h1 span:nth-child(13){
	opacity: 0;
	transform: translateY(20px);
}
body.hero-anime h1 span:nth-child(14){
	opacity: 0;
	transform: translateY(30px);
}
body.hero-anime h1 span:nth-child(15){
	opacity: 0;
	transform: translateY(50px);
}
h1 span:nth-child(11){
    transition-delay: 1300ms;
}
h1 span:nth-child(12){
    transition-delay: 1500ms;
}
h1 span:nth-child(13){
    transition-delay: 1400ms;
}
h1 span:nth-child(14){
    transition-delay: 1200ms;
}
h1 span:nth-child(15){
    transition-delay: 1450ms;
}
#switch,
#circle {
	cursor: pointer;
	-webkit-transition: all 300ms linear;
	transition: all 300ms linear; 
} 
#switch {
	width: 60px;
	height: 8px;
	border: 2px solid #5720aa;
	border-radius: 27px;
	background: #000;
	position: relative;
	display: block;
	margin: 0 auto;
	text-align: center;
	opacity: 1;
	transform: translate(0);
    transition: all 300ms linear;
    transition-delay: 1900ms;
}
body.hero-anime #switch{
	opacity: 0;
	transform: translateY(40px);
    transition-delay: 1900ms;
}
#circle {
	position: absolute;
	top: -11px;
	left: -13px;
	width: 26px;
	height: 26px;
	border-radius: 50%;
	background: #000;
}
.switched {
	border-color: #000 !important;
	background: #5720aa !important;
}
.switched #circle {
	left: 43px;
	box-shadow: 0 4px 4px rgba(26,53,71,0.25), 0 0 0 1px rgba(26,53,71,0.07);
	background: #fff;
}
.nav-item .dropdown-menu {
    transform: translate3d(0, 10px, 0);
    visibility: hidden;
    opacity: 0;
	max-height: 0;
    display: block;
	padding: 0;
	margin: 0;
    transition: all 200ms linear;
}
.nav-item.show .dropdown-menu {
    opacity: 1;
    visibility: visible;
	max-height: 999px;
    transform: translate3d(0, 0px, 0);
}
.dropdown-menu {
	padding: 10px!important;
	margin: 0;
	font-size: 13px;
	letter-spacing: 1px;
	color: #212121;
	background-color: #fcfaff;
	border: none;
	border-radius: 3px;
	box-shadow: 0 5px 10px 0 rgba(138, 155, 165, 0.15);
    transition: all 200ms linear;
}
.dropdown-toggle::after {
	display: none;
}

.dropdown-item {
	padding: 3px 15px;
	color: #212121;
	border-radius: 2px;
    transition: all 200ms linear;
}
.dropdown-item:hover, 
.dropdown-item:focus {
	color: #fff;
	background-color: #5720aa;
}

body.dark{
	color: #fff;
	background-color: #1f2029;
}
body.dark .navbar-brand img{
  filter: brightness(100%);
}
body.dark h1{
	color: #fff;
}
body.dark h1 span{
    transition-delay: 0ms !important;
}
body.dark p{
	color: #fff;
    transition-delay: 0ms !important;
}
body.dark .bg-light {
	background-color: #14151a !important;
}
body.dark .start-header {
	box-shadow: 0 10px 30px 0 rgba(0, 0, 0, 0.15);
}
body.dark .start-header.scroll-on {
	box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.15);
}
body.dark .nav-link{
	color: #fff !important;
}
body.dark .nav-item.active .nav-link{
	color: #999 !important;
}
body.dark .dropdown-menu {
	color: #fff;
	background-color: #1f2029;
	box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.25);
}
body.dark .dropdown-item {
	color: #fff;
}
body.dark .navbar-light .navbar-toggler-icon {
	border-bottom: 1px solid #fff;
}
body.dark .navbar-light .navbar-toggler-icon:after, 
body.dark .navbar-light .navbar-toggler-icon:before{
	background-color: #fff;
}
body.dark .navbar-toggler[aria-expanded="true"] .navbar-toggler-icon {
	border-color: transparent;
}

footer {
   box-shadow: 0 26px 32px 0 rgb(0 0 0 / 15%), 0 58px 32px 64px rgb(0 0 0 / 10%);
}

footer > .section {
   display: flex;
   font-size: 1.25rem;
   justify-content: center;
   align-items: center;
}


/* #Media
================================================== */

@media (max-width: 767px) { 
	h1{
		font-size: 38px;
	}
	.nav-item:after{
		display: none;
	}
	.nav-item::before {
		position: absolute;
		display: block;
		top: 15px;
		left: 0;
		width: 11px;
		height: 1px;
		content: "";
		border: none;
		background-color: #000;

	}
	.dropdown-toggle::after {
		position: absolute;
		display: block;
		top: 10px;
		left: -23px;
		width: 1px;
		height: 11px;
		content: "";
		border: none;
		background-color: #000;

		transition: all 200ms linear;
	}
	.dropdown-toggle[aria-expanded="true"]::after{
		transform: rotate(90deg);
		opacity: 0;
	}
	.dropdown-menu {
		padding: 0 !important;
		background-color: transparent;
		box-shadow: none;
		transition: all 200ms linear;
	}
	.dropdown-toggle[aria-expanded="true"] + .dropdown-menu {
		margin-top: 10px !important;
		margin-bottom: 20px !important;
	}
	body.dark .nav-item::before {
		background-color: #fff;
	}
	body.dark .dropdown-toggle::after {
		background-color: #fff;
	}
	body.dark .dropdown-menu {
		background-color: transparent;
		box-shadow: none;
	}
}

/* #Link to page
================================================== */

.logo {
	position: absolute;
	bottom: 30px;
	right: 30px;
	display: block;
	z-index: 100;
	transition: all 250ms linear;
}
.logo img {
	height: 26px;
	width: auto;
	display: block;
  filter: brightness(10%);
	transition: all 250ms linear;
}
body.dark .logo img {
  filter: brightness(100%);
}

.nav-link {
   font-size: 1.125rem;
}

.nav-link,
.dropdown-item {
}

.dropdown-item {
	text-transform: uppercase;
   font-weight: bold
}
.main-sec-indinaus {
   margin-top: 4.45%
}
</style>
<meta charset='utf-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<meta name='viewport' content='width=device-width, initial-scale=1'>

@yield('css')
   
    
</head>

    <body class="hero-anime">	

        <div class="navigation-wrap bg-light start-header start-style">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <nav class="navbar navbar-expand-md navbar-light">
                            
                            <div class="wrapper">
                              
                               <h3><a href="/" style="text-decoration: none">Indinaus</a></h3>
                                
                            </div>
                     
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ml-auto py-4 py-md-0">
                                    <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 active">
                                       <a class="nav-link" href="/">Home</a>
                                    </li>
                                    <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 ">
                                       <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">User</a>
                                       <div class="dropdown-menu">
                                           <a class="dropdown-item" href="#">Profile</a>
                                           <a class="dropdown-item" href="/login">Sign In/Up</a>
                                           <a class="dropdown-item" href="#">Logout</a>
                                       </div>
                                   </li>
                                    <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                        <a class="nav-link" href="#">About Us</a>
                                    </li>
                                    <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                        <a class="nav-link" href="#">Contact</a>
                                    </li>
                                </ul>
                            </div>
                            
                        </nav>		
                    </div>
                </div>
            </div>
        </div>
        
        <div class="main-sec-indinaus">
         @yield('body')
        </div>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
         <script   ript src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script>
        (function($) { "use strict";

	$(function() {
		var header = $(".start-style");
		$(window).scroll(function() {    
			var scroll = $(window).scrollTop();
		
			if (scroll >= 10) {
				header.removeClass('start-style').addClass("scroll-on");
			} else {
				header.removeClass("scroll-on").addClass('start-style');
			}
		});
	});		
		
	//Animation
	
	$(document).ready(function() {
		$('body.hero-anime').removeClass('hero-anime');
	});

		
	$('body').on('mouseenter mouseleave','.nav-item',function(e){
			if ($(window).width() > 750) {
				var _d=$(e.target).closest('.nav-item');_d.addClass('show');
				setTimeout(function(){
				_d[_d.is(':hover')?'addClass':'removeClass']('show');
				},1);
			}
	});	
		
	$("#switch").on('click', function () {
		if ($("body").hasClass("dark")) {
			$("body").removeClass("dark");
			$("#switch").removeClass("switched");
		}
		else {
			$("body").addClass("dark");
			$("#switch").addClass("switched");
		}
	});  
	
  })(jQuery);
        </script>
   @yield('js')
   <footer style="padding: 2em;background: #fff;z-index: 999 !important;position: fixed;bottom: 0;left: 0;right: 0;display: flex;justify-content: space-between;align-items: center;">
      <div class="section"><a href="/">Indinaus</a></div>
      <div class="section">Copyright &copy; &nbsp; <a href="/"> Indianus.com</a> &nbsp; (2021-2021)</div>
    </footer>
</body>
</html>
