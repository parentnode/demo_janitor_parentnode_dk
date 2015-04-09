<?php
global $action;
global $IC;
global $itemtype;

$sindex = array_pop($action);

// current page item
$item = $IC->getItem(array("sindex" => $sindex, "extend" => array("tags" => true, "mediae" => true)));
$media = $IC->sliceMedia($item, "single_media");

$this->pageDescription($item["description"]);
$this->pageTitle($item["name"]);
?>

<div class="scene page i:scene">

	<div class="article i:article" itemscope itemtype="http://schema.org/Article">

<?		if($media): ?>
		<div class="image item_id:<?= $item["item_id"] ?> format:<?= $media["format"] ?> variant:<?= $media["variant"] ?>">
			<p>Image: <a href="/images/<?= $item["item_id"] ?>/<?= $media["variant"] ?>/500x.<?= $media["format"] ?>"><?= $media["name"] ?></a></p>
		</div>
<?		endif; ?>

		<h1><?= $item["name"] ?></h1>
		<dl class="info">
			<dt>Oprettet</dt>
			<dd itemprop="datePublished" content="<?= $item["published_at"] ?>"><?= date("d.m.y", strtotime($item["published_at"])) ?></dd>
		</dl>
		
		<div class="articlebody" itemprop="articleBody">
			<?= $item["html"] ?>
		</div>

<?		if($item["mediae"]):
			foreach($item["mediae"] as $media): ?>
		<div class="image item_id:<?= $item["item_id"] ?> format:<?= $media["format"] ?> variant:<?= $media["variant"] ?>">
			<p>Image: <a href="/images/<?= $item["item_id"] ?>/<?= $media["variant"] ?>/500x.<?= $media["format"] ?>"><?= $media["name"] ?></a></p>
		</div>
<?			endforeach;
		endif; ?>

	</div>

</div>