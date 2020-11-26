<html>
  <head>
    <title>1st JSON demo application</title>
  </head>
  <body>
      <p id="demo"></p>
      
        <?php    
        $txt = '{"cityName" : "Rajkot" ,"Temp" : "27"}';
        $obj = json_decode($txt);
        echo "city name is = ".$obj->cityName." and temprature = ".$obj->Temp;  
      ?>
  </body>
</html>