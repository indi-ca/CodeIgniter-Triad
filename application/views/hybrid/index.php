<?php
?>

<body style="background: #f5f5f5">
<div>
	<div style="width: 600px; min-height: 200px; margin-left: auto; margin-right: auto; margin-top: 100px; background: white">
		Bob Is your Uncle
		<?php echo Modules::run('modulea/modulea/index'); ?>
	</div>
	<div style="width: 600px; min-height: 200px; margin-left: auto; margin-right: auto; margin-top: 100px; background: white">
		<?php echo Modules::run('moduleb/moduleb/index'); ?>
	</div>
</div>
</body>

