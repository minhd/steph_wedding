	<!-- <footer>
	  <div class="container">
		<div class="row">
		  <div class="col-lg-12 text-center">
			<p>Copyright &copy; Company 2013</p>
		  </div>
		</div>
	  </div>
	</footer>
 -->
	<script src="js/jquery.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.1/angular.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="lib/flipclock/js/flipclock/flipclock.min.js"></script>
	<script src='https://cdn.firebase.com/v0/firebase.js'></script>
	<script>
	  // Activates the Carousel
	  $('.carousel').carousel({
		interval: 5000
	  })

	  var t1 = new Date("April 20, 2014 09:00:00");
	  var t2 = new Date();
	  var dif = t1.getTime() - t2.getTime()
	  var Seconds_from_T1_to_T2 = dif / 1000;

	  var clock = $('.clock').FlipClock(Seconds_from_T1_to_T2, {
	      clockFace: 'DailyCounter',
	      countdown:true
	  });
	</script>
	<script src="js/scripts.js"></script>
  </body>
</html>