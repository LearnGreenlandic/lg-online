<?php
namespace LGO;

function dialogue_data($state) {
	extract($state, EXTR_SKIP);
	$es = [];
	$kals = explode("\n", trim(file_get_contents('d/lg1/dialogue/kal.txt')));
	$trs = explode("\n", trim(file_get_contents('d/lg1/dialogue/'.$lang.'.txt')));
	foreach ($kals as $i => $kal) {
		$kal = explode("\t", $kal);
		$tr = explode("\t", $trs[$i]);
		$es[] = [
			$kal[0],
			$kal[1],
			$kal[2],
			$tr[1],
			$tr[2],
			];
	}
	shuffle($es);
	return $es;
}

function dialogue_1($state) {
?>
<div class="task task-audio task-dialogue container-fluid">
<div class="row">
<div class="col">
<p>{t:lg1/dialogue/1/text}</p>
</div>
</div>
<div class="row alternate">
<?php
	foreach (\LGO\dialogue_data($state) as $e) {
		echo '<div class="col-lg-6 my-2"><div class="row entry"><div class="col-2"><audio src="{t:prefix}/d/lg1/dialogue/'.$e[0].' Q.mp3" controlslist="nodownload" crossorigin="use-credentials" preload="none">HTML5 MP3</audio><button type="button" class="btn btn-primary my-1">▶</button></div><div class="col-8 py-2 q t" data-text="'.$e[3].'">'.$e[1].'</div><div class="col-2"><button type="button" class="btn btn-secondary my-1">☼</button></div></div><div class="row entry"><div class="col-2"><audio src="{t:prefix}/d/lg1/dialogue/'.$e[0].' A.mp3" controlslist="nodownload" crossorigin="use-credentials" preload="none">HTML5 MP3</audio><button type="button" class="btn btn-primary my-1">▶</button></div><div class="col-8 py-2 a t" data-text="'.$e[4].'">'.$e[2].'</div><div class="col-2"><button type="button" class="btn btn-secondary my-1">☼</button></div></div></div>';
	}
?>
</div>
</div>
<?php
}

function dialogue_2($state) {
?>
<div class="task task-audio task-dialogue container-fluid">
<div class="row">
<div class="col">
<p>{t:lg1/dialogue/2/text}</p>
</div>
</div>
<div class="row alternate">
<?php
	foreach (\LGO\dialogue_data($state) as $e) {
		echo '<div class="col-lg-6 my-2"><div class="row entry"><div class="col-2"><audio src="{t:prefix}/d/lg1/dialogue/'.$e[0].' Q.mp3" controlslist="nodownload" crossorigin="use-credentials" preload="none">HTML5 MP3</audio><button type="button" class="btn btn-primary my-1">▶</button></div><div class="col-8 py-2 q t" data-text="'.$e[3].'">'.$e[1].'</div><div class="col-2"><button type="button" class="btn btn-secondary my-1">☼</button></div></div><div class="row entry"><div class="col-2"><audio src="{t:prefix}/d/lg1/dialogue/'.$e[0].' A.mp3" controlslist="nodownload" crossorigin="use-credentials" preload="none">HTML5 MP3</audio><button type="button" class="btn btn-primary my-1">▶</button></div><div class="col-8 py-2 a t" data-text="'.$e[2].'">'.$e[4].'</div><div class="col-2"><button type="button" class="btn btn-secondary my-1">☼</button></div></div></div>';
	}
?>
</div>
</div>
<?php
}

function dialogue_3($state) {
?>
<div class="task task-audio task-dialogue container-fluid">
<div class="row">
<div class="col">
<p>{t:lg1/dialogue/3/text}</p>
</div>
</div>
<div class="row alternate">
<?php
	foreach (\LGO\dialogue_data($state) as $e) {
		echo '<div class="col-lg-6 my-2"><div class="row entry"><div class="col-2"><audio src="{t:prefix}/d/lg1/dialogue/'.$e[0].' Q.mp3" controlslist="nodownload" crossorigin="use-credentials" preload="none">HTML5 MP3</audio><button type="button" class="btn btn-primary my-1">▶</button></div><div class="col-8 py-2 q t" data-text="'.$e[1].'">'.$e[3].'</div><div class="col-2"><button type="button" class="btn btn-secondary my-1">☼</button></div></div><div class="row entry"><div class="col-2"><audio src="{t:prefix}/d/lg1/dialogue/'.$e[0].' A.mp3" controlslist="nodownload" crossorigin="use-credentials" preload="none">HTML5 MP3</audio><button type="button" class="btn btn-primary my-1">▶</button></div><div class="col-8 py-2 a t" data-text="'.$e[4].'">'.$e[2].'</div><div class="col-2"><button type="button" class="btn btn-secondary my-1">☼</button></div></div></div>';
	}
?>
</div>
</div>
<?php
}

function dialogue($state, $which) {
	\LGO\header($state, 'lg1', 'dialogue/'.$which);
	if ($which === '1') {
		\LGO\dialogue_1($state);
	}
	else if ($which === '2') {
		\LGO\dialogue_2($state);
	}
	else {
		\LGO\dialogue_3($state);
	}
	\LGO\footer($state);
}
