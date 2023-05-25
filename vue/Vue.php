


<?php



class Vue {

    public function renderVueAccueil(){
        require_once('gabarit.php');
        require_once('vueAccueil.php');
        


    }


    public function renderVueBillet(){
        
        
        require_once('gabarit.php');
        require_once('vueBillet.php');

    }

    public function renderVueErreur($ErrCode){
        $ErrMsg = "";
        if ($ErrCode == 1) {
            $ErrMsg  = "identifiant de billet non valide";
        }
        else if ($ErrCode == 2){
            $ErrMsg  = "Parametre Id Absent";
        }
        require_once('gabarit.php');
        require_once('vueErreur.php');
        
    }


    
}



require_once('gabarit.php');
$Vue = new Vue();



if ($_SERVER['REQUEST_METHOD'] === 'GET') {

    


    if (isset($_GET['renderVueAccueil'])) {
        
        return $Vue->renderVueAccueil(); ;
        
    }
    

    if (isset($_GET['renderVueBillet'])) {
        
        $idErr = intval(@$_GET['id']);

        if (   isset($_GET['id'])== false  )  {
            return $Vue->renderVueErreur(1);
        }

        else if ($idErr == 0){
            return $Vue->renderVueErreur(2);
        }


        else{
            return $Vue->renderVueBillet();
        }

        
        
    }

    
}
require_once('/wamp64/www/MVC-master/commentaire.php');
$cmtrObj = new Commentaire();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['ajouterCommentaire'])) {
        $id = $_GET['id'];

        $cmtrObj->ajouterCommentaire($_POST['auteur'],$_POST['contenu'], $id);
        header("Location: vue.php?renderVueBillet=renderVueBillet&id=$id");
        exit;

}
}




?>

<form action="Vue.php">
    <input type="submit" value="Les billets" name="renderVueAccueil">
</form>