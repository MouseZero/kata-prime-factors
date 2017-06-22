<?php

class PrimeFactors
{
    public function generate($number)
    {
        $primes = [];
        while(!($number % 2)){
            $number /= 2;
            $primes[] = 2;
        }
        if($number > 1) $primes[] = $number;
        return $primes;
    }
}
