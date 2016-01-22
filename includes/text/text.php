<?php
	$lang = array();
    
	//Account
	$lang = array_merge($lang,array(
		"ACCOUNT_SPECIFY_USERNAME" 				=> "Please enter your username",
		"ACCOUNT_SPECIFY_PASSWORD" 				=> "Please enter your password",
		"ACCOUNT_SPECIFY_EMAIL"					=> "Please enter your email address",
		"ACCOUNT_INVALID_EMAIL"					=> "Invalid email address",
		"ACCOUNT_INVALID_USERNAME"				=> "Invalid username",
		"ACCOUNT_USER_OR_EMAIL_INVALID"			=> "username or email address is invalid",
		"ACCOUNT_USER_OR_PASS_INVALID"			=> "Opps! Try Again.",
		"ACCOUNT_ALREADY_ACTIVE"				=> "Your account is already activatived",
		"ACCOUNT_INACTIVE"						=> "Your account is in-active. Check your emails / spam folder for account activation instructions",
		"ACCOUNT_USER_CHAR_LIMIT"				=> "Your username must be no fewer than %m1% characters or greater than %m2%",
		"ACCOUNT_PASS_CHAR_LIMIT"				=> "Your password must be no fewer than %m1% characters or greater than %m2%",
		"ACCOUNT_PASS_MISMATCH"					=> "passwords must match",
		"ACCOUNT_USERNAME_IN_USE"				=> "username %m1% is already in use",
		"ACCOUNT_EMAIL_IN_USE"					=> "email %m1% is already in use",
		"ACCOUNT_LINK_ALREADY_SENT"				=> "An activation email has already been sent to this email address in the last %m1% hour(s)",
		"ACCOUNT_NEW_ACTIVATION_SENT"			=> "We have emailed you a new activation link, please check your email",
		"ACCOUNT_NOW_ACTIVE"					=> "Your account is now active",
		"ACCOUNT_SPECIFY_NEW_PASSWORD"			=> "Please enter your new password",	
		"ACCOUNT_NEW_PASSWORD_LENGTH"			=> "New password must be no fewer than %m1% characters or greater than %m2%",	
		"ACCOUNT_PASSWORD_INVALID"				=> "Current password doesn't match the one we have one record",	
		"ACCOUNT_EMAIL_TAKEN"					=> "This email address is already taken by another user",
		"ACCOUNT_DETAILS_UPDATED"				=> "Account details updated",
		"ACTIVATION_MESSAGE"					=> "You will need first activate your account before you can login, follow the below link to activate your account. \n\n
													%m1%/user/activate/?token=%m2%",							
		"ACCOUNT_REGISTRATION_COMPLETE_TYPE1"	=> "You can now login!",
		"ACCOUNT_REGISTRATION_COMPLETE_TYPE2"	=> "Check your email for the activation email.",
	));
	
	//Forgot password
	$lang = array_merge($lang,array(
		"FORGOTPASS_INVALID_TOKEN"				=> "Invalid token",
		"FORGOTPASS_NEW_PASS_EMAIL"				=> "We have emailed you a new password",
		"FORGOTPASS_REQUEST_CANNED"				=> "Lost password request cancelled",
		"FORGOTPASS_REQUEST_EXISTS"				=> "There is already a outstanding lost password request on this account",
		"FORGOTPASS_REQUEST_SUCCESS"			=> "We have emailed you instructions on how to regain access to your account",
	));
	
	//Miscellaneous
	$lang = array_merge($lang,array(
		"WELCOMEUSER"							=> "Welcome!",
		"CONFIRM"								=> "Confirm",
		"DENY"									=> "Deny",
		"SUCCESS"								=> "Success",
		"ERROR"									=> "Error",
		"NOTHING_TO_UPDATE"						=> "Nothing to update",
		"SQL_ERROR"								=> "Fatal SQL error",
		"MAIL_ERROR"							=> "Fatal error attempting mail, contact your server administrator",
		"MAIL_TEMPLATE_BUILD_ERROR"				=> "Error building email template",
		"MAIL_TEMPLATE_DIRECTORY_ERROR"			=> "Unable to open mail-templates directory. Perhaps try setting the mail directory to %m1%",
		"MAIL_TEMPLATE_FILE_EMPTY"				=> "Template file is empty... nothing to send",
		"FEATURE_DISABLED"						=> "This feature is currently disabled",
	));
    
function lang($key,$markers = NULL){
    global $lang;
    if($markers == NULL){
        $str = $lang[$key];
    }else{
        $str = $lang[$key];
        $iteration = 1;
        foreach($markers as $marker){
            $str = str_replace('%m'.$iteration.'%',$marker,$str);
            $iteration++;
        }
    }
    if($str == ""){
        return ('No language key found');
    }else{
        return $str;
    }
}
$messages = array();
$errors = array();