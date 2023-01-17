
<!DOCTYPE html>
<html>

<head>
    <title>Send Money</title>
    <link rel="stylesheet" href="transfer.css">
</head>

<body>   
        <h1>Money Transfer</h1> 
    <div class= "form">
        <form  action="" method="post">
            <table>
                <tr>
                    <td>Sender :</td>
                    <td><input type="number" name="send"></td>
                </tr>
                <tr>
                    <td>Receiver :</td>
                    <td><input type="number" name="rec"></td>
                </tr>
                <tr>
                    <td>Amount :</td>
                    <td><input type="number" name="cash"></td>
                </tr>
            </table>
            <input id="ok1" type="submit" name="submit">
            <input id="ok2" type="reset" name="Clear">
        </form>
</div>
        <br/>

   
     

<?php 
    session_start();
    if(isset($_POST['submit']))
    {
        $s_acc = $_POST['send'];
        $r_acc = $_POST['rec'];
        $cash = $_POST['cash'];
    }
    $con = mysqli_connect("localhost","root","","bank");
    if ($con-> connect_error)
    {
        die ("Connection failed: ".$con->connect_error);
    }
    $INSERT = "INSERT Into history(sender,receiver,amount) values(?,?,?)";

    $stmt = $con->prepare($INSERT);
    $stmt->bind_param("iii",$s_acc,$r_acc,$cash); 
    $stmt->execute();

    $sql1 = "SELECT  balance from info where ac_no = '".$r_acc."' ";
    $sql2 = "SELECT  balance from info where ac_no = '".$s_acc."' ";
    $result = $con->query($sql1);
    $result = $con->query($sql2);
    
    if ($result->num_rows > 0){
        
        while ($row = $result->fetch_assoc())
        {
           
         
            $new1  = $row['balance'] + $cash ;
            $new2  = $row['balance'] - $cash ;
            
            $update1 = "UPDATE info  SET balance = '$new1' where ac_no = '$r_acc' ";
            $update2 = "UPDATE info  SET balance = '$new2' where ac_no = '$s_acc' ";
            $query1 = mysqli_query($con,$update1);
            $query2 = mysqli_query($con,$update2);
           
            if($query1 && $query2) {
                echo "<div id='msg'>Money Transferred</div>";
            } 
            else {
                echo "<div id='msg'> FAILED....!</div>";
            }
        
        }
       
    }
    else {
        echo "<div id='msg'>Something Wrong</div>";
    }
    $con->close();

?>
  
</body>

</html>