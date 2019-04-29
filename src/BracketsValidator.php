<?php

namespace Anstag\BracketsValidator;

class BracketsValidator
{
    /**
     * @param $string
     * @return bool
     */
    public function isValid($string): bool
    {
        $left = ['('];
        $right = [')'];
        $count = 0;

        $string = str_split($string);

        foreach ($string as $char) {
            if (in_array($char, $left, true)) {
                $count++;
            } elseif (in_array($char, $right, true)) {
                $count--;
            }
        }

        return $count === 0;
    }
}