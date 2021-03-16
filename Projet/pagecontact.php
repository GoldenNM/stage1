<DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
        <title>
            Contact
        </title>
        <style type="text/css">
			html{
				background: #009be0;
			}
			header{
				background: #FFFFFF;
				width: 1901px;
			}
			header img{
				margin-top: 20px;
				margin-bottom: -100px;
				width: 15%;
				background-color: #FFFFFF; 

			}
			body{
            	font-family:"Times New Roman",sans-serif;
            	margin: auto;
            	width: 1900px;
        	}
        	main{
        		background-color: #009be0;
        	}
        	hr{
        		width: 1899px;
        		background-color: #009be0;
        		border-color: #009be0;
        	}
        	.b1{
                font-size: 22px;
                margin-left: 1200px;
                margin-top: -85px;
                color: #009be0;

            }
            .b2{
                font-size: 22px;
                margin-left: 1600px;
                margin-top: -120px;
                color: #009be0;
                margin-bottom: 200px;
            }  
        	.button {
 				border: none;
  				color: white;
  				padding: 16px 32px;
  				text-align: center;
  				text-decoration: none;
  				display: inline-block;
  				font-size: 14px;
  				margin: 4px 2px;
  				transition-duration: 0.4s;
 				cursor: pointer;
 				margin-left: 1200px;
 				margin-bottom: -35px;
			}
			.button1 {
  				background-color: white; 
  				color: black; 
  				border: 2px solid #009be0;
			}

			.button1:hover {
  				background-color: #009be0;
  				color: white;
			}
			.button2 {
 				border: none;
  				color: white;
  				padding: 16px 34px;
  				text-align: center;
  				text-decoration: none;
  				display: inline-block;
  				font-size: 14px;
  				margin: 4px 2px;
  				transition-duration: 0.4s;
 				cursor: pointer;
 				margin-left: 500px;
 				margin-top: -56px; 
			}
			.button2 {
  				background-color: white; 
  				color: black; 
  				border: 2px solid #009be0;
			}

			.button2:hover {
  				background-color: #009be0;
  				color: white;
			}
			.button3 {
 				border: none;
  				color: white;
  				padding: 16px 34px;
  				text-align: center;
  				text-decoration: none;
  				display: inline-block;
  				font-size: 14px;
  				margin: 4px 2px;
  				transition-duration: 0.4s;
 				cursor: pointer;
 				margin-left: 100px;
 				margin-top: -56px; 
			}
			.button3 {
  				background-color: white; 
  				color: black; 
  				border: 2px solid #009be0;
			}

			.button3:hover {
  				background-color: #009be0;
  				color: white;
			}
			.button4 {
 				border: none;
  				color: white;
  				padding: 16px 34px;
  				text-align: center;
  				text-decoration: none;
  				display: inline-block;
  				font-size: 14px;
  				margin: 4px 2px;
  				transition-duration: 0.4s;
 				cursor: pointer;
 				margin-left: 75px;
 				margin-top: -56px; 
			}
			.button4 {
  				background-color: white; 
  				color: black; 
  				border: 2px solid #009be0;
			}

			.button4:hover {
  				background-color: #009be0;
  				color: white;
			}      

        </style>
    </head>
    <body>
		<header>
			<a href="http://localhost/projet/page1.php"><img src="image/logo.png" alt=""></a>
			<div id="block">
				<div class="b1"><p>✉ smpsolsmursplafonds@gmail.com</p></div>
				<div class="b2"><p>✆ 01 43 84 91 15 </p></div>
			<hr size="3">
			<button class="button button1" onclick=window.location.href="http://localhost/projet/pagecontact.php">Contact</button>
			<button class="button button2" onclick=window.location.href="http://localhost/projet/page1.php">Accueil</button>
			<button class="button button3" onclick=window.location.href="#b17">Plomberie</button>
			<button class="button button4" onclick=window.location.href="#b25">Les revêtements</button>
			<hr size="3">
		</div>
		</header>

	<main>
    <form method="post">
        <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom02">Nom</label>
      <input type="text" class="form-control" id="validationCustom02" required>
      <div class="valid-feedback">
        validé
      </div>
      <div class="invalid-feedback">
        Entrez votre Nom
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom03">E-Mail</label>
      <input type="text" class="form-control" id="validationCustom03" required>
      <div class="valid-feedback">
        validé
      </div>
      <div class="invalid-feedback">
        Entrez votre E-Mail
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationCustom04">Téléphone</label>
      <input type="texte" class="form-control" id="validationCustom04" required>
      <div class="valid-feedback">
        validé
      </div>
      <div class="invalid-feedback">
        Entrez votre Téléphone
      </div>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationCustom05">Message</label>
      <input type="text" class="form-control" id="validationCustom05" required>
      <div class="invalid-feedback">
        Entrez message valide
      </div>
    </div>
  </div>
  <button class="btn btn-primary" type="submit">Envoyer la demande</button>
</form>
    </form>
    
    <?php
        if(isset($_POST['message'])){
            $entete  = 'MIME-Version: 1.0' . "\r\n";
            $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
            $entete .= 'From: ' . $_POST['email'] . "\r\n";

            $message = '<h1>Message envoyé depuis la page Contact de monsite.fr</h1>
            <p><b>Nom : </b>' . $_POST['nom'] . '<br>
            <b>Email : </b>' . $_POST['email'] . '<br>
            <b>Message : </b>' . $_POST['message'] . '</p>';

            $retour = mail('smpsolsmursplafonds@gmail.com', 'Envoi depuis page Contact', $message, $entete);
            if($retour) {
                echo '<p>Votre message a bien été envoyé.</p>';
            }
        }
    ?>
</main>
</body>
</html>