<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../ch/jquery-3.5.1.min.js"></script>
    <title></title>
    <script>
        $(document).ready(function(){
            $('#clickme').click(function(){

                //c1: Phuong thuc post voi ajax
                // $.ajax({
                // url: "result.php",
                // type: "POST",
                // dataType: "text",
                // data: {
                //     number: $('#number').val()
                // },
                // success: function(r){
                //     $('#result').html(r);
                // }
                // })

                //c2: phuong thuc post voi $.post
                // var url = 'result.php';
                // var data = {
                //     number : $('#number').val()
                // };
                // var success = function(re){
                //     $('#result').html(re);
                // }
                // var dataType = 'text';
                // //send ajax
                // $.post(url, data, success, dataType);

                //c2 gon hon
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
    </script>
</head>
<body>
    <div id="result">Noi dung ajax se duoc load o day</div>
    <input type="text" id="number">
    <input type="button" id="clickme" value="click me">
</body>
</html>