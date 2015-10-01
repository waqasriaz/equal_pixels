
$sender_name  = $_POST['contact_name'];
$sender_email = $_POST['contact_email'];
$sender_msg   =$_POST['contact_msg'];

$to = "imperets@imperets.com, waqas_977@hotmail.com";
$subject = "Equal Pixels";

$message = "
<html>
    <head>
        <title>Equal Pixels Contact form</title>
    </head>
    <body>
        <table>
            <tr>
                <th>Sender Name</th>
                <th>Sender Email</th>
                <th>Message</th>
            </tr>
            <tr>
                <td><?php echo $sender_name; ?></td>
                <td><?php echo $sender_email; ?></td>
                <td><?php echo $sender_msg; ?></td>
            </tr>
        </table>
    </body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <<?php echo $sender_email; ?>>' . "\r\n";

if( mail($to,$subject,$message,$headers) ) {
    echo "success";
} else {
    echo "failed";
}