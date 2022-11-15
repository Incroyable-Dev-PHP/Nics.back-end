class="container">
<div class="row">
    <nav class="col-md-4">
        <div><?php include("includes/ul.inc.php"); ?></div>
    </nav>
    <section class="col-md-8">
        <div>

            <?php
                if (isset($_GET["add"])){
                    include("includes/form.inc.html");
                }else if (isset($_GET["debogage"])){
                    phpinfo();
                }else if(isset($_GET["concatenation"])){
                    phpinfo();
                }else if(isset($_GET["boucle"])){
                    phpinfo();
                }else if(isset($_GET["fonction"])){
                    phpinfo();
                }else if(isset($_GET["supprimer"])){
                    phpinfo();
                }else{
                    echo '<a class="btn btn-primary " role=button" aria=disabled="true" href="index.php?add">ajouter des données</a>';
                }
            ?>
        </div>
    </section>
</div>