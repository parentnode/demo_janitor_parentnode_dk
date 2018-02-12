<?php
global $action;
global $IC;
global $itemtype;


$items = $IC->getItems(array("itemtype" => $itemtype, "status" => 1, "extend" => array("tags" => true, "mediae" => true)));
?>
<div class="scene pages i:scene">
    <h2>Pages</h2>
	<ul class="items">
<? 	foreach ($items as $item): ?>
		<li class="item item_id:<?= $item['id']; ?>" itemscope itemtype="http://schema.org/Article">
			<h3 itemprop="name"><a href="/pages/<?= $item["sindex"] ?>"><?= $item["name"] ?></a></h3>
			<p class="description" itemprop="description">
				<?= $item["description"] ?>
			</p>
		</li>
<?	endforeach; ?>
    </ul>
</div>
