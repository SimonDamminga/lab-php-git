<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>
    <body>

        <h2>Client Example</h2>
        <h3>Output:</h3>
        <div id="output"></div>

        <script id="source" language="javascript" type="text/javascript">
            (function(){
                xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function(){
                    if(this.readyState == 4 && this.status == 200){
                        //console.log(this.response);
                        document.getElementById('output').innerHTML = this.response;
                    }
                }

                xmlhttp.open('get', 'api.php');
                xmlhttp.send();
            })();
        </script>   
    </body>
</html>