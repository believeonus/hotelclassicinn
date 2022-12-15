<?php
<<<<<<< HEAD
=======

    $to = "mail.form.onus@gmail.com";
    $from = $_REQUEST['gmail'];
    $name = $_REQUEST['name'];
    $subject = $_REQUEST['subject'];
    $number = $_REQUEST['number'];
    $cmessage = $_REQUEST['message'];

    $headers = "From: $from";
	$headers = "From: " . $from . "\r\n";
	$headers .= "Reply-To: ". $from . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $subject = "You have a message from your Cake Template.";

    $logo = 'http://wethemez.com/test-html/consultplus/img/logo-black.png';
    $link = '#';

	$body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Express Mail</title></head><body>";
	$body .= "<table style='width: 100%;'>";
	$body .= "<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>";
	$body .= "<a href='{$link}'><img src='{$logo}' alt=''></a><br><br>";
	$body .= "</td></tr></thead><tbody><tr>";
	$body .= "<td style='border:none;'><strong>Name:</strong> {$name}</td>";
	$body .= "<td style='border:none;'><strong>Email:</strong> {$from}</td>";
	$body .= "</tr>";
	$body .= "<tr><td style='border:none;'><strong>Subject:</strong> {$csubject}</td></tr>";
	$body .= "<tr><td></td></tr>";
	$body .= "<tr><td colspan='2' style='border:none;'>{$cmessage}</td></tr>";
	$body .= "</tbody></table>";
	$body .= "</body></html>";

    $send = mail($to, $subject, $body, $headers);


>>>>>>> efdf39fe9bc6fb697b6499bd776b2c03a86843fa
use PHPMailer\PHPMailer\PHPMailer;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

$mail=new PHPMailer(true);

$alert = '';

