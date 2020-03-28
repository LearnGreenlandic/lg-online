<?php
namespace LGO;

function table_11($state) {
?>
<div class="task task-text container-fluid">
<div class="row">
<div class="col">
<p>{t:lg2/table/1.1/text}</p>
</div>
</div>
<div class="row">
<?php
	$words = explode("\n", trim(file_get_contents('d/lg2/exercises/1.1/words.txt')));
	sort($words);
	foreach ($words as $w) {
		$w = explode("\t", $w);
		echo <<<XOUT
<div class="col-12 my-2">
<h5 class="text-info">{t:useword}: <strong>{$w[0]}</strong></h5>
<div class="table-responsive">
<table class="table table-striped table-bordered table-sm text-center">
<tr>
	<th colspan="2">{t:lg2/table/1.1/h1}</th>
	<th>{t:lg2/table/1.1/h2}</th>
	<th>{t:lg2/table/1.1/h3}</th>
</tr>
<tr>
	<td>{t:lg2/table/1.1/1s}</td>
	<td class="entry"><input type="text" spellcheck="false" class="form-control" data-check="{$w[1]}"> <code class="hint my-1"></code> <span class="text-nowrap"><button type="button" class="btn btn-warning">✓</button> <button type="button" class="btn btn-secondary">☼</button></span></td>
	<td>&nbsp;</td>
	<td class="entry"><input type="text" spellcheck="false" class="form-control" data-check="{$w[5]}"> <code class="hint my-1"></code> <span class="text-nowrap"><button type="button" class="btn btn-warning">✓</button> <button type="button" class="btn btn-secondary">☼</button></span></td>
</tr>
<tr>
	<td>{t:lg2/table/1.1/2s}</td>
	<td>&nbsp;</td>
	<td class="entry"><input type="text" spellcheck="false" class="form-control" data-check="{$w[4]}"> <code class="hint my-1"></code> <span class="text-nowrap"><button type="button" class="btn btn-warning">✓</button> <button type="button" class="btn btn-secondary">☼</button></span></td>
	<td>&nbsp;</td>
</tr>
<tr>
	<td>{t:lg2/table/1.1/3s}</td>
	<td class="entry"><input type="text" spellcheck="false" class="form-control" data-check="{$w[2]}"> <code class="hint my-1"></code> <span class="text-nowrap"><button type="button" class="btn btn-warning">✓</button> <button type="button" class="btn btn-secondary">☼</button></span></td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
</tr>
<tr>
	<td>{t:lg2/table/1.1/1p}</td>
	<td class="entry"><input type="text" spellcheck="false" class="form-control" data-check="{$w[3]}"> <code class="hint my-1"></code> <span class="text-nowrap"><button type="button" class="btn btn-warning">✓</button> <button type="button" class="btn btn-secondary">☼</button></span></td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
</tr>
<tr>
	<td>{t:lg2/table/1.1/2p}</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
</tr>
<tr>
	<td>{t:lg2/table/1.1/3p}</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
</tr>
</table>
</div>
</div>
XOUT;
	}
?>
</div>
</div>
<?php
}

function table_12($state) {
?>
<div class="task task-text container-fluid">
<div class="row">
<div class="col">
<p>{t:lg2/table/1.2/text}</p>
</div>
</div>
<div class="row">
<?php
	$words = explode("\n", trim(file_get_contents('d/lg2/exercises/1.2/words.txt')));
	sort($words);
	foreach ($words as $w) {
		$w = explode("\t", $w);
		echo <<<XOUT
<div class="col-12 my-2">
<h5 class="text-info">{t:useword}: <strong>{$w[0]}</strong></h5>
<div class="table-responsive">
<table class="table table-striped table-bordered table-sm text-center">
<tr>
	<th>{t:lg2/table/1.2/h1}</th>
	<td>{t:lg2/table/1.2/mig}</td>
	<td>{t:lg2/table/1.2/dig}</td>
	<td>{t:lg2/table/1.2/ham}</td>
	<td>{t:lg2/table/1.2/os}</td>
	<td>{t:lg2/table/1.2/jer}</td>
	<td>{t:lg2/table/1.2/dem}</td>
</tr>
<tr>
	<td>{t:lg2/table/1.2/jeg}</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td class="entry"><input type="text" spellcheck="false" class="form-control" data-check="{$w[1]}"> <code class="hint my-1"></code> <span class="text-nowrap"><button type="button" class="btn btn-warning">✓</button> <button type="button" class="btn btn-secondary">☼</button></span></td>
	<td>&nbsp;</td>
</tr>
<tr>
	<td>{t:lg2/table/1.2/du}</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
</tr>
<tr>
	<td>{t:lg2/table/1.2/han}</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
</tr>
<tr>
	<td>{t:lg2/table/1.2/vi}</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
</tr>
<tr>
	<td>{t:lg2/table/1.2/i}</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
</tr>
<tr>
	<td>{t:lg2/table/1.2/de}</td>
	<td class="entry"><input type="text" spellcheck="false" class="form-control" data-check="{$w[2]}"> <code class="hint my-1"></code> <span class="text-nowrap"><button type="button" class="btn btn-warning">✓</button> <button type="button" class="btn btn-secondary">☼</button></span></td>
	<td>&nbsp;</td>
	<td class="entry"><input type="text" spellcheck="false" class="form-control" data-check="{$w[3]}"> <code class="hint my-1"></code> <span class="text-nowrap"><button type="button" class="btn btn-warning">✓</button> <button type="button" class="btn btn-secondary">☼</button></span></td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
</tr>
<tr>
	<th>{t:lg2/table/1.2/h2}</th>
	<td>{t:lg2/table/1.2/mig}</td>
	<td>{t:lg2/table/1.2/dig}</td>
	<td>{t:lg2/table/1.2/ham}</td>
	<td>{t:lg2/table/1.2/os}</td>
	<td>{t:lg2/table/1.2/jer}</td>
	<td>{t:lg2/table/1.2/dem}</td>
</tr>
<tr>
	<td>{t:lg2/table/1.2/du}</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td class="entry"><input type="text" spellcheck="false" class="form-control" data-check="{$w[4]}"> <code class="hint my-1"></code> <span class="text-nowrap"><button type="button" class="btn btn-warning">✓</button> <button type="button" class="btn btn-secondary">☼</button></span></td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
</tr>
<tr>
	<td>{t:lg2/table/1.2/i}</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
</tr>
</table>
</div>
</div>
XOUT;
	}
?>
</div>
</div>
<?php
}

