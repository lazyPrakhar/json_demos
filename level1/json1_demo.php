<html>
  <head>
    <title>1st JSON demo application</title>
  </head>
  <body>
      <p id="demo"></p>

      <script>

        //defining JSON object -->JSON string
        var txt = {name : "Paras" ,subject : "AWD" ,sem : "5" }; //this is a javascript object
        var obj = JSON.parse(txt);
        document.getElementById('demo').innerHTML=obj.name+"<br>"+obj.subject+"<br>"+obj.sem;
      </script>

  </body>
</html>