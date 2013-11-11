<?php $this->load->view('header'); ?>

<div class="container">

  <div class="row">
	<div class="box header-box">
	  <div class="col-lg-12 text-center">
	  	<h1>Steph and Sam</h1>
	  	<h6>are getting married in</h6>
	  	<div class="clock"></div>
	  	<a href="#rsvp" class="btn btn-danger btn-rsvp">RSVP Now!</a>
	  	<hr>
		<div id="carousel-example-generic" class="carousel slide">
		  <!-- Indicators -->
		  <ol class="carousel-indicators hidden-xs">
			<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-example-generic" data-slide-to="1"></li>
			<li data-target="#carousel-example-generic" data-slide-to="2"></li>
		  </ol>
		
		  <!-- Wrapper for slides -->
		  <div class="carousel-inner">
			<div class="item active">
			  <img class="img-responsive img-full" src="img/slide-1.jpg" >
			</div>
			<div class="item">
			  <img class="img-responsive img-full" src="img/slide-2.jpg" >
			</div>
			<div class="item">
			  <img class="img-responsive img-full" src="img/slide-3.jpg" >
			</div>
		  </div>
		
		  <!-- Controls -->
		  <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
			<span class="icon-prev"></span>
		  </a>
		  <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
			<span class="icon-next"></span>
		  </a>
		</div>
		
	  </div>
	</div>
  </div>
  
  <div class="row" id="rsvp">
	<div class="box">
	  <div class="col-lg-12">
		<hr>
		<h2 class="intro-text text-center">RSVP</h2>
		<hr>
		<img class="img-responsive img-border img-left" src="img/intro-pic.jpg">
		<hr class="visible-xs">
		<p>The boxes used in this template are nested inbetween a normal Bootstrap row and the start of your column layout. The boxes will be full-width boxes, so if you want to make them smaller then you will need to customize.</p>
		<p>A huge thanks to <a href="http://join.deathtothestockphoto.com/" target="_blank">Death to the Stock Photo</a> for allowing us to use the beautiful photos that make this template really come to life. When using this template, make sure your photos are decent. Also make sure that the file size on your photos is kept to a minumum to keep load times to a minimum.</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc placerat diam quis nisl vestibulum dignissim. In hac habitasse platea dictumst. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
	  </div>
	</div>
  </div>


</div><!-- /.container -->
<?php $this->load->view('footer'); ?>