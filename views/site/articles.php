<br>
<br>
<br>
<br>
<br>

<?php foreach($articles as $k=>$v): ?>

<a href="<?php echo Yii::$app->homeUrl.'site/art?id='.$v->id_art; ?>">
	<h1>
		<?php echo $v->art_title; ?>
	</h1>
</a>
<?php endforeach; ?>
