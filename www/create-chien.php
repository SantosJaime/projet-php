<?php
//import fichier database
require_once ("database.php");
//instanciation de la class database
$database= new Database();
//récupération liste des maitres
$maitres = $database->getAllMasters();
//var_dump($maitres);
/*$nom = $age = $race  = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nom = test_input($_POST["name"]);
  $age = test_input($POST["choix"]);
  $race = test_input($_POST["name"]);
  $maitre = ($POST["Maitre"]);
 
}

$allMasters = $database->getAllMasters();

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}*/

?>


<html>
    <header>
        <link rel="stylesheet" href="style.css">
    </header>
    
    <head>
        <title></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        
        </head>
       

        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                <a class="navbar-brand" href="#">Projet "Chiens"</a>
                </div>
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="listeChiens.php">Liste</a></li>
                        <li><a href="create-chien.php">Nouveau Chien</a></li>   
                    </ul>
                </div>
        </nav>
    <body>

        <ul>
            <li><a class="active" href="listeChiens.php">Liste</a></li>
            <li><a href="create-chien.php">Nouveau Chien</a></li>
           
        </ul>

        <h2> Création de nouveau chien </h2>
        <form action="process-create.php" method="post">
            <label for="nomChien">Nom </label>
            <input type="text" id="nomChien" name="nom" placeholder ="Médor">
            <label for="ageChien">Age </label>
            <input type="number" id="ageChien" name="age" placeholder ="1">
            <label for="raceChien">Race</label>
            <input type="text" id="raceChien" name="race" placeholder ="Bulldog">

            <label for="choixMaitre">Maitre</label>
            <select id="choixMaitre" name="idMaitre">
                    <?php
                    foreach($maitres as $maitre){
                        echo "<option value=".$maitre->getId().">".$maitre->getNom()."</option>";
                    }
                    //<option value="1">Toto</option>
                    ?>
            </select>

            <input type="submit">
        </form>    
            <!--<br><br>
            <p>
            Age du chien?
            <select name="ageChien">
            <option value=""selected="selected">Age... </option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option> 
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
            <option value="16">16</option>
            </select>

            </p>
            Race: <input type="text" name="race">
            <br><br>
            
            Sexe:
            <input type="radio" name="gender" value="female">Femelle
            <input type="radio" name="gender" value="male">Male
            <input type="radio" name="gender" value="other">Indéfini
            <br><br>
            <input type="submit" name="submit" value="Envoyer"> 

            <h3>Nom du maître</h3>
            <select name="idMaitre">
               <?php /*foreach ($allMasters as $Maitre){
                    echo '<option>' . $Maitre->masterId() . " " . $Maitre->masterNom(). '</option>';
                }*/
                ?>
            </select>-->

        
        
        

    </body>
</html>