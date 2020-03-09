
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>HTA DIGITAL CAPITAL</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="HTA" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<?php include 'lang/common.php';?>

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="images/logo-2.png">

	<link href="https://fonts.googleapis.com/css?family=Roboto+Mono:300,400" rel="stylesheet">

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Simple Line Icons -->
	<link rel="stylesheet" href="css/simple-line-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Style -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/custom.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>


	<![endif]-->
<style>
@media screen and (max-width: 480px){
    .pic-row {
        margin-bottom: 1em;
    }
}
@media screen and (max-width: 765px){
		.lang-margin {
			margin-right: 0px !important;
		}
		#fh5co-header #navbar li a {
			height: 50px !important;
			line-height: 30px !important;
		}

}
#fh5co-header #navbar li .lang-hover:hover {
 background: none;
 color: #bb9f57 !important
}
.lang-img {
	width: 35px;
	border: 1px solid #c68e42;
	border-radius: 50px
}
li .lang-hover:hover img {
	cursor: pointer;
}
.lang-hover:hover {
	cursor: pointer;
}
.lang-margin {
	margin-right: 30px;
}
#fh5co-header #navbar .navbar-right {
	margin: 0
}
#fh5co-header #navbar li a {
	height: 65px;
	line-height: 30px;
}
#fh5co-header .navbar-brand {
	padding: 17.5px 15px;
	height: 65px;
	line-height: 30px
}
.background_55 .news {
	height: 380px
}
.background_55 .news1 {
	height: 380px
}
</style>
	</head>
	<body>
		<canvas id="nokey" class="nokey" width="1562" height="620" style="z-index: 99; position: fixed; top: 0; left: 0; width: 100%; background: #ffffff;">
		        Your Browser Don't Support Canvas, Please Download Chrome ^_^``
		</canvas>
	<header role="banner" id="fh5co-header">
		<div class="container">
			<div class="row">
				<nav class="navbar navbar-default navbar-fixed-top">
					<div class="navbar-header">
						<!-- Mobile Toggle Menu Button -->
						<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
						<a class="navbar-brand" href="index.php"><img src="images/logo-1.png" width="100"></a>
					</div>
					<div id="navbar" class="navbar-collapse collapse">
						<ul class="nav navbar-nav navbar-left">
							<li><a href="#" data-nav-section="home"><?php echo $lang['MB_1'];?></a></li>
							<li><a href="#" data-nav-section="bigtree"><?php echo $lang['MB_2'];?></a></li>
							<li><a href="#" data-nav-section="team"><?php echo $lang['MB_3'];?></a></li>
							<li><a href="#" data-nav-section="whitepaper"><?php echo $lang['MB_4'];?></a></li>
							<li><a href="#" data-nav-section="roadmap"><?php echo $lang['MB_5'];?></a></li>
							<li><a href="#" data-nav-section="news"><?php echo $lang['MB_6'];?></a></li>
							<li><a href="#" data-nav-section="zilian"><?php echo $lang['MB_7'];?></a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li>
								<a class="lang-hover" onclick="window.open('<?php (isset($_SERVER['HTTPS']) ? 'https' : 'http') . '://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]'?>?lang=zh','_self')">中文 <img src="images/zh.png" class="lang-img"></a>
							</li>
							<li>
								<a class="lang-hover" onclick="window.open('<?php (isset($_SERVER['HTTPS']) ? 'https' : 'http') . '://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]'?>?lang=en','_self')">EN <img src="images/en.png" class="lang-img lang-margin"></a>
							</li>
							<li style="background: #bb9f57">
								<a href="https://htawallet.io/login" onclick="window.open('https://www.htawallet.io' + location.search)" target="_blank" style="text-shadow: 0px 1px 2px grey; color: #1c1c1c ; font-weight: bold"><?php echo $lang['MB_8'];?></a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
	  </div>
	</header>

