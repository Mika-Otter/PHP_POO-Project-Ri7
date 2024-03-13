<h1>Fil d'actualité</h1>
<?php foreach($thread as $post): ?>
    <h2> <a href="/thread/lire/<?= $post["ID"] ?>"><?= $post["title"]?> </a></h2> 
    <p><?= $post["content"]?></p>
<?php endforeach; ?>