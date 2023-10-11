 

<p>

    Abonnez-vous à la newsletter de Baptiste
    <form method='post' action=''>
        <div class="form-group"> 
            <input placeholder="Entrez votre email ici" type="text" name="email" size=50></input> <button class="btn btn-default" type="submit" name='submit'>Envoyer</button>
       </div> 
    </form>

<?php
include('vendor/twig/twig/lib/Twig/Autoloader.php');
if (isset($_POST['email'])) {
	$email=$_POST['email'];

    Twig_Autoloader::register();
    try {
        $loader = new Twig_Loader_String();
        $twig = new Twig_Environment($loader);

        $result= $twig->render("Merci {$email}. Vous serez informé bientôt.");
        echo $result;

    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

?>
</p>
