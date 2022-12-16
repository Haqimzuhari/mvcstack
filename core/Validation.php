<?php
class Validation {

    private $array;

    public function validating($array, $validations)
    {
        $this->array = $array;
        foreach ($validations as $field => $rules_string) {
            $rules = explode("|", $rules_string);

            foreach ($rules as $rule_string) {
                $rule = explode(":", $rule_string);

                if ($rule[0] == "confirm") {
                    if (!$this->confirm($field, $rule[1])) {
                        Toast::flash('warning', 'Password was not identical');
                        return false;
                    }
                }
            }
        }

        return true;
    }
    
    private function confirm($check_from, $confirm_with)
    {
        return ($this->array[$check_from] === $this->array[$confirm_with]) ? true : false;
    }
}