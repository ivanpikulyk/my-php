<!DOCTYPE html>
<html>
<head>
<title>Page to check domain name information by whois database.</title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
 <form class="w3-container w3-teal" action="whois-script.php" method="get">
  <label for="domain">Check domain name by whois database:</label><br>
  <input type="text" id="domain" name="domain" placeholder="example.com">
  <input type="submit">
 </form>
 <form class="w3-container w3-teal" action="route-script.php" method="get">
  <label for="user-input">Check traceroute:</label><br>
  <input type="text" id="ip" name="ip" placeholder="127.0.0.1">
  <input type="submit">
 </form><br>
</body>
</html>
