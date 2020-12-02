<?php


namespace app\core;


abstract class Model
{
    public const RULE_REQUIRED = 'required';
    public const RULE_EMAIL = 'email';
    public const RULE_MIN= 'min';
    public const RULE_MAX = 'max';
    public const RULE_MATCH = 'match';

    public function loadData($data)
    {
        foreach ($data as $key => $value){
            if(property_exists($this, $key)){
                $this->{$key} = $value;
            }
        }
    }
 //19:27 
    abstract public function rules(): array;
    public function validate(){
        foreach ($this->rules() as $attribute => $rules){
            $value = $this->{$attribute};
            foreach ($rules as $rule){
                $ruleName = $rule;
                if (!is_string($ruleName)){
                    $ruleName = $rule[0];
                }
                if ()

            }
        }
    }

}