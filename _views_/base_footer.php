	<?php 
		echo @$message_file;
		echo @$message_photo;
	?>	
	<div id="notify-wrapper"> 
		<span id="notify" class="server-error" style="display:none;"> 
			<span id="notify-msg">Error</span> 
		</span>
	</div>

	<script type="text/javascript" src="/static/js/system_comps/rename.js"></script>
	<script type="text/javascript" src="/static/js/system_comps/create_folder.js"></script>
	<script type="text/javascript" src="/static/js/system_comps/delete.js"></script>
	<script type="text/javascript" src="/static/js/system_comps/move.js"></script>
	<script type="text/javascript" src="/static/js/system_comps/copy.js"></script>

	<?php require_once $_SERVER["DOCUMENT_ROOT"].'/_views_/modals.php'; ?>
	<?php require_once $_SERVER["DOCUMENT_ROOT"].'/_views_/modals/rename.php'; ?>
	<?php require_once $_SERVER["DOCUMENT_ROOT"].'/_views_/modals/delete.php'; ?>
	<?php require_once $_SERVER["DOCUMENT_ROOT"].'/_views_/modals/move.php'; ?>
	<?php require_once $_SERVER["DOCUMENT_ROOT"].'/_views_/modals/copy.php'; ?>
	<?php require_once $_SERVER["DOCUMENT_ROOT"].'/_views_/modals/share.php'; ?>

</body>
</html>