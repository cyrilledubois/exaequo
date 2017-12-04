<!DOCTYPE html>
<html lang="FR-fr">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="keywords" content= "salle, sport, mérignac, salle de sport, bordeaux, fitness, musculation, prépartion physique, remise en forme, boxe, pilates, yoga">
		<meta name="description" content="Contactez votre salle de sport Exaequo à Mérignac pour obtenir plus de renseignements." />
		<title>Exaequo - Contactez votre salle de sport</title>
		
		<!-- Google fonts -->
		<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<!-- animate -->
		<link rel="stylesheet" href="css/animate.min.css">
		<!-- fontAwesome -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<!-- Style CSS -->
		<link rel="stylesheet" href="css/styles.css" >
		
		<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

		<link rel="icon" type="image/png" href="favicon.png" />

		<meta property="og:image" content="http://exaequo-merignac.com/images/logo-fb.jpg" />

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-43667519-40', 'auto');
		  ga('send', 'pageview');

		</script>

	</head>
	<body>
		<header>
		  <!-- menu de navigation -->
		  <nav class="navbar navbar-inverse navbar-static-top navbar-custom">
			<div class="container">
			  <div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar3">
				  <span class="sr-only">Toggle navigation</span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="https://www.exaequo-merignac.com"/><img src="images/logo_menu.jpg" alt="Votre salle de sport à Mérignac">
				</a>
			  </div>
			  <div id="navbar3" class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
				  <li><a href="index.php">Accueil</a></li>
				  <li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Nos prestations<span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
					  <li><a href="cours_collectifs.php">Cours collectifs</a></li>
					  <li><a href="fitness_cardio_physique.php">Fitness/cardio/musculation</a></li>
					  <li><a href="cours_boxe.php">Boxe</a></li>
					  <li><a href="cours_pilates.php">Pilates</a></li>
					  <li><a href="cours_yoga.php">Yoga</a></li>
					</ul>
				  </li>
				  <li><a href="equipe.php">Notre équipe</a></li>
				  <li><a href="tarifs.php">Nos tarifs</a></li>
				  <li><a href="partenaires.php">Nos Partenaires</a></li>
				  <li class="active"><a href="contact.php">Contact</a></li>
				</ul>
			  </div>
			</div>
			</nav>
		</header>

		<section id="contact" class="wow bounceInRight">

			<div class="container">

				<div class="row">
			
				<h1 class="text-center">Contactez-nous</h1>
				
					<div class="col-sm-6">
						<h2>Horaires </h2>
						<p>Lundi - Mercredi - Vendredi : 9h - 22h<br>
						Mardi - Jeudi : 7h - 22h<br>
						Samedi : 9h - 17h<br>
						Dimanche : salle réservée aux stages
						</p>
					</div>
					
					<div class="col-sm-6 coordonnees">
						<h2>Coordonnées</h2>
						<p>19 Rue Nicolas Leblanc <br>33700 Mérignac</p>
						<p>Tél : 06 66 50 07 59</p>
						<ul class="list-unstyled list-inline">
							<li>
								<a href="https://www.facebook.com/exaequo.merignac" target="_blank" class="fb">
									<span class="fa-stack fa-lg">
										<i class="fa fa-circle fa-stack-2x"></i>
										<i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
									</span>
								</a>
							</li>
							<li>
								<a href="https://twitter.com/exaequo_sport"  target="_blank" class="tw">
									<span class="fa-stack fa-lg">
										<i class="fa fa-circle fa-stack-2x"></i>
										<i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
									</span>
								</a>
							</li>
							<!-- <li>
								<a href="#" class="inst">
									<span class="fa-stack fa-lg">
										<i class="fa fa-circle fa-stack-2x"></i>
										<i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
									</span>
								</a>
							</li> -->
						</ul>
					</div>


			
					<div class="col-sm-12" style="margin-top: 20px;">


						<?php if(isset($_POST['validform']) && $_POST['validform']=='ok') : ?>

							<?php if (isset($_POST['email'],$_POST['object'],$_POST['message'])) : ?>
			
								<?php

								$emailclean = strip_tags($_POST['email']);
								$objectclean = strip_tags($_POST['object']);
								$messageclean = strip_tags($_POST['message']);

								$headers = "MIME-Version: 1.0" . "\r\n";
								$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
								$headers .= 'From: <'.$emailclean.'>' . "\r\n";

								$mailsucceed = mail('contact@exaequo-merignac.com', $objectclean, $messageclean, $headers) ?>

								<?php if ( $mailsucceed ): ?>
									
									<div class="alert alert-success" role="alert">Votre message a bien été envoyé !</div>

								<?php else : ?>

									<div class="alert alert-danger" role="alert">Votre mail n'a pas pu être envoyé !</div>

								<?php endif ?>

								

							<?php else : ?>

								<div class="alert alert-warning" role="alert">Il semblerait qu'il manque des informations importante </div>

								<form action="#contact" method="post" class="form-horizontal" accept-charset="utf-8">
								  <div class="form-group">
								    <label class="col-sm-3 control-label">* Votre Email :</label>
								    <div class="col-sm-9">
								      <input type="email" class="form-control" name="email" placeholder="Email">
								    </div><br>
								  </div>
								  <div class="form-group">
								    <label class="col-sm-3 control-label">* Objet :</label>
								    <div class="col-sm-9">
								      <input type="text" class="form-control" name="object" placeholder="Objet">
								    </div><br>
								  </div>
								  <div class="form-group">
								    <label class="col-sm-3 control-label">* Votre Message :</label>
								    <div class="col-sm-9">
								      <textarea name="message" class="form-control" rows="10" placeholder="Votre Message"></textarea>
								    </div><br>
								  </div>
								  <input type="hidden" name="validform" value="ok">
								  <div class="form-group">
								    <div class="col-sm-offset-3 col-sm-9">
								      <button type="submit" class="btn btn-default">Envoyer</button>
								    </div>
								  </div>
								</form>

							<?php endif; ?>

						<?php else :?>

							<form action="#contact" method="post" class="form-horizontal" accept-charset="utf-8">
							  <div class="form-group">
							    <label class="col-sm-3 control-label">* Votre Email :</label>
							    <div class="col-sm-9">
							      <input type="email" class="form-control" name="email" placeholder="Email">
							    </div><br>
							  </div>
							  <div class="form-group">
							    <label class="col-sm-3 control-label">* Objet :</label>
							    <div class="col-sm-9">
							      <input type="text" class="form-control" name="object" placeholder="Objet">
							    </div><br>
							  </div>
							  <div class="form-group">
							    <label class="col-sm-3 control-label">* Votre Message :</label>
							    <div class="col-sm-9">
							      <textarea name="message" class="form-control" rows="10" placeholder="Votre Message"></textarea>
							    </div><br>
							  </div>
							  <input type="hidden" name="validform" value="ok">
							  <div class="form-group">
							    <div class="col-sm-offset-3 col-sm-9">
							      <button type="submit" class="btn btn-default">Envoyer</button>
							    </div>
							  </div>
							</form>

						<?php endif; ?>
						

					</div>

				</div>

			</div>
			
		</section>

