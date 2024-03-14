<?php
session_start(); 
?>

<head>
    <link rel="stylesheet" href="./public/styles/thread.css">
</head>
<section>
<h1 id="homeTitle">F<span>rrr</span>d</h1>
<div class="post">
<?php foreach($thread as $post): ?>
    <div class="post__ctn">
        <h2> <a id="link" href="/POO_Project/thread/lire/<?= $post["ID"] ?>"><?= $post["title"]?> </a></h2> 
        <p><?= $post["content"]?></p>
        <span><?= $post["author"] ?></span>
        <span><?= $post["date_created"] ?></span>
    </div>
<?php endforeach; ?>
</div>
<div class="post__add">
    <form action="/POO_Project/app/postRoute.php" method="post" id="formAdd">
        <div class="post__content">
            <input id="title" type="text" name="titlePost" placeholder="Title"/>
            <textarea id="textarea" type="text" name="contentPost" placeholder="Dîtes nous tout <?= $_SESSION["userName"] ?>..."></textarea>
            <button type="submit" name="addPost">Envoyer</button>
        </div>    
       
    </form>
</div>
</section>