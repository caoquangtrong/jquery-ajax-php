<html>
    <head>
        <script>
            window.onload = function(){
                var button = document.getElementById('clickme');
                button.addEventListener('click', function(){
                    //tao mot bien luu tru xml http
                    //doi tuong nay thuy thuoc vao trinh duyet browser ta su dung
                    //nen phai kiem tra nhu ben duoi
                    var xmlhttp;

                    //ie7+, firefox, chrome
                    if(window.XMLHttpRequest){
                        xmlhttp = new XMLHttpRequest();
                    }else{
                        //ie5,6
                        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                    }

                    //khoi tao mot ham gui ajax
                    xmlhttp.onreadystatechange = function(){
                        //neu doi tuong xml http tra v hai thong so 
                        //nhu duoi coi nhu thanh cong
                        if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
                            //tien hanh thay doi noi dung cua result
                            document.getElementById("result").innerHTML = xmlhttp.responseText;
                        }
                    };
                    //khia bao phuong thuc get, url result file
                    xmlhttp.open("GET", "result.php", true);

                    //cuoi cung la gui ajax, sau khi goi ham thi funtion 
                    //o tren la onreadystatechange dc chay
                    xmlhttp.send();
                })
            }
        </script>
    </head>
    <body>
        <div id="result">Noi dung ajax dc load tai day</div>
        <input type="button" id="clickme" value="click me">
    </body>
</html>