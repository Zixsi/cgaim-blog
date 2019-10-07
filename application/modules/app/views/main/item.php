<div class="blog-detail">
	<div class="card flex-md-row mb-4">
		<div class="card-body">
			<div class="row top-panel">
				<div class="col-8">
					<?if(($item['tags'] ?? false) && is_array($item['tags'])):?>
						<?foreach($item['tags'] as $val):?>
							<a href="/?tag=<?=$val?>" class="text-dark tag"><?=$val?></a>
						<?endforeach;?>
						<div class="w-100 d-md-none mt-1"></div>
					<?endif;?>
					<span class="mb-0 text-muted date ml-1"><?=get_format_date($item['ts'])?></span>
				</div>
				<div class="col-4 text-right">
					<i class="far fa-eye text-muted mb-2"></i> <?=$item['counter']?>
					<a href="/" class="btn btn-sm btn-outline-dark ml-2">Назад</a>
				</div>
			</div>

			<h2 class="mb-2 item-title"><?=htmlspecialchars_decode($item['name'])?></h2>
		
			<?if(!empty($item['short_description'])):?>
				<p class="card-text mb-auto"><?=htmlspecialchars_decode($item['short_description'])?></p>
			<?endif;?>

			<?if(!empty($item['img'])):?>
				<img class="" src="/<?=$item['img']?>" alt="<?=htmlspecialchars_decode($item['name'])?>">
			<?endif;?>

			<div class="card-text mb-auto">
				<?=htmlspecialchars_decode($item['description'])?>
			</div>

			<script src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
			<script src="//yastatic.net/share2/share.js"></script>
			<div class="text-right mt-5">
				<span class="float-left mr-4 mb-2">Понравился материал? Расскажите о нем друзьям. Спасибо!</span>
				<div class="ya-share2 text-right float-right" data-services="vkontakte,facebook,odnoklassniki,twitter"></div>
				<div class="clearfix"></div>
			</div>
			<div class="text-right pt-4">
				<a href="/" class="btn btn-sm btn-outline-dark">Назад</a>
			</div>
		</div>
	</div>
</div>

<div class="blog-other">
	<h4 class="title">Другие посты</h4>
	<div class="row justify-content-center">
		<?if($other_items):?>
			<?foreach($other_items as $val):?>
				<div class="col-12 col-sm-6 col-md-4 mb-4">
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
							<h2 class="card-title">
								<a href="/item/<?=$val['id']?>/"><?=htmlspecialchars_decode($val['name'])?></a>
							</h2>
							<p class="card-text"><?=htmlspecialchars_decode($item['short_description'])?></p>
						</div>
					</div>
				</div>
			<?endforeach;?>
		<?endif;?>
	</div>
</div>
