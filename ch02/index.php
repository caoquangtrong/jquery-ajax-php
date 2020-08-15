<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../ch/jquery-3.5.1.min.js"></script>
    <title></title>
    <script>
        window.onload = function(){
                var btn = document.getElementById("clickme");
                btn.addEventListener('click', function(){
                    $.ajax({
                        url: "result.php",
                        type: "post",
                        dataType: "text",
                        data: {},
                        success: function(s){
                            $('#result').html(s);
                        }
                    })
                })
            }
    </script>
</head>
<body>
    <div id="result">Noi dung ajax se load o day</div>
    <input type="button" id="clickme" value="click me">
</body>
</html>