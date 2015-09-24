<?php
class SQDE_AccountPackage {
    public static $package = 'Account';
	public static function model(){
        $model = (object) null;
        $model->context = 'account';
        $model->modeler = 'SQDE_AuthenticatedUser';
        $model->card_objects = 'SQDE_AccountCardObjects';
        $model->form_objects = 'SQDE_AccountFormObjects';
        $model->operations = 'SQDE_AccountOperations';
        $model->xhr = (object) null;
        $model->xhr->operations = 'SQDE_AccountOperationsXHR';
        $model->xhr->forms = 'SQDE_AccountFormsXHR';
        $model->xhr->cards = 'SQDE_AccountCardsXHR';
        $model->xhr->dialogs = array(
            'update_password' => array(
                'steps' => array(
                    (object) array(
                        'forms'=> array('updatePassword'),
                        'content'=> (object)  array(
                            'head' => 'New Password',
                            'body' => 'A password must be at least 8 characters long and contain at least 1 capital letter (A), 1 lowercase letter (a), 1 number (1) and one symbol character(!).'
                        ),
                        'prep' => 'verifyNewPassword'
                    ),
                    (object) array(
                        'forms'=> array('password'),
                        'content'=> (object) array(
                            'head' => 'Current Password',
                            'body' => 'Enter your current password.'
                        ),
                        'prep' => 'verifyPassword',
                        'operation' => 'updatePassword'
                    ),
                    (object) array(
                        'content'=> (object) array(
                            'head' => 'Password Updated',
                            'body' => 'Be sure to use the new password the next time you login.'
                        )
                    )
                )
            )
        );
		return $model;
	}
}