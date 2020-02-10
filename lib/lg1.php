<?php

function lg_lg1($state) {
	extract($state, EXTR_SKIP);
	lg_header($state, 'lg1');
?>
<div class="container d-flex flex-wrap">
<div class="media">
	<a href="<?=$prefix;?>/lg1/1/" class="mr-3"><img src="<?=$prefix;?>/d/lg1/1/<?=$lang;?>/0.png" width="150"></a>
	<div class="media-body">
		<h5><a href="<?=$prefix;?>/lg1/1/" class="text-warning"><?=$l10n['lg1/1'];?></a></h5>
		<ul>
			<li><a href="<?=$prefix;?>/lg1/pronounce/1/"><?=$l10n['lg1/pronounce/1'];?></a></li>
			<li><a href="<?=$prefix;?>/lg1/pronounce/2/"><?=$l10n['lg1/pronounce/2'];?></a></li>
			<li><a href="<?=$prefix;?>/lg1/pdf/1/"><?=$l10n['lg1/pdf/1'];?></a></li>
		</ul>
	</div>
</div>
</div>
<?php
	lg_footer($state);
}
