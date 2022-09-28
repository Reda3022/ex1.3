<?php


 $personne=[
    'nom'=> 'Filali',
    'prenom' =>'Xavier',
    'taille' =>1.57,
    'poids'=>70,
    'code'=>'H123'
 ];

// ajouter une case a la table associative
$personne['bmi']=$personne['poids']/($personne['taille'] * $personne['taille']);
//$personne['bmi']=70/(1.75 * 1.57);

var_dump($personne);

// pacours tout le tableau associatif et récupère uniquement les données
foreach ($personne as $row) {
    var_dump($row);
}
// pacours tout le tableau associatif et récupère uniquement les clés et les données
foreach ($personne as $key => $row){
    echo $key, " : ", $row. '<br>';

}
?>



<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css.css">
    <title>ex1.3</title>
</head>
<body>

<h1>exercice 1.3</h1>
<table class="tb1">
    <thead>
    <tr>
        <th>Code</th>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Taille</th>
        <th>Poids</th>
        <th>Bmi</th>
    </tr>
    </thead>
<!--affichage du tableau sans boucle-->

<!--    <tbody>-->
<!--    <tr>-->
<!---->
<!--        <td>--><?php //echo $personne[0]?><!--</td>-->
<!--        <td>--><?php //echo $personne[1]?><!--</td>-->
<!--        <td>--><?php //echo $personne[2]?><!--</td>-->
<!--        <td>--><?php //echo $personne[3]?><!--</td>-->
<!--        <td>--><?php //echo $personne[4]?><!--</td>-->
<!--        <td>--><?php //echo $personne[5]?><!--</td>-->
<!--    </tr>-->
<!--    <tbody\>-->

    <!--affichage du tableau avec boucle-->
    <tbody>
      <tr>

   <?php foreach ($personne as $key => $row) { ?>
       <td><?php echo $key, " : ", $row?><br></td>
  <?php } ?>
    </tr>
    <tbody\>

</table>

</body>
</html>


