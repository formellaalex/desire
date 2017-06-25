<?php
/**
 * Template Name: Contact Template
 */
?>
<div id="contact-container">
    <div class="contact-content">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="col-md-12">
                    <div class="contact-form">
                        <div class="col-md-9 no-margin">
                            <p class="contact-title text-center"> LET'S START THE CONVERSATION </p>
                        </div>
                        <div class="row">
                            <div class="col-md-9">
                                <form class="form-group">
                                    <input name="name" type="text" class="form-control" placeholder="NAME" required/>
                                    <input name="email" type="text" class="form-control" placeholder="EMAIL" required/>
                                    <input name="phone" type="text" class="form-control" placeholder="PHONE"/>
                                    <input name="subject" type="text" class="form-control" placeholder="SUBJECT" required/>
                                    <div class="contact-message-container">
                                        <h6 class="contact-message-label">MESSAGE</h6>
                                        <textarea name="message" class="form-control" placeholder="Message" required> </textarea>
                                        <button class="pull-right" name="send_mail" disabled> <h5> SUBMIT </h5></button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-3">
                                <div class="contact-text">
                                    <h6 class="title">EMAIL</h6>
                                    <h6 class="subtitle">info@desireglass.com</h6> <br />
                                    <h6 class="title">PHONE</h6>
                                    <h6 class="subtitle">+48 505 608 996</h6>
                                    <h6 class="subtitle">+48 506 336 182</h6> <br />
                                    <h6 class="title">ADDRES</h6>
                                    <h6 class="subtitle">Al. Grunwaldzka 481</h6>
                                    <h6 class="subtitle">Gdansk 80-229</h6>
                                    <h6 class="subtitle">POLAND</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php

//if (isset($_POST["send_mail"])) {
//
//    echo "JOOOOOŁ";
//    $msg = $_POST["message"];
//    $name = $_POST["name"];
//    $phone = $_POST["phone"];
//    $subject = $_POST["subject"];
//    $mail = $_POST["mail"];
//
//    $msg = wordwrap($msg,70);
//
//    $header = "Name: ".$name."\n"."Phone: ".$phone."\n";
//    $text = $header.$msg;
//
//    $headers = 'From: '.$mail . "\r\n" .
//        'Reply-To: '.$mail . "\r\n" .
//        'X-Mailer: PHP/' . phpversion();
//
//    mail("info@desireglass.com",$subject,$text, $headers);
//
//    header('Location: '.$_SERVER['PHP_SELF']);
//    die();
//}

?>