<div class="background_2 background_22 space1" data-section="home">
  <div class="container">
    <div class="row">
      <div class="col-md-12" style="background: #ffffff">
        <h1>DIGITAL CAPITAL</h1>
				<h4><?php echo $lang['HO_1'];?></h4>
        <p style="margin: 0"><?php echo $lang['HO_2'];?></p>
				<p class="whitepaper-button whitepaper-button1" style="border: 2px solid #59481a ; width: 150px ; padding:5px ; text-align: center; float:right; margin-bottom: 15px">
					<a href="hta-whitepaper-v3.2.pdf" target="_blank" style="color: #000">
						<i class="icon-download" style="vertical-align: middle; color: black"><br></i> <?php echo $lang['HO_3'];?>
					</a>
				</p>
			</div>
		</div>
    <div class="row">
      <div class="col-md-12">
        <img src="images/video-img.jpg" width="100%">
				<ul style="list-style: none; padding: 20px 0; font-size: 20px; text-align: right">
					<li class="top_li" onclick="$('#modal-1').modal('show');" style="color: #8f989f ; cursor: pointer">
						<i class="icon-wechat" aria-hidden="true"></i>
					</li>
					<li class="top_li">
						<a href="" style="color: #8f989f"><i class="icon-facebook" aria-hidden="true"></i></a>
					</li>
				</ul>
    	</div>
  	</div>
 	</div>
</div>

<div class="background_2 background_22 space" data-section="bigtree">
  <div class="container">
    <div class="row">
			<div class="col-md-12" style="background: #ffffff">
        <h1><span class="line"></span><span class="title">T</span> <?php echo $lang['B_1'];?></h1>
        <h4><?php echo $lang['B_2'];?></h4>
				<p><?php echo $lang['B_3'];?></p>
			</div>
	  </div>
    <div class="row" style="text-align:center; margin: 50px 0 ; background: white" >
      <div class="col-md-4 three_a">
				<div class="three_b">
					<img src="images/icon-1.png" width="30%">
				</div>
				<h4><?php echo $lang['B_4'];?></h4>
				<p><?php echo $lang['B_5'];?></p>
			</div>
			<div class="col-md-4 three_a">
				<div class="three_b">
					<img src="images/icon-2.png" width="30%">
				</div>
				<h4><?php echo $lang['B_6'];?></h4>
				<p><?php echo $lang['B_7'];?></p>
			</div>
			<div class="col-md-4 three_a">
				<div class="three_b">
					<img src="images/icon-3.png" width="30%">
				</div>
				<h4><?php echo $lang['B_8'];?></h4>
				<p><?php echo $lang['B_9'];?></p>
			</div>
    </div>
  </div>
</div>
<!-- MARKET -->
<div class="background_2 background_44 space" style="background:  ;">
  <div class="container">
    <div class="row">
			<div class="col-md-12">
        <h1><span class="line"></span><span class="title">M</span> <?php echo $lang['M_1'];?></h1>
			</div>
	  </div>
    <div class="row">
      <div class="col-md-12" style="text-align:center ; background: white">
				<img src="images/market.png" width="100%" style="margin: 0">
			</div>
		</div>
  </div>
</div>
<!-- SETTLE -->
<div class="background_2 settle space" style="background: white ;">
  <div class="container">
    <div class="row">
			<div class="col-md-12">
        <h1><span class="line"></span><span class="title">H</span> <?php echo $lang['S_1'];?></h1>
			</div>
	  </div>
    <div class="row" style="margin:50px 0">
      <div class="col-md-12">
			<div class="col-md-6">
				<h4><?php echo $lang['S_2'];?></h4>
				<ul>
					<li><p class="li-p"><?php echo $lang['S_3'];?></p></li>
					<li><p class="li-p"><?php echo $lang['S_4'];?></p></li>
					<li><p class="li-p"><?php echo $lang['S_5'];?></p></li>
				</ul>
			</div>
			<div class="col-md-6" style="text-align:center ;">
				<img src="images/settle.png" width="100%" style="margin: 0">
			</div>
			</div>
		</div>
  </div>
