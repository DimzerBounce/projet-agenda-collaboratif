
<?php include_once('includes/header.php'); ?>

<div id="inscription">
<section>
	<h1>S'INSCRIRE</h1>
<form method="post" action="membres/inscription.php" enctype="multipart/form-data">
	<table>
		<tr>
			<td colspan="2"><input type="file" name="avatar"  accept="image/x-png,image/jpeg" />
				</td>
		</tr>
		<tr>
			<td>Pseudo:</td>
			<td><input type="text" name="user" <?php  if (!empty($_SESSION['userins'])){echo "value='".$_SESSION['userins']."'";} ?>></td>
		</tr>
		<tr>
			<td>Email:</td>
			<td><input type="email" name="email" <?php  if (!empty($_SESSION['emailins'])){echo "value='".$_SESSION['emailins']."'";} ?>></td>
		</tr>
		<tr>
			<td>Mot de passe:</td>
			<td><input type="password" name="password"></td>
		</tr>
		<tr>
			<td>Retapez le mot de passe:</td>
			<td><input type="password" name="password2"></td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" value="S'inscrire">
		</tr>
	</table>
</form>
<?php if (!empty($_SESSION['error'])){echo "<div style='color:red;' align='center'>".$_SESSION["error"]."</div>";} ?>
</section>
</div>
<?php include_once('includes/footer.php'); ?>