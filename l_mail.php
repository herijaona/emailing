<?php
// require 'PHPMailer/src/Exception.php';
if (isset($_POST['act_ion']) || isset($_POST['send_m'])) {

    $mail_sent = array();

    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';
    require 'PHPMailer/src/OAuth.php';
    require 'PHPMailer/src/POP3.php';

    $mail = new PHPMailer;
    // $mail->SMTPDebug = 2;
    // echo "Mailer";
    // SMTP configuration
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'fanilorakoto.94@gmail.com';
    $mail->Password   = 'r4fanilos4741';
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;

// 781e5e245d69b566979b86e28d23f2c7
    if (isset($_POST['send_m'])) {
        $m = explode(',', $_POST['m_m']);

        foreach ($m as $k => $v) {
            $m[$k] = trim($v);
        }
    }

    if (isset($_POST['act_ion'])) {
        $target_dir    = "up/";
        $target_file   = $target_dir . basename($_FILES["m_file"]["name"]);
        $uploadOk      = 1;
        $finish        = 0;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Allow certain file formats
        if ($imageFileType != "txt") {
            showText("Sorry, only .txt files are allowed.");
            $uploadOk = 0;
        }

        if ($uploadOk) {
            if (move_uploaded_file($_FILES["m_file"]["tmp_name"], $target_file)) {
                showText("The file " . basename($_FILES["m_file"]["name"]) . " has been uploaded.");
                $finish = 1;
            } else {
                showText("Sorry, there was an error uploading your file.");
            }
        }
        $m = array();
        if ($finish) {
            $f1 = fopen($target_file, "r");
            do {
                $re = fgets($f1);
                array_push($m, trim($re));
            } while (!feof($f1));
            fclose($f1);
        }
    }
// GET EMAIL ALREADY SENT
    $if_m       = fopen('up/fd.txt', 'r');
    $mai_efsent = array();

    do {
        $res = fgets($if_m);
        array_push($mai_efsent, trim($res));
    } while (!feof($if_m));
    fclose($if_m);

    foreach ($m as $e => $a) {
        if (!in_array($a, $mai_efsent)) {

            $mail->setFrom('fanilorakoto.94@gmail.com', 'VitaSoftMG');
            $mail->addReplyTo('fanilorakoto.94@gmail.com', 'VitaSoftMG');

            // Add a recipient
            $mail->addAddress($a);

            /*// Add cc or bcc
            $mail->addCC('cc@example.com');
            $mail->addBCC('bcc@example.com');*/

            // Email subject
            $mail->Subject = 'Developpeur Offre';

            // Set email format to HTML
            $mail->isHTML(true);

            $mail->msgHTML(file_get_contents('ht.html'));

            // Send email
            if (!$mail->send()) {
                array_push($mail_sent, "Not sent to: " . $a);
            } else {
                array_push($mail_sent, $a);
            }

            $mail->clearAddresses();
        }
    }

    $if_m = fopen('up/fd.txt', 'w');

    foreach (array_unique($mai_efsent) as $k1 => $va) {
        if ($va != '') {
            $txt = $va . "\n";
            fwrite($if_m, $txt);
        }
    }

    foreach (array_unique($mail_sent) as $k => $v) {
        if ($v != '') {
            if (count(explode(':', $v)) == 1) {
                $txt = $v . "\n";
                fwrite($if_m, $txt);
            }
        }
    }

    echo "<div class='container'>";
    echo "<pre>";
    print_r($mail_sent);
    echo "</pre>";
    echo "</div>";
}

function showText($value = '')
{
    echo "<div class='container'>";
    echo $value;
    echo "</div>";
}
