$(function(){
$("#submit").click(function(e){
	e.preventDefault();

		var $form = $('#comment-form');

		$.ajax({
							url: $form.attr("action"),
							 type: $form.attr("method"),
							 data: $form.serialize(),

							 success: function (response)
							 {
									$( '#comment-form' ).each(function()
									{
											this.reset();
									});
								},
							 error: function (response)
							 {
									alert('ajax failed');
								},
						});
					});
		});
