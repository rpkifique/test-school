<?php
if(!empty($_POST['envoyer'])) {
    echo "Bonjour !";
}
?>
 
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    <label name="nom">Nom:</label>
    <input type="text" name="Nom">
    <label name="nom">Prenom:</label>
    <input type="text" name="prenom">
    <input type="submit" id="envoyer" name="envoyer" value="envoyer">
<form>





