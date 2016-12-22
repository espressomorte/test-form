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
                       max: 500,
                       message:'Please enter at least 10 characters and no more than 500'
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

         var form = $('#comment-form');
         var data = new FormData();
         var file_data = $('#file_upload').prop('files')[0];
         $.each($(':input',form),function (i, fields) {
           data.append($(fields).attr('name'), $(fields).val());})
           data.append('file',file_data);

            var request = new XMLHttpRequest();
              request.open("POST", "insert.php");
              request.send(data);

      //  $('#comment-form').data('bootstrapValidator').resetForm();

        setTimeout(function(){
           location.reload();
      }, 500);

       });
});
