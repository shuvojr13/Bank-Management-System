<!doctype html>
<html>

<head>
    <title>Balance</title>
    <link rel="stylesheet" href="acc_details.css">
</head>
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
    $sql = "SELECT * from info where ac_no = '".$acc."' ";
    $result = $con->query($sql);
    
    if ($result->num_rows > 0){
        echo "<table class='value'>";
        while ($row = $result->fetch_assoc())
        {
            echo "
            <tr ><th colspan='2' id = 'a'>Account Details of A/C No : ".$row["ac_no"]."</th></tr>
            <tr><th> Account No.  :</th><td><b> ".$row["ac_no"]."</b></td></tr>
            <tr><th> Name         :</th><td><b> ".$row["fname"]."</b></td></tr>
            <tr><th> Age          : </th><td><b>".$row["age"]."</b></td></tr>
            <tr><th> Gender       :</th><td><b> ".$row["gender"]."</b></td></tr>
            <tr><th> Phone        : </th><td><b>".$row["phone"]."</b></td></tr>
            <tr><th> Sub-district : </th><td><b>".$row["sub_district"]."</b></td></tr>
            <tr><th> District     :</th><td> <b>".$row["district"]."</b></td></tr>
            <tr><th> Nationality  : </th><td><b>".$row["nationality"]."</b></td></tr>
           
            ";
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