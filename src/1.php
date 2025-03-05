 <?php
 // This function takes an integer $n as input and returns 1 if it is a prime number, or 0 otherwise.
 function isPrime($n) {
     if ($n <= 1) return 0;
     for ($i = 2; $i < $n; $i++) {
         if ($n % $i == 0) return 0;
     }
     return 1;
 }
 // This function takes an integer $x and returns the number of prime numbers less than or equal to $x.
 function countPrimes($x) {
     $count = 0;
     for ($i = 2; $i <= $x; $i++) {
         if (isPrime($i)) $count++;
     }
     return $count;
 }
 ?>