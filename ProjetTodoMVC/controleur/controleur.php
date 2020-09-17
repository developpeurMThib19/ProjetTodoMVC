<?php
    $errors = "";

    // connexion base de donnée 
    $bdd = mysqli_connect('localhost', 'root', '', 'todos');

    if (isset($_POST['submit'])){
        $tache = htmlspecialchars($_POST['tache']);
        if (empty($tache)){
            $errors = "Vous devez remplir la tâche";
        }else{
        mysqli_query($bdd, "INSERT INTO taches (tache) VALUES ('$tache')");
        header('location: index.php');
    }
}

    // supprimer la tache
    if (isset($_GET['del_tache'])){
        $id = $_GET['del_tache'];
        mysqli_query($bdd, "DELETE FROM taches WHERE id=$id");
        header('location: index.php');
    }

    $taches = mysqli_query($bdd, "SELECT * FROM taches");

?>