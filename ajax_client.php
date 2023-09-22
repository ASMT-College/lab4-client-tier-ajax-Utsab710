<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Search for list of gods: 
        <input type="text" name="god" id="god" oninput="get_data_using_ajax()">
        <div id="god_result"></div>
        <script>
            // get_data_using_ajax('r');
            function get_data_using_ajax_fetch(){
                var q=document.getElementById("god").value;
               var ajax_response = fetch("ajax_server.php?search="+ q).then(res =>
                    console.log(res.text())

                )
            }
            function get_data_using_ajax(){
                var q=document.getElementById("god").value;
                let xmlhttp=new XMLHttpRequest();
                xmlhttp.onreadystatechange=function(){
                    if(this.readyState==4 && this.status==200){
                        console.log(this.responseText);
                        
                        document.getElementById("god_result").innerHTML=this.responseText
                        
                    }
                }
                xmlhttp.open("GET","ajax_server.php?search="+ q,true);
                xmlhttp.send();
            }
        </script>
</body>
</html>