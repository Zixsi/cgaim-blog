<div class="blog-tags">
	<a href="/" class="badge badge-secondary">Все посты</a>
	<a href="#" class="badge badge-primary">World</a>
	<a href="#" class="badge badge-primary">Animation</a>
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
						<div class="tags">
							<span class="badge badge-primary">World</span><span class="badge badge-primary">Animation</span>
						</div>
						<div class="mb-0 text-muted"><?=get_format_date($item['ts'])?></div>
						<h3 class="mb-1 item-title">
							<a class="text-dark" href="/item/<?=$item['id']?>/"><?=htmlspecialchars_decode($item['name'])?></a>
						</h3>
						<p class="card-text mb-auto"><?=htmlspecialchars_decode($item['short_description'])?></p>
						<a href="/item/<?=$item['id']?>/" class="btn btn-primary">Читать</a>
					</div>
				</div>
			<?endforeach;?>
		<?endif;?>
	</div>
</div>