 <?php
    
    
    if(isset($_REQUEST['email']))
    {
        $email = $_REQUEST['email'];
        $subject = $_REQUEST['subject'];
        $message = $_REQUEST['message'];
        
        mail("prati@gmail.com","Subject:$subject",$message,"From:$email");
        echo "Thank you.....";
        
    }
?>

<html>
<head>
<meta name="generator" content="PhpED Version 5.9 (Build 5921)">
<title></title>
<link rel="shortcut icon"  href="">
</head>
<body>
    <form method="post">
        <table align="center" border="1">
            <tr>
                <td>Email</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>Subject</td>
                <td><input type="text" name="subject"></td>
            </tr>
            <tr>
                <td>Message</td>
                <td><textarea cols="20" rows="10" name="message"></textarea></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>