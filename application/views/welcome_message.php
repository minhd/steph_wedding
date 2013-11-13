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
			<li data-target="#carousel-example-generic" data-slide-to="3"></li>
			<li data-target="#carousel-example-generic" data-slide-to="4"></li>
			<li data-target="#carousel-example-generic" data-slide-to="5"></li>
			<li data-target="#carousel-example-generic" data-slide-to="6"></li>
			<li data-target="#carousel-example-generic" data-slide-to="7"></li>
			<li data-target="#carousel-example-generic" data-slide-to="8"></li>
		  </ol>
		
		  <!-- Wrapper for slides -->
		  <div class="carousel-inner">
			<div class="item active">
			  <img class="img-responsive img-full" src="img/1-w1600-h1200.jpg" >
			</div>
			<div class="item"><img class="img-responsive img-full" src="img/2-w1600-h1200.jpg"></div>
			<div class="item"><img class="img-responsive img-full" src="img/3-w1600-h1200.jpg"></div>
			<div class="item"><img class="img-responsive img-full" src="img/5-w1600-h1200.jpg"></div>
			<div class="item"><img class="img-responsive img-full" src="img/6-w1600-h1200.jpg"></div>
			<div class="item"><img class="img-responsive img-full" src="img/7-w1600-h1200.jpg"></div>
			<div class="item"><img class="img-responsive img-full" src="img/8-w1600-h1200.jpg"></div>
			<div class="item"><img class="img-responsive img-full" src="img/9-w1600-h1200.jpg"></div>
			<div class="item"><img class="img-responsive img-full" src="img/10-w1600-h1200.jpg"></div>
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
		
		<form action="" role="form" id="rsvp_form">
			<div class="row">
				<div class="col-lg-6">
					<div class="form-group">
						<label for="">Total Attending</label>
						<select name="" id="num_guests">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
						</select>
					</div>
					<div class="form-group">
						<label for="">Guests</label>
						<div class="input-group guest">
							<input name="guest" type="text" required class="form-control" value="" placeholder="Attending Guest Full Name">
							<span class="input-group-addon"><input type="checkbox" name="isChild"> Child</span>
						</div>
						<div class="line"></div>
						<a href=""><i class="glyphicon glyphicon"></i></a>
					</div>
					<div class="radio">
					  <label>
					    <input type="radio" name="optionsRadios" id="optionsRadios1" value="attending" checked>
					    I will be attending
					  </label>
					</div>
					<div class="radio">
					  <label>
					    <input type="radio" name="optionsRadios" id="optionsRadios2" value="">
					    I won't be there
					  </label>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="form-group">
						<label for="diet">Special Dietry Requirement</label>
						<textarea id="diet_value" class="form-control" name="diet" placeholder="Any Notes?" rows="7"></textarea>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<hr class="visible-x">
					<div class="text-center"> <a href="" class="btn btn-primary btn-lg" id="rsvp_submit">Respond to RSVP</a> </div>		
				</div>
			</div>
		</form>

		<div id="ready">
			<h1 class="text-center">Thank you for your RSVP!</h1>
			<p class="text-center"><a href="" id="another" class="btn btn-link">Make another RSVP!</a></p>
		</div>

	  </div>
	</div>
  </div>


</div><!-- /.container -->
<?php $this->load->view('footer'); ?>