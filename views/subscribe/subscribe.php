
<section class="home">
    <div class="title">
        <h2>Welcome,</h2>
        <h2 id="homeTitle">to F<span>rrr</span>d</h2>
        <span id="homeSpan">Le premier réseau mi-social.</span>
    </div>

    <form class="subscribe" method="post">
        <div class="subscribe__id">
        <div class="subscribe__id__ctn">
            <label for="userEmail">Adresse e-mail</label>
            <input type="text" name="userEmail" class="subscribe__input"/>
        </div>    
        <div class="subscribe__id__ctn">
            <label for="userName">Nom d'utilisateur</label>
            <input type="text" name="userName" class="subscribe__input"/>
        </div> 
        <div class="subscribe__id__ctn">
            <label for="userPass">Mot de passe</label>
            <input type="password" name="userPass" class="subscribe__input"/>
        </div> 
        <div class="subscribe__id__ctn">
            <label for="userPass">Confirmer le mot de passe</label>
            <input type="password" name="userPassConfirm" class="subscribe__input"/>
        </div>
        <div class="subscribe__link">
            <button type="submit" name="subscribe" id="subscribeBtn">S'inscrire</a>
            <button type="submit" name="backHome" id="backHomeBtn">Retour à la page de connexion</a>
        </div>
</form>
<?php 
            if(count($prompt) > 0){  
                echo "<div class='toast-wrapper'>";
                if(isset($prompt["success"])) echo "<p class='success toast'>" . $prompt["success"] . "</p>";
                else{
                    foreach($prompt["error"] as $error){
                        echo "<p class='error toast'>$error</p>";
                    }
                }
                echo "</div>";
            }
        ?>
</section>