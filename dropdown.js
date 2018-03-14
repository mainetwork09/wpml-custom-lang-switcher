$(document).ready(function() {

	$('.dropbtn').click(function(){
		if( !$(this).hasClass('active') ){
			$(this).addClass('active');
			$('.dropdown-content').addClass('active');
		}else{
			$(this).removeClass('active');
			$('.dropdown-content').removeClass('active');
		}
    })
    
});