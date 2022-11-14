<!DOCTYPE html>
<html Lang="fr">
<head>     
    <?php include "./includes/head.html"; ?>
</head>
<body>
    <?php include "./includes/header.html";?>
    <?php include "./includes/ul.html"; ?>
    
        <section class="container">
            <?php
                if (isset($_GET["about-me"])) {
                    include "./pages/about-me.html";
                } elseif (isset($_GET["my-dreams"])) {
                    include "./pages/my-dreams.html";
                } elseif (isset($_GET["my-passions"])) {  
                    include "./pages/my-passions.html";
                } else {
                    include "./pages/home.html";
                }
            ?>
        </section>
    <?php include "./includes/footer.html"; ?>
</body>
</html>