<?php
class Validation {

    private $inputs=[], $field=null, $parameters=null;

    public function validating($inputs, $validations)
    {
        $this->inputs = $inputs;
        foreach ($validations as $field => $rules_string) {
            $this->field = $field;
            $rules = explode("|", $rules_string);
            foreach ($rules as $rule_string) {
                $rule = explode(":", $rule_string);
                $method = $rule[0];
                $this->parameters = $rule[1];
                if (method_exists($this, $method)) {
                    if (!call_user_func([$this, $method])) {
                        return false;
                    }
                    $this->parameters = null;
                } else {
                    dd('Validation method does not exists');
                }
            }
            $this->field = null;
        }
        return true;
    }
    
    private function confirm()
    {
        if ($this->inputs[$this->field] === $this->inputs[$this->parameters]) {
            return true;
        }
        Toast::flash('warning', 'Password not identical');
        return false;
    }

    private function unique()
    {
        $parameters = explode(",", $this->parameters);
        $model = $parameters[0];
        $column = $parameters[1];

        $data = $model::where($column, $this->inputs[$this->field])->first();
        if ($data) {
            Toast::flash('warning', 'Account already exists. Please login');
            return false;
        } else {
            return true;
        }
    }
}