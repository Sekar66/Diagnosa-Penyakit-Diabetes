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
<title>Naive bayes</title>
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
			  <li class="active"><a href="#hero_section" class="scroll-link">Home</a></li>
			  <li><a href="informasi.php" class="scroll-link">Informasi</a></li>
			  <li><a href="diagnosa.php" class="scroll-link">Diagnosa</a></li>
			</ul>
      </div>
	 </nav>
    </div>
  </div>
  
</header>
<!--Header_section--> 

<!--Hero_Section-->
<section id="hero_section" class="top_cont_outer">
  <div class="hero_wrapper">
	<div class="container">
      <div class="hero_section">
        <div class="row">
          <div >
            <div class="top_left_cont zoomIn wow animated"> 
              <h2> <strong> Welcome to Diabet Check</strong></h2>
              <p>Diabet Check merupakan sistem pakar untuk mendiagnosa penyakit Diabetes Melitus berbasis web.</p>
              <p>Diabet Check bertujuan untuk memberikan informasi kepada masyarakat luas tentang apa itu Diabetes serta langkah apa saja yang harus dilakukan jika memang ada yang mengidap penyakit tersebut.</p>
              <a href="diagnosa.php" class="read_more2">DIAGNOSA</a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br>
</section>
<!--Hero_Section--> 

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