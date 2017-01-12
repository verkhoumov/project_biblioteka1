<div class="container">
	{alert}
	
	<h1 class="h3 page-header-h1">Удалить новость</h1>
	
	<div class="well">{news}</div>

	<p>Вы уверены, что хотите удалить новость?</p>
	
	<div class="well">
		<div class="row">
			<div class="col-xs-5">
				<a href="/user/admin/news" class="btn btn-default"><span class="glyphicon glyphicon-remove icon"></span> Отменить</a>
			</div>
			
			<div class="col-xs-7 text-right">
				<form method="POST">
					<input type="hidden" name="{crsf.token_name}" value="{crsf.hash}">
					<button class="btn btn-danger" type="submit" name="delete" value="1"><span class="glyphicon glyphicon-trash icon"></span> Удалить</button>
				</form>
			</div>
		</div>
	</div>
</div>