</div>
<!-- EFFECT -->
<div class="background_2 settle space" style="background:  ;">
  <div class="container">
    <div class="row">
			<div class="col-md-12">
        <h1><span class="line"></span><span class="title">A</span> <?php echo $lang['E_1'];?></h1>
			</div>
	  </div>
    <div class="row" style="margin:50px 0">
      <div class="col-md-12">
			<div class="col-md-6" style="background: #ffffff">
				<h4><?php echo $lang['E_2'];?></h4>
				<ul>
					<li><p class="li-p"><?php echo $lang['E_3'];?></p></li>
					<li><p class="li-p"><?php echo $lang['E_4'];?></p></li>
					<li><p class="li-p"><?php echo $lang['E_5'];?></p></li>
					<li><p class="li-p"><?php echo $lang['E_6'];?></p></li>
					<li><p class="li-p"><?php echo $lang['E_7'];?></p></li>
					<li><p class="li-p"><?php echo $lang['E_8'];?></p></li>
					<li><p class="li-p"><?php echo $lang['E_9'];?></p></li>
					<li><p class="li-p"><?php echo $lang['E_10'];?></p></li>
				</ul>
			</div>
			<div class="col-md-6" style="text-align:center">
				<img src="images/effect.png" width="100%" style="margin: 0">
			</div>
			</div>
		</div>
  </div>
</div>
<!-- INNOVATION -->
<div class="background_2 settle space" style="background: white ;">
  <div class="container">
    <div class="row">
			<div class="col-md-12">
        <h1><span class="line"></span><span class="title">C</span> <?php echo $lang['I_1'];?></h1>
			</div>
	  </div>
		<div class="row" style="margin:50px 0">
			<div class="col-md-12">
				<h2 style="font-weight: bold; color: #4a4947"><?php echo $lang['I_2'];?></h2>
				<div class="col-md-6 col-xs-12 no-padding">
					<img src="images/1.png" width="85" style="float: left ; margin: 0 5px 0 0">
					<p style="font-size:12px; margin: 0px 0"><?php echo $lang['I_3'];?><p>
				</div>
				<div class="col-md-6 col-xs-12 no-padding">
					<img src="images/2.png" width="85" style="float: left ; margin: 0 5px 0 0">
					<p style="font-size:12px; margin: 0px 0"><?php echo $lang['I_4'];?><p>
				</div>
			</div>
		</div>
		<div class="row" style="margin:50px 0">
			<div class="col-md-12">
				<h2 style="font-weight: bold; color: #4a4947"><?php echo $lang['I_5'];?></h2>
				<div class="col-md-6 col-xs-12 no-padding">
					<img src="images/3.png" width="85" style="float: left ; margin: 0 5px 0 0">
					<p style="font-size:12px; margin: 0px 0"><?php echo $lang['I_6'];?><p>
				</div>
				<div class="col-md-6 col-xs-12 no-padding">
					<img src="images/4.png" width="85" style="float: left ; margin: 0 5px 0 0">
					<p style="font-size:12px; margin: 0px 0"><?php echo $lang['I_7'];?><p>
				</div>
			</div>
		</div>
		<div class="row" style="margin:50px 0">
			<div class="col-md-12">
				<h2 style="font-weight: bold; color: #4a4947"><?php echo $lang['I_8'];?></h2>
				<div class="col-md-6 col-xs-12 no-padding">
					<img src="images/5.png" width="85" style="float: left ; margin: 0 5px 0 0">
					<p style="font-size:12px; margin: 0px 0"><?php echo $lang['I_9'];?><p>
				</div>
				<div class="col-md-6 col-xs-12 no-padding">
					<img src="images/6.png" width="85" style="float: left ; margin: 0 5px 0 0">
					<p style="font-size:12px; margin: 0px 0"><?php echo $lang['I_10'];?><p>
				</div>
			</div>
		</div>
  </div>
