<html>
  <head>
    <title>PHP Test</title>
   
  </head>
  <body>
    <?php echo '<p>Hello World</p>';

//Define your database name here.
$HostName = "sql212.epizy.com";
 
//Define your database name here.
$DatabaseName = "epiz_32431871_Stepahead";
 
//Define your database username here.
$HostUser = "epiz_32431871";
 
//Define your database password here.
$HostPass = "zilJDrlSjGPL";

$conn = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
else{
    echo "Connected";
}





?> 

    <!--
    This script places a badge on your repl's full-browser view back to your repl's cover
    page. Try various colors for the theme: dark, light, red, orange, yellow, lime, green,
    teal, blue, blurple, magenta, pink!
    -->
    <script src="https://replit.com/public/js/replit-badge.js" theme="blue" defer></script> 
  </body>
</html>
