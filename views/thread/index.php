<h1>Fil d'actualité</h1>
<?php foreach($thread as $post): ?>
<h2><?= $post["title"]?></h2>
<p><?= $post["content"]?></p>
<?php endforeach; ?>