</div>
<!-- TEAM -->
<div class="background_2 background_33 space" data-section="team" style="background: ;">
  <div class="container">
    <div class="row">
			<div class="col-md-12">
        <h1><span class="line"></span><span class="title">T</span> <?php echo $lang['T_1'];?></h1>
			</div>
	  </div>
    <div class="row" style="text-align:center; margin: 50px 0">
			<div class="col-md-12">
				<h3 style="font-weight: 700 ; text-align: left ; margin:0 0 50px 35px"><?php echo $lang['T_2'];?></h3>
			<div class="col-md-3 col-xs-6 col-xxs-12 cl pic-row" style="background: #ffffff">
					<img src="images/team-2.jpg" width="80%" height="280">
					<div class="middle">
	    			<div class="text">
							<p class="cl-text">- <?php echo $lang['T_4'];?> <br>
								- <?php echo $lang['T_5'];?><br>
								- <?php echo $lang['T_6'];?><br>
								- <?php echo $lang['T_7'];?></p>
						</div>
	  			</div>
					<h4><?php echo $lang['T_3'];?></h4>
					<hr>
					<h4 style="margin-top: 0">蒋林（博士）</h4>
			</div>
			<div class="col-md-3 col-xs-6 col-xxs-12 cl pic-row" style="background: #ffffff">
					<img src="images/team-1.jpg" width="80%" height="280">
					<div class="middle">
	    			<div class="text">
							<p class="cl-text"><?php echo $lang['T_9'];?><br>
								<?php echo $lang['T_10'];?></p>
						</div>
	  			</div>
					<h4><?php echo $lang['T_8'];?></h4>
					<hr>
					<h4 style="margin-top: 0">钟元 Steve Chung</h4>
			</div>
			<div class="col-md-3 col-xs-6 col-xxs-12 cl pic-row" style="background: #ffffff">
					<img src="images/team-12.jpg" width="80%" height="280">
					<div class="middle">
	    			<div class="text">
							<p class="cl-text" style="text-align: justify">- <?php echo $lang['T_12'];?><br>
								- <?php echo $lang['T_13'];?><br>
								- <?php echo $lang['T_14'];?><br>
								- <?php echo $lang['T_15'];?><br>
								- <?php echo $lang['T_16'];?></p>
						</div>
	  			</div>
					<h4><?php echo $lang['T_11'];?></h4>
					<hr>
					<h4 style="margin-top: 0">刘肇麟</h4>
			</div>
			<div class="col-md-3 col-xs-6 col-xxs-12 cl pic-row" style="background: #ffffff">
					<img src="images/team-13.jpg" width="80%" height="280">
					<div class="middle">
						<div class="text">
							<p class="cl-text">- <?php echo $lang['T_18'];?><br>
								- <?php echo $lang['T_19'];?><br>
								- <?php echo $lang['T_20'];?><br>
								- <?php echo $lang['T_21'];?><br>
								- <?php echo $lang['T_22'];?></p>
						</div>
					</div>
				<h4><?php echo $lang['T_17'];?></h4>
				<hr>
				<h4 style="margin-top: 0">艾伯特.冯 Albert Foong</h4>
			</div>
			</div>
    </div>
		<div class="row" style="text-align:center; margin: 50px 0">
			<div class="col-md-12">
			<div class="col-md-3 col-xs-6 col-xxs-12 cl pic-row" style="background: #ffffff">
					<img src="images/zhuende.jpeg" width="80%" height="280">
					<div class="middle">
						<div class="text">
							<p class="cl-text">- <?php echo $lang['T_24'];?><br>
								- <?php echo $lang['T_25'];?><br>
								- <?php echo $lang['T_26'];?><br>
								- <?php echo $lang['T_27'];?></p>
						</div>
					</div>
				<h4><?php echo $lang['T_23'];?></h4>
				<hr>
				<h4 style="margin-top: 0">朱恩德（经济学教授）</h4>
			</div>
			<div class="col-md-3 col-xs-6 col-xxs-12 cl pic-row" style="background: #ffffff">
					<img src="images/team-14.jpg" width="80%" height="280">
					<div class="middle">
						<div class="text">
							<p class="cl-text">- <?php echo $lang['T_29'];?><br>
							-	<?php echo $lang['T_30'];?><br>
							-	<?php echo $lang['T_31'];?><br>
							-	<?php echo $lang['T_32'];?>
						</div>
					</div>
				<h4><?php echo $lang['T_28'];?></h4>
				<hr>
				<h4 style="margin-top: 0">葛乔乔</h4>
			</div>
    </div>
  </div>
		<div class="row" style="text-align:center; margin: 50px 0">
			<div class="col-md-12">
				<h3 style="font-weight: 700 ; text-align: left ; margin:0 0 50px 35px"><?php echo $lang['T_33'];?></h3>
				<div class="col-md-3 col-xs-6 col-xxs-12 cl pic-row" style="background: #ffffff">
						<img src="images/team-4.jpg" width="80%" height="280">
						<div class="middle">
		    			<div class="text">
								<p class="cl-text">- <?php echo $lang['T_35'];?><br>
									- <?php echo $lang['T_36'];?><br>
									- <?php echo $lang['T_37'];?><br>
									- <?php echo $lang['T_38'];?></p>
							</div>
		  			</div>
				<h4><?php echo $lang['T_34'];?></h4>
				<hr>
				<h4 style="margin-top: 0">陈相元</h4>
			</div>
			<div class="col-md-3 col-xs-6 col-xxs-12 cl pic-row" style="background: #ffffff">
					<img src="images/team-5.jpg" width="80%" height="280">
					<div class="middle">
						<div class="text">
							<p class="cl-text">- <?php echo $lang['T_40'];?><br>
								- <?php echo $lang['T_41'];?><br>
								- <?php echo $lang['T_42'];?><br>
								- <?php echo $lang['T_43'];?></p>
						</div>
					</div>
				<h4><?php echo $lang['T_39'];?></h4>
				<hr>
				<h4 style="margin-top: 0">周丽</h4>
			</div>
			<div class="col-md-3 col-xs-6 col-xxs-12 cl pic-row" style="background: #ffffff">
					<img src="images/team-3.jpg" width="80%" height="280">
					<div class="middle">
	    			<div class="text">
							<p class="cl-text">- <?php echo $lang['T_45'];?><br>
								- <?php echo $lang['T_46'];?><br>
								- <?php echo $lang['T_47'];?><br>
								- <?php echo $lang['T_48'];?><br>
								- <?php echo $lang['T_49'];?></p>
						</div>
	  			</div>
				<h4><?php echo $lang['T_44'];?></h4>
				<hr>
				<h4 style="margin-top: 0">马晓骏</h4>
			</div>
			<div class="col-md-3 col-xs-6 col-xxs-12 cl pic-row" style="background: #ffffff">
					<img src="images/team-6.jpg" width="80%" height="280">
					<div class="middle">
						<div class="text">
							<p class="cl-text">- <?php echo $lang['T_51'];?><br>
							-	<?php echo $lang['T_52'];?><br>
							-	<?php echo $lang['T_53'];?><br>
							-	<?php echo $lang['T_54'];?></p>
						</div>
					</div>
				<h4><?php echo $lang['T_50'];?></h4>
				<hr>
				<h4 style="margin-top: 0">王奕程</h4>
			</div>
			<!--<div class="col-md-3 col-xs-6 col-xxs-12" style="background: #ffffff">
				<div class="">
					<img src="images/team-7.jpg" width="90%" height="280">
				</div>
				<h4>钱程</h4>
				<hr>
				<p>合伙人</p>
			</div>-->
			</div>
    </div>
		<div class="row" style="text-align:center; margin: 50px 0">
			<div class="col-md-12">
      <!--<div class="col-md-3 col-xs-6 col-xxs-12" style="background: #ffffff">
				<div class="">
					<img src="images/team-8.jpg" width="90%" height="280">
				</div>
				<h4>蒋强</h4>
				<hr>
				<p>合伙人</p>
			</div>-->
				<div class="col-md-3 col-xs-6 col-xxs-12 cl pic-row" style="background: #ffffff">
						<img src="images/team-9.jpg" width="80%" height="280">
						<div class="middle">
							<div class="text">
								<p class="cl-text">- <?php echo $lang['T_56'];?><br>
								-	<?php echo $lang['T_57'];?><br>
								-	<?php echo $lang['T_58'];?>
								</p>
							</div>
						</div>
				<h4><?php echo $lang['T_55'];?></h4>
				<hr>
				<h4 style="margin-top: 0">陈泰均</h4>
			</div>
			<div class="col-md-3 col-xs-6 col-xxs-12 cl pic-row" style="background: #ffffff">
					<img src="images/team-11.jpg" width="80%" height="280">
					<div class="middle">
						<div class="text">
							<p class="cl-text">- <?php echo $lang['T_60'];?><br>
							-	<?php echo $lang['T_61'];?><br>
							-	<?php echo $lang['T_62'];?><br>
							-	<?php echo $lang['T_63'];?></p>
						</div>
					</div>
				<h4><?php echo $lang['T_59'];?></h4>
				<hr>
				<h4 style="margin-top: 0">张亮</h4>
			</div>
    </div>
  </div>
