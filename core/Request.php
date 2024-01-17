<?php
class Request {

    public function has($keys) {
        $false = 0; $true = 0;
        if (is_array($keys)) {
            foreach ($keys as $key) {
                if (isset($_POST[$key]) or isset($_GET[$key]) or isset($_FILES[$key])) { $true++; } else { $false++; }
            }
        } else {
            if (isset($_POST[$keys]) or isset($_GET[$keys]) or isset($_FILES[$keys])) { $true++; } else { $false++; }
        }
        
        return ($false > 0) ? false : (($true == 0) ? false : true);
    }

    public function all() {
        return array_merge($_POST, $_GET, $_FILES);
    }

    public function input($key) {
        if (isset($_GET[$key])) return $_GET[$key];
        if (isset($_POST[$key])) return $_POST[$key];
        if (isset($_FILES[$key])) return $_FILES[$key];
        return False;
    }

    public function only(... $only) {
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

        foreach ($_FILES as $key => $value) {
            if (in_array($key, $only)) {
                $filtered[$key] = $value;
            }
        }

        return $filtered;
    }

    public function except($only) {
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

        foreach ($_FILES as $key => $value) {
            if (!in_array($key, $only)) {
                $filtered[$key] = $value;
            }
        }

        return $filtered;
    }

    public function validate($validation) {
        $Validation = new Validation;
        return $Validation->validating($this->all(), $validation);
    }
}