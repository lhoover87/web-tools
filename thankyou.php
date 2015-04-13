//Retrieve the information
//Process the information and email the information

<?
$name = $_POST['fullname'];
$email = $_POST['email'];
$message = $_POST['message'];

//test retrieval
//echo $name;
//echo $email;
//echo $message;

$email_messsage = "

Name: ".$name."
Email: ".$email."
Message: ".$message."
";

mail ( "youremail@yourhost.com" , "New Inquiry" , string $email_message);
header("Location: email_success.php");

?>