</div>
</div>
<!-- Partner -->
<div class="background_2 background_44 space" style="background: white ;">
  <div class="container">
    <div class="row">
			<div class="col-md-12">
        <h1><span class="line"></span><span class="title">P</span> <?php echo $lang['P_1'];?></h1>
			</div>
	  </div>
    <div class="row" style="margin: 50px 0 ; text-align: center">
      <div class="col-md-6">
				<img src="images/IRB.jpeg" width="250">
				<p style="margin-top: 20px ; height: 150px"><?php echo $lang['P_2'];?></p>
			</div>
			<div class="col-md-6">
				<img src="images/ECOWAS.jpg" width="250">
				<p style="margin-top: 20px ; height: 150px"><?php echo $lang['P_3'];?></p>
			</div>

			<div class="col-md-6">
				<img src="images/third.jpeg" width="250">
				<p style="margin-top: 20px ; height: 150px"><?php echo $lang['P_4'];?></p>
			</div>
			<div class="col-md-6">
				<img src="images/mcc.jpg" width="250">
				<p style="margin-top: 20px ; height: 150px"><?php echo $lang['P_5'];?></p>
			</div>
		</div>
<!--		<div class="row" style="margin: 30px 0">
			<div class="col-md-4 col-xs-12">
				<h4>CCTV</h4>
				<p>全球区块链研究中心，简称GBC，是一家专事区块链研究的独立机构，致力于区块链行业的发展。</p>
			</div>
			<div class="col-md-4 col-xs-6 col-xxs-12">
				<h4>DBS</h4>
				<p>全球区块链研究中心，简称GBC，是一家专事区块链研究的独立机构，致力于区块链行业的发展。</p>
			</div>
			<div class="col-md-4 col-xs-6 col-xxs-12">
				<h4>exSpace</h4>
				<p>全球区块链研究中心，简称GBC，是一家专事区块链研究的独立机构，致力于区块链行业的发展。</p>
			</div>
    </div> -->
  </div>
