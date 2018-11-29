<?php
global $action;
global $IC;
global $itemtype;

$sindex = array_pop($action);

// current people item

$item = $IC->getItem(array("sindex" => $sindex, "extend" => array("tags" => true, "mediae" => true)));
$media = $IC->sliceMedia($item, "single_media");
?>

<div class="scene page i:scene">

	<div class="article i:article" itemscope itemtype="http://schema.org/Article">

		<?		if($media): ?>
				<div class="image item_id:<?= $item["item_id"] ?> format:<?= $media["format"] ?> variant:<?= $media["variant"] ?>">
					<p>Image: <a href="/images/<?= $item["item_id"] ?>/<?= $media["variant"] ?>/500x.<?= $media["format"] ?>"><?= $media["name"] ?></a></p>
				</div>
		<?		endif; ?>


			<h1><?= $item["name"] ?></h1>

			<? if($item["job_title"]): ?>
			<div class="info" itemprop="jobtitle">
				<p><?= nl2br($item["job_title"]) ?></p>
			</div>
			<? endif; ?>

			<? if($item["email"]): ?>
			<div class="info" itemprop="email">
				<p><?= nl2br($item["email"]) ?></p>
			</div>
			<? endif; ?>

			<? if($item["tel"]): ?>
			<div class="info" itemprop="telephone">
				<p><?= nl2br($item["tel"]) ?></p>
			</div>
			<? endif; ?>

			<? if($item["description"]): ?>
			<div class="description" itemprop="description">
				<p><?= nl2br($item["description"]) ?></p>
			</div>
			<? endif; ?>
