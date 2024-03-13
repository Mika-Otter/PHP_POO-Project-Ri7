<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Network - Ri7</title>
    <link rel="stylesheet" href="./public/styles/style.css">
</head>
<body>
    <main>
    </main>
    <section class="home">
    <div class="title">
        <h2>Welcome,</h2>
        <h2 id="homeTitle">to F<span>rrr</span>d</h2>
        <span id="homeSpan">Le premier réseau mi-social.</span>
    </div>
    
    <form class="connect" action="/POO_Project/views/home/login.sub.php" method="post">
        <div class="connect__id">
            <div class="connect__id__ctn">
                <label for="userId">Adresse e-mail</label>
                <input type="text" name="userId" class="connect__input"/>
            </div>
            <div class="connect__id__ctn">
                <label for="userPass">Mot de passe</label>
                <input type="password" name="userPass" class="connect__input"/>
            </div>
        </div>
        <div class="connect__link">
            <button type="submit" name="connect" id="connectBtn">Se connecter</button>
            <span><a href="/POO_Project/subscribe">S'inscrire</a></span>
        </div>
    </form>
</section>
</body>
</html>