</div>
<!-- WHITEPAPER -->
<div class="background_2 background_44 space" data-section="whitepaper" style="background: ;">
  <div class="container">
    <div class="row">
			<div class="col-md-12">
        <h1><span class="line"></span><span class="title">D</span> <?php echo $lang['D_1'];?></h1>
			</div>
	  </div>
    <div class="row" style="margin: 50px 0">
			<div class="col-md-12" style="text-align:center">
				<div class="col-md-6" style="background: white">
					<img src="images/arrow-down.png" width="40%" style="margin-top: 30px">
					<br>
					<button class="whitepaper-button" style="border: 2px solid #59481a ; border-radius: 4px; width:140px ; padding:5px ; background: #5e5747; margin-top: 20px">
						<a href="hta-whitepaper-v3.2.pdf" target="_blank" style="color: #fff ; font-size: 16px"><?php echo $lang['D_2'];?></a>
					</button>
				</div>
				<div class="col-md-6" style="background: white">
					<img src="images/cover.png" width="50%" style="margin-top: 15px">
				</div>
			</div>
		</div>
  </div>
</div>
<!-- HTA_COIN -->
<div class="background_2 background_44 space" style="background:  ;">
  <div class="container">
    <div class="row">
			<div class="col-md-12">
        <h1><span class="line"></span><span class="title">H</span> <?php echo $lang['H_1'];?></h1>
			</div>
	  </div>
    <div class="row" style="margin: 10px 0">
      <div class="col-md-12" style="text-align:center; background:white">
				<img src="images/roadmap-2.png" width="100%">
			</div>
		</div>
		<div class="row" style="margin: 0 ; background: #ffffff">
      <div class="col-md-12" style="text-align:center">
				<h2 style="font-weight: 700"><?php echo $lang['H_2'];?></h2>
			</div>
		</div>
	<!--<div class="row" style="margin: 0">
      <div class="col-md-10 col-md-offset-1 hta-coin" style="text-align:center ;">
				<div class="col-md-3">
					<p>2017.10.27 - 2017.12.10</p>
				</div>
				<div class="col-md-3">
					<p>种子轮内部私募</p>
				</div>
				<div class="col-md-3">
					<p>150,000,000 TOKEN</p>
				</div>
				<div class="col-md-3">
					<p>完成销售</p>
				</div>
			</div>
		</div>
		<div class="row" style="margin: 10px 0 ; background: #ffffff">
      <div class="col-md-10 col-md-offset-1 hta-coin" style="text-align:center">
				<div class="col-md-3">
					<p>2018.1.11 - 2017.3.25</p>
				</div>
				<div class="col-md-3">
					<p>天使轮内部私募</p>
				</div>
				<div class="col-md-3">
					<p>50,000,000 TOKEN</p>
				</div>
				<div class="col-md-3">
					<p>完成销售</p>
				</div>
			</div>
		</div>-->
		<div class="row" style="margin: 10px 0">
      <div class="col-md-10 col-md-offset-1 hta-coin" style="text-align:center">
				<div class="col-md-4">
					<p><?php echo $lang['H_3'];?></p>
				</div>
				<div class="col-md-4">
					<p><?php echo $lang['H_4'];?></p>
				</div>
				<!--<div class="col-md-3">
					<p>100,000,000 TOKEN</p>
				</div>-->
				<div class="col-md-4">
					<p><?php echo $lang['H_5'];?></p>
				</div>
			</div>
		</div>
  </div>
