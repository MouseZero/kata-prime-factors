<?php

class PrimeFactors
{
    public function generate($number)
    {
        $primes = [];
        for($candidate = 2;$number >1; $candidate++) {
            for(; !($number % $candidate); $number /= $candidate) {
                $primes[] = $candidate;
            }
        }
        return $primes;
    }
}
