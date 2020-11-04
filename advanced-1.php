<DOCTYPE! html>
<html>
<head>
 
</head>
<body>
<form name="eindopdracht" action="advanced-2.php" method="post">
<select name="tekstKleur" id="tekstKleur">
    <option> In welke kleur wil je de tekst?</option>
    

<?php     
    $kleuren = array("black", "brown", "pink", "green", "purple");
    foreach($kleuren as $kleur){
    
    ?>
    <option><?php echo $kleur; ?> </option>
    <?php } ?>
</select>
<br>

<select name="BGkleur" id="BGkleur">
    <option> Welke achtergond kleur wil je op de pagina?</option>
    <?php     
    $kleuren = array("black", "brown", "pink", "green", "purple");
    foreach($kleuren as $kleur){
    
    ?>
    <option><?php echo $kleur; ?> </option>
    <?php } ?>
</select>
<br>

<select name="border" id="border">
    <option> Welke border dikte wil je?</option>
    <?php     
    $borderDikte = array("1px solid black", "2px solid white", "3px solid black", "4px solid black", "5px solid black");
    foreach($borderDikte as $value){
    
    ?>
    <option><?php echo $value; ?> </option>
    <?php } ?>
</select>
<br>

<select name="padding" id="padding">
    <option> Welke padding wil je voor het tabel?</option>
    <?php     
    $padding = array("10px", "15px", "20px", "25px", "30px");
    foreach($padding as $value){
    
    ?>
    <option><?php echo $value; ?> </option>
    <?php } ?>
</select>
<br>

<input type="submit" name="submit" value="verstuur">

</form>
</body>
 
</html>