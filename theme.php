<?php global $Wcms ?>
<!doctype html>
<html lang="<?= $Wcms->get('config', 'siteLang') ?>">
    <head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">	
		<title><?= $Wcms->page('title') ?> | <?= $Wcms->get('config', 'siteTitle') ?></title>
		<meta name="author" content="deen.cz | deen@deen.cz">		
		<meta name="description" content="<?= $Wcms->page('description') ?>">
		<meta name="keywords" content="<?= $Wcms->page('keywords') ?>">
<?= $Wcms->css() ?>
		<link rel="stylesheet" href="<?= $Wcms->asset('css/style.css') ?>">
    </head>
    <body><?= $Wcms->settings() ?><?= $Wcms->alerts() ?>

		<nav>
    		<ul>
				<li<?php if($Wcms->getCurrentPagePath() == $Wcms->get('config', 'defaultPage')."/") echo " class=\"active\""?>><a href="/">Úvod</a></li>				
<?= $Wcms->menu() ?>

    		</ul>
		</nav>
		<section>
			<?= $Wcms->page('content') ?>

		</section>
		<section>
            <?= $Wcms->block('subside') ?>

		</section>
    	<footer>
            <?= $Wcms->footer() ?>

    	</footer>
		<?php if (!$this->loggedIn) {?>
		<a id="login" href="/<?= $Wcms->get('config', 'login') ?>">Přihlásit se</a>
		<?php } ?>
<?= $Wcms->js() ?>
	</body>
</html>