function table_81($state) {
?>
<div class="task task-text container-fluid">
<div class="row">
<div class="col">
<p>{t:lg2/table/8.1/text}</p>
</div>
</div>
<div class="row">
<?php
	$words = explode("\n", trim(file_get_contents('d/lg2/exercises/8.1/words.txt')));
	sort($words);
	foreach ($words as $w) {
		$w = explode("\t", $w);
		echo <<<XOUT
<div class="col-12 my-2">
<h5 class="text-info">{t:useword}: <strong>{$w[0]}</strong></h5>
<div class="table-responsive">
<table class="table table-striped table-bordered table-sm text-center">
<tr>
	<th>{t:lg2/table/8.1/ca}</th>
	<th colspan="2">{t:lg2/table/8.1/h1}</th>
	<th colspan="2">{t:lg2/table/8.1/h2}</th>
	<th colspan="2">{t:lg2/table/8.1/h3}</th>
</tr>
<tr>
	<th>{t:lg2/table/8.1/cd}</th>
	<td>{t:lg2/table/8.1/s}</td>
	<td>{t:lg2/table/8.1/p}</td>
	<td>{t:lg2/table/8.1/s}</td>
	<td>{t:lg2/table/8.1/p}</td>
	<td>{t:lg2/table/8.1/s}</td>
	<td>{t:lg2/table/8.1/p}</td>
</tr>
<tr>
	<td>{t:lg2/table/8.1/n}</td>
	<td class="entry"><input type="text" spellcheck="false" class="form-control" data-check="{$w[1]}"> <code class="hint my-1"></code> <span class="text-nowrap"><button type="button" class="btn btn-warning">✓</button> <button type="button" class="btn btn-secondary">☼</button></span></td>
	<td class="entry"><input type="text" spellcheck="false" class="form-control" data-check="{$w[2]}"> <code class="hint my-1"></code> <span class="text-nowrap"><button type="button" class="btn btn-warning">✓</button> <button type="button" class="btn btn-secondary">☼</button></span></td>
	<td class="entry"><input type="text" spellcheck="false" class="form-control" data-check="{$w[3]}"> <code class="hint my-1"></code> <span class="text-nowrap"><button type="button" class="btn btn-warning">✓</button> <button type="button" class="btn btn-secondary">☼</button></span></td>
	<td class="entry"><input type="text" spellcheck="false" class="form-control" data-check="{$w[4]}"> <code class="hint my-1"></code> <span class="text-nowrap"><button type="button" class="btn btn-warning">✓</button> <button type="button" class="btn btn-secondary">☼</button></span></td>
	<td class="entry"><input type="text" spellcheck="false" class="form-control" data-check="{$w[5]}"> <code class="hint my-1"></code> <span class="text-nowrap"><button type="button" class="btn btn-warning">✓</button> <button type="button" class="btn btn-secondary">☼</button></span></td>
	<td class="entry"><input type="text" spellcheck="false" class="form-control" data-check="{$w[6]}"> <code class="hint my-1"></code> <span class="text-nowrap"><button type="button" class="btn btn-warning">✓</button> <button type="button" class="btn btn-secondary">☼</button></span></td>
</tr>
<tr>
	<td><em>uanga</em></td>
	<td class="entry"><input type="text" spellcheck="false" class="form-control" data-check="{$w[7]}"> <code class="hint my-1"></code> <span class="text-nowrap"><button type="button" class="btn btn-warning">✓</button> <button type="button" class="btn btn-secondary">☼</button></span></td>
	<td class="entry"><input type="text" spellcheck="false" class="form-control" data-check="{$w[8]}"> <code class="hint my-1"></code> <span class="text-nowrap"><button type="button" class="btn btn-warning">✓</button> <button type="button" class="btn btn-secondary">☼</button></span></td>
	<td class="entry"><input type="text" spellcheck="false" class="form-control" data-check="{$w[9]}"> <code class="hint my-1"></code> <span class="text-nowrap"><button type="button" class="btn btn-warning">✓</button> <button type="button" class="btn btn-secondary">☼</button></span></td>
	<td class="entry"><input type="text" spellcheck="false" class="form-control" data-check="{$w[10]}"> <code class="hint my-1"></code> <span class="text-nowrap"><button type="button" class="btn btn-warning">✓</button> <button type="button" class="btn btn-secondary">☼</button></span></td>
	<td class="entry"><input type="text" spellcheck="false" class="form-control" data-check="{$w[11]}"> <code class="hint my-1"></code> <span class="text-nowrap"><button type="button" class="btn btn-warning">✓</button> <button type="button" class="btn btn-secondary">☼</button></span></td>
	<td class="entry"><input type="text" spellcheck="false" class="form-control" data-check="{$w[12]}"> <code class="hint my-1"></code> <span class="text-nowrap"><button type="button" class="btn btn-warning">✓</button> <button type="button" class="btn btn-secondary">☼</button></span></td>
</tr>
<tr>
	<td><em>illit</em></td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
</tr>
<tr>
	<td><em>taassuma</em></td>
	<td class="entry"><input type="text" spellcheck="false" class="form-control" data-check="{$w[13]}"> <code class="hint my-1"></code> <span class="text-nowrap"><button type="button" class="btn btn-warning">✓</button> <button type="button" class="btn btn-secondary">☼</button></span></td>
	<td class="entry"><input type="text" spellcheck="false" class="form-control" data-check="{$w[14]}"> <code class="hint my-1"></code> <span class="text-nowrap"><button type="button" class="btn btn-warning">✓</button> <button type="button" class="btn btn-secondary">☼</button></span></td>
	<td class="entry"><input type="text" spellcheck="false" class="form-control" data-check="{$w[15]}"> <code class="hint my-1"></code> <span class="text-nowrap"><button type="button" class="btn btn-warning">✓</button> <button type="button" class="btn btn-secondary">☼</button></span></td>
	<td>&nbsp;</td>
	<td class="entry"><input type="text" spellcheck="false" class="form-control" data-check="{$w[16]}"> <code class="hint my-1"></code> <span class="text-nowrap"><button type="button" class="btn btn-warning">✓</button> <button type="button" class="btn btn-secondary">☼</button></span></td>
	<td>&nbsp;</td>
</tr>
<tr>
	<td>{t:lg2/table/8.1/4s}</td>
	<td class="entry"><input type="text" spellcheck="false" class="form-control" data-check="{$w[17]}"> <code class="hint my-1"></code> <span class="text-nowrap"><button type="button" class="btn btn-warning">✓</button> <button type="button" class="btn btn-secondary">☼</button></span></td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td class="entry"><input type="text" spellcheck="false" class="form-control" data-check="{$w[18]}"> <code class="hint my-1"></code> <span class="text-nowrap"><button type="button" class="btn btn-warning">✓</button> <button type="button" class="btn btn-secondary">☼</button></span></td>
	<td class="entry"><input type="text" spellcheck="false" class="form-control" data-check="{$w[19]}"> <code class="hint my-1"></code> <span class="text-nowrap"><button type="button" class="btn btn-warning">✓</button> <button type="button" class="btn btn-secondary">☼</button></span></td>
</tr>
<tr>
	<td><em>uagut</em></td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
</tr>
<tr>
	<td><em>ilissi</em></td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
</tr>
<tr>
	<td><em>taakku</em></td>
	<td class="entry"><input type="text" spellcheck="false" class="form-control" data-check="{$w[20]}"> <code class="hint my-1"></code> <span class="text-nowrap"><button type="button" class="btn btn-warning">✓</button> <button type="button" class="btn btn-secondary">☼</button></span></td>
	<td class="entry"><input type="text" spellcheck="false" class="form-control" data-check="{$w[21]}"> <code class="hint my-1"></code> <span class="text-nowrap"><button type="button" class="btn btn-warning">✓</button> <button type="button" class="btn btn-secondary">☼</button></span></td>
	<td class="entry"><input type="text" spellcheck="false" class="form-control" data-check="{$w[22]}"> <code class="hint my-1"></code> <span class="text-nowrap"><button type="button" class="btn btn-warning">✓</button> <button type="button" class="btn btn-secondary">☼</button></span></td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
</tr>
<tr>
	<td>{t:lg2/table/8.1/4p}</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
</tr>
</table>
</div>
</div>
XOUT;
	}
?>
</div>
</div>
<?php
}

function table($state, $which) {
	\LGO\header($state, 'lg2', 'table/'.$which);
	if ($which === '1.1') {
		\LGO\table_11($state);
	}
	else if ($which === '1.2') {
		\LGO\table_12($state, $which);
	}
	else {
		\LGO\table_81($state, $which);
	}
	\LGO\footer($state);
}
