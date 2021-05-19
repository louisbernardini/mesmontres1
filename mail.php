<style>
    
</style>

<?php
/*---------------------------------------------------------------*/
/*
    C'est ici !                                                                                    
*/
/*---------------------------------------------------------------*/?>
     <form name="contact_form" method="post" action="mail.php">
    <table width="500">
    <tr>
     <td valign="top">
      <label for="nom">Nom *</label>
     </td>
     <td valign="top">
      <input  type="text" name="nom" maxlength="50" size="30" value="<?php if (
isset($_POST['nom'])) echo htmlspecialchars($_POST['nom']);?>">
     </td>
    </tr>
    <tr>
     <td valign="top">
      <label for="prenom">Prénom *</label>
     </td>
     <td valign="top">
      <input  type="text" name="prenom" maxlength="50" size="30" value="<?php if
 (isset($_POST['prenom'])) echo htmlspecialchars($_POST['prenom']);?>">
     </td>
    </tr>
    <tr>
     <td valign="top">
      <label for="email">Addresse Email *</label>
     </td>
     <td valign="top">
      <input  type="text" name="email" maxlength="80" size="30" value="<?php if 
(isset($_POST['email'])) echo htmlspecialchars($_POST['email']);?>">
     </td>
    </tr>
    <tr>
     <td valign="top">
      <label for="telephone">Téléphone</label>
     </td>
     <td valign="top">
      <input  type="text" name="telephone" maxlength="30" size="30" value="
<?php if (isset($_POST['telephone'])) echo htmlspecialchars($_POST['telephone'])
;?>">
     </td>
    </tr>
    <tr>
     <td valign="top">
      <label for="commentaire">Commentaire *</label>
     </td>
     <td valign="top">
      <textarea  name="commentaire" cols="28" rows="10"><?php if (isset($_POST[
'commentaire'])) echo htmlspecialchars($_POST['commentaire']);?></textarea>
     </td>
    </tr>
    <tr>
     <td colspan="2" style="text-align:center">
      <input type="submit" value=" Envoyer ">
     </td>
    </tr>
    </table>
    </form>

<?php
$nomErr = $emailErr = $prenomErr = $telephoneErr = "";
$nom = $email = $prenom = $commentaire = $telephone = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["nom"])) {
    $nomErr = "champ requis";
  } else {
    $nom = test_input($_POST["nom"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$nom)) {
      $nomErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    
  if (empty($_POST[""])) {
    $telephone = "";
  } else {
    $telephone = test_input($_POST["telephone"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
   
  }

  if (empty($_POST["commentaire"])) {
    $commentaire = "";
  } else {
    $commentaire = test_input($_POST["commentaire"]);
  }
  ?>
