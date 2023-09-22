
<?php
$emailcheck = true;
$phonecheck = true;
$name;
$email;
$phone ;
$subject;
$msg  ;

if(isset($_POST['name'])){
$name = $_POST['name'];
$email = $_POST['mail'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$msg = $_POST['message'];

$checkph = preg_match('/^([0-9]{10})$/',$phone);

if($checkph == 0){
    $phonecheck = false;
}

if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    
    $emailcheck = false;
}


}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

*{
    border-sizing:border-box;
    margin:0px;
    padding:0px;
}

        input{
            border: 2px solid black;
            border-radius: 6px;
            outline: none ;
            font-size: 16px;
            width: 80%;
            margin: 11px 0px;
            padding:7px;
        }
        form{
            display:flex;
            align-items: center;
            justify-content:center;
            flex-direction:column;
        }

        .btn{
            color:white;
            background:purple;
            padding:8px 12px;
            border:1px solid black;
            border-radius:14px;
            cursor:pointer;
        }

    </style>
</head>
<body>

    <form action="index.php" method="post">
       <label>Name : </label> <input type="text" name="name" placeholder="Enter your full name. " value="<?php echo $name ?>"> <br>
       <?php 
       if($phonecheck == false)
       {
         echo "<p>Enter valid Phone Number</p>";
        }  
        ?>
       <label>Phone Number : </label> <input type="text" name="phone" placeholder="Enter your phone number. " value="<?php echo $phone ?>"><br>
       <?php
       if($emailcheck == false){
       echo "Enter valid Email";
       }
       ?>

       <label>E-Mail : </label> <input type="text" name="mail" placeholder="Enter your E-mail. " value="<?php echo $email ?>"><br>
       <label>Subject : </label> <input type="text" name="subject" placeholder="Enter the subject. " value="<?php echo $subject ?>"><br>
       <label>Message : </label> <input type="text" name="message" placeholder="Enter the message. "  value="<?php echo $msg ?>"><br>
        <input type="submit" placeholder="submit" class="btn"> 
    </form>

</body>
</html>