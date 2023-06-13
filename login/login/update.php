
<?php
include ("config.php");

if(isset($_POST['edit'])) {
   
    $name = $_REQUEST['name'];
		$d_o_b = $_REQUEST['date'];
		$gender = $_REQUEST['gender'];
		$phone_number = $_REQUEST['phonenumber'];
		$email = $_REQUEST['email'];
		$password = $_REQUEST['password'];
		$qualification = $_POST['qualification'];
		$address = $_REQUEST['address'];
		$skill =  implode(',', $_POST['skill']);
    
         $photoName=$_FILES['document']['name'];
        $photo=$_FILES['document']['tmp_name'];
        $photo=file_get_contents($photo);
        $photo=base64_encode($photo);
        $fileName = $_FILES['document1']['name'];
        $document = $_FILES['document1']['tmp_name'];
        $document = file_get_contents($document);
        $document = base64_encode($document);
    
    $sqli = "UPDATE `register` SET  d_o_b ='$d_o_b', gender='$gender', phone_no='$phone_number','email'='$email','user_pwd'='$password','qualification'='$qualification','skill'='$skill','address'='$address',
 'image'='$photo','RESUME'='$document' WHERE name='$name'";
    mysqli_query($conn,$sqli);
}
echo "<script>alert('SUCESSFULLY UPDATE YOUR DETAIL');window.location.href='admin.php';</script>"; 

    ?>