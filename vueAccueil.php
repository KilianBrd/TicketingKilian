<?php $titre = 'Mon ticketing'; ?>

<?php ob_start(); ?>
<?php foreach ($tickets as $ticket): ?>
  <article>
    <header>
      <h1 class="titreBillet"><?= $ticket['TIC_TITRE'] ?></h1>
      <time><?= $ticket['TIC_DATE'] ?></time>
    </header>
    <p><?= $ticket['TIC_CONTENU'] ?></p>
  </article>
  <hr />
<?php endforeach; ?>
<?php $contenu = ob_get_clean(); ?>

<?php require 'gabarit.php'; ?>