<html>
  <p>
    <?php
    $myName = "Jeffrey";
    print strlen($myName);
    print substr($myName, 0, 4);
    ?>
  </p>
  <p>
    <?php
    print strtoupper($myName);
    
    ?>
  </p>
  <p>
    <?php
    print strtolower($myName);
    
    ?>
  </p>
  
      <p>
    <?php
    $myName = "Jeffrey";
    print strpos($myName, "e");    
    ?>
    </p>
    <p>
    <?php
    if (strpos($myName,"h") === false) {
  print "Sorry, no 'h' in " . $myName;

</html>
