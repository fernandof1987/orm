<?php

namespace App\Ado;

class TCriteria extends TExpression
{
    private $expressions;
    private $operators;
    private $properties;

    public function __construct()
    {
        $this->expressions = [];
        $this->operators = [];
    }

    public function add(TExpression $expression, $operator = self::AND_OPERATOR)
    {
        if(empty($this->expressions)) {
            $operator = NULL;
        }
        $this->expressions[] = $expression;
        $this->operators[] = $operator;
    }

    public function dump()
    {
        if(is_array($this->expressions)) {
            if(count($this->expressions > 0)) {
                $result = '';
                foreach($this->expressions as $i => $expression) {
                    $operator = $this->operators[$i];
                    $result .= $operator . $expression->dump() . ' ';
                }
                $result = trim($result);
                return "{$result}";
            }
        }
    }

    public function setProperty($property, $value)
    {
        if(isset($values)) {
            $this->properties[$property] = $value;
        }else {
            $this->properties[$property] = NULL;
        }
    }

    public function getProperty($property)
    {
        if(isset($this->properties[$property])) {
            return $this->properties[$property];
        }
    }
}