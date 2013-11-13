$('#ready').hide();
$(document).on('change', '#num_guests', function(){
	var num_guests = $('#num_guests').val();
	var num_current_guests = $('.guest').length;
	if(num_guests > num_current_guests){
		var add = num_guests - num_current_guests;
		for(var i=0;i<add;i++){
			$('.line').before('<div class="input-group guest"> <input name="guest" type="text" required class="form-control" value="" placeholder="Attending Guest Full Name"> <span class="input-group-addon"><input type="checkbox" name="isChild"> Child</span> </div>');
		}
	}else if(num_guests < num_current_guests){
		var minus = parseInt(num_guests) - 1;
		console.log(minus);
		$('.guest:gt('+minus+')').remove();
	}
}).on('click', '#rsvp_submit', function(e){

	e.preventDefault();
	var attending = {
		guests: [],
		diet: ''
	};

	$('.guest').each(function(){
		var guest = {
			name: $('input[name=guest]', this).val(),
			isChild: $('input[name=isChild]',this).is(':checked')
		};
		attending.guests.push(guest);
	});

	if($('#optionsRadios1').is(":checked")){
		attending.attend = true;
	}attending.attend = false;
	
	attending.diet = $('#diet_value').val();
	var ref = new Firebase('https://steph-wedding.firebaseio.com/attending/');
	ref.push(attending);
	$('#rsvp_form').hide();
	$('#ready').show();
	$.ajax({
		url:'welcome/rsvp_submit', 
		type: 'POST',
		data: {attending:attending},
		success: function(data){
			// console.log(data);
		}
	});
}).on('submit', '#rsvp_form', function(e){
	e.preventDefault();
	$('#rsvp_submit').click();
}).on('click', '#another', function(e){
	e.preventDefault();
	$('#ready').hide();
	$('#rsvp_form').show();
});