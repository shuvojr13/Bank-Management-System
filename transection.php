<!doctype html>
<html>

<head>
    <title>History</title>
    <link rel="stylesheet" href="acc_details.css">
</head>

<br/>
<body>
 
<?php 
    session_start();
    
    $con = mysqli_connect("localhost","root","","bank");
    if ($con-> connect_error)
    {
        die ("Connection failed: ".$con->connect_error);
    }
    $sql = "SELECT * from history  ";
    $result = $con->query($sql);
    echo 
   " <table class='value'>
    <tr ><th colspan='3' id = 'a'>Transaction History</th></tr>
            <tr><th> Sender A/C NO   :</th>
                <th> Receiver A/C NO :</th>
                <th> Amount         : </th>
            </tr>    
    ";
    if ($result->num_rows > 0){
        
        while ($row = $result->fetch_assoc())
        {
            echo "
            
            <tr>
                <td><b> ".$row["sender"]."</b></td>
                <td><b>".$row["receiver"]."</b></td>
                <td><b>".$row["amount"]."</b></td>
            </tr>
            
           
            ";
        }
        echo "</table>";
    }
    else {
        echo "Something Wrong!";
    }
    $con->close();

?>
  
</body>

</html>