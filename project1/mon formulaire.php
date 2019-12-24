<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <link rel="stylesheet" href="taf.css">
    <link rel="stylesheet" href="css/bootstrap-4.3.1-dist/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap-4.3.1-dist/css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/bootstrap-4.3.1-dist/css/bootstrap-reboot.css">
    <link rel="stylesheet" href="css/style.css">
    
    <title>mon formulaire</title>
</head>
    <?php 
    try
    {
    $bdd= new PDO('mysql:host=localhost; dbname=essai;charset=utf8','root','');
    $bdd ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    }
    catch(Exception $e)
    {
        die('erreur:'.$e->getMessage());
    }
if(isset($_POST['valider']))
{
if(!empty($_POST['nom'])&& !empty($_POST['prenom']) && !empty ($_POST['Age']) && !empty($_POST['sexe'])) 
{
 $insertsql=$bdd->prepare('INSERT INTO  monformulaire(nom, prenom,date_de_naissance,sexe) VALUES(?,?,?,?)');
 $insertsql->execute(array($_POST['prenom'], $_POST['prenom'],$_POST['Age'],$_POST['sexe']));
    echo "vous avez etez bien enregistré";
}
}

    ?>
<body>
    <center  ><h1 class="bienvenue">BIENVENUE SUR WARRIOR ZONE</h1></center>
    <fieldset form="id_form">
     <center>
        <legend>INSCRIPTION</legend>
    
        <form method="post" action="">
            
             
             <p><label for="nom" >Nom</label><br><input id="nom" type="text" name="nom" placeholder="entrez votre nom..."></p>
             <p><label for="prenom">Prenom</label><br><input type="text" name="prenom" id="prenom" placeholder="entrez votre prenom"></p>
             <p><label for="age">date de naissance</label><br><input type="date" name="Age" id="age"></p>
             <p><label for="sexe">masculin</label><input type="radio" name="sexe" id="sexe">
             <label for="sexe">feminin</label><input type="radio" name="sexe" id="sexe"></p>
             <p><br class="valider"><input type="submit"      name="valider" value="valider"></p>
        
        </form> 
         </center>
        <?php echo "faites ce que vous aves a faire"?>
    </fieldset>

<p>vous avez deja un compte?<a href="connexion.html">cliquez ici pour vous connecter</a></p>    

</body>
</html>