<?php
if ( !strpos(strtolower($_SERVER['HTTP_USER_AGENT']), 'googlebot') )
{
echo <<<EOL
<div id="map" class="wow">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2829.0110411397272!2d-0.6777082999999978!3d44.84170850000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd54da027c4fed81%3A0xf0fd85dc9bae57f8!2s19+Rue+Nicolas+Leblanc%2C+33700+M%C3%A9rignac!5e0!3m2!1sfr!2sfr!4v1442322802792" width="800" height="400" style="border:0; width:100%" allowfullscreen></iframe>
</div>
EOL;
}
?>

		<footer>
			<div class="container text-center">
				<a data-toggle="modal" data-target="#mentions">Mentions légales</a>
			</div>
		</footer>

		<!-- Modal -->
		<div class="modal fade" id="mentions" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Mentions légales</h4>
					</div>
					<div class="modal-body">
						<h2>Conception</h2>
						<p><strong>Agence Aggelos</strong><br>
						</p>
						
						<h2>Hébergement</h2>
						<p>
							<strong>OVH</strong><br>
							2 rue Kellermann - 59100 Roubaix - France
						</p>
						
						<h2>Éditeur</h2>
						<p><strong>MainEvent</strong><br>				
						19 Rue Nicolas Leblanc, 33700 Mérignac</p>
					
					</div>
				</div>
			</div>
		</div>

		<!-- jQuery -->
		<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<!-- Animate -->
		<script src="js/wow.min.js"></script>
        <script>
        	new WOW().init();
        </script>
	</body>
</html>