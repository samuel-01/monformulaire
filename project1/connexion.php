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
 
        $insertsql->execute(array($_POST['nom'], $_POST['prenom'],$_POST['date de nassance'],$_POST['sexe']));
    
    echo "vous avez etez bien enregistré";
}
}
?>

