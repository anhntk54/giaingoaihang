<<<<<<< HEAD
<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/themes/smoothness/jquery-ui.css" media="all" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/libs/tags/jquery.ptags.js"></script>
<link href="<?php echo Yii::app()->theme->baseUrl; ?>/libs/tags/jquery.ptags.default.css" rel="stylesheet" type="text/css" />
<div class="row">
	<label >Tags</label>
	<input type="text" id="tags" name="tags" value="<?php echo $value; ?>" style="width: 200px;"/>
</div><br>
<a  onclick="$('#oldtags').show();$(this).hide();">Hiển thị những tag đã có</a><br>
<div style="display: none;" id="oldtags">
	<?php foreach($tags as $tag): ?>
		<a  onclick="selectTags('<?php echo $tag->name; ?>');"><?php echo $tag->name; ?></a>
	<?php endforeach; ?>
</div>
<script type="text/javascript">
	function selectTags (name) {
		str = $('#tags').val()+","+name;
		$('#tags').val(str);
	}
	var str;
		$(document).ready(function() {
			$("#tags").ptags();
		});
=======
<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/themes/smoothness/jquery-ui.css" media="all" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/libs/tags/jquery.ptags.js"></script>
<link href="<?php echo Yii::app()->theme->baseUrl; ?>/libs/tags/jquery.ptags.default.css" rel="stylesheet" type="text/css" />
<div class="row">
	<label >Tags</label>
	<input type="text" id="tags" name="tags" value="<?php echo $value; ?>" style="width: 200px;"/>
</div><br>
<a  onclick="$('#oldtags').show();$(this).hide();">Hiển thị những tag đã có</a><br>
<div style="display: none;" id="oldtags">
	<?php foreach($tags as $tag): ?>
		<a  onclick="selectTags('<?php echo $tag->name; ?>');"><?php echo $tag->name; ?></a>
	<?php endforeach; ?>
</div>
<script type="text/javascript">
	function selectTags (name) {
		str = $('#tags').val()+","+name;
		$('#tags').val(str);
	}
	var str;
		$(document).ready(function() {
			$("#tags").ptags();
		});
>>>>>>> 402c32a9249f3b941fa3a3a2066f3aa6277c3ec3
</script>