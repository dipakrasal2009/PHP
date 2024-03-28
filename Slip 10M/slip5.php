<?php  
    $num=153;  
    $total=0;  
    $x=$num;  

    while($x!=0)  
    {  
        $rem=$x%10;  
        $total=$total+$rem*$rem*$rem;  
        $x=$x/10;  
    }  
    if($num==$total)  
    {  
        echo "Yes $num is an Armstrong number\n";  
    }  
    else  
    {  
        echo "No $num is not an armstrong number\n";  
    }  
?>  