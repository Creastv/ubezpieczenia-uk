<?php

if (isset($_REQUEST['signup'])) {
// Initialize error array.
  $errors = array();
  // Check for a proper First name
  if (!empty($_REQUEST['firstname'])) {
  $firstname = $_REQUEST['firstname'];
  $pattern = "/^[a-zA-Z0-9\_]{2,20}/";// This is a regular expression that checks if the name is valid characters
  if (preg_match($pattern,$firstname)){ $firstname = $_REQUEST['firstname'];}
  else{ $errors[] = 'Your Name can only contain _, 1-9, A-Z or a-z 2-20 long.';}
  } else {$errors[] = 'You forgot to enter your First Name.';}
  

  //End of validation 

if (isset($_REQUEST['signup'])) {
  if (empty($errors)) { 


//sumbission data
$ipaddress = $_SERVER['REMOTE_ADDR'];
$date = date('d/m/Y');
//form data
$firstname = $_POST['firstname']; 
$telefon = $_POST['telefon']; 
$email = $_POST['email'];
$usluga = $_POST['usluga'];
$zgoda = $_POST['zgoda'];



    /*ini_set("SMTP","mail.domain.com"); //mail.yoursite.com should be your local smtp
    ini_set("smtp_port","25"); //25 should be your smtp port
    ini_set("sendmail_from","example@email.com"); //info@yoursite.com should be your site email*/
    $headers .= 'Content-type: text/html; charset="utf-8' . "\r\n";
    $emailbody = "
                  <html>
                  <body>
                  <head>
                  </head>
                 <table align='center' style=' background:#f2f2f2; width: 600px;'>
                    <thead>
                      <tr>
                        <td align='center' colspan='2' style='border-bottom:1px solid; background:#585858; padding:20px;'>
                         <img class='margin:0px; display:block; width:150px;' src='http://roial.pl/wp-content/uploads/2017/05/logo-roial.png'>
                       </td>
                      </tr>
                      <tr>
                        <td colspan='2' style='border-bottom:1px solid;'>
                         <span style='text-align:center; font-size:21px;'><b>Dane kontaktowe:</b></span>
                       </td>
                      </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td style='border-bottom:1px solid ;' >Imię:</td>
                      <td style='border-bottom:1px solid ;'> {$firstname}</td>      
                    </tr>
                    <tr>
                      <td style='border-bottom:1px solid ;' >Nr kontaktowy:</td>
                      <td style='border-bottom:1px solid ;'>{$telefon}</td>     
                    </tr>
                     <tr>
                      <td style='border-bottom:1px solid ;' >E-mail:</td>
                      <td style='border-bottom:1px solid ;'>{$email}</td>     
                    </tr>
                    <tr>
                      <td style='border-bottom:1px solid ;' >Zgoda przetwarzania danych:</td>
                      <td style='border-bottom:1px solid ;'>{$zgoda}</td>     
                    </tr>
                  </tbody>
                  <tfoot>
                   <tr>
                      <td colspan='2' style='text-align:center; background:#585858; color:#fff;padding:10px;' ><b>LandingPage:</b> podnies-konwersje.pl</td>
                    </tr>
                   
                  </tfoot>
                  </table> 
                   </body>
                  </html>
                  ";

// Send
mail("piotr@roial.pl","Leed złorzony dnia:{$date}",$emailbody,$headers);
// Send
 
if (isset($_POST['signup']))
    {   
    ?>
<script type="text/javascript">
window.location = "thx.html";
</script>
<?php
    }

  }
}

?>
