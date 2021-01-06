<?php

class Flash
{
    public static function set($type, $value)
    {
        if(!is_array($value)) {
            $message[] = $value;
        }
        else {
            $message = $value;
        }
        
        Session::set('flash', [
            'type' => $type,
            'message' => $message
        ]);
    }

    public static function show()
    {
        if(Session::get('flash') != false) {
            $flashes = Session::get('flash');
            Session::close('flash');

            $type_color = [
                'warning' => 'bg-yellow-200 hover:bg-yellow-300',
                'danger' => 'bg-red-200 hover:bg-red-300',
                'info' => 'bg-blue-200 hover:bg-blue-300',
                'success' => 'bg-green-200 hover:bg-green-300'
            ];

            $type_icon = [
                'warning' => '<i class="fas fa-exclamation-circle"></i>',
                'danger' => '<i class="fas fa-times-circle"></i>',
                'info' => '<i class="fas fa-question-circle"></i>',
                'success' => '<i class="fas fa-check-circle"></i>'
            ];
            
            $color = $type_color[$flashes['type']];
            $icon = $type_icon[$flashes['type']];
            $messages = $flashes['message'];
            
            include_once(ROOT.DS.'app'.DS.'views'.DS.'components'.DS.'flash.php');
        }
        else {
            return null;
        }
    }
}