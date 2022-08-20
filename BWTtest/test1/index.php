<?php
    function arrayMax($array): int
    {
        $max = null;

        foreach($array as $element)
        {
            if($element > $max or $max === null)
                $max = $element;
        }
        return $max;
    }