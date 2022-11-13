<?php
function IntToRoman($num)  
{ 
    $n = intval($num);
    $hasil = ''; 
 
    $varArray = array(
        'M' => 1000, 'CM' => 900, 'D' => 500, 'CD' => 400, 
        'C' => 100, 'XC' => 90, 'L' => 50, 'XL' => 40, 
        'X' => 10, 'IX' => 9, 'V' => 5, 'IV' => 4, 'I' => 1
    ); 
 
    foreach ($varArray as $roman => $nilai)  
    {
        $cek = intval($n / $nilai); 
 
        $hasil .= str_repeat($roman, $cek); 
 
        $n = $n % $nilai; 
    } 

    return $hasil; 
} 
echo IntToRoman(58), "<br>", IntToRoman(1994);
?>