</div>

<!-- ROADMAP -->
<div class="background_2 background_44 space" data-section="roadmap" style="background:  ;">
  <div class="container">
    <div class="row">
			<div class="col-md-12">
        <h1><span class="line"></span><span class="title">L</span> <?php echo $lang['R_1'];?></h1>
			</div>
	  </div>
    <div class="row">
      <div class="col-md-12" style="text-align:center; background:white">
				<img src="images/roadmap.png" width="60%" style="margin-top:30px">
			</div>
		</div>
  </div>
</div>

<!-- News -->
<div class="background_2 background_55 space" data-section="news" style="background: ;">
  <div class="container">
    <div class="row">
			<div class="col-md-12">
        <h1><span class="line"></span><span class="title">N</span> <?php echo $lang['N_1'];?></h1>
			</div>
	  </div>
    <div class="row" style="margin: 50px 0 0 0">
      <div class="col-md-8 cl-news">
				<div class="news1">
				<img src="images/timeline-1.jpeg" width="100%" height="240" style="object-fit: cover">
				<h4 style="color: #ffffff"><?php echo $lang['N_2'];?></h4>
				<p style="margin: 10px 0; font-size: 14px !important; letter-spacing: 1px; color: white"><b><?php echo $lang['N_3'];?></b></p>
				<p style="color: #ffffff">25.5.2018</p>
				</div>
			</div>
			<div class="col-md-4 cl-news">
				<div class="news">
				<img src="images/timeline-2.jpeg" width="100%" height="240" style="object-fit: cover">
				<h4><?php echo $lang['N_4'];?></h4>
				<p style="margin: 10px 0; font-size: 14px !important; letter-spacing: 1px"><b><?php echo $lang['N_5'];?></b></p>
				<p>21.4.2018</p>
				</div>
			</div>
		</div>
		<div class="row" style="margin: 10px 0 30px 0">
			<div class="col-md-6 cl-news">
				<div class="news">
				<img src="images/timeline-3.jpeg" width="100%" height="240" style="object-fit: cover">
				<h4><?php echo $lang['N_6'];?></h4>
				<p style="margin: 10px 0; font-size: 14px !important; letter-spacing: 1px"><b><?php echo $lang['N_7'];?></b></p>
				<p>20.3.2018</p>
				</div>
			</div>
			<div class="col-md-6 cl-news">
				<div class="news">
				<img src="images/timeline-4.jpeg" width="100%" height="240" style="object-fit: cover">
				<h4><?php echo $lang['N_8'];?></h4>
				<p style="margin: 10px 0; font-size: 14px !important; letter-spacing: 1px"><b><?php echo $lang['N_9'];?></b></p>
				<p>11.3.2018</p>
				</div>
			</div>
	<!--		<div class="col-md-4 cl-news">
				<div class="news">
				<img src="images/news-5.jpg" width="100%" height="240">
				<h4>携手西非经贸共同体战略合作</h4>
				<p>5.16.2018</p>
				</div>
			</div> -->
    </div>
  </div>
