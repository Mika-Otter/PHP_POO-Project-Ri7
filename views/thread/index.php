<head>
    <link rel="stylesheet" href="./public/styles/thread.css">
</head>
<main>
<h1 id="homeTitle">F<span>rrr</span>d</h1>
<section class="post">
<?php foreach($thread as $post): ?>
    <div class="post__ctn">
        <h2> <a id="link" href="/POO_Project/thread/lire/<?= $post["ID"] ?>"><?= $post["title"]?> </a></h2> 
        <p><?= $post["content"]?></p>
        <span><?= $post["author"] ?></span>
        <span><?= $post["date_created"] ?></span>
    </div>
<?php endforeach; ?>
</section>
<section class="post__add">
    <form action="" method="post">
        <label for="addPost">Dîtes nous tout <?= $_SESSION["userName"] ?>:</label>
        <input type="textarea" name="addPost"/>
    </form>
</section>
</main>