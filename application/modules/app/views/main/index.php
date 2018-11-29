<div class="blog-tags">
	<a href="/" class="badge badge-secondary">Все посты</a>
	<?if($tags):?>
		<?foreach($tags as $val):?>
			<a href="/?tag=<?=$val['name']?>" class="badge badge-primary"><?=$val['name']?></a>
		<?endforeach;?>
	<?endif;?>
</div>

<div class="row blog-list">
	<div class="col-12">
		<?if($items):?>
			<?foreach($items as $item):?>
				<div class="card flex-md-row mb-4">

					<?if(empty($item['img'])):?>
						<img class="card-img d-none d-lg-block" src="<?=TEMPLATE_DIR?>/blog_tpl/img/blog-img.svg" alt="<?=htmlspecialchars_decode($item['name'])?>">
					<?else:?>
						<img class="card-img d-none d-lg-block" src="/<?=$item['img']?>" alt="<?=htmlspecialchars_decode($item['name'])?>">
					<?endif;?>

					<div class="card-body d-flex flex-column align-items-start">
						<?if(($item['tags'] ?? false) && is_array($item['tags'])):?>
							<div class="tags">
								<?foreach($item['tags'] as $val):?>
									<a href="/?tag=<?=$val?>" class="badge badge-primary"><?=$val?></a>
								<?endforeach;?>
							</div>
						<?endif;?>
						<div class="mb-0 text-muted"><?=get_format_date($item['ts'])?></div>
						<h3 class="mb-1 item-title">
							<a class="text-dark" href="/item/<?=$item['id']?>/"><?=htmlspecialchars_decode($item['name'])?></a>
						</h3>
						<p class="card-text mb-auto"><?=htmlspecialchars_decode($item['short_description'])?></p>
						<a href="/item/<?=$item['id']?>/" class="btn btn-primary">Читать</a>
					</div>
				</div>
			<?endforeach;?>

			<?if($show_more_button):?>
				<div class="text-center">
					<button class="btn btn-primary" id="blog-list-more" data-count="<?=$items_count?>" data-limit="<?=$items_limit?>" data-current="<?=$items_limit?>" data-tag="<?=$tag?>">Показать еще</button>
				</div>
			<?endif;?>
		<?endif;?>
	</div>
</div>

<script type="text/html" id="blog-list-item-tpl">
	<div class="card flex-md-row mb-4">
		<img class="card-img d-none d-lg-block" src="{IMG}" alt="{TITLE}">
		<div class="card-body d-flex flex-column align-items-start">
			<div class="tags">{TAGS}</div>
			<div class="mb-0 text-muted">{DATE}</div>
			<h3 class="mb-1 item-title">
				<a class="text-dark" href="/item/{ID}/">{TITLE}</a>
			</h3>
			<p class="card-text mb-auto">{DESCRIPTION}</p>
			<a href="/item/{ID}/" class="btn btn-primary">Читать</a>
		</div>
	</div>
</script>