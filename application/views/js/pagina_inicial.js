
 $(document).ready(function(){




         
$(document).on('click', '.botao1', function(){ 



      $.ajax({
       url:"PageInicial/segundapagina",
       method:"POST",
       success:function(data)
       {
        $('.base').hide();

        $(data).appendTo('body');


            },
       error: function(xhr, status, error) { alert('Search Error: '+ xhr.status+ ' - '+ error); }
       
          
          //$('#user_table').html(data);
       });
  });
                 


});