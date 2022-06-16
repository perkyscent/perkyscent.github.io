<?<php></php>

if (isset($_POST['submit'])) {
    
$name = $_POST['name'];
$phone = $_POST['Phone'];
$mailFrom = $_POST['email'];
$subject ="New potential customer"
$mailTo = 'Missperky01@gmail.com';

$headers = "From: ". $mailFrom;
$txt = "You have reeicved contact details from a potential customer on your website".".\n\n"
"Name of the person is".$name.".\n\n"."Number:".$phone";

mail($mailTo , $subject, $txt, $headers );

 
 header('Location: index1.html');
exit;

}
?>