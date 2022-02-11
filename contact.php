<?php
    include 'partials/header.html';
    $bdd = new PDO("mysql:host=localhost;dbname=creaoow", "root", "");
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>

<section class='contact_banner'>
    <div class='container contact_banner_elements'>
        <div class='contact_banner_img'>
            <img src='images/picto-message.png'>
            <svg xmlns="http://www.w3.org/2000/svg" width="103.445" height="18.805" viewBox="0 0 103.445 18.805">
                <path id="Tracé_676" data-name="Tracé 676" d="M4750.45,1200.881l14.042-14.544,14.544,14.544,14.544-14.544,14.544,14.544,14.544-14.544,14.544,14.544,14.543-14.544" transform="translate(-4749.371 -1184.198)" fill="none" stroke="#fff" stroke-width="3"/>
            </svg>
        </div>
        <div class='contact_banner_txt'>
            <p>Que vous ayez un projet de communication, une demande ou besoin d’un service, notre agence se tient à votre disposition pour répondre à vos interrogations et vous orienter vers la meilleure version de projet pour vous donner satisfaction.</p>
            <p>Pour une prise en charge rapide de votre demande,nous vous remercions de bien vouloir nous donner un maximum d’informations sur votre situation et votre projet.</p>
            <p>Nous nous attachons à vous fournir une réponse rapide, suivant la disponibilité de nos collaborateurs. Pour mieux vous conseiller, nous mettons à votre disposition des raccourcis selon le sujet que vous souhaitez aborder. Nous vous souhaitons unebelle journée !</p>
        </div>
    </div>
</section>

<section class='contact_form container'>
    <div class='contact_elements appear'>
        <div class='contact_text'>
            <h3>Contactez-nous</h3>
            <div>
                <img src='images/marqueur.png' loading='lazy'>
                <p>IUT de LENS - 16 Rue de l'Université, 62300 LENS</p>
            </div>
            <div>
                <img src='images/mail.png' loading='lazy'>
                <p>creaoow.contact@gmail.com</p>
            </div>
            <div class='contact_text_rs'>
                <a href='https://www.instagram.com/creaoow/'><img src='images/instagram_blanc.png' loading='lazy'></a>
                <a href='https://www.facebook.com/creaoow/'><img src='images/facebook_blanc.png' loading='lazy'></a>
            </div>
        </div>
        <div class='contact_inputs' id='contact'>
            <h3>Envoyez-nous un message</h3>
            <form method='post' action='#contact'>
                <input type='text' placeholder='Votre nom' name='nom' required/>
                <input type='email' placeholder='Votre adresse e-mail' name='mail' required/>
                <textarea placeholder='Votre message...' name='message' required></textarea>
                <input type='submit' value='Envoyer' name='envoyer'/>

                <?php
                    if(isset($_POST['envoyer'])){

                        $requete = $bdd->prepare("INSERT INTO contact(Nom, Mail, Message) VALUES(?, ?, ?)");
                        $requete->execute(array($_POST['nom'], $_POST['mail'], $_POST['message']));
                        echo '<p>Nous avons bien reçu votre message !</p>';
                    }
                ?>
            </form>
        </div>
    </div>
</section>

<?php
    include 'partials/footer.html';
?>