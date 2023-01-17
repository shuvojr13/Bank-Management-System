<!doctype html>
<html>

<head>
    <title>Cash In</title>
    <link rel="stylesheet" href="cash_in.css">
</head>

<body>

    <h4 >Cash In</h4>
    <form class = "form" action="" method="post">
    <table>
        <tr>
            <td>Account NO :</td>
            <td><input type="number" name="ac_no"></td>
        </tr>
        <tr>
            <td>Amount :</td>
            <td><input type="number" name="cash"></td>
        </tr>
    </table>
    <input id="ok1" type="submit" name="submit">
    <input id="ok2" type="reset" name="Clear">
</form>
<br/>
     

<?php 
    session_start();
    if(isset($_POST['submit']))
    {
        $acc = $_POST['ac_no'];
        $cash = $_POST['cash'];
    }
    if(!empty($acc) || !empty($cash))
    {
        $con = mysqli_connect("localhost","root","","bank");
        if ($con-> connect_error)
        {
            die ("Connection failed: ".$con->connect_error);
        }
        $sql = "SELECT  balance from info where ac_no = '".$acc."' ";
        $result = $con->query($sql);
        
        if ($result->num_rows > 0){
            
            while ($row = $result->fetch_assoc())
            {
            
            
                $new  = $row['balance'] + $cash ;
                echo "<div class = 'msg'>
                Your current Balance : $new   
                </div>";
                $update = "UPDATE info  SET balance = '$new' where ac_no = '$acc' ";
                $query = mysqli_query($con,$update);
                
                if($query) {
                    echo "<div class='msg'>CASH IN SUCCESSFULLY</div>";
                } 
                else {
                    echo "<div class='msg'>FAILED</div>";
                }
            
            }
        
        }
        else {
            echo "<div class='msg'>Something wrong!</div>";
        }
    $con->close();
    
    }
    else 
    {
        echo "<div class='msg'>All fields are required.</div>";
        die();
    }

?>
  
</body>

</html>