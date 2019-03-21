<?php
    setlocale(LC_ALL, 'fr_FR.utf8');
//Exercice 01
    
//Exercice 02
    
//Exercice 03
    switch(date(N)){
        case 1: $jour="Lundi"; break;
        case 2: $jour="Mardi"; break;
        case 3: $jour="Mercredi"; break;
        case 4: $jour="Jeudi"; break;
        case 5: $jour="Vendredi"; break;
        case 6: $jour="Samedi"; break;
        case 7: $jour="Dimanche"; break;
    }
    switch(date(n)){
        case 1: $mois="janvier"; break;
        case 2: $mois="février"; break;
        case 3: $mois="mars"; break;
        case 4: $mois="avril"; break;
        case 5: $mois="mai"; break;
        case 6: $mois="juin"; break;
        case 7: $mois="juillet"; break;
        case 8: $mois="août"; break;
        case 9: $mois="septembre"; break;
        case 10: $mois="octobre"; break;
        case 11: $mois="novembre"; break;
        case 12: $mois="Décembre"; break;
    }
//Exercice 04
    
//Exercice 05
    
//Exercice 06
    
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Les dates</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="assets/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
<h2>Série 9 : Les dates</h2>
<?php
//Exercice 01
    echo "<h3>Exercice 01</h3>";
    echo date("d/m/Y");
//Exercice 02
    echo "<h3>Exercice 02</h3>";
    echo date("d-m-y");
//Exercice 03
    echo "<h3>Exercice 03</h3>";
    // mardi 2 août 2016
    echo "<p>".$jour.date(" j ").$mois.date(" Y ")."</p>";// j Y
    echo strftime("%A %e %B %Y", mktime(0, 0, 0, date("n"), date("j"), date("Y")));
//Exercice 04
    echo "<h3>Exercice 04</h3>";
    echo "<p>".mktime(15, 0, 0, 8, 2, 2016)."</p>";
    echo "<p>".strftime("%A %e %B %Y %H:%M", mktime(15, 0, 0, 8, 2, 2016))."</p>";
//Exercice 05
    echo "<h3>Exercice 05</h3>";
    echo "<p>".floor((time() - strtotime("16-May-2016"))/86400)." jours se sont écoulés</p>";
//Exercice 06
    echo "<h3>Exercice 06</h3>";
    echo "<p>".cal_days_in_month(CAL_GREGORIAN, 2, 2017)." jours</p>";
//Exercice 07
    echo "<h3>Exercice 07</h3>";
    echo strftime("%A %e %B %Y", mktime(0, 0, 0, date("n"), date("j")+20, date("Y")));
//Exercice 08
    echo "<h3>Exercice 08</h3>";
    echo strftime("%A %e %B %Y", mktime(0, 0, 0, date("n"), date("j")-22, date("Y")));
//TP
    echo '<form action="#" method="post">
            <select name="mois">
               <option value="1">janvier</option>
               <option value="2">février</option>
               <option value="3">mars</option>
               <option value="4">avril</option>
               <option value="5">mai</option>
               <option value="6">juin</option>
               <option value="7">juillet</option>
               <option value="8">août</option>
               <option value="9">septembre</option>
               <option value="10">octobre</option>
               <option value="11">novembre</option>
               <option value="12">décembre</option>
            </select>
            <select name="annee">
               <option value="2009">2009</option>
               <option value="2010">2010</option>
               <option value="2011">2011</option>
               <option value="2012">2012</option>
               <option value="2013">2013</option>
               <option value="2014">2014</option>
               <option value="2015">2015</option>
               <option value="2016">2016</option>
               <option value="2017">2017</option>
               <option value="2018">2018</option>
               <option value="2019">2019</option>
               <option value="2020">2020</option>
            </select>
            <input type="submit" value="Valider">
         </form>';
?>
</body>
</html>
