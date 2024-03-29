<?php
session_start(); 
?>

<head>
    <link rel="stylesheet" href="./public/styles/thread.css">
</head>
<section>
<h1 id="homeTitle">F<span>rrr</span>d</h1>
<div class="post">
<?php foreach($thread as $post) : ?>
    <div class="post__ctn">
    <?php if ($_SESSION["modify"] == $post["ID"]) : ?>
        <form  id="modifyForm" action="/POO_Project/app/postRoute.php" method="post" >
                <input type="text" name="titleModify" value="<?= $post["title"] ?>" />
                <textarea name="contentModify"><?= $post["title"] ?></textarea>
                <button  id="modifyBtn" type="submit" name="update">Modifier</button>
            </form>
        <?php else: ?>
        <h2> <a id="link" href="/POO_Project/thread/lire/<?= $post["ID"] ?>"><?= $post["title"]?> </a></h2> 
            <p><?= $post["content"]?></p>
            <span id="author"><?= $post["author"] ?></span>
            <span  id="date"><?= $post["date_created"] ?></span>
            <?php if ($_SESSION["userName"] == $post["author"] && $_SESSION["modify"] == "") : ?>
            <div class="action">
                <div class="modify">
                    <span><a href="/POO_Project/app/postRoute.php?modifyById=<?= $post["ID"]?>">...</a></span>
                </div>
                <div class="delete">
                    <span><a href="/POO_Project/app/postRoute.php?deleteById=<?= $post["ID"]?>" >+</a></span>
                </div>
            </div>
            <?php endif; ?>
    <?php endif; ?>
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
<div class="user">
    <div class="user__logout">+</div>
    <div class="user__profil"><a href="/POO_Project/app/logout.php"><?= strtoupper(substr($_SESSION["userName"], 0, 1)); ?></a></div>
</div>
</section>