</div>
<!-- PROJECT -->
<div class="background_2 background_55 space" data-section="zilian" style="background: ; padding-bottom: 0">
  <div class="container">
    <div class="row">
			<div class="col-md-12">
        <h1><span class="line"></span><span class="title">P</span> <?php echo $lang['PN_1'];?></h1>
			</div>
	  </div>
		<div class="row" style="margin: 50px 0 30px 0">
			<div class="col-md-4 cl-news">
				<div class="news news-rp" style="height: auto ">
				<img src="images/project-1.jpg" width="100%" height="240">
				<h4><?php echo $lang['PN_2'];?></h4>
				<p style="margin-top: 10px ;">
					<?php echo $lang['PN_3'];?>
<br><br>
<?php echo $lang['PN_4'];?>
</p>
				</div>
			</div>
			<div class="col-md-4 cl-news">
				<div class="news news-rp" style="height:auto ">
				<img src="images/project-2.jpg" width="100%" height="240">
				<h4><?php echo $lang['PN_5'];?></h4>
				<p style="margin-top: 10px ;">
					<?php echo $lang['PN_6'];?>
<br><br>
<?php echo $lang['PN_7'];?>
</p>
				</div>
			</div>
			<div class="col-md-4 cl-news">
				<div class="news news-rp" style="height: auto">
				<img src="images/project-3.jpg" width="100%" height="240">
				<h4><?php echo $lang['PN_8'];?></h4>
				<p style="margin-top: 10px ;">
					<?php echo $lang['PN_9'];?>
<br><br><?php echo $lang['PN_10'];?>
<br><?php echo $lang['PN_11'];?>

</p>
				</div>
			</div>
    </div>
  </div>
</div>
<!-- Footer -->
<div class="background_2 background_55 background_footer space" style="background: #ffffff;">
  <div class="container">
    <div class="row" style="margin: 50px 0 0 0">
			<div class="" style="width: 100% ; margin: auto; text-align: center">
				<h4 style="margin-bottom:5px"><?php echo $lang['F_1'];?></h4><h4><?php echo $lang['F_2'];?></h4>
				<ul style="list-style: none; padding: 20px 0; font-size: 24px">
					<li class="footer_li" onclick="$('#modal-1').modal('show');" style="color: #8f989f ; cursor: pointer">
						<i class="icon-wechat" aria-hidden="true"></i>
					</li>
					<li class="footer_li">
						<a href="" style="color: #8f989f"><i class="icon-facebook" aria-hidden="true"></i></a>
					</li>
				</ul>
				<hr style="border-top: 1px solid #cfbf96">
				<ul style="list-style: none; padding: 0; font-size: 14px">
					<li style="display: inline-block"><a href="" style="color: #8f989f"><?php echo $lang['F_3'];?></a></li>
					<li style="display: inline-block"><a href="" style="color: #8f989f"><?php echo $lang['F_4'];?></a></li>
					<li style="display: inline-block"><a href="" style="color: #8f989f"><?php echo $lang['F_5'];?></a></li>
				</ul>
				<p style="font-weight: normal"><?php echo $lang['F_6'];?></p>
			</div>
		</div>
  </div>
</div>

<!--- MODAL-->
<div class="modal fade" id="modal-1" style="height: 100vh; background:rgba(0, 0, 0, 0.5)">
  <div class="modal-dialog" style="margin-top: 30vh">
    <div class="modal-content row">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <div class="col-md-6 col-md-offset-3" style="text-align: center">
				<img src="images/qrcode.jpg" width="100%">
			</div>
    </div>
  </div>
</div>
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Counters -->
	<script src="js/jquery.countTo.js"></script>
	<script src="js/moving_cursor.js"></script>
	<!-- Main JS (Do not remove) -->
	<script src="js/main.js"></script>

	</body>
</html>
