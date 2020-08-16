$(document).ready(function(){
    $('#text-click').click(function(){
        $.ajax({
            url: 'text.php',
            type: 'GET',
            dataType: 'text',
            success: function(re){
                $('#result1').html(re);
            }

        })
    })

    $('#xml-click').click(function(){
        $.ajax({
            url: 'xml.php',
            type: 'GET',
            dataType: 'xml',
            success: function(result){
                //html luc dau
                var html =''
                    +'<table border="1" cellspacing="0" cellpadding="10">'
                        +'<tr>'
                            +'<td>Username</td>'
                            +'<td>Email</td>'
                        +'</tr>';
                
                //lap de lay data
                $(result).find('items').each (function (key, val){
                    html += '<tr><td>'
                    html += $(val).find('username').text();
                    html += '</td><td>';
                    html += $(val).find('email').text();
                    html += '</td></tr>'
                });

                html+= '</table>';
                console.log(html);
                $('#result3').html(html);
            }
        })
    })

    $('#json-click').click(function(){
        $.ajax({
            url: 'json.php',
            type: "GET",
            dataType: 'json',
            success: function(re){
                //html luc dau
                var html =''
                    +'<table border="1" cellspacing="0" cellpadding="10">'
                        +'<tr>'
                            +'<td>Username</td>'
                            +'<td>Email</td>'
                        +'</tr>';
                //lap de lay data
                $.each (re, function (key, item){
                    html += '<tr><td>'
                    html += item['username'];
                    html += '</td><td>';
                    html += item['email'];
                    html += '</td></tr>'
                });

                html+= '</table>';
                console.log(html);
                $('#result2').html(html);
            }
        })
    })
    
})


