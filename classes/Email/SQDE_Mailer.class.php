<?php
class SQDE_Mailer {
	public static function makeTemplate($template,$hooks){
        $default_hooks = array("#WEBSITENAME#","#WEBSITEURL#","#DATE#");
        $default_replace = array('Sequode','sequode.com',date("l \\t\h\e jS"));
		$message = file_get_contents('/opts/includes/mail-templates/'.$template);
        $message = str_replace($default_hooks,$default_replace,$message);
        $message = str_replace($hooks["searchStrs"],$hooks["subjectStrs"],$message);
        if(strpos($message,"#INC-FOOTER#") !== FALSE){
            $footer = file_get_contents('/opts/includes/mail-templates/email-footer.txt');
            if($footer && !empty($footer)) $message .= str_replace($default_hooks,$default_replace,$footer);
            $message = str_replace("#INC-FOOTER#","",$message);
        }
        return $message;
	}
	public static function send($to_email, $reply_email, $reply_name, $from_email, $from_name, $subject, $body, $attachments = array()){
		$email = new PHPMailer();
		$email->isSMTP();
		$email->SMTPDebug   = 2;
        $mail->Debugoutput = 'html';
		$email->SMTPSecure  = 'tls';
		$email->SMTPAuth    = true; 
        $email->Host 		= 'email-smtp.us-east-1.amazonaws.com';
        $email->Port        = 587;
        $email->Username 	= 'AKIAJNA63ZDLQNFL4MDQ';
        $email->Password 	= 'Aiw5Lc0HBIBNsEF1czQR1voTJmr/XsAK1yF5QoHd7aaP';
        
		/*
		$email = new AmazonSESMailer('AKIAIZQXUBNBZTGRHMBA', 'FcrVXVAZkGxZr2xXAzzutM2ezEhR9vQFewH55N96');
        */
        
        $email->addAddress($to_email); 
        $email->addReplyTo($reply_email,$reply_name);
        $mail->setFrom($from_email, $from_name);
        $email->Subject = $subject;
        $email->Body = $body;
        $mail->msgHTML($body);
		$email->AltBody = strip_tags(str_replace('<br>', "\n\r", $body));
        if(is_array($attachments)){
            foreach($attachments as $value){
                $email->addAttachment($value);
            }
        }
        $email->send();
    }
	public static function systemSend($to, $subject, $body, $attachments = array()){
		self::send($to, 'noreply@sequode.com', 'Sequode', 'system@sequode.com', 'Sequode', $subject, $body);
	}
}