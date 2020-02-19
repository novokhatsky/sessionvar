<?php

namespace novokhatsky\sessionvar;

Class SessionVar
{
    private $name;

    function __construct($name)
    {
        $this->name = $name;
    }

    function setValue($value)
    {
        $_SESSION[$this->name] = $value;
    }

    function getValue()
    {
        if (isset($_SESSION[$this->name])) {
            return $_SESSION[$this->name];
        } else {

            return null;
        }
    }

    function popValue()
    {
        $value = $this->getValue();

        if ($value) {
            unset($_SESSION[$this->name]);

            return $value;
        }

        return null;
    }
}

