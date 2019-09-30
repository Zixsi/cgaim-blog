<div class="panel">
	<div class="panel-headingg" style="padding: 20px 25px;">
		<?=ShowError($error);?>
		<div class="col-xs-6">
			<h3 class="panel-title" style="margin: 0px; font-size: 18px; font-weight: 300;">Теги</h3>
		</div>
		<div class="col-xs-6 text-right">
			<form action="" method="POST" class="row">
				<input type="hidden" name="<?=$csrf['key']?>" value="<?=$csrf['value']?>">
				<div class="form-group col-xs-9">
					<input type="text" name="name" class="form-control" value="" placeholder="Название">
				</div>
				<div class="form-group col-xs-3">
					<button type="submit" class="btn btn-block btn-primary">Добавить</button>
				</div>
			</form>
		</div>
	</div>
	<div class="panel-body" style="padding-top: 30px;">
		<table class="table table-striped">
			<thead>
				<tr>
					<th width="100">Id</th>
					<th>Название</th>
					<th width="100" class="text-right">Действие</th>
				</tr>
			</thead>
			<tbody>
				<?if(is_array($items)):?>
					<?foreach($items as $item):?>
						<tr>
							<td><?=$item['id']?></td>
							<td><?=$item['name']?></td>
							<td class="text-right">
								<a href="./?action=delete&id=<?=$item['id']?>" class="btn btn-xxs btn-danger lnr lnr-trash" title="Редактировать"></a>
							</td>
						</tr>
					<?endforeach;?>
				<?endif;?>
			</tbody>
		</table>
	</div>
</div>