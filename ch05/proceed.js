$(document).ready(function(){
    $('#clickme').click(function(){
        //c1: phuong thuc get voi ajax
        // $.ajax({
        //     url: "result.php",
        //     type: "GET",
        //     dataType: "text",
        //     data: {
        //         number: $('#number').val()
        //     },
        //     success: function(re){
        //         $('#result').html(re);
        //     }
        // })

        //c2: phuong thuc get voi $.get
        // $.get(
        //     'result.php',
        //     {
        //         number: $('#number').val()
        //     },
        //     function(re){
        //         $('#result').html(re);
        //     },
        //     'text'
        // );

        //c3:truyen duoi dang tham so trong url
        $.get(
            'result.php?number='+$('#number').val(),
            {},
            function(re){
                $('#result').html(re);
            },
            'text'
        );
    })
})