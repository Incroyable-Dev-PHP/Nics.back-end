<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.inc.html'; ?>

<body>
    <?php include 'includes/header.inc.html'; ?>
        <div class="row justify-content-center">
            <div class="col-4">
                <?php include 'includes/Nav.html'; ?>
            </div>
            <div class="col-4">
                <br>
                <?php
                    session_start();
                    if(isset($_GET['add'])){
                        echo '<h2>Ajouter des données</h2>';
                        include 'includes/formulaire.html';
                        if(!empty($_POST)){
                            $_SESSION = array("nom" => $_POST["last_name"],"prenom" => $_POST["first_name"],"taille" => $_POST["user_size"],"homme" => $_POST["man"],"femme" => $_POST["woman"]);
                        }
                    }elseif(isset($_GET['debugging'])){
                        echo '<h2>Débogage</h2>';
                        print_r($_SESSION);
                    }elseif(isset($_GET['concatenation'])){
                        echo '<h2>Concaténation</h2>';
                        if(!empty($_SESSION['taille'])){
                            $_SESSION['nom'] = strtoupper($_SESSION['nom']);
                            $_SESSION['prenom'] = ucfirst($_SESSION['prenom']);
                            echo "Mon nom est " . $_SESSION["prenom"] ." ". $_SESSION["nom"] . ", je mesure " . $_SESSION["taille"] . " cm.";
                        }else{
                            echo "veuillez remplir le formulaire.";
                        }
                    }elseif(isset($_GET['loop'])){
                        echo '<h2>Boucle</h2>';
                    }elseif(isset($_GET['function'])){
                        echo '<h2>Fonction</h2>';
                    }elseif(isset($_GET['delete'])){
                        echo '<h2>Supprimer la session</h2>';
                        session_destroy();
                        echo "la session a été supprimé avec succès";
                    }else{
                        echo '<a href="https://localhost/StepC-back-end/back-end/index.php?add"><button type="submit" class="btn btn-primary">Ajouter des données</button></a>';
                    }
                ?>
            </div>
        </div>
    <?php
    phpinfo();
    ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</html>

<?php
/*("last_name" => $_POST["last_name"]=> $_POST["last_name"], "first_name" => $_POST["first_name"], "user_size" => $_POST["user_size"], "man" => $_POST["man"], "woman" => $_POST["woman"]);*/
?>