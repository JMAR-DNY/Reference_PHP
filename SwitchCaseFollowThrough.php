<!DOCTYPE html>
<html>
    <head>
		<title></title>
	</head>
	<body>
    <?php
     $var = 2;
     switch($var){
      case 0:
          echo "invalid"
          break;
      case 1:
      case 2:
      case 3:
          echo "number is between 1 and 3";
          break;
      case 4:
          echo "number is too high";
          break;
      default:
          echo"number is way too high";      
     }
     
    ?>
	</body>
</html>
