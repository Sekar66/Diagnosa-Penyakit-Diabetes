<!doctype html>

<?php
	include_once 'config.php';
	unset ($_SESSION['keluhan']);
	unset ($_SESSION['jumlah_keluhan']);
	unset ($_SESSION['n_atas1']);
	unset ($_SESSION['n_atas2']);
	unset ($_SESSION['n_atas3']);
?>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, maximum-scale=1">
<title>Naive bayes 2</title>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css"> 
<link href="css/font-awesome.css" rel="stylesheet" type="text/css"> 
<link href="css/animate.css" rel="stylesheet" type="text/css">
<script href="js/datepicker.js"></script>
 
<!--[if lt IE 9]>
    <script src="js/respond-1.1.0.min.js"></script>
    <script src="js/html5shiv.js"></script>
    <script src="js/html5element.js"></script>
<![endif]-->
<style type="text/css">
	.ff{
		color: #fff;
	}
</style>
</head>
<body>

<!--Header_section-->
<header id="header_wrapper">
  <div class="container">
    <div class="header_box">
      <div class="logo"><h2 class="ff">Diabet Check</h2></div>
	  <nav class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
	    <div id="main-nav" class="collapse navbar-collapse navStyle">
			<ul class="nav navbar-nav" id="mainNav">
			  <li><a href="index.php" class="scroll-link">Home</a></li>
			  <li><a href="Informasi.php" class="scroll-link">Informasi</a></li>
              <li class="active"><a href="diagnosa.php" class="scroll-link">Diagnosa</a></li>
			</ul>
      </div>
	 </nav>
    </div>
  </div>
  
</header>
<!--Header_section--> 


<section id="tes_asma">
<div class="inner_wrapper">
  <div class="container">
    <h2><strong>DIAGNOSA<strong></h2>
    <div class="inner_section">
	<div class="row">
      	<div class="">
        	<div class=" delay-01s animated fadeInDown wow animated">
				<h3><strong>Diabet Check</strong> menyediakan layanan untuk mendiagnosa secara mandiri apakah anda mengidap diabetes melitus atau tidak.</h3><br/> 
				<p>Dalam melakukan tes, anda akan diberikan beberapa pertanyaan tentang kondisi anda saat ini, dan di bagian akhir pertanyaan anda dapat melihat hasil serta rekomendasi dari sistem</p> <br/>
			</div>
			<div class="work_bottom"><a href="periksa.php" class="contact_btn">MULAI</a> </div>
			<br>
	   </div>
	</div>
    </div>
  </div> 
  </div>
  
</section>

<footer class="footer_wrapper" id="contact">
<div class="container">
    <div class="footer_bottom">
    	Copyright ©2021 
    </div>
  </div>
</footer>


<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery-scrolltofixed.js"></script>
<script type="text/javascript" src="js/jquery.nav.js"></script> 
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.isotope.js"></script>
<script type="text/javascript" src="js/wow.js"></script> 
<script type="text/javascript" src="js/custom.js"></script>

</body>
</html>