<?php
$server ="localhost" ;
$username ="root" ;
$password ="" ;
$dbname ="interndb" ;

$conn  = mysqli_connect($server, $username , $password ,$dbname);

if(isset($_POST['submit'])){
    if(!empty($_POST['txtFirstName']) && !empty($_POST['txtLastName']) && !empty($_POST['txtEmail']) 
    && !empty($_POST['txtPhone']) && !empty($_POST['gender']) && !empty($_POST['txtAge']) && !empty($_POST['txtAddress'])
     &&!empty($_POST['country']) &&!empty($_POST['state']) &&!empty($_POST['city']) ){

        $txtFirstName = $_POST['txtFirstName'];
        $txtLastName = $_POST['txtLastName'];
        $txtEmail = $_POST['txtEmail'];
        $txtPhone = $_POST['txtPhone'];
        $gender = $_POST['gender'];
        $txtAge = $_POST['txtAge'];
        $txtAddress = $_POST['txtAddress'];
        $country = $_POST['country'];
        $state = $_POST['state'];
        $city = $_POST['city'];

        $query = "Insert into user(txtFirstName,txtLastName,txtEmail,txtPhone,gender,txtAge,txtAddress,country,state,city) values('$txtFirstName',
        '$txtLastName','$txtEmail','$txtPhone','$gender','$txtAge','$txtAddress','$country','$state','$city')";

        $run = mysqli_query($conn,$query) or die(mysqli_error());

        if($run){
            echo" form submitted successfully" ;
        }
        else{
            echo" form not submitted " ;
        }
}
else{
    echo "all fields required";
}
}
?>