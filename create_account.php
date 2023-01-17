<!doctype html>
<html>

<head>
    <title>Registration Form</title>
    <link rel="stylesheet" href="create_acc.css">
</head>

<body>
    <h1 id="h1">Registration</h1>
    
        <fieldset class="fs">
            <legend id="tg"><strong>Create Account</strong></legend>
                <form action="" method="post">
                        <table>
                        <tr >
                            <td><b>Account No:</b></td>
                            <td><input type="text" name="acc_no" id="accno" placeholder="Enter....." size="10"></td>
                        </tr><br>
                        <tr colspan="2">
                            <td>
                                <b>First Name:</b><br/><br/>
                                <b>Last  Name:</b>
                            </td>
                            <td>
                                <input type="text" name="fname" id="fname" placeholder="Type first name..."><br/><br/>
                                <input type="text" name="lname" id="lname" placeholder="Type last name...">
                            </td>
                        </tr><br>
                        
                        <tr >
                            <br/>
                            <td><b>Phone:</b></td>
                            <td><input type="tel" name="phone" id="phone" pattern="[0-9]+" placeholder="Enter....."></td>
                        </tr><br>
                        <tr>
                            <td><b>Age:</b></td>
                            <td><input type="number" name="dob" ></td>
                        </tr><br>
                        <tr>
                            <td><strong>Gender</strong></td>
                            <td>
                            <input type="radio" name="gender"value="m"> Male
                            <input type="radio" name="gender"value="f">Female
                            <input type="radio" name="gender"value="o">Others
                            </td>
                        </tr>
                        <tr>
                            <td><b>Nationality:</b></td>
                            <td><input type="text" name="n" id="nationality" placeholder="Enter....."></td>
                        </tr><br>

                        
                        <tr>
                            <td><b>Primary Cash:</b></td>
                            <td><input type="number" name="cash"  placeholder="Enter....."></td>
                        </tr><br>
                        <tr colspan="2">
                            <td>
                                <b>Sub-district:</b><br/><br/>
                                <b>District:</b>
                            </td>
                            <td>
                                <input type="text" name="s_d"  placeholder="Enter..."><br/><br/>
                                <input type="text" name="d"    placeholder="Enter...">
                            </td>
                        </tr><br>
                    
                        </table>
                <br>
                <div class="submit">
                    <input id="a3" type="submit"value="Submit">
                    <input id="a4" type="reset" value="Reset">
                </div>
                </form>
        </fieldset>
        <br/>

<?php 

$acc = $_POST['acc_no'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$birth = $_POST['dob'];
$phone = $_POST['phone'];
$cash = $_POST['cash'];
$gender = $_POST['gender'];
$s_d = $_POST['s_d'];
$d = $_POST['d'];
$n = $_POST['n'];
$name = $fname." ".$lname ;

    

if(!empty($acc) || !empty($name)  || !empty($birth) || !empty($phone) || !empty($cash) || !empty($n) || !empty($gender) || !empty($s_d) ||  !empty($d))
{

    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bank";
    $conn = mysqli_connect($server, $username, $password,$dbname);

    if($gender == 'm')
    {
        $gender = "male";
    } 
    else if($gender == 'f')
    {
        $gender = "female";
    } 
    else 
    {
        $gender = "others";
    }

    if($acc < 100)
    {
        
        ?> <div id="msg"> <?php echo "Account No. is greater then 100 . Please Try Again!"; ?> </div> <?php
        die();
    }

    if($cash < 500)
    {
       ?> <div id="msg"> <?php echo "Minimum cash limit is 500 Taka"; ?> </div> <?php
       die();
    } 

    if(mysqli_connect_error())
    {
        die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
    } 
    else
    {
        $SELECT = "SELECT ac_no from info Where ac_no = ? Limit 1";
        $INSERT = "INSERT Into info(ac_no,fname,age,phone,balance,gender,sub_district,district,nationality) values(?,?,?,?,?,?,?,?,?)";

        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param('i', $acc);
        $stmt->execute();
        $stmt->bind_result($acc); 
        $stmt->store_result();
        $r_num = $stmt->num_rows();

        if ($r_num==0) 
        {
            $stmt->close();

            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("isisissss",$acc,$name,$birth,$phone,$cash,$gender,$s_d,$d,$n); 
            $stmt->execute();
           
            ?> <div id="msg"> <?php  echo "New record inserted successfully"; ?> </div> <?php
        } 
        else 
        {
            ?> <div id="msg"> <?php  echo"Someone already register using this account number"; ?> </div> <?php
        }
    }
}
else {
    ?> <div id="msg"> <?php  echo "All field are required.."; ?> </div> <?php
    die();
}
 
?>

</body>

</html>