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
        $tes = 'a';
        if (!empty($tes)) {
            $tes = 'b';
        }
        if (!empty($tes)) {
            $tes = 'b';
        }
    }

}
