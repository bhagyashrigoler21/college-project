<?php
$server="localhost";
$username="root";
$password="";
$dbname="employeedata";

$conn = mysqli_connect($server , $username , $password , $dbname);
if(isset($_POST['SignUp'])){

if(!empty($_POST['name'])  && !empty($_POST['username'])  && !empty($_POST['gender']) && !empty($_POST['Email'])
&& !empty($_POST['phone number'])  && !empty($_POST['country'])){

    $name = $_POST['name'];
    $username = $_POST['username'];
    $Gender = $_POST['Gender'];
    $Email = $_POST['Email'];
    $phonennumber = $_POST['phone number'];
    $country = $_POST['country'];

    $query = "insert into phpform(nme,username,gender,email,phone number,country) values('$name','$username','$gender','$phonenumber','$country')";

    $run = mysqli_query($conn,$query) or die(mysqli_error());


    if($run){
        echo "form submitted successfully";

    }
    else{
        echo "not submitted";
    }


}

else{
      echo "all field required";
}
}
?>