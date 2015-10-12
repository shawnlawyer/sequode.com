<?php
class SQDE_RegisterPackage {
    public static $package = 'Register';
	public static function model(){
        $model = (object) null;
        $model->context = 'register';
        $model->modeler = 'SQDE_User';
        $model->card_objects = 'SQDE_RegisterCardObjects';
        $model->form_objects = 'SQDE_RegisterFormObjects';
        $model->operations = 'SQDE_RegisterOperations';
        $model->xhr = (object) null;
        $model->xhr->operations = 'SQDE_RegisterOperationsXHR';
        $model->xhr->cards = 'SQDE_RegisterCardsXHR';
        $model->xhr->dialogs = array(
            'signup' => array(
                'session_store_key' => 'signup',
                'session_store_setup' => (object) array('step'=>0, 'prep'=> (object) null),
                'card'=> 'signup',
                'steps' => array(
                    (object) array(
                        'forms'=> array('email'),
                        'content'=> (object) array(
                            'head' => 'Register Email Address',
                            'body' => 'Enter an email address to begin.'
                        ),
                        'prep' => true,
                        'required_members' => array('email')
                    ),
                    (object) array(
                        'forms'=> array('password'),
                        'content'=> (object) array(
                            'head' => 'Create Password',
                            'body' => 'A password must be at least 8 characters long and contain at least 1 capital letter (A), 1 lowercase letter (a), 1 number (1) and one symbol character(!).'
                        ),
                        'prep' => true,
                        'required_members' => array('password','confirm_password')
                    ),
                    (object) array(
                        'forms'=> array('terms','acceptTerms'),
                        'content'=> (object) array(
                            'head' => 'Terms &amp; Conditions of Use',
                            'body' => ''
                        ),
                        'prep' => true,
                        'required_members' => array('accept')
                    ),
                    (object) array(
                        'forms'=> array('verify'),
                        'content'=> (object) array(
                            'head' => 'Email Verification',
                            'body' => 'An email has been sent to you containing a verification token. <br/><br/>Copy and Paste the token to verify your email address.'
                        ),
                        'prep' => true,
                        'required_members' => array('token')
                        'operation' => 'updatePassword'
                    ),
                    (object) array(
                        'content'=> (object) array(
                            'head' => 'Registration Complete!',
                            'body' => 'Email address has been verified. You can now login.'
                        )
                    )
                )
            )
        );
		return $model;
	}
}