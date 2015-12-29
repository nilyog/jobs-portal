$(document).ready(function(){
	//console.log('custom js');
	// dropdown button
	$(".dropdown-button").dropdown();	

  
	// collapas mobile nav from left side 
	$(".button-collapse").sideNav();

 
  	$('#address').trigger('autoresize');

  	// $('select').material_select();
  	// $('select').material_select('destroy');

  	$('.slider').slider({full_width: true});
    $('.parallax').parallax();
    $('.modal-trigger').leanModal();
    $('.scrollspy').scrollSpy();
    $('.button-collapse').sideNav({'edge': 'left'});
    $('.datepicker').pickadate({selectYears: 20});
    $('select').not('.disabled').material_select();

    // Materialize.toast(message, displayLength, className, completeCallback);
    //Materialize.toast('Form SUbmited', 4000) // 4000 is the duration of the toast
});