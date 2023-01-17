<!doctype html>
<html>

<head>
    <title>Balance</title>
    <link rel="stylesheet" href="acc_balance.css">
</head>
<h4 >Check Balance</h4>
<form class = "form" action="" method="post">
    <table class="data">
        <tr>
            <td>Enter Your Account No.</td>
            <td><input type="number" name="ac_no"></td>
        </tr>
        <tr colspan="2">
            <td>
            <input id="ok1" type="submit" name="submit">
            <input id="ok2" type="reset" name="Clear">
            </td>
        </tr>
    </table>
    
</form>
<br/>
<body>
 
<?php 
    session_start();
    if(isset($_POST['submit']))
    {
        $acc = $_POST['ac_no'];
    }
    $con = mysqli_connect("localhost","root","","bank");
    if ($con-> connect_error)
    {
        die ("Connection failed: ".$con->connect_error);
    }
    $sql = "SELECT ac_no,fname, balance from info where ac_no = '".$acc."' ";
    $result = $con->query($sql);
    
    if ($result->num_rows > 0){
        echo "<table class='value'>
        <tr>
        <th> Account No </th>
        <th> Name </th>
        <th> Balance </th>
         </tr> ";
        while ($row = $result->fetch_assoc())
        {
            echo "<tr><td>".$row["ac_no"]."</td><td>".$row["fname"]."</td><td>".$row["balance"]."</td></tr>";
        }
        echo "</table>";
    }
    else {
        echo "0 result !";
    }
    $con->close();

?>
  
</body>

</html>