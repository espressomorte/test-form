
           $(document).ready(function () {
               var form = $('#comment-form'); //valid form selector
               $("#submit").click(function(c){

                   c.preventDefault();

                   var data = new FormData();
                   $.each($(':input', form ), function(i, fileds){
                       data.append($(fileds).attr('name'), $(fileds).val());
                   });
                   $.each($('input[type=file]',form )[0].files, function (i, file) {
                       data.append(file.name, file);
                   });
                   $.ajax({
                       url: form.attr("action"),
                       data: data,
                       cache: false,
                       contentType: false,
                       processData: false,
                       type: 'POST',
                       success: function (c) {
                         $( '#comment-form' ).each(function()
                       {
                           this.reset();
                       });
                       }
                   });
                   return false;
               });
           })
