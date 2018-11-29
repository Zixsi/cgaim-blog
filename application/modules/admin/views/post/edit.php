<div class="panel">
	<div class="panel-heading">
		<div class="col-xs-6">
			<h3 class="panel-title">Редактирование</h3>
		</div>
		<div class="col-xs-6 text-right">
			<a href="../../" class="btn btn-default btn-xs">Назад</a>
		</div>
	</div>
	<div class="panel-body" style="padding-top: 30px;">
		<div class="col-xs-12">
			<?=ShowError($error);?>
			<?=ShowFlashMessage();?>
			<form action="./" method="POST" enctype="multipart/form-data">
				<input type="hidden" name="<?=$csrf['key']?>" value="<?=$csrf['value']?>">
				<div class="form-group">
					<label class="fancy-checkbox">
						<input type="hidden" name="active" value="0">
						<input type="checkbox" name="active" id="factive" class="form-control" value="1" <?=set_checkbox('active', 1, ($item['active'] == 1))?> >
						<span>Доступен?</span>
					</label>
				</div>
				<div class="form-group">
					<label for="fname">Название</label>
					<input type="text" name="name" id="fname" class="form-control" placeholder="Название" value="<?=htmlspecialchars_decode(set_value('name', $item['name'], true))?>">
				</div>
				<?if($tags):?>
					<div class="form-group">
						<label for="ftags">Теги</label>
						<select name="tags[]" id="ftags" class="form-control" multiple="true">
							<?foreach($tags as $val):?>
								<option value="<?=$val['name']?>" <?=(in_array($val['name'], $item['tags']) || in_array($val['name'], ($form_data['tags'] ?? [])))?'selected="true"':''?>><?=$val['name']?></option>
							<?endforeach;?>
						</select>
					</div>
				<?endif;?>
				<div class="form-group">
					<label>Изображение</label>
					<input type="file" name="img">
					<?if(!empty($item['img'])):?>
						<img src="/<?=$item['img']?>" class="thumbnail" style="margin: 20px 0px; max-width: 300px; height: auto;">
					<?endif;?>
				</div>
				<div class="form-group">
					<label for="fshort_description">Краткое описание</label>
					<textarea name="short_description" id="fshort_description" class="form-control" placeholder="Краткое описание"><?=htmlspecialchars_decode(set_value('short_description', $item['short_description'], true))?></textarea>
				</div>
				<div class="form-group">
					<label for="fdescription">Полное описание</label>
					<textarea name="description" id="fdescription" class="form-control" placeholder="Полное описание"><?=htmlspecialchars_decode(set_value('description', $item['description'], true))?></textarea>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-xs btn-primary">Сохранить</button>
				</div>
			</form>
		</div>
	</div>
</div>

<script>
$(document).ready(function(){
	var editor_conf = ['title','bold','italic','underline','fontScale','ol','ul','blockquote','code','link','hr','indent','outdent','alignment', 'image', 'video'];
	var editor = new Simditor({
		id: 'fdescription',
		textarea: $('#fdescription'),
		toolbar: editor_conf,
		pasteImage: false,
		defaultImage: '<?=TEMPLATE_DIR?>/tools/editor/default.jpg',
		imageButton: ['upload', 'external'],
		upload:{
			url: '/admin/ajax/upload-file/',
			params: null,
			fileKey: 'upload_img', 
			connectionCount: 3,
			leaveConfirm: 'Uploading is in progress, are you sure to leave this page?'
		}
	});
});
</script>