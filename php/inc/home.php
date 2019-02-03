<main class="bottom">
  <h2 class="bottom_title">Liste des outils</h2>
  <div class="posts">

    <!-- on va afficher la liste des articles présents dans le tableau articleList -->

    <?php foreach($articleList as $id => $article) : ?>
      <article class="post">
      <!-- un tag a 2 classes qui s'appliquent "post__category post__category--color-team" -->
        <h3><?= $article['title'] ?></h3>
        <div class="post_meta"> 
          <strong class="post_subtitle"><?= $article['subtitle'] ?></strong>
          
        </div>
        <p><?= $article['text'] ?></p>
        <a <?= $article['calcul']?> </a>
      </article>
    <?php endforeach; ?>
  </div>
</main>