<html>
  <head>
    <title>1st JSON demo application</title>
  </head>
  <body>
      <p id="demo"></p>
    
        <script>

        //convert javascript object using stringify function
        var txt = {name : "Paras" ,subject : "AWD" ,sem : "5" };//this is a JS object
        var obj = JSON.stringify(txt);
        document.getElementById('demo').innerHTML=obj;
      </script>
  </body>
</html>