<?php
echo "hiigggg";
//connection established....
$connetion = mysqli_connect("localhost","root","","Product");

if($connection)
{
    echo "hii";
}
else{
    echo "error";
}

if(!isset($_POST['submit']))
        {
            $query="insert into register (`name`,`dob`,`contact_no`,`email`,`address`,`psw`,`cpsw`) values ('name',date,no,'email','address','password','psw')";
            $res=mysqli_query($query) or die("error");
            if($res)
            {
                echo" Inserted";
            }
            else
            {
                echo" Failed";
            }
        }
?> 