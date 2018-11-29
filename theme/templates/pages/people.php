<?php
global $IC;
global $action;
global $itemtype;

$items = $IC->getItems(array("itemtype" => $itemtype, "status" => 1, "order" => "position ASC, published_at DESC", "extend" => array("tags" => true, "user" => true, "mediae" => true)));
?>

<div class="scene people i:generic">
	<h1>People</h1>

<?	if(!empty($items)): ?>
	<ul class="items">
<?		foreach($items as $item):
			$media = $IC->sliceMedia($item); ?>
		<li class="item person id:<?= $item["item_id"] ?> i:article" itemscope itemtype="http://schema.org/Person">

<?		if($media): ?>
			<div class="image item_id:<?= $item["item_id"] ?> format:<?= $media["format"] ?> variant:<?= $media["variant"] ?>"></div>
<?		endif; ?>

			<ul class="tags">
<?		if($item["tags"]): ?>
<?			foreach($item["tags"] as $item_tag): ?>
<?				if($item_tag["context"] == $itemtype): ?>
				<li><?= $item_tag["value"] ?></li>
<?				endif; ?>
<?			endforeach; ?>
<?		endif; ?>
			</ul>
			<h2 itemprop="name"><a href="/people/<?= $item["sindex"] ?>"><?= $item["name"] ?></a></h2>


			<ul class="info">
				<li itemprop="jobtitle"><?= stringOr($item["job_title"], "N/A") ?></li>
				<li class="author" itemprop="email"><?= stringOr($item["email"], "N/A") ?></li>
				<li class="author" itemprop="telephone"><?= stringOr($item["tel"], "N/A") ?></li>
			</ul>

			<p class="description" itemprop="description">
				<?= $item["description"] ?>
			</p>

		</li>
<?		endforeach; ?>
	</ul>
<?	endif; ?>

</div>
