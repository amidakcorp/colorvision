<?php
$string =  '<!doctype html>'.
'<html lang="en">'.
'	<head>'.
'		<title>ColorVision Cosmetics</title>'.
'		<meta charset="utf-8">'.
'		<meta name="viewport" content="width=device-width, initial-scale=1">'.
'		<link rel="stylesheet" href="css/bootstrap.min.css">'.
'		<link rel="shortcut icon" href="icons/favicon.png">'.
'		<link href="icons/themify-icons/themify-icons.css" rel="stylesheet">'.
'		<link href="css/style.css" rel="stylesheet">'.
'		<link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">'.
'	</head>'.
'	<body onload="myFunction()">'.
'		<!--spinner loader-->'.
'		<div id="sk-circle" class="sk-circle">'.
'		  <div class="sk-circle1 sk-child"></div>'.
'		  <div class="sk-circle2 sk-child"></div>'.
'		  <div class="sk-circle3 sk-child"></div>'.
'		  <div class="sk-circle4 sk-child"></div>'.
'		  <div class="sk-circle5 sk-child"></div>'.
'		  <div class="sk-circle6 sk-child"></div>'.
'		  <div class="sk-circle7 sk-child"></div>'.
'		  <div class="sk-circle8 sk-child"></div>'.
'		  <div class="sk-circle9 sk-child"></div>'.
'		  <div class="sk-circle10 sk-child"></div>'.
'		  <div class="sk-circle11 sk-child"></div>'.
'		  <div class="sk-circle12 sk-child"></div>'.
'		</div>'.
'		<!--end spinner loader-->'.
'		<div id="catalog" class="container-fluid animate-bottom">'.
'			<div class="row">'.
'				<!--utility bar-->'.
'				<nav class="navbar navbar-fixed-left navbar-minimal animate">'.
'					<div class="navbar-toggler animate">'.
'						<span class="menu-icon ti-plus icon-color"></span>'.
'					</div>'.
'					<ul class="navbar-menu animate">'.
'						<li>'.
'							<a id="Home" class="animate" href="index.php">'.
'								<span class="ti-home icon-color"></span>'.
'							</a>'.
'						</li>'.
'						<li>'.
'							<a id="zoomIn" class="animate">'.
'								<span class="ti-plus icon-color"></span>'.
'							</a>'.
'						</li>'.
'						<li>'.
'							<a id="zoomOut" class="animate">'.
'								<span class="ti-minus icon-color"></span>'.
'							</a>'.
'						</li>'.
'						<li>'.
'							<a data-toggle="tooltip" data-placement="right" title="open eyes" class="animate activefront">'.
'								<span class="ti-angle-up icon-color"></span>'.
'							</a>'.
'						</li>'.
'						<li>'.
'							<a data-toggle="tooltip" data-placement="right" title="close eyes" class="animate activeside">'.
'								<span class="ti-angle-down icon-color"></span>'.
'							</a>'.
'						</li>'.
'					</ul>'.
'				</nav>'.
'				<!--end utility bar-->'.
'				<!--left column-->'.
'				<!--empty view box-->'.
'				<div class="box-view"></div>'.
'				<!--front-view-->'.
'				<div id="desk-sx" class="front-view col-sm-12 col-md-8 tail">'.
'					<img src="img/background-open.jpg" alt="" class="img-responsive"/>'.
'					<img id="lip" src="img/lip-coral-open.png" alt="" class="img-responsive"/>'.
'					<img id="eye" src="img/eyeshadow-aqua-open.png" alt="" class="img-responsive"/>'.
'					<img id="highlighter" src="img/highlighter-cipria-open.png" alt="" class="img-responsive"/>'.
'				</div>'.
'				<!--side-view-->'.
'				<div id="desk-sx-side" class="side-view col-sm-12 col-md-8 tail">'.
'					<img src="img/background-close.jpg" alt="" class="img-responsive"/>'.
'					<img id="lip-side" src="img/lip-coral-close.png" alt="" class="img-responsive"/>'.
'					<img id="eye-side" src="img/eyeshadow-aqua-close.png" alt="" class="img-responsive"/>'.
'					<img id="highlighter-side" src="img/highlighter-cipria-close.png" alt="" class="img-responsive"/>'.
'				</div>'.
'				<!--end left column-->'.
'				<!--right column-->'.
'				<div id="desk-dx" class="col-sm-12 col-md-4">'.
'					<div id="desk-dx-top" class="col-sm-12 catalog">'.
'						<div id="mySidenav-13" class="sidenav-13">'.
'							<div class="top-logo col-xs-12">'.
'								<img class="logo image-responsive" alt="" src="img/logo.png"/>'.
'							</div>					'.
'							<div onclick="closeNav13()" class="top-nav push-active col-xs-6">'.
'								<span class="ti-angle-left"></span><span class="tab-space">Back</span>'.
'							</div>	'.
'							<div class="top-nav-name col-xs-12" data-toggle="collapse">'.
'								<span>New Arrivals</span>'.
'							</div>'.
'							<div data-toggle="tooltip" title="Too Faced" class="col-xs-6 product-tail frame">'.
'								<img class="image-responsive" alt="" src="img/product-1.jpg"/>'.
'							</div>'.
'							<div data-toggle="tooltip" title="Urban Decay" class="col-xs-6 product-tail frame">'.
'								<img class="image-responsive" alt="" src="img/product-2.jpg"/>'.
'							</div>'.
'							<div data-toggle="tooltip" title="Natasha Denona" class="col-xs-6 product-tail frame">'.
'								<img class="image-responsive" alt="" src="img/product-3.jpg"/>'.
'							</div>'.
'							<div data-toggle="tooltip" title="Huda Beauty" class="col-xs-6 product-tail frame">'.
'								<img class="image-responsive" alt="" src="img/product-4.jpg"/>'.
'							</div>'.
'							<div data-toggle="tooltip" title="Hourglass" class="col-xs-6 product-tail frame">'.
'								<img class="image-responsive" alt="" src="img/product-5.jpg"/>'.
'							</div>'.
'							<div data-toggle="tooltip" title="Nars" class="col-xs-6 product-tail frame">'.
'								<img class="image-responsive" alt="" src="img/product-6.jpg"/>'.
'							</div>'.
'							<div data-toggle="tooltip" title="Jacob Beauty" class="col-xs-6 product-tail frame">'.
'								<img class="image-responsive" alt="" src="img/product-7.jpg"/>'.
'							</div>'.
'							<div data-toggle="tooltip" title="Cake Pencil" class="col-xs-6 product-tail frame">'.
'								<img class="image-responsive" alt="" src="img/product-8.jpg"/>'.
'							</div>'.
'						</div>'.
'						<div id="mySidenav" class="sidenav">'.
'							<div class="top-logo col-xs-12">'.
'								<img class="logo image-responsive" alt="" src="img/logo.png"/>'.
'							</div>'.
'							<div class="top-banner col-xs-12">'.
'								<img class="banner image-responsive" alt="" src="img/banner.jpg"/>'.
'							</div>'.
'							<div id="product" onclick="openNav13()" class="top-nav-name col-xs-12" data-toggle="collapse">'.
'								<span>Products</span>'.
'							</div>'.
'							<div onclick="openNav7()" class="top-nav push-active col-xs-12">'.
'								<span>Checkout</span>'.
'							</div>'.
'							<ul class="list-group row">'.
'								<li onclick="openNav()" class="list-group-item col-xs-12">'.
'									<span class="chat-img pull-left">'.
'										<img width="50" class="img-responsive" alt="" src="icons/icon-1.svg">'.
'									</span>'.
'									<span>Eyeshadow</span>'.
'									<span class="tab-space"></span><span class="ti-angle-right"></span>'.
'								</li>'.
'								<li onclick="openNav3()" class="list-group-item col-xs-12">'.
'									<span class="chat-img pull-left">'.
'										<img width="50" class="img-responsive" alt="" src="icons/icon-2.svg">'.
'									</span>'.
'									<span>Lipstick</span>'.
'									<span class="tab-space"></span><span class="ti-angle-right"></span>'.
'								</li>								'.
'								<li onclick="openNav4()" class="list-group-item col-xs-12">'.
'									<span class="chat-img pull-left">'.
'										<img width="50" class="img-responsive" alt="" src="icons/icon-3.svg">'.
'									</span>'.
'									<span>Highlighter</span>'.
'								<span class="tab-space"></span><span class="ti-angle-right"></span>'.
'								</li>		'.
'							</ul>'.
'						</div>'.
'						<div id="mySidenav-2" class="sidenav-2">'.
'							<div onclick="closeNav()" class="top-nav push col-xs-6">'.
'								<span class="ti-angle-left"></span><span class="tab-space"></span>'.
'								<span>eyeshadow</span>'.
'							</div>'.
'							<div onclick="openNav7()" class="top-nav push-active col-xs-6">'.
'								<span>Checkout</span>'.
'							</div>'.
'							<ul class="list-group row">'.
'								<li onclick="document.getElementById(\'eye\').src=\'img/eyeshadow-aqua-open.png\', document.getElementById(\'eye-side\').src=\'img/eyeshadow-aqua-close.png\'" class="text list-group-item col-xs-12 activex select-1"  id=\'price1-1\' data-price="25" data-code="aqua 2164671">'.
'									<span class="chat-img pull-left"><img class="img-rounded img-responsive" width="50" alt="" src="img/img-eye-aqua.jpg"></span>'.
'									aqua<span class="tab-space"></span><span class="ti-pencil"></span>'.
'								</li>'.
'								<li onclick="document.getElementById(\'eye\').src=\'img/eyeshadow-azure-open.png\', document.getElementById(\'eye-side\').src=\'img/eyeshadow-azure-close.png\'" class="text list-group-item col-xs-12 select-1" id=\'price1-2\' data-price="30" data-code="azure 2164676">'.
'									<span class="chat-img pull-left"><img class="img-rounded img-responsive" width="50" alt="" src="img/img-eye-azure.jpg"></span>'.
'									azure<span class="tab-space"></span><span class="ti-pencil"></span>'.
'								</li>'.
'								<li onclick="document.getElementById(\'eye\').src=\'img/eyeshadow-berry-open.png\', document.getElementById(\'eye-side\').src=\'img/eyeshadow-berry-close.png\'" class="text list-group-item col-xs-12 select-1" id=\'price1-3\' data-price="20" data-code="berry 2164675">'.
'									<span class="chat-img pull-left"><img class="img-rounded img-responsive" width="50" alt="" src="img/img-eye-berry.jpg"></span>'.
'									berry<span class="tab-space"></span><span class="ti-pencil"></span>'.
'								</li>'.
'								<li onclick="document.getElementById(\'eye\').src=\'img/eyeshadow-cipria-open.png\', document.getElementById(\'eye-side\').src=\'img/eyeshadow-cipria-close.png\'" class="text list-group-item col-xs-12 select-1" id=\'price1-4\' data-price="40" data-code="cipria 2474678">'.
'									<span class="chat-img pull-left"><img class="img-rounded img-responsive" width="50" alt="" src="img/img-eye-cipria.jpg"></span>'.
'									cipria<span class="tab-space"></span><span class="ti-pencil"></span>'.
'								</li>'.
'								<li onclick="document.getElementById(\'eye\').src=\'img/eyeshadow-fucsia-open.png\', document.getElementById(\'eye-side\').src=\'img/eyeshadow-fucsia-close.png\'" class="text list-group-item col-xs-12 select-1" id=\'price1-5\' data-price="25" data-code="fucsia 2154661">'.
'									<span class="chat-img pull-left"><img class="img-rounded img-responsive" width="50" alt="" src="img/img-eye-fucsia.jpg"></span>'.
'									fucsia<span class="tab-space"></span><span class="ti-pencil"></span>'.
'								</li>'.
'								<li onclick="document.getElementById(\'eye\').src=\'img/eyeshadow-golden-open.png\', document.getElementById(\'eye-side\').src=\'img/eyeshadow-golden-close.png\'" class="text list-group-item col-xs-12 select-1" id=\'price1-6\' data-price="40" data-code="golden 2364647">'.
'									<span class="chat-img pull-left"><img class="img-rounded img-responsive" width="50" alt="" src="img/img-eye-golden.jpg"></span>'.
'									golden<span class="tab-space"></span><span class="ti-pencil"></span>'.
'								</li>'.
'								<li onclick="document.getElementById(\'eye\').src=\'img/eyeshadow-green-open.png\', document.getElementById(\'eye-side\').src=\'img/eyeshadow-green-close.png\'" class="text list-group-item col-xs-12 select-1" id=\'price1-7\' data-price="30" data-code="green 5556786">'.
'									<span class="chat-img pull-left"><img class="img-rounded img-responsive" width="50" alt="" src="img/img-eye-green.jpg"></span>'.
'									green<span class="tab-space"></span><span class="ti-pencil"></span>'.
'								</li>'.
'								<li onclick="document.getElementById(\'eye\').src=\'img/eyeshadow-red-open.png\', document.getElementById(\'eye-side\').src=\'img/eyeshadow-red-close.png\'" class="text list-group-item col-xs-12 select-1" id=\'price1-8\' data-price="20" data-code="red 4568235">'.
'									<span class="chat-img pull-left"><img class="img-rounded img-responsive" width="50" alt="" src="img/img-eye-red.jpg"></span>'.
'									red<span class="tab-space"></span><span class="ti-pencil"></span>'.
'								</li>				'.
'								<li onclick="document.getElementById(\'eye\').src=\'img/eyeshadow-smoke-open.png\', document.getElementById(\'eye-side\').src=\'img/eyeshadow-smoke-close.png\'" class="text list-group-item col-xs-12 select-1" id=\'price1-9\' data-price="25" data-code="smoke 3459723">'.
'									<span class="chat-img pull-left"><img class="img-rounded img-responsive" width="50" alt="" src="img/img-eye-smoke.jpg"></span>'.
'									smoke<span class="tab-space"></span><span class="ti-pencil"></span>'.
'								</li>	'.
'								<li onclick="document.getElementById(\'eye\').src=\'img/eyeshadow-violet.png\', document.getElementById(\'eye-side\').src=\'img/eyeshadow-violet-close.png\'" class="text list-group-item col-xs-12 select-1" id=\'price1-10\' data-price="20" data-code="violet 4562189">'.
'									<span class="chat-img pull-left"><img class="img-rounded img-responsive" width="50" alt="" src="img/img-eye-violet.jpg"></span>'.
'									violet<span class="tab-space"></span><span class="ti-pencil"></span>'.
'								</li>'.
'							</ul>'.
'						</div>'.
'						<div id="mySidenav-3" class="sidenav-3">'.
'							<div onclick="closeNav3()" class="top-nav push col-xs-6">'.
'								<span class="ti-angle-left"></span><span class="tab-space"></span>'.
'								<span>lipstick</span>'.
'							</div>'.
'							<div onclick="openNav7()" class="top-nav push-active col-xs-6">'.
'								<span>buy your makeup</span>'.
'							</div>'.
'							<ul class="list-group row">'.
'								<li onclick="document.getElementById(\'lip\').src=\'img/lip-coral-open.png\', document.getElementById(\'lip-side\').src=\'img/lip-coral-close.png\'" class="text list-group-item col-xs-12 activex select-2" id=\'price2-1\' data-price="20" data-code="strawberry 4568233">'.
'									<span class="chat-img pull-left">'.
'										<img class="img-rounded img-responsive" width="50" alt="" src="img/img-lip-coral.jpg">'.
'									</span>'.
'									strawberry kissed<span class="tab-space"></span><span class="ti-pencil"></span>'.
'								</li>'.
'								<li onclick="document.getElementById(\'lip\').src=\'img/lip-berry-open.png\', document.getElementById(\'lip-side\').src=\'img/lip-berry-close.png\'" class="text list-group-item col-xs-12 select-2" id=\'price2-2\' data-price="30" data-code="endless-purple 1248452">'.
'									<span class="chat-img pull-left">'.
'										<img class="img-rounded img-responsive" width="50" alt="" src="img/img-lip-berry.jpg">'.
'									</span>'.
'									endless purple<span class="tab-space"></span><span class="ti-pencil"></span>'.
'								</li>'.
'								<li onclick="document.getElementById(\'lip\').src=\'img/lip-azure-open.png\', document.getElementById(\'lip-side\').src=\'img/lip-azure-close.png\'" class="text list-group-item col-xs-12 select-2" id=\'price2-3\' data-price="40" data-code="violet-vertigo 84939830">'.
'									<span class="chat-img pull-left">'.
'										<img class="img-rounded img-responsive" width="50" alt="" src="img/img-lip-azure.jpg">'.
'									</span>'.
'									 violet vertigo<span class="tab-space"></span><span class="ti-pencil"></span>'.
'								</li>'.
'								<li onclick="document.getElementById(\'lip\').src=\'img/lip-cipria-open.png\', document.getElementById(\'lip-side\').src=\'img/lip-cipria-close.png\'" class="text list-group-item col-xs-12 select-2" id=\'price2-4\' data-price="50" data-code="cinder-rose 3455623">'.
'									<span class="chat-img pull-left">'.
'										<img class="img-rounded img-responsive" width="50" alt="" src="img/img-lip-cipria.jpg">'.
'									</span>'.
'									cinder rose <span class="tab-space"></span><span class="ti-pencil"></span>'.
'								</li>'.
'								<li onclick="document.getElementById(\'lip\').src=\'img/lip-glam-open.png\', document.getElementById(\'lip-side\').src=\'img/lip-glam-close.png\'" class="text list-group-item col-xs-12 select-2" id=\'price2-5\' data-price="50" data-code="cherry-moon 9834567">'.
'									<span class="chat-img pull-left">'.
'										<img class="img-rounded img-responsive" width="50" alt="" src="img/img-lip-glam.jpg">'.
'									</span>'.
'									 cherry moon<span class="tab-space"></span><span class="ti-pencil"></span>'.
'								</li>'.
'								<li onclick="document.getElementById(\'lip\').src=\'img/lip-green-open.png\', document.getElementById(\'lip-side\').src=\'img/lip-green-close.png\'" class="text list-group-item col-xs-12 select-2" id=\'price2-5\' data-price="50" data-code="stone-blue 4958903">'.
'									<span class="chat-img pull-left">'.
'										<img class="img-rounded img-responsive" width="50" alt="" src="img/img-lip-green.jpg">'.
'									</span>'.
'									stone blue<span class="tab-space"></span><span class="ti-pencil"></span>'.
'								</li>'.
'								<li onclick="document.getElementById(\'lip\').src=\'img/lip-lemon-open.png\', document.getElementById(\'lip-side\').src=\'img/lip-lemon-close.png\'" class="text list-group-item col-xs-12 select-2" id=\'price2-5\' data-price="50" data-code="pink-peony 4943450">'.
'									<span class="chat-img pull-left">'.
'										<img class="img-rounded img-responsive" width="50" alt="" src="img/img-lip-lemon.jpg">'.
'									</span>'.
'									pink peony<span class="tab-space"></span><span class="ti-pencil"></span>'.
'								</li>'.
'								<li onclick="document.getElementById(\'lip\').src=\'img/lip-pink-open.png\', document.getElementById(\'lip-side\').src=\'img/lip-pink-close.png\'" class="text list-group-item col-xs-12 select-2" id=\'price2-5\' data-price="50" data-code="sweet raspberry 3576203">'.
'									<span class="chat-img pull-left">'.
'										<img class="img-rounded img-responsive" width="50" alt="" src="img/img-lip-pink.jpg">'.
'									</span>'.
'									sweet raspberry<span class="tab-space"></span><span class="ti-pencil"></span>'.
'								</li>'.
'								<li onclick="document.getElementById(\'lip\').src=\'img/lip-red-open.png\', document.getElementById(\'lip-side\').src=\'img/lip-red-close.png\'" class="text list-group-item col-xs-12 select-2" id=\'price2-5\' data-price="50" data-code="chili-pepper 0934712">'.
'									<span class="chat-img pull-left">'.
'										<img class="img-rounded img-responsive" width="50" alt="" src="img/img-lip-red.jpg">'.
'									</span>'.
'									chili pepper<span class="tab-space"></span><span class="ti-pencil"></span>'.
'								</li>'.
'								<li onclick="document.getElementById(\'lip\').src=\'img/lip-smoke-open.png\', document.getElementById(\'lip-side\').src=\'img/lip-smoke-close.png\'" class="text list-group-item col-xs-12 select-2" id=\'price2-5\' data-price="50" data-code="black.cherry 8674362">'.
'									<span class="chat-img pull-left">'.
'										<img class="img-rounded img-responsive" width="50" alt="" src="img/img-lip-smoke.jpg">'.
'									</span>'.
'									black Cherry<span class="tab-space"></span><span class="ti-pencil"></span>'.
'								</li>'.
'								<li onclick="document.getElementById(\'lip\').src=\'img/lip-violet-open.png\', document.getElementById(\'lip-side\').src=\'img/lip-violet-close.png\'" class="text list-group-item col-xs-12 select-2" id=\'price2-5\' data-price="50" data-code="tender-love 0192845">'.
'									<span class="chat-img pull-left">'.
'										<img class="img-rounded img-responsive" width="50" alt="" src="img/img-lip-violet.jpg">'.
'									</span>'.
'									tender love<span class="tab-space"></span><span class="ti-pencil"></span>'.
'								</li>'.
'							</ul>'.
'						</div>'.
'						<div id="mySidenav-4" class="sidenav-4">         '.
'							<div onclick="closeNav4()" class="top-nav push col-xs-6">'.
'								<span class="ti-angle-left"></span><span class="tab-space"></span>'.
'								<span>highlighter</span>'.
'							</div>'.
'							<div onclick="openNav7()" class="top-nav push-active col-xs-6">'.
'								<span>buy your makeup</span>'.
'							</div>'.
'							<ul class="list-group row">'.
'								<li onclick="document.getElementById(\'highlighter\').src=\'img/highlighter-cipria-open.png\', document.getElementById(\'highlighter-side\').src=\'img/highlighter-cipria-close.png\'" class="text list-group-item col-xs-12 activex select-3" id=\'price3-1\' data-price="25" data-code="amenthyst 356522">'.
'									<span class="chat-img pull-left"><img class="img-rounded img-responsive" width="50" alt="" src="img/img-highlighter-cipria.jpg"></span>'.
'									amenthyst<span class="tab-space"></span><span class="ti-pencil"></span>'.
'								</li>'.
'								<li onclick="document.getElementById(\'highlighter\').src=\'img/highlighter-brown-open.png\', document.getElementById(\'highlighter-side\').src=\'img/highlighter-brown-close.png\'" class="text list-group-item col-xs-12 select-3" id=\'price3-2\' data-price="30" data-code="cocoa 4563257">'.
'									<span class="chat-img pull-left"><img class="img-rounded img-responsive" width="50" alt="" src="img/img-highlighter-brown.jpg"></span>'.
'									cocoa<span class="tab-space"></span><span class="ti-pencil"></span>'.
'								</li>'.
'								<li onclick="document.getElementById(\'highlighter\').src=\'img/highlighter-fucsia-open.png\', document.getElementById(\'highlighter-side\').src=\'img/highlighter-fucsia-close.png\'" class="text list-group-item col-xs-12 select-3" id=\'price3-3\' data-price="30" data-code="orchid 9745673">'.
'									<span class="chat-img pull-left"><img class="img-rounded img-responsive" width="50" alt="" src="img/img-highlighter-fucsia.jpg"></span>'.
'									orchid<span class="tab-space"></span><span class="ti-pencil"></span>'.
'								</li>'.
'								<li onclick="document.getElementById(\'highlighter\').src=\'img/highlighter-glow-open.png\', document.getElementById(\'highlighter-side\').src=\'img/highlighter-glow-close.png\'" class="text list-group-item col-xs-12 select-3" id=\'price3-4\' data-price="35" data-code="glow 4532678">'.
'									<span class="chat-img pull-left"><img class="img-rounded img-responsive" width="50" alt="" src="img/img-highlighter-glow.jpg"></span>'.
'									glow<span class="tab-space"></span><span class="ti-pencil"></span>'.
'								</li>'.
'								<li onclick="document.getElementById(\'highlighter\').src=\'img/highlighter-light-pink-open.png\', document.getElementById(\'highlighter-side\').src=\'img/highlighter-light-pink-close.png\'" class="text list-group-item col-xs-12 select-3" id=\'price3-5\' data-price="25" data-code="plum 1234563">'.
'									<span class="chat-img pull-left"><img class="img-rounded img-responsive" width="50" alt="" src="img/img-highlighter-pink.jpg"></span>'.
'									plum<span class="tab-space"></span><span class="ti-pencil"></span>'.
'								</li>'.
'							</ul>'.
'						</div>'.
'						<div id="mySidenav-7" class="sidenav-7">'.
'							<div onclick="closeNav7()" class="top-nav push-active col-xs-6">'.
'								<span class="ti-angle-left"></span><span class="tab-space"></span>'.
'								<span>Back</span>'.
'							</div>'.
'							<div class="top-nav col-xs-6">'.
'								<span>Summary</span>'.
'							</div>'.
'							<ul class="list-group row">'.
'								<li onclick="closeNav10()" class=" list-group-summary col-xs-8">'.
'									<span class="chat-img pull-left">'.
'										<span class="ti-pencil"></span><span class="tab-space"></span>'.
'									</span>'.
'										Color eyeshadow:<br>'.
'									<span class="list-group-code" id="code_3"></span>'.
'								</li>'.
'								<li onclick="closeNav10()" class=" list-group-item col-xs-4">'.
'									<p id=\'total\'>0.00 $</p>'.
'								</li>'.
'								<li onclick="closeNav11()" class="list-group-summary col-xs-8">'.
'									<span class="chat-img pull-left">'.
'										<span class="ti-pencil"></span><span class="tab-space"></span>'.
'									</span>'.
'										Color lipstick:<br>'.
'									<span class="list-group-code" id="code_2"></span>	'.
'								</li>'.
'								<li onclick="closeNav11()" class="list-group-item col-xs-4">'.
'									<p id=\'total_2\'>0.00 $</p>'.
'								</li>'.
'								<li onclick="closeNav14()" class="list-group-summary col-xs-8">'.
'									<span class="chat-img pull-left">'.
'										<span class="ti-pencil"></span><span class="tab-space"></span>'.
'									</span>'.
'										Color highlighter:<br>'.
'									<span class="list-group-code" id="code_1"></span>'.
'								</li>'.
'								<li onclick="closeNav14()" class="list-group-item col-xs-4">'.
'									<p id=\'total_3\'>0.00 $</p>'.
'								</li>'.
'								<li style="line-height:35px;" class="total list-group-summary col-xs-8">'.
'									<span class="chat-img pull-left">'.
'										<span class="ti-pencil-alt"></span><span class="tab-space"></span>'.
'									</span>'.
'									Total price:<br>'.
'								</li>'.
'								<li onclick="" class="total list-group-item col-xs-4">'.
'									<span class="pull-right" style="padding-left: 5px;">$</span><p id="count_tot" >0.00</p>'.
'								</li>'.
'							</ul>'.
'							<button class="top-nav-qty col-xs-2 push-counter quantity-left-minus btn btn-number" type="button" data-type="minus">'.
'								<span class="ti-minus"></span>'.
'							</button>'.
'							<div class="top-nav-qty col-xs-2">'.
'								<input type="text" id="quantity" name="quantity" class="form-control input-number" value="1">'.
'							</div>'.
'							<button class="top-nav-qty col-xs-2 push-counter quantity-right-plus btn btn-number" type="button" data-type="plus">'.
'								<span class="ti-plus"></span>'.
'							</button>'.
'							<div class="top-nav-qty col-xs-6 push-box" id=\'num_item_basket\'>'.
'								<span class="ti-package"></span><span class="tab-space"></span>'.
'								<span>add to box</span>'.
'							</div>'.
''.
''.
'							<div class="top-nav col-xs-6 push-active">'.
'								<span class="ti-location-arrow"></span><span class="tab-space"></span>'.
'								<span>select and pay</span>'.
'							</div>	'.
'						</div>'.
'					</div>					'.
'				</div>'.
'				<!--end right column-->'.
'			</div>'.
'		</div>'.
'		<script src="js/jquery.min.js"></script>'.
'		<script src="js/bootstrap.min.js"></script>'.
'		<script src="js/summary.js"></script>'.
'		<script src="js/views.js"></script>'.
'		<script src="js/navigation.js"></script>'.
'		<script src="js/utility.js"></script>'.
'	</body>	'.
'</html>';

 echo $string; 
?>