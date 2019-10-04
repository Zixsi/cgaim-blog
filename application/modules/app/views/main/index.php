<div class="blog-list">
	<?if($items):?>
		<?foreach($items as $item):?>
			<div class="card mb-4">
				<div class="card-body">
					<div class="row top-panel">
						<div class="col-8">
							<?if(($item['tags'] ?? false) && is_array($item['tags'])):?>
								<?foreach($item['tags'] as $val):?>
									<a href="/?tag=<?=$val?>" class="text-dark tag"><?=$val?></a>
								<?endforeach;?>
								<div class="w-100 d-md-none mt-1"></div>
							<?endif;?>
							<span class="mb-0 ml-1 text-muted date"><?=get_format_date($item['ts'])?></span>
						</div>
						<div class="col-4 text-right">
							<i class="far fa-eye text-muted"></i> <?=$item['counter']?>
						</div>
					</div>
					<h2 class="mb-1 item-title">
						<a class="text-dark " href="/item/<?=$item['id']?>/"><?=htmlspecialchars_decode($item['name'])?></a>
					</h2>
					<p class="card-text mb-auto"><?=htmlspecialchars_decode($item['short_description'])?></p>
				</div>
				<a href="/item/<?=$item['id']?>/">
					<?if(empty($item['img'])):?>
						<img class="card-img-bottom" src="<?=TEMPLATE_DIR?>/blog_tpl/img/blog-img.svg" alt="<?=htmlspecialchars_decode($item['name'])?>">
					<?else:?>
						<img class="card-img-bottom" src="/<?=$item['img']?>" alt="<?=htmlspecialchars_decode($item['name'])?>">
					<?endif;?>
				</a>
			</div>
		<?endforeach;?>

		<?if($show_more_button):?>
			<div class="text-center">
				<button class="btn btn-default" id="blog-list-more" data-count="<?=$items_count?>" data-limit="<?=$filter['limit']?>" data-current="<?=$filter['limit']?>" data-tag="<?=$filter['tag']?>" data-search="<?=$filter['search']?>">Предыдущие публикации</button>
			</div>
		<?endif;?>

	<?endif;?>
</div>

<script type="text/html" id="blog-list-item-tpl">
	<div class="card mb-4">
		<div class="card-body">
			<div class="row top-panel">
				<div class="col-8">
					{TAGS}
					<span class="mb-0 text-muted date">{DATE}</span>
				</div>
				<div class="col-4 text-right">
					<i class="far fa-eye text-muted"></i> {COUNTER}
				</div>
			</div>
			<h2 class="mb-1 item-title">
				<a class="text-dark " href="/item/{ID}/">{TITLE}</a>
			</h2>
			<p class="card-text mb-auto">{DESCRIPTION}</p>
		</div>
		<a href="/item/{ID}/">
			<img class="card-img-bottom" src="{IMG}" alt="{TITLE}">
		</a>
	</div>
</script>