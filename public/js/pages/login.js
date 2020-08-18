$(document).ready(function() {
	
	$(".preloader").fadeOut();

	$('[data-toggle="tooltip"]').tooltip();

	$('#to-recover').on("click", function() {
		$("#userform").slideUp();
		$("#recoverform").fadeIn();
	});

	$('#login').click(function () {
		event.preventDefault();
		var datastring = $('#userform').serialize();
		$.ajax({
		    type: 'POST',
		    url: uri_signin,
		    data: datastring,
		    dataType: 'json',
		    success: function(json) {
		    	if (json.success == true) {
		    		swal.fire({
		    			title: json.title,
		    			type: "success",
		    			text: json.message,
		    		});
		    		setTimeout(function() {
		    			window.location.href = json.redirect;
		    		}, 2000);
		    	} else {
		    		swal.fire({   
			            title: json.title,
			            type: "warning",
			            text: json.message,   
			            timer: 2000
			        });
		    	}
		    },
		    error: function() {
		        swal.fire({   
		        	title: "Error",
		        	type: "error",  
		        	text: "Connection timeout",   
		        	timer: 2000
		        });
		    }
		});
	});

	$('#reset').click(function () {
		event.preventDefault();
		var datastring = $('#recoverform').serialize();
		$.ajax({
		    type: 'POST',
		    url: uri_reset,
		    data: datastring,
		    dataType: 'json',
		    success: function(json) {
		    	if (json.success == true) {
		    		swal.fire({
		    			title: json.title,
		    			type: "success",
		    			text: json.message,
		    		});
		    		setTimeout(function() {
		    			window.location.href = json.redirect;
		    		}, 2000);
		    	} else {
		    		swal.fire({   
			            title: json.title,
			            type: "warning",
			            text: json.message,   
			            timer: 2000
			        });
		    	}
		    },
		    error: function() {
		        swal.fire({   
		        	title: "Error",
		        	type: "error",  
		        	text: "Connection timeout",   
		        	timer: 2000
		        });
		    }
		});
	});

	$(document).ajaxStop(function(){
		$(".preloader").hide();
    });

    $(document).ajaxStart(function(){
    	$(".preloader").show();
    });
        
});