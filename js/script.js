$(document).ready(function() {
   $('#comment-form').bootstrapValidator({

       feedbackIcons: {
           valid: 'glyphicon glyphicon-ok',
           invalid: 'glyphicon glyphicon-remove',
           validating: 'glyphicon glyphicon-refresh'
       },
       fields: {
           name: {
               validators: {
                       stringLength: {
                       min: 2,
                   },
                       notEmpty: {
                       message: 'Please supply your first name'
                   }
               }
           },

           phone: {
               validators: {
                   notEmpty: {
                       message: 'Please supply your phone number'
                   },
                   phone: {
                       country: 'US',
                       message: 'Please supply a vaild phone number with area code'
                   }
               }
           },

   comment: {
               validators: {
                     stringLength: {
                       min: 10,
                       max: 200,
                       message:'Please enter at least 10 characters and no more than 200'
                   },
                   notEmpty: {
                       message: 'Please supply a description about yourself'
                   }
                   }
                },
  email: {
               validators: {
                   notEmpty: {
                       message: 'Please supply your email address'
                   },
                   emailAddress: {
                       message: 'Please supply a valid email address'
                   }
               }
           },

           }
       })

       .on('success.form.bv', function(e) {
          // $('#success_message').slideDown({ opacity: "show" }, "slow")
               $('#comment-form').data('bootstrapValidator').resetForm();
           e.preventDefault();
           var $form = $(e.target);
           var bv = $form.data('bootstrapValidator');
    //       $.post($form.attr('action'), $form.serialize(), function(response) {alert(response);}, 'json');



        /*   $(function(){
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
               });*/



       });
});
