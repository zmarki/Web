<article class="jelentkezes">
<form action="/inc/finish.inc.php">
		<fieldset class="elkuld">
		<legend><h1>Sikeres jelentkezés</h1></legend>
		<p>Jelentkező neve: <b><?php echo $vezeteknev.' '.$keresztnev ?></b> </p>
		<p>Születési Dátum: <b><?php echo $date?></b> </p>
		<p>E-mail cím: <b><?php echo $email?></b> </p>
		<p>Telefonszám: <b><?php echo "+36".$telefonszam ?></b> </p>
		<p>Verseny amire jelentkezik: <b><?php echo $verseny ?></b> </p>
		<p>Milyen pozicióra jelentkezik: <b><?php echo $titulus ?></b> </p>
		
		<button type="submit" name="sub">Elküld</button>
		<button type="submit" name="sub">Mégsem</button>		
		</fieldset>
</form>
</article>