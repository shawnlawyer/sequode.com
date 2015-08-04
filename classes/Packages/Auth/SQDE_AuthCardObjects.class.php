<?php
class SQDE_AuthCardObjects {
    public static $package = 'Auth';
    public static function login(){
        $card_object = (object) null;
        $card_object->head = 'Login';
        $card_object->icon_background = 'sessions-icon-background';
        $card_object->size = 'medium';
        $card_object->body = SQDE_Forms::render('Auth','login');
        return $card_object;
    }
    public static function terms(){
        $card_object = (object) null;
        $card_object->head = 'Login';
        $card_object->icon_background = 'settings-icon-background';
        $card_object->size = 'medium';
        $card_object->body = array_merge(SQDE_Forms::render('Auth','terms'),SQDE_Forms::render('Auth','acceptTerms'));
        return $card_object;
    }
}