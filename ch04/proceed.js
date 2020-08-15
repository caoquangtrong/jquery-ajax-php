$(document).ready(function(){
    $('#clickme').click(function(){
        $.post(
            'result.php',
            {
                number : $('#number').val()
            },
            function(re){
                $('#result').html(re);
            },
            'text'
        );
    })
})