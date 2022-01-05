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
			  <li class="active"><a href="informasi.php" class="scroll-link">Informasi</a></li>
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
              <h2><center><strong> INFORMASI</strong></center></h2>
              <br>
              <h2>Diabetes Melitus Tipe 1</h2>
              <p>Diabetes Melitus tipe 1 terjadi karena sistem kekebalan tubuh penderita menyerang dan menghancurkan sel-sel pankreas yang memproduksi insulin. Hal ini mengakibatkan peningkatan kadar glukosa darah, sehingga terjadi kerusakan pada organ-organ tubuh. Diabetes tipe 1 dikenal juga dengan diabetes autoimun.</p>
              <br>
              <h2>Diabetes Melitus Tipe 2</h2>
              <p>Diabetes tipe 2 merupakan jenis diabetes yang lebih sering terjadi. Diabetes jenis ini disebabkan oleh sel-sel tubuh yang menjadi kurang sensitif terhadap insulin, sehingga insulin yang dihasilkan tidak dapat dipergunakan dengan baik (resistensi sel tubuh terhadap insulin). Sekitar 90-95% persen penderita diabetes di dunia menderita diabetes tipe ini</p>
              <br>
              <h2>Diabetes Melitus Tipe Gestasional</h2>
              <p>terdapat jenis diabetes khusus pada ibu hamil yang dinamakan diabetes gestasional. Diabetes pada kehamilan disebabkan oleh perubahan hormon, dan gula darah akan kembali normal setelah ibu hamil menjalani persalinan.</p>
              
            </div>
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