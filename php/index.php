<?php
    session_start();
    if(isset($_SESSION["table"])){
        $table = $_SESSION["table"];
    }
    include("includes/head.inc.html"); 
    include("includes/header.inc.html");
?>
<body>
    <div class="container">
        <div class="row">
            <nav class="col-md-4">
                <div><?php include("includes/ul.inc.php"); ?></div>
            </nav>
            <section class="col-md-8">
                <div>
                    <?php

                        if(isset($_POST['save'])){
                            $table = $_POST + $_FILES;
                            unset($table["save"]);
                            $_SESSION["table"] = $table;
                        }
                        if(isset($_GET['add'])){
                            include("includes/form.inc.html"); 
                        }else if(isset($_GET['addmore'])){
                            include "includes/form2.inc.php";
                        }else if(isset($_GET['debugging'])){
                            echo "<h1 class='text-center'>Débogage</h1>
                            <br>
                            <p class='text-black fw-bolder'>===> Lecture de tableau à l'aide de la fonction print_r()</p>
                            <br> <pre>";
                            print_r($table);
                            echo "<pre>";
                        }else if(isset($_GET['concatenation'])){
                            print_r($_SESSION['table']);
                        }else if(isset($_GET['loop'])){
                            echo 'loop';
                        }else if(isset($_GET['function'])){
                            ?>
                            <h2 class= text-center>Fonction</h2>
                            <span>===>Lecture du tableau à l'aide de readTable <br><br></span>
                            <?php
                            function readTable() 
                                    {
                                        $table = $_SESSION["table"];
                                    }
                                $i = 0;
                                foreach ($table as $key => $value) {
                                    if($key == 'img'){
                                        echo "à la ligne n°" . $i . " correspond la clé \"" . $key . "\" et contient <br> <img src='array[$value]' max-width: 100%>";
                                    }else{
                                        echo "à la ligne n°" . $i . " correspond la clé \"" . $key . "\" et contient \"" . $value . "\"<br>";
                                    }
                                    $i++;
                                }

                            ?>
                                    <?php readTable(); ?>
                            <?php
                        }else if(isset($_GET['del'])){
                            echo '<div class="alert alert-success" role="alert">
                            Données supprimées
                          </div>';
                            session_destroy();
                        }else if(empty($_SESSION['table'])){
                            echo '<a class="btn btn-primary " role="button" aria-disabled="true" href="index.php?add">Ajouter des données</a> 
                                <a class="btn btn-outline-secondary" href="?addmore">Ajouter plus de données</a>
                            ';
                        }else if(!empty($_SESSION['table'])){
                            echo '<div class="alert alert-success" role="alert">
                            Données sauvegardées
                          </div>';
                        }
                    ?>
                </div>
            </section>
        </div>
    </div>
    <?php include("includes/footer.inc.html"); ?>
</body>