$.getJSON(
    'gettest.php',
    function(result){
        $('#item').empty();
        $.each(result.result, function(){
            $('#item').append('<div class="ts-testimonial-item"><p>“ '+this['message']+' ”</p><div class="infor-client"><span class="client-name">'+this['name']+'</span></div></div>');
        });
    }
);