<?php

class Module {
    public static function model(){
        return [
            'modeler' => 'modeler',
            'operations' => 'operations'
        ];
    }
}

class Operations {

    public static $module = Module::class;
    const Module = Module::class;

    public static function test(){

        print_r(static::$module::model());

    }

}
Operations::test();
