<div class="blog-tags">
	<a href="/" class="badge badge-secondary">Все посты</a>
	<?if($tags):?>
		<?foreach($tags as $val):?>
			<a href="/?tag=<?=$val['name']?>" class="badge badge-primary"><?=$val['name']?></a>
		<?endforeach;?>
	<?endif;?>
</div>

<div class="blog-detail">
	<div class="card flex-md-row mb-4">
		<div class="card-body">
			<?if(($item['tags'] ?? false) && is_array($item['tags'])):?>
				<div class="tags">
					<?foreach($item['tags'] as $val):?>
						<a href="/?tag=<?=$val?>" class="badge badge-primary"><?=$val?></a>
					<?endforeach;?>
				</div>
			<?endif;?>
			<div class="mb-1 text-muted"><?=get_format_date($item['ts'])?></div>
			<h3 class="mb-2 item-title"><?=htmlspecialchars_decode($item['name'])?></h3>
			<?if(!empty($item['short_description'])):?>
				<p class="card-text mb-auto"><?=htmlspecialchars_decode($item['short_description'])?></p>
			<?endif;?>

			<?if(!empty($item['img'])):?>
				<img class="" src="/<?=$item['img']?>" alt="<?=htmlspecialchars_decode($item['name'])?>">
			<?endif;?>

			<div class="card-text mb-auto">
				<?=htmlspecialchars_decode($item['description'])?>
			</div>
		</div>
	</div>
</div>

<div class="blog-other">
	<h4 class="title">Другие посты</h4>
	<div class="card-columns">
		<?if($other_items):?>
			<?foreach($other_items as $val):?>
				<div class="card">
					<a href="/item/<?=$val['id']?>/">
						<?if(!empty($val['img'])):?>
							<img class="card-img-top" src="/<?=$val['img']?>" alt="<?=htmlspecialchars_decode($val['name'])?>">
						<?else:?>
							<img class="card-img-top" src="<?=TEMPLATE_DIR?>/blog_tpl/img/blog-img.svg" alt="<?=htmlspecialchars_decode($val['name'])?>">
						<?endif;?>
					</a>
					<div class="card-body">
						<div class="mb-1 text-muted"><?=get_format_date($val['ts'])?></div>
						<h5 class="card-title">
							<a href="/item/<?=$val['id']?>/"><?=htmlspecialchars_decode($val['name'])?></a>
						</h5>
						<p class="card-text"><?=htmlspecialchars_decode($item['short_description'])?></p>
					</div>
				</div>
			<?endforeach;?>
		<?endif;?>
	</div>
</div>
