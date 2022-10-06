<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
    <h1>hello</h1>
    <?php
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bustimings";
    
    // Create connection
    $conn = new mysqli($servername,
        $username, $password, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: "
            . $conn->connect_error);
    }
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
        // collect value of input field
        $fn = $_REQUEST['fname'];
        $age = $_REQUEST['age'];
        $qual = $_REQUEST['quals'];
        $dsg = $_REQUEST['desig'];
        $sal = $_REQUEST['sal'];
    
        
    }

    $sqlquery = "INSERT INTO employee VALUES
    ($fn, $age, $qual,$dsg,$sal)";
 
    if ($conn->query($sqlquery) === TRUE) {
    echo "record inserted successfully";
    } else {
    echo "Error: " . $sqlquery . "<br>" . $conn->error;
    }
   
    
    ?>  
</body>
</html>
