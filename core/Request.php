<?php
class Request {

    public function has($keys)
    {
        $false = 0; $true = 0;
        if (is_array($keys)) {
            foreach ($keys as $key) {
                if (isset($_POST[$key]) or isset($_GET[$key])) { $true++; } else { $false++; }
            }
        } else {
            if (isset($_POST[$keys]) or isset($_GET[$keys])) { $true++; } else { $false++; }
        }
        
        return ($false > 0) ? false : (($true == 0) ? false : true);
    }

    public function all()
    {
        return array_merge($_POST, $_GET, $_FILES);
    }

    public function input($key)
    {
        return (isset($_POST[$key]))?$_POST[$key]:((isset($_GET[$key]))?$_GET[$key]:false);
    }

    public function only($only)
    {
        $filtered = [];
        foreach ($_POST as $key => $value) {
            if (in_array($key, $only)) {
                $filtered[$key] = $value;
            }
        }

        foreach ($_GET as $key => $value) {
            if (in_array($key, $only)) {
                $filtered[$key] = $value;
            }
        }
        return $filtered;
    }

    public function except($only)
    {
        $filtered = [];
        foreach ($_POST as $key => $value) {
            if (!in_array($key, $only)) {
                $filtered[$key] = $value;
            }
        }

        foreach ($_GET as $key => $value) {
            if (!in_array($key, $only)) {
                $filtered[$key] = $value;
            }
        }
        return $filtered;
    }

    public function validate($validation)
    {
        $Validation = new Validation;
        return $Validation->validating($this->all(), $validation);
    }
}