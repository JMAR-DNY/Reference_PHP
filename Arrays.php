<html>
  <head>
    <title>Modifying Elements</title>
  </head>
  <body>
    <p>
      <?php
        $languages = array("HTML/CSS",
        "JavaScript", "PHP", "Python", "Ruby");
        
        $languages[4] = "C++";
        
        echo $languages[4];
        //for($i = 0; $i < 4; $i++){
        //    echo $languages[$i];}
      ?>
    </p>
  </body>
</html>
