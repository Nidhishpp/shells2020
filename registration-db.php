<?php
if(isset($_POST['contact-email']))
{
    require("connection.php");
    require ('vendor/autoload.php');
    
    if (filter_input(INPUT_POST, "contact-email", FILTER_VALIDATE_EMAIL) === false) 
    {
        // echo'<script>alert("Email is not valid");</script>';
        echo 3;
        unset($_POST['contact-email']);
        // header('register.php');
        return;
    } 
    else
    {
     
        $query="SELECT * FROM registration WHERE contact_email= '".filter_var($_POST['contact-email'], FILTER_SANITIZE_EMAIL)."' OR contact_phone=".$_POST['contact-phone'];
        $result=mysqli_query($connection, $query);
        if (!$result) {
            // echo '<script>alert("Registration Unsucessful: '. mysqli_error($connection).'");</script>';
            echo 0;
            unset($_POST);
            return;
        }
        else
        {
            if(mysqli_num_rows($result) == 0)
            {
                $query="insert into registration(college_name, contact_email, contact_phone, total_participant";
                for($i=1;$i<=filter_var($_POST['participants-count'], FILTER_SANITIZE_NUMBER_INT);$i++)
                    $query=$query.", participant".$i;
    
                $query=$query.") values('"
                        . filter_var($_POST['college-name'], FILTER_SANITIZE_STRING)."','"
                        .filter_var($_POST['contact-email'], FILTER_SANITIZE_EMAIL)."',"
                        .$_POST['contact-phone'].","
                        .filter_var($_POST['participants-count'], FILTER_SANITIZE_NUMBER_INT);
    
                for($i=1;$i<=filter_var($_POST['participants-count'], FILTER_SANITIZE_NUMBER_INT);$i++)
                $query=$query.",'".filter_var($_POST['participant-'.$i], FILTER_SANITIZE_STRING)."'";
    
                $query=$query.")";
  
                $mail = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"><html data-editor-version="2" class="sg-campaigns" xmlns="http://www.w3.org/1999/xhtml"><head>
                        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
                        <!--[if !mso]><!-->
                        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
                        <!--<![endif]-->
                        <!--[if (gte mso 9)|(IE)]>
                        <xml>
                        <o:OfficeDocumentSettings>
                            <o:AllowPNG/>
                            <o:PixelsPerInch>96</o:PixelsPerInch>
                        </o:OfficeDocumentSettings>
                        </xml>
                        <![endif]-->
                        <!--[if (gte mso 9)|(IE)]>
                        <style type="text/css">
                        body {width: 600px;margin: 0 auto;}
                        table {border-collapse: collapse;}
                        table, td {mso-table-lspace: 0pt;mso-table-rspace: 0pt;}
                        img {-ms-interpolation-mode: bicubic;}
                        </style>
                        <![endif]-->
                        <style type="text/css">
                        body, p, div {
                        font-family: courier, monospace;
                        font-size: 16px;
                        }
                        body {
                        color: #FFFFFF;
                        }
                        body a {
                        color: #fe5d61;
                        text-decoration: none;
                        }
                        p { margin: 0; padding: 0; }
                        table.wrapper {
                        width:100% !important;
                        table-layout: fixed;
                        -webkit-font-smoothing: antialiased;
                        -webkit-text-size-adjust: 100%;
                        -moz-text-size-adjust: 100%;
                        -ms-text-size-adjust: 100%;
                        }
                        img.max-width {
                        max-width: 100% !important;
                        }
                        .column.of-2 {
                        width: 50%;
                        }
                        .column.of-3 {
                        width: 33.333%;
                        }
                        .column.of-4 {
                        width: 25%;
                        }
                        @media screen and (max-width:480px) {
                        .preheader .rightColumnContent,
                        .footer .rightColumnContent {
                        text-align: left !important;
                        }
                        .preheader .rightColumnContent div,
                        .preheader .rightColumnContent span,
                        .footer .rightColumnContent div,
                        .footer .rightColumnContent span {
                        text-align: left !important;
                        }
                        .preheader .rightColumnContent,
                        .preheader .leftColumnContent {
                        font-size: 80% !important;
                        padding: 5px 0;
                        }
                        table.wrapper-mobile {
                        width: 100% !important;
                        table-layout: fixed;
                        }
                        img.max-width {
                        height: auto !important;
                        max-width: 100% !important;
                        }
                        a.bulletproof-button {
                        display: block !important;
                        width: auto !important;
                        font-size: 80%;
                        padding-left: 0 !important;
                        padding-right: 0 !important;
                        }
                        .columns {
                        width: 100% !important;
                        }
                        .column {
                        display: block !important;
                        width: 100% !important;
                        padding-left: 0 !important;
                        padding-right: 0 !important;
                        margin-left: 0 !important;
                        margin-right: 0 !important;
                        }
                        }
                        </style>
                        <!--user entered Head Start-->

                        <!--End Head user entered-->
                        </head>
                        <body>
                        <center class="wrapper" data-link-color="#fe5d61" data-body-style="font-size:16px; font-family:courier, monospace; color:#FFFFFF; background-color:#f2f4fb;">
                        <div class="webkit">
                            <table cellpadding="0" cellspacing="0" border="0" width="100%" class="wrapper" bgcolor="#f2f4fb">
                            <tbody><tr>
                                <td valign="top" bgcolor="#f2f4fb" width="100%">
                                <table width="100%" role="content-container" class="outer" align="center" cellpadding="0" cellspacing="0" border="0">
                                    <tbody><tr>
                                    <td width="100%">
                                        <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                        <tbody><tr>
                                            <td>
                                            <!--[if mso]>
                        <center>
                        <table><tr><td width="600">
                        <![endif]-->
                                                    <table width="100%" cellpadding="0" cellspacing="0" border="0" style="width:100%; max-width:600px;" align="center">
                                                        <tbody><tr>
                                                        <td role="modules-container" style="padding:0px 0px 0px 0px; color:#FFFFFF; text-align:left;" bgcolor="#f2f4fb" width="100%" align="left"><table class="module preheader preheader-hide" role="module" data-type="preheader" border="0" cellpadding="0" cellspacing="0" width="100%" style="display: none !important; mso-hide: all; visibility: hidden; opacity: 0; color: transparent; height: 0; width: 0;">
                        <tbody><tr>
                        <td role="module-content">
                        <p>You\'ve found the secret!</p>
                        </td>
                        </tr>
                        </tbody></table><table class="wrapper" role="module" data-type="image" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;" data-muid="670741c7-08d7-46cf-9f68-83dd4fa673dc">
                        <tbody>
                        <tr>
                        <td style="font-size:6px; line-height:10px; padding:0px 0px 0px 0px;" valign="top" align="center">
                            <a href="http://shells.kristujayanti.edu.in/"><img class="max-width" border="0" style="display:block; color:#000000; text-decoration:none; font-family:Helvetica, arial, sans-serif; font-size:16px; max-width:100% !important; width:100%; height:auto !important;" width="600" alt="Shells2020" data-proportionally-constrained="true" data-responsive="true" src="http://cdn.mcauto-images-production.sendgrid.net/0ffea06969e2f8c2/973903e9-493f-499e-94aa-98f53b13b30a/3138x642.png"></a>
                        </td>
                        </tr>
                        </tbody>
                        </table><table class="wrapper" role="module" data-type="image" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;" data-muid="3Ypdby9Xfsf2rN27zTDEfN">
                        <tbody><tr>
                        <td style="font-size:6px; line-height:10px; padding:0px 0px 0px 0px;" valign="top" align="center">
                            <a href="http://shells.kristujayanti.edu.in/"><img class="max-width" border="0" style="display:block; color:#000000; text-decoration:none; font-family:Helvetica, arial, sans-serif; font-size:16px; max-width:100% !important; width:100%; height:auto !important;" src="http://cdn.mcauto-images-production.sendgrid.net/0ffea06969e2f8c2/65ed51a4-cab3-4792-9810-601d5c237727/5334x3000.png" alt="Shells2020" width="600" data-responsive="true" data-proportionally-constrained="false"></a>
                        </td>
                        </tr>
                        </tbody></table><table class="module" role="module" data-type="text" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;" data-muid="7pyDCmyDaGcm5WsBBSaEgv" data-mc-module-version="2019-10-22">
                        <tbody><tr>
                        <td style="background-color:#ffffff; padding:50px 0px 30px 0px; line-height:22px; text-align:inherit;" height="100%" valign="top" bgcolor="#ffffff"><div><div style="font-family: inherit; text-align: center"><span style="font-size: 24px; color: #000000">We have a new Registration.</span></div><div></div></div></td>
                        </tr>
                        </tbody></table><table class="module" role="module" data-type="text" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;" data-muid="nSVYnVzPLnGZ4wUdynLiKo" data-mc-module-version="2019-10-22">
                        <tbody><tr>
                        <td style="background-color:#ffffff; padding:30px 50px 30px 50px; line-height:22px; text-align:inherit;" height="100%" valign="top" bgcolor="#ffffff"><div><div style="font-family: inherit; text-align: left"><span style="color: #474646">'.$_POST['college-name'].' just registered through website.</span></div>
                        <div style="font-family: inherit; text-align: left"><span style="color: #474646">Email: '.$_POST['contact-email'].'</span></div>
                        <div style="font-family: inherit; text-align: left"><span style="color: #474646">Mobile: '.$_POST['contact-phone'].'</span></div>
                        <div style="font-family: inherit; text-align: left"><br></div>
                        <div style="font-family: inherit; text-align: left"><span style="color: #474646">Participants List</span></div>';
                        for ($i = 1; $i <= $_POST['participants-count']; $i++){
                            $mail = $mail.'<div style="font-family: inherit; text-align: left"><span style="color: #474646">'.$_POST['participant-' . $i].'</span></div>';
                        }

                        $mail = $mail.'<div style="font-family: inherit; text-align: left"><br></div><div></div></div></td>
                        </tr>
                        </tbody></table><table class="wrapper" role="module" data-type="image" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;" data-muid="6jxKSRk9dKQ1Tvi1wtnu8q">
                        <tbody><tr>
                        <td style="font-size:6px; line-height:10px; padding:0px 0px 0px 0px;" valign="top" align="center">
                            <img class="max-width" border="0" style="display:block; color:#000000; text-decoration:none; font-family:Helvetica, arial, sans-serif; font-size:16px; max-width:100% !important; width:100%; height:auto !important;" src="http://cdn.mcauto-images-production.sendgrid.net/0ffea06969e2f8c2/0232f0f4-e664-4aa1-af85-eaa9560dcea8/1024x437.jpg" alt="Sells2020" width="600" data-responsive="true" data-proportionally-constrained="false">
                        </td>
                        </tr>
                        </tbody></table><table class="module" role="module" data-type="spacer" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;" data-muid="iYySZ4rAB78PLoW7vU13Bb">
                        <tbody><tr>
                        <td style="padding:0px 0px 30px 0px;" role="module-content" bgcolor="">
                        </td>
                        </tr>
                        </tbody></table></td>
                                                        </tr>
                                                    </tbody></table>
                                                    <!--[if mso]>
                                                    </td>
                                                </tr>
                                                </table>
                                            </center>
                                            <![endif]-->
                                            </td>
                                        </tr>
                                        </tbody></table>
                                    </td>
                                    </tr>
                                </tbody></table>
                                </td>
                            </tr>
                            </tbody></table>
                        </div>
                        </center>


                        </body></html>';

                    $email = new \SendGrid\Mail\Mail();
                    $email->setFrom($_POST['contact-email'], $_POST['college-name']);
                    $email->setSubject("New Registration");
                    $email->addTo("shells@kristujayanti.com", "Shells 2020");
                    $email->addTo("19CS602010@kristujayanti.com", "Nidhish PP");
                    $email->addContent("text/plain", "We Have a new registration");
                    $email->addContent(
                        "text/html",
                        $mail
                    );
                    $sendgrid = new \SendGrid('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');
                    try {
                        $response = $sendgrid->send($email);
                        // print $response->statusCode() . "\n";
                        // print_r($response->headers());
                        // print $response->body() . "\n";
                    } catch (Exception $e) {
                        echo 'Caught exception: ' . $e->getMessage() . "\n";
                    }
    
                if (mysqli_query($connection, $query)) {
                    // echo'<script>alert("Registration Sucessful. Thank you for registering.");</script>';
                    echo 1;
                    unset($_POST['contact-email']);
                    // header('register.php');
                    return;
                }
                else{
                    // echo '<script>alert("Registration Unsucessful: '. mysqli_error($connection).'");</script>';
                    echo 0;
                    unset($_POST['contact-email']);
                    // header('register.php');
                    return;
                }
            }
            else
            {
                // echo'<script>alert("Email or/and phone number exists");</script>';
                echo 2;
                unset($_POST['contact-email']);
                // header('register.php');
                return;
            }
        }
    }
    mysqli_close($connection);
} else{
    echo 0;
    unset($_POST['contact-email']);
    header('register.php');
    return;
}