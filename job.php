<?php
$EmailTo = 'behzad40@gmail.com'; // emaili ke mikhay peygham vasash bere o inja benevis jaye email e man
$Activities = $_POST['activities'];
$Name = $_POST['name']; // inja esme tarafo bezar,yani masalan esme fildi K taraf esmesho toosh minevise
$Email = $_POST['email']; // inja emaile tarafo,yani masalan esme fildi K taraf emailesho toosh minevise
$Data = $_POST['data'];
$Field = $_POST['field'];
$Tell = $_POST['num'];
$Message = $_POST['msg']; //inja ham esme filde peygham ke yek textarea e


$hasError = true;
if(isset($hasError)) 
{
              $Body = "Name: $Name \n\nActivities: $activities \n\nData: $data\n\nField= $field\n\nTell= $num\n\nEmail: $Email \n\nMessage:\n $Message";
              $Headers = 'From: Website <'.$EmailTo.'>' . "\r\n" . 'Reply-To: ' . $Email;
              mail($EmailTo, $Subject, $Body, $Headers);
              $emailSent = true;
}
if($emailSent)
{
	die('<script type="text/javascript">
			alert ("پیغام شما با موفقیت ارسال شد")
			window.location = "contact.html"
			</script> ');
}
?>