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
                'warning' => 'material-icons-outlined',
                'danger' => 'material-icons-outlined',
                'info' => 'material-icons-outlined',
                'success' => 'material-icons-outlined'
            ];

            $type_icon_color = [
                'warning' => 'text-yellow-500',
                'danger' => 'text-red-500',
                'info' => 'text-blue-500',
                'success' => 'text-green-500'
            ];

            $type_icon_label = [
                'warning' => 'error_outline',
                'danger' => 'cancel',
                'info' => 'info',
                'success' => 'check_circle'
            ];

            $type_flash_label = [
                'warning' => 'Opps!',
                'danger' => 'Something wrong!',
                'info' => 'Here some info.',
                'success' => 'Wohoo!'
            ];
            
            $color = $type_color[$flashes['type']];
            $icon_type = $type_icon[$flashes['type']];
            $icon_color = $type_icon_color[$flashes['type']];
            $icon_label = $type_icon_label[$flashes['type']];
            $flash_label = $type_flash_label[$flashes['type']];
            $messages = $flashes['message'];
            
            include_once(ROOT.DS.'app'.DS.'views'.DS.'components'.DS.'flash.php');
        }
        else {
            return null;
        }
    }
}