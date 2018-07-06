<?php
// require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/OAuth.php';
require 'PHPMailer/src/POP3.php';

$mail = new PHPMailer;
$mail->setFrom('noreply@eurogroupfnac.com', 'EuroGroup FNAC');
$mail->addAddress('graciasrakoto@gmail.com', 'My Friend');
$mail->Subject = 'First PHPMailer Message';
$mail->Body    = '<table style="height: 162px; width: 523.333px;">
<tbody>
<tr>
<td style="width: 10px;">Nom:</td>
<td style="width: 10px;">&nbsp;</td>
<td style="width: 256.333px;">&nbsp;</td>
</tr>
<tr>
<td style="width: 10px;">Prenom:</td>
<td style="width: 10px;">&nbsp;</td>
<td style="width: 256.333px;">&nbsp;</td>
</tr>
<tr>
<td style="width: 10px;">Address:</td>
<td style="width: 10px;">&nbsp;</td>
<td style="width: 256.333px;">&nbsp;</td>
</tr>
<tr>
<td style="width: 10px;">Tel:</td>
<td style="width: 10px;">&nbsp;</td>
<td style="width: 256.333px;">&nbsp;</td>
</tr>
<tr>
<td style="width: 10px;">Ville:</td>
<td style="width: 10px;">&nbsp;</td>
<td style="width: 256.333px;">&nbsp;</td>
</tr>
<tr>
<td style="width: 10px;">Pays:</td>
<td style="width: 10px;">&nbsp;</td>
<td style="width: 256.333px;">&nbsp;</td>
</tr>
</tbody>
</table> <br>

';
 $mail->isHTML(true);
if (!$mail->send()) {
    echo 'Message was not sent.';
    echo 'Mailer error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent.';
}
