<!-- author: Amrit Pandey, 207907
 date: 17-06-2021
 FWP PHP Assignment 3 Solution 19 -->
<?php
 $ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels",
 "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris",
 "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" =>
 "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon",
 "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London",
 "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague",
 "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta",
 "Austria" => "Vienna", "Poland"=>"Warsaw") ;

 ksort($ceu);

 foreach ($ceu as $key => $value) {
     echo "The capital of " . $key . " is " . $value;
     echo "<br>";
 }
?>

<!-- <table>
    <tr>
        <th>Country</th>
        <th>Capital</th>
    </tr>
    <?php
        foreach($ceu as $key => $value) {
            echo "<tr>";
            echo "<td>" . $key . "</td>";
            echo "<td>" . $value . "</td>";
            echo "</tr>";
        }
    ?>
</table> -->
