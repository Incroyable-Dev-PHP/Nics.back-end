<button type="button" class=" ms-5 btn btn-outline-secondary" onclick="location.href='index.php'">Home</button>
<?php
  if(!empty($_SESSION['table'])){
    echo '<ul>
            <a class="ms-3 btn btn-sm btn-outline-secondary ps-4 pe-5" type="button" href="?debugging">Débogage</a>
            <br>
            <a class="ms-3 btn btn-sm btn-outline-secondary ps-4 pe-3" type="button" href="?concatenation">Concaténation</a>
            <br>
            <a class="ms-3 btn btn-sm btn-outline-secondary ps-5 pe-5" type="button" href="?loop">Boucle</a>
            <br>
            <a class="ms-3 btn btn-sm btn-outline-secondary ps-4 pe-5" type="button" href="?function">Fonction</a>
            <br>
            <a class="ms-3 btn btn-sm btn-outline-secondary ps-4 pe-5" type="button" href="?del">Supprimer</a>
          </ul>';
  }
?>