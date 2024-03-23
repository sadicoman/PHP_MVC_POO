<?php
    $title = "Témoignages";

    ob_start();
?>

<section class="container">
        
    <h1>Avis</h1>

    <form method="post" action="index.php?page=avis">
        <p>
            <label for="note">Note / 5</label><br>
            <input type="number" name="note" id="note">
        </p>
        <p>
            <label for="message">Message</label><br>
            <textarea name="message" id="message"></textarea>
        </p>
        <p>
            <input type="submit" value="Ajouter un avis">
        </p>
    </form>

    <p>Voici la liste des avis :</p>

    <?php
        
        while($avis = $requete->fetch()) {
    
    ?>
        <p>
            <b><?= $avis['note'] ?> / 5</b><br>
            <?= $avis['content'] ?>
        </p>
    <?php
        }
    ?>

</section>

<?php
    $content = ob_get_clean();

    require('base.php');
?>