<?php
	session_start();
	
?>
<script>
	function checkForm() {
		var x = document.getElementById('vnev');
		var y = document.getElementById('knev');

		if (!x.value.match(/^[A-Za-z]+$/) || !y.value.match(/^[A-Za-z]+$/)) {
			
			alert("Kérem csak betüket használjon a névmezőknél!");	
			return false;
		}
		else 
		{
			return true;
		}
	}
</script>
<article class="jelentkezes">
<?php 
	if (isset($_SESSION['ok'])) {
		?>
		<form action="/inc/finish.inc.php">
		<fieldset class="elkuld">
		<legend><h1>Sikeres jelentkezés</h1></legend>
		<p>Jelentkező neve: <b><?php echo $_SESSION['vNev'].' '.$_SESSION['kNev'] ?></b> </p>
		<p>Születési Dátum: <b><?php echo $_SESSION['date']?></b> </p>
		<p>E-mail cím: <b><?php echo $_SESSION['email']?></b> </p>
		<p>Telefonszám: <b><?php echo "+36".$_SESSION['tel'] ?></b> </p>
		<p>Verseny amire jelentkezik: <b><?php echo $_SESSION['vers'] ?></b> </p>
		<p>Milyen pozicióra jelentkezik: <b><?php echo $_SESSION['title'] ?></b> </p>
		
		<button type="submit" name="sub">Elküld</button>
		<button type="submit" name="sub">Mégsem</button>		
		</fieldset>
		</form>
	<?php
		}
	else
	{ ?>
	<h1>Jelentkezés</h1>
	<form name="form1" action="/inc/jelentkez.inc.php" method="post" onsubmit="return checkForm()">
	<fieldset>
	<legend><h3> Személyes adatok</h3></legend>
	
		
		<input type="text" id="vnev" name="veznev" placeholder="Vezeteknév" required>
		</br>
		<input type="text" id="knev" name="kernev" placeholder="Keresztnév" required>
		</br>
		<input type="date" name="szüldate" placeholder="Születési Dátum" required>
		</br>
		<input type="email" name="mail" placeholder="E-mail" required>
		</br>
		<input type="tel" name="tel" pattern="[0-9]{9}" placeholder="Mobiltelefon +36 nélkül" required>
		</br>
	</fieldset>
	<fieldset>
	<legend><h3>Esemény adatok</h3></legend>
		<p>Versenyek</p>
		<select name="versenyek">
		<?php foreach ($versenyek as $verseny) { ?>
			<option value= "<?php echo $verseny['value']?>"><?php echo $verseny['nev']?> </option>
		<?php }?>
		</select>

		
		<p>Titulus</p>
		<input type="radio" name="titulus" value="versenyző">Versenyző</input>
		<input type="radio" name="titulus" value="önkentes">Önkéntes</input>
		<input type="radio" name="titulus" value="bíró">Bíró</input></br>
		<button type="submit" name="sub" >Elküld</button>
	</fieldset>
	</form>
	<section>
		<p>A regisztrációs lap beküldésével elfogadom a versenyszabályzatot, a részvételi feltételeket és a SCA, WCE ide vonatkozó szabályozásait.</br></br>
		Vállalom, hogy a nevezési díjat határidőre befizetem a szervezők részére.</br></br>
		Hozzájárulok, hogy a SCA Hungary marketing célokra felhasználja a nevemet a rólam készült fotókat, videókat.</br>
		Amennyiben győztesként kerülök ki a versenyből és elfogadom a szervezők utaszási, valamit szállás támogatását, ezzel vállalom, hogy téritésmentesen a szervezők, illetve az általuk megnevezett támogatók / szponzorok rendelkezésére állok a következő Magyar bajnokság időpontjáig maximum 6 alkalommal, összeségében maximum 48 óra időintervallumban (melyben az utazás/felkészülés időtartama nem számít bele), a SCA illetve az SCA Hungary céljaival összeegyezezhető bemutatókon, rendezvényeken való aktív részvétel médiaszereplés, stb. megvalósítása céljából.</p>
	</section>
	
	<?php }?>
</article>
