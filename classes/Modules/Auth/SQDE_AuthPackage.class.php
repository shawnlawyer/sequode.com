<?php
class SQDE_AuthPackage {
    public static $package = 'Auth';
	public static function model(){
        $model = (object) null;
        $model->context = 'auth';
        $model->modeler = 'SQDE_AuthenticatedUser';
        $model->card_objects = 'SQDE_AuthCardObjects';
        $model->form_objects = 'SQDE_AuthFormObjects';
        $model->operations = 'SQDE_AuthOperations';
        $model->xhr = (object) null;
        $model->xhr->operations = 'SQDE_AuthOperationsXHR';
        $model->xhr->cards = 'SQDE_AuthCardsXHR';
        $model->xhr->dialogs = array(
            'login' => array(
                'session_store_key' => 'login',
                'session_store_setup' => (object) array('step'=>0, 'prep'=> (object) null),
                'card'=> 'login',
                'steps' => array(
                    (object) array(
                        'forms'=> array('login'),
                        'content'=> (object) array(
                            'head' => 'Login',
                            'body' => 'Enter your email address / login key'
                        ),
                        'prep' => true,
                        'required_members' => array('login')
                    ),
                    (object) array(
                        'forms'=> array('secret'),
                        'content'=> (object) array(
                            'head' => 'Login Secret',
                            'body' => 'Enter your password / secret key'
                        ),
                        'prep' => true,
                        'operation' => 'login'
                    )
                )
            )
        );
		return $model;
	}
}