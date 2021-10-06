<!doctype html>
<html lang="en">
<head>

   <title>Tridhaatu Kshitij :: Thank You</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    
    
    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/custom.css">
    
    <!-- Core Js Library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
</head>

<body>

<?php if(isset($_POST['submit'])){
	 
include 'browser_code.php';

// create a variable
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];


$msg =  "<html>

<head>

<style type='text/css'>

* {

	margin: 0;

	padding: 0;

}

table, td {

 mso-table-lspace:0pt;

 mso-table-rspace:0pt;

}

table {

	border-collapse: collapse;

}

body, table, td, p, a, li, blockquote{

	-ms-text-size-adjust:100%;

	-webkit-text-size-adjust:100%;

}

img {

	display: block;

	border: 0px;

}

</style>

</head>

<body>

	<table bgcolor='#ffffff' width='780' cellpadding='0' cellspacing='0' border='0' align='center' style='border:1px solid #cccccc;'>

    	<tr>

        	<td>

            	<table>

                	<tr>

                        <td>

                        	<table >
							<tr>

        <td height='20' valign='top' style='display:block; font-size:0;'></td>

        </tr>

                            	<tr><td  valign='top' style=' display:block; font-weight:bold; font-family:Arial, Helvetica, sans-serif; font-size:16px; color:#000000; padding-left:20px;text-transform:capitalize;'>Dear {$name},</td></tr>

                            	<tr><td  valign='top' style=' display:block; font-family:Arial, Helvetica, sans-serif; font-size:16px; color:#000000; padding-left:20px; padding-top:20px; padding-right:15px;'>
								
								<p>We appreciate you contacting us. We will get back in touch with you soon!Have a great day!</p>

								<p>We will get back to you shortly.</p>
</td></tr>
<tr><td  valign='top' style=' display:block; font-family:Arial, Helvetica, sans-serif; font-size:16px; color:#000000; padding-left:20px; padding-top:40px;'>Regards,</td></tr>
<tr><td  valign='top' style=' display:block; font-weight:bold; font-family:Arial, Helvetica, sans-serif; font-size:16px; color:#000000; padding-left:20px;'><img src='http://odysseyofcourage.in/images/soc-logo.jpg' alt='The School of Courage'/></td></tr>
<tr>

        <td height='20' valign='top' style='display:block; font-size:0;'></td>

        </tr>
                            </table>

                        </td>


                    </tr>

                </table>

            </td>

        </tr>  

    </table>

</body>

</html>

";

    $to= $email;	

	$subject = "Thank You!!!";

	$from = "DoNotReply@tridhaatu.com";

	$headers = 'From: ' . $from . "\r\n";

    $headers .= "MIME-Version: 1.0" . "\r\n";

    $headers .= "Content-type:text/html;charset=utf-8" . "\r\n";

    mail($to,$subject, $msg, $headers);
	
	$msg1 =  "
	
	<html>

<head>

<style type='text/css'>

* {

	margin: 0;

	padding: 0;

}

table, td {

 mso-table-lspace:0pt;

 mso-table-rspace:0pt;

}

table {

	border-collapse: collapse;

}

body, table, td, p, a, li, blockquote{

	-ms-text-size-adjust:100%;

	-webkit-text-size-adjust:100%;

}

img {

	display: block;

	border: 0px;

}

</style>

</head>

<body>

	<table border='1' cellpadding='5'bgcolor=''>
    <tr>
	<th> Name</th>
    <th> Email</th>
    <th> Phone</th>
   
	
    </tr>
   
    <tr>
    
    <th>$name</th>
    <th>$email</th>
    <th>$phone</th>

	</td>
	
    </tr>
    
    </table>

</body>

</html>";

	$to1= "info@tridhaatu.com, sales@tridhaatu.com";

	$from1 = "DoNotReply@tridhaatu.com";

	$subject1 = "Enquiry from $name";

    $headers1 = 'From: ' . $from1 . "\r\n";

	//$headers1 = 'Bcc: ' . $Bcc . "\r\n";

    $headers1 .= "MIME-Version: 1.0" . "\r\n";

    $headers1 .= "Content-type:text/html;charset=utf-8" . "\r\n";

	// mail($to1,$subject1, $msg1, $headers1);

	 //

	//echo($test);

//	mail($to1,$subject1, $msg1, $headers1);

	$toAdmin = "pawars.nilesh@gmail.com";

   $subject2 = "Enquiry Request Blank form ";

   $msg2 = browser_detection( 'browser_number' ) .'<br>'.
   
	browser_detection( 'browser_working' ) .'<br>'.

	browser_detection( 'os' ) .'<br>'.

	browser_detection( 'os_number' );



	

   if(($name == "")|| ($email == "") ||($phone == "")){

	



	  mail($toAdmin, $subject2, $msg2, $headers1);



     } else {

	     // mail($toAdmin, $subject1, $msg2, $headers1);

		mail($to1, $subject1, $msg1, $headers1);




	 }



}
?>
<style>
.thankyou{text-align:center;padding:5% 0}

html, body {
  height: 100%;
  margin: 0;
}

footer{position:relative;}
.page-container{min-height: 100%;}

</style>
 <div class="page-container"> 
	<header>
		<script src="js/header.js"></script>   
        <script>$("ul.navbar-nav li#apply").addClass("active");</script>    
    </header>
  <main>
  <div class="container-fluid mainContent">	
       <div class="innercontent">
             <div class="thankyou">
       <div class="thankyoutxt">
           <p>We appreciate you contacting us. We will get back in touch with you soon.</p>

<p>Thank you.</p></div>
    
    </div>
    </div>
  </div>
  <div class="push"></div>
  </main>
  <footer>
      <script src="js/footer.js"></script>
  </footer>
  </div>
  
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
 	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  	<script src="js/custom.js" ></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
</body>
</html>
