<DOCTYPE! html>
<html>
<head>
 
</head>
<body>
   <?php
    echo "<body style=background-color:$_POST[BGkleur]>";
   ?>
    <table>
	
	<tr>
    <?php
        $gegevens= array("voornaam"=> "Mubarak", "leeftijd"=> 22, "woonplaats"=>"Amsterdam", "Sport"=>"Sportschool", "Opleiding"=> "Software Developer");
        function maakRijTH($key,$value){
        echo "<th style=\"color:$_POST[tekstKleur];padding:$_POST[padding];border:$_POST[border];\">$key</th>";
					
					
		  }
            foreach ($gegevens as $key => $value){
					 maakRijTH($key, $value);
                }
               
            ?>
        </tr>
        <tr>
            <?php
            function maakRijTD($key,$value){
            echo "<td style=\"color:$_POST[tekstKleur];padding:$_POST[padding];border:$_POST[border];\">$value</td>";
			} 
            foreach ($gegevens as $key => $value){
                     maakRijTD($key,$value);
                }
                
            ?>
			
			</tr>
    </table>
 
</body>
 
</html>