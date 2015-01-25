<?php
class Calculator
{
    /**
     * assert アノテーション
     * @assert (0, 0) == 0
     * @assert (0, 1) == 1
     * @assert (1, 0) == 1
     * @assert (1, 1) == 2
     */
    public function add($a, $b)
    {
        return $a + $b;
    }

    public function test1(){
        return 100;
    }

    public function test1(){
        return 100;
    }
}
