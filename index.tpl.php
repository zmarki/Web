<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html"; charset="utf-8">
	<title>
		<?php echo $fejlec['cim'].((isset($fejlec['motto']))?('|'.$fejlec['motto']):'') ?>
	</title>
	<link href="style_coffee.css" rel="stylesheet" type="text/css" />
	<link rel="icon" href="/pictures/coffee.png" sizes="16x16" type="image/png" />
</head>
<body>
	<header>
		<a href="."> <h1 id="coffee">Coffee</h1> <img src="/pictures/coffee-beans64.png" alt="kv" /> <h1 id="Career">  Career </h1></a>
		<p> "a kávé nem csak a kezdet!" </p>
		
	</header>
	<nav>
		<ul>
		<?php foreach ($oldalak as $url => $oldal) { ?>
			<li>
				<a <?php echo (($oldal==$keres) ? 'class="aktiv" ' : '')?>  href="<?php echo ($url=='rolunk')? '.': ('?oldal=' .$oldal['fájl']) ?>">
					<?php echo $oldal['szoveg'] ?> </a>
			</li>
		<?php }?>
		</ul>
	</nav>
	<div class="torzs">
		<aside>
			<section>
				<h2>Idézet</h2>
				<p>
					<a href="./pictures/<?php $kep=rand(1,9); echo $kep; ?>.jpg">
					<img src="./pictures/<?php echo $kep ?>.jpg" width="200" height="200">
					</a>
				</p>
			</section>
			<section>
				<h2>Top 5 Kávézó</h2>
				<ol start="1">
				<?php foreach ($kvzoo as $kv) { ?>
				
				<li>
				<a href="<?php echo $kv['link']?>"><?php echo $kv['nev']?></a>
				</li>
				<?php }?>
				</ol>
			</section>
	<!--		<section>
				<h2> Szavazz a legjobb kávézóra </h2>
				<form>
				<select name="kv">
					<?php foreach ($kvzoo as $kv) { ?>
					<option value= "<?php echo $kv['value']?>"><?php echo $kv['nev']?> </option>
					<?php }?>
				</select>
				<button type="submit" name="sub">Szavazok</button>
				</form>
			</section>-->
		</aside>
		<div class="page">
		
		<?php
			include("{$keres['fájl']}.tpl.php"); ?>
		</div>
	</div>
	<footer>
		&copy; 2020 - Web-programozás | Beadandó | Neptun: WOS3KO
	</footer>
</body>
</html>	