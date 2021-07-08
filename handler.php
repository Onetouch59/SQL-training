<?php
session_start();
if($_POST){

    if(isset($_POST['project_title'])&&!empty($_POST['project_title'])&&
    isset($_POST['project_begin'])&&!empty($_POST['project_begin'])&&
    isset($_POST['project_end'])&&!empty($_POST['project_end'])&&
    isset($_POST['project_context'])&&!empty($_POST['project_context'])&&
    isset($_POST['project_specs'])&&!empty($_POST['project_specs'])&&
    isset($_POST['project_githublink'])&&!empty($_POST['project_githublink'])&&
    isset($_POST['project_link'])&&!empty($_POST['project_link'])&&
    isset($_FILES['project_picture']) && !empty($_FILES['project_picture'])){

        require_once("db-connect.php");
        $title =strip_tags($_POST['project_title']);
        $begin =strip_tags($_POST['project_begin']);
        $end =strip_tags($_POST['project_end']);
        $context =strip_tags($_POST['project_context']);
        $specs =strip_tags($_POST['project_specs']);
        $githublink =strip_tags($_POST['project_githublink']);
        $projetlink =strip_tags($_POST['project_link']);

        $sql ="INSERT INTO projects (project_title, project_picture, project_begin, project_end, project_context, project_specs, project_githublink, project_link) VALUES(:project_title, :project_picture, :project_begin, :project_end, :project_context, :project_specs, :project_githublink, :project_link)";
        $query = $db ->prepare($sql);
        $query->bindValue(':project_title', $title, PDO::PARAM_STR);
        $query->bindValue(':project_picture', $picture, PDO::PARAM_STR);
        $query->bindValue(':project_begin', $begin, PDO::PARAM_STR);
        $query->bindValue(':project_end', $end, PDO::PARAM_STR);
        $query->bindValue(':project_context', $context, PDO::PARAM_STR);
        $query->bindValue(':project_specs', $specs, PDO::PARAM_STR);
        $query->bindValue(':project_githublink', $githublink, PDO::PARAM_STR);
        $query->bindValue(':project_link', $projetlink, PDO::PARAM_STR);
        $query->execute();
        echo 'Sucess';
        echo 'Les données ont été enregistré dans le base de données !'; 
        echo'<br><a href=home.php> Retour </a>';
    } else {
    echo 'Remplissez tous les champs';echo '<br><a href=add-form.php> Retour </a>';
}} else {
echo 'Pour acceder à cette page vous devez publier un projet';
}
?>