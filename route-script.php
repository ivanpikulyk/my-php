<html>
<body>
  <?php
    
    $route = $_GET["ip"];
    $output = shell_exec("traceroute ".$route);
    echo "<pre>". $output . "</pre>";
  ?>

</body>
</html>
