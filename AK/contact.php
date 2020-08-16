<?php
//variable setting
$name = $_REQUEST['name'];
$email = $_REQUEST['Email'];
$message = $_REQUEST['Message'];
 
//Check input fields
if(empty($name)|| empty($email) || empty($message))
{
    echo "Please Fill all the fields";
}
else

    mail("aktraders236@gmail.com", "Company Message", $message, "From:$name<$email>");
    echo "<script type='text/javascript'>alert('Your message sent sucessfully');
    window.history.log(-1);
    </script>";
