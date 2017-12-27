<html>
  <head>
    <title>Scope it Out!</title>
  </head>
  <body>
    <p>
      <?php
      class Person {
          
      }
      class Ninja extends Person {
        const stealth = "MAXIMUM";
        
      }

      echo Ninja::stealth;
      
      
      ?>
    </p>
  </body>
</html>
