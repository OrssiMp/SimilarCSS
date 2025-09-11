
<?php
$motDePasseCorrect = '333'; // À personnaliser
if (!isset($_POST['password']) || $_POST['password'] !== $motDePasseCorrect) {
	$erreur = '';
	if (isset($_POST['password'])) {
		$erreur = 'Mot de passe incorrect.';
	}
	?>
	<!DOCTYPE html>
	<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<title>Accès protégé</title>
		<style>
			body { font-family: Arial, sans-serif; background: #f5f6fa; display: flex; justify-content: center; align-items: center; height: 100vh; }
			.box { background: #fff; padding: 32px 24px; border-radius: 12px; box-shadow: 0 2px 12px rgba(44,62,80,0.07); }
			input[type="password"] { padding: 8px; border-radius: 6px; border: 1px solid #ccc; margin-bottom: 12px; width: 100%; }
			button { background: #2d6cdf; color: #fff; border: none; border-radius: 6px; padding: 8px 16px; cursor: pointer; }
			.erreur { color: #c0392b; margin-bottom: 10px; }
		</style>
	</head>
	<body>
		<form method="post" class="box">
			<h2>Accès protégé</h2>
			<?php if ($erreur) echo '<div class="erreur">'.$erreur.'</div>'; ?>
			<input type="password" name="password" placeholder="Mot de passe" required autofocus>
			<br>
			<button type="submit">Valider</button>
		</form>
	</body>
	</html>
	<?php
	exit;
}
// ... Le contenu de la page protégée commence ici ...
?>
<h1>Bienvenue sur le tableau de bord protégé !</h1>
<p>Contenu réservé aux utilisateurs authentifiés.</p>
<p><a href="index.php?logout=1">Déconnexion</a></p>

<?php include "a_p.php"; ?>