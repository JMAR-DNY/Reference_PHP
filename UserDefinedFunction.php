<html>
	<head>
		<title></title>
	</head>
	<body>
      <p>
        <?php
        
        function greetings($name){
         echo "Greetings, " . $name . "!";   
        }
        
        $n = "Jeffrey";
        greetings($n);
        ?>
      </p>
		
	<p>
        <?php
      
    function aboutMe($name, $age){
     echo "Hello! My name is " . $name . ", and I am " . $age . " years old.";    
        
    }
    
    $n = "Jeffrey";
    $a = 27; 
    aboutMe($n, $a);
    
        ?>
      </p>
    </body>
</html>
