

<!DOCTYPE html>  
    <html>  
    <body>  
    <table align = "left" border = "1" cellpadding = "3" cellspacing = "0">  
    <tr>  
    <td>Value</td>  
    <td>Multiplication</td>  
    </tr>  
    <?php    
    $x = 1;  
    while($x <= 5) {  
        echo "<tr>";  
      echo "<td> $x*$x </td>";  
      echo "<td>" .$x*$x. "</td>";  
        echo "</tr>";  
      $x++;  
    }   
    ?>    
    </table>  
    </body>  
    </html>  