if(isset($_POST["send"])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    try{
        $mail->isSMTP();
        $mail->Host='smtp.gmail.com';
        $mail->SMTPAuth=true;
<<<<<<< HEAD
        $mail->Username ='info.from.onus@gmail.com';
        $mail->Password ='gidmeeabzsqtefbg';
        $mail->SMTPSecure='tls';
        $mail->Port=587;

        $mail->setFrom('info.from.onus@gmail.com');
=======
        $mail->Username ='mail.form.onus@gmail.com';
        $mail->Password ='jlbfgruqzplgfnda';
        $mail->SMTPSecure='tls';
        $mail->Port=587;

        $mail->setFrom('mail.form.onus@gmail.com');
>>>>>>> efdf39fe9bc6fb697b6499bd776b2c03a86843fa
        $mail->addAddress('animikhdasofficial@gmail.com');
        
        $mail->isHTML(true);
        $mail->Subject = 'Message Received from : '.$email;
        //$mail->Body = "Name : $name <br>Email : $email <br>Subject : $subject <br>Message : $message";
        $mail->Body = "<!DOCTYPE html>
        <html xmlns:v='urn:schemas-microsoft-com:vml' xmlns:o='urn:schemas-microsoft-com:office:office' lang='en'>
        
        <head>
            <title></title>
            <meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <!--[if mso]><xml><o:OfficeDocumentSettings><o:PixelsPerInch>96</o:PixelsPerInch><o:AllowPNG/></o:OfficeDocumentSettings></xml><![endif]-->
            <style>
                * {
                    box-sizing: border-box;
                }
        
                body {
                    margin: 0;
                    padding: 0;
                }
        
                a[x-apple-data-detectors] {
                    color: inherit !important;
                    text-decoration: inherit !important;
                }
        
                #MessageViewBody a {
                    color: inherit;
                    text-decoration: none;
                }
        
                p {
                    line-height: inherit
                }
        
                .desktop_hide,
                .desktop_hide table {
                    mso-hide: all;
                    display: none;
                    max-height: 0px;
                    overflow: hidden;
                }
        
                @media (max-width:520px) {
                    .desktop_hide table.icons-inner {
                        display: inline-block !important;
                    }
        
                    .icons-inner {
                        text-align: center;
                    }
        
                    .icons-inner td {
                        margin: 0 auto;
                    }
        
                    .row-content {
                        width: 100% !important;
                    }
        
                    .mobile_hide {
                        display: none;
                    }
        
                    .stack .column {
                        width: 100%;
                        display: block;
                    }
        
                    .mobile_hide {
                        min-height: 0;
                        max-height: 0;
                        max-width: 0;
                        overflow: hidden;
                        font-size: 0px;
                    }
        
                    .desktop_hide,
                    .desktop_hide table {
                        display: table !important;
                        max-height: none !important;
                    }
                }
            </style>
        </head>
        
        <body style='background-color: #FFFFFF; margin: 0; padding: 0; -webkit-text-size-adjust: none; text-size-adjust: none;'>
            <table class='nl-container' width='100%' border='0' cellpadding='0' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #FFFFFF;'>
                <tbody>
                    <tr>
                        <td>
                            <table class='row row-1' align='center' width='100%' border='0' cellpadding='0' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;'>
                                <tbody>
                                    <tr>
                                        <td>
                                            <table class='row-content stack' align='center' border='0' cellpadding='0' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000000; width: 500px;' width='500'>
                                                <tbody>
                                                    <tr>
                                                        <td class='column column-1' width='100%' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 5px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;'>
                                                            <table class='image_block block-1' width='100%' border='0' cellpadding='0' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;'>
                                                                <tr>
                                                                    <td class='pad' style='width:100%;padding-right:0px;padding-left:0px;'>
                                                                        <div class='alignment' align='center' style='line-height:10px'><img src='https://d15k2d11r6t6rl.cloudfront.net/public/users/BeeFree/beefree-gxjwsgqo1x/editor_images/onus.png' style='display: block; height: auto; border: 0; width: 100px; max-width: 100%;' width='100'></div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <table class='heading_block block-2' width='100%' border='0' cellpadding='0' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;'>
                                                                <tr>
                                                                    <td class='pad' style='width:100%;text-align:center;'>
                                                                        <h1 style='margin: 0; color: #555555; font-size: 23px; font-family: Arial, Helvetica Neue, Helvetica, sans-serif; line-height: 120%; text-align: center; direction: ltr; font-weight: 700; letter-spacing: normal; margin-top: 0; margin-bottom: 0;'><span class='tinyMce-placeholder'>Message Received From $name</span></h1>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <table class='paragraph_block block-3' width='100%' border='0' cellpadding='10' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;'>
                                                                <tr>
                                                                    <td class='pad'>
                                                                        <div style='color:#000000;font-size:14px;font-family:Arial, Helvetica Neue, Helvetica, sans-serif;font-weight:400;line-height:120%;text-align:center;direction:ltr;letter-spacing:0px;mso-line-height-alt:16.8px;'>
                                                                            <p style='margin: 0;'>$subject</p>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <table class='paragraph_block block-3' width='100%' border='0' cellpadding='10' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;'>
                                                                <tr>
                                                                    <td class='pad'>
                                                                        <div style='color:#000000;font-size:14px;font-family:Arial, Helvetica Neue, Helvetica, sans-serif;font-weight:400;line-height:120%;text-align:center;direction:ltr;letter-spacing:0px;mso-line-height-alt:16.8px;'>
                                                                            <p style='margin: 0;'>$email</p>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <table class='paragraph_block block-3' width='100%' border='0' cellpadding='10' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;'>
                                                                <tr>
                                                                    <td class='pad'>
                                                                        <div style='color:#000000;direction:ltr;font-family:Arial, Helvetica Neue, Helvetica, sans-serif;font-size:14px;font-weight:400;letter-spacing:0px;line-height:120%;text-align:left;mso-line-height-alt:16.8px;'>
                                                                            <p style='margin: 0;'>$message</p>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class='row row-2' align='center' width='100%' border='0' cellpadding='0' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;'>
                                <tbody>
                                    <tr>
                                        <td>
                                            <table class='row-content stack' align='center' border='0' cellpadding='0' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000000; width: 500px;' width='500'>
                                                <tbody>
                                                    <tr>
                                                        <td class='column column-1' width='100%' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 5px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;'>
                                                            <table class='icons_block block-1' width='100%' border='0' cellpadding='0' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;'>
                                                                <tr>
                                                                    <td class='pad' style='vertical-align: middle; color: #9d9d9d; font-family: inherit; font-size: 15px; padding-bottom: 5px; padding-top: 5px; text-align: center;'>
                                                                        <table width='100%' cellpadding='0' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;'>
                                                                            <tr>
                                                                                <td class='alignment' style='vertical-align: middle; text-align: center;'>
                                                                                    <!--[if vml]><table align='left' cellpadding='0' cellspacing='0' role='presentation' style='display:inline-block;padding-left:0px;padding-right:0px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;'><![endif]-->
                                                                                    <!--[if !vml]><!-->
                                                                                    <table class='icons-inner' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; display: inline-block; margin-right: -4px; padding-left: 0px; padding-right: 0px;' cellpadding='0' cellspacing='0' role='presentation'>
                                                                                        <!--<![endif]-->
                                                                                        <tr>
                                                                                            <td style='font-family: Arial, Helvetica Neue, Helvetica, sans-serif; font-size: 15px; color: #9d9d9d; vertical-align: middle; letter-spacing: undefined; text-align: center;'><a href='#' target='_blank' style='color: #9d9d9d; text-decoration: none;'>Designed By Onus</a></td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                </tbody>
            </table><!-- End -->
        </body>
        </html>";

        $mail->send();
    }catch(Exception $e){

    }
}
?>