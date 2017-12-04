<?php
if(isset($_POST["submit"])) {
	$target_dir = "/home/exaequomrn/www/";
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	$uploadOk = 1;
	$fileType = pathinfo($target_file,PATHINFO_EXTENSION);

	// Check file size
	if ($_FILES["fileToUpload"]["size"] > 1000000) {
		echo "Erreur: Désolé, le fichier est trop gros (> 1Mo).";
		$uploadOk = 0;
	}
	// Allow certain file formats
	if($fileType != "pdf" ) {
		echo "Erreur: Le fichier n'est pas un PDF.";
		$uploadOk = 0;
	}
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
		echo "Une erreur est survenue lors du transfert.";
	// if everything is ok, try to upload file
	} else {
		if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "/home/exaequomrn/www/Planning-Exaequo.pdf")) {
			echo "Le fichier ". basename( $_FILES["fileToUpload"]["name"]). " a bien été mis à jour.";
		} else {
			echo "Une erreur est survenue lors du transfert.";
		}
	}
}
?>
