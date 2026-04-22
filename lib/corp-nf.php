<?php
namespace LGO;

function corp_nonfree($state) {
	\LGO\header($state, 'lg3', 'corp-nf');

	$db = new \TDC\PDO\SQLite('d/nonfree/parallel.sqlite', [\PDO::SQLITE_ATTR_OPEN_FLAGS => \PDO::SQLITE_OPEN_READONLY]);

	$GET = [];
	$GET['st'] = trim($_REQUEST['st'] ?? '');
	$GET['sl'] = $_REQUEST['sl'] ?? [];
	if (empty($GET['sl']) || !is_array($GET['sl'])) {
		$GET['sl'] = ['kal', 'dan'];
	}
	$GET['vl'] = $_REQUEST['vl'] ?? [];
	if (empty($GET['vl']) || !is_array($GET['vl'])) {
		$GET['vl'] = ['kal'];
	}
	$GET['cs'] = $_REQUEST['cs'] ?? [];
	if (!is_array($GET['cs'])) {
		$GET['cs'] = [];
	}
	$p = intval($_REQUEST['p'] ?? 0);

	$opts = '';
	$corps = [];
	$stm = $db->prepexec("SELECT * FROM works ORDER BY w_title ASC");
	while ($row = $stm->fetch()) {
		$corps[$row['w_id']] = $row['w_title'];
		$opts .= '<option value="'.$row['w_id'].'"'.((empty($GET['cs']) || in_array($row['w_id'], $GET['cs'])) ? ' selected' : '').'>'.htmlspecialchars($row['w_title']).'</option>';
	}

?>
<script>
let g_corp_vl = <?=json_encode_num($GET['vl'])?>;
</script>
<div class="task task-corpora container-fluid tips-unlink">
<form action="./" method="GET">

<div class="row mb-3">
<div class="col-6">
	<input type="text" class="form-control" name="st" value="<?=htmlspecialchars($GET['st']);?>">
</div>
<div class="col-auto">
	<button type="submit" class="btn btn-primary">{t:search}</button>
</div>
</div>
<div class="row mb-3">
<div class="col-auto">
	<div class="mb-2">{t:search-lang}:</div>
	<div class="form-check">
	<label class="form-check-label"><input class="form-check-input" type="checkbox" name="sl[]" value="kal"<?=(in_array('kal', $GET['sl']) ? ' checked' : '')?>> {t:lang-kal}</label>
	</div>
	<div class="form-check">
	<label class="form-check-label"><input class="form-check-input" type="checkbox" name="sl[]" value="dan"<?=(in_array('dan', $GET['sl']) ? ' checked' : '')?>> {t:lang-dan}</label>
	</div>
	<div class="form-check">
	<label class="form-check-label"><input class="form-check-input" type="checkbox" name="sl[]" value="qak"<?=(in_array('qak', $GET['sl']) ? ' checked' : '')?>> {t:lang-qak}</label>
	</div>
</div>
<div class="col-auto">
	<div class="mb-2">{t:show-lang}:</div>
	<div class="form-check">
	<label class="form-check-label"><input class="form-check-input" type="checkbox" name="vl[]" value="kal"<?=(in_array('kal', $GET['vl']) ? ' checked' : '')?>> {t:lang-kal}</label>
	</div>
	<div class="form-check">
	<label class="form-check-label"><input class="form-check-input" type="checkbox" name="vl[]" value="dan"<?=(in_array('dan', $GET['vl']) ? ' checked' : '')?>> {t:lang-dan}</label>
	</div>
	<div class="form-check">
	<label class="form-check-label"><input class="form-check-input" type="checkbox" name="vl[]" value="qak"<?=(in_array('qak', $GET['vl']) ? ' checked' : '')?>> {t:lang-qak}</label>
	</div>
</div>
<div class="col-auto">
	<div class="mb-2">{t:corpora}:</div>
	<select class="form-select" multiple size="3" name="cs[]">
	<?=$opts?>
	</select>
</div>
</div>

</form>
<?php

	$ps = [];
	$sql = "SELECT * FROM sents";
	if (!empty($GET['cs'])) {
		$sql .= " WHERE w_id IN (".implode(', ', $GET['cs']).')';
	}
	if (!empty($GET['st'])) {
		$ors = [];
		foreach ($GET['sl'] as $sl) {
			$ors[] = "s_{$sl} LIKE ?";
			$ps[] = '%'.$GET['st'].'%';
		}
		if (!empty($GET['cs'])) {
			$sql .= " AND (".implode(' OR ', $ors).')';
		}
		else {
			$sql .= " WHERE ".implode(' OR ', $ors);
		}
	}
	$off = $p*100;
	$sql .= " ORDER BY w_id ASC, s_num ASC LIMIT {$off}, 100";
	$rows = $db->prepexec($sql, $ps)->fetchAll();

	if (empty($rows)) {
		echo "<h2>{t:no-results}</h2>";
	}
	else {
		$pgs = '';
		if (!empty($p) || count($rows) == 100) {
			$q = htmlspecialchars(http_build_query($GET));
			$pgs = [];
			if ($p > 0) {
				$pgs[] = '<a href="./?'.$q.'&amp;p='.($p-1).'">&laquo;</a>';
			}
			if (count($rows) == 100) {
				$pgs[] = '<a href="./?'.$q.'&amp;p='.($p+1).'">&raquo;</a>';
			}
			$pgs = '<h3 class="text-center my-2">'.implode(' &nbsp; ', $pgs).'</h3>';
		}

		echo $pgs;
		echo '<div class="table-responsive"><table class="table table-striped table-sm body-table table-bordered">';
		echo '<thead><tr><th>#</th><th>{t:lang-kal}</th><th>{t:lang-dan}</th><th>{t:lang-qak}</th></tr></thead>';
		echo '<tfoot><tr><th>#</th><th>{t:lang-kal}</th><th>{t:lang-dan}</th><th>{t:lang-qak}</th></tr></tfoot>';
		echo '<tbody>';
		foreach ($rows as $row) {
			$kal = '';
			if (!empty($row['s_kal'])) {
				$kal = '<span class="d-none c-kal">'.htmlspecialchars($row['s_kal']).'</span>';
			}
			$dan = '';
			if (!empty($row['s_dan'])) {
				$dan = '<span class="d-none c-dan">'.htmlspecialchars($row['s_dan']).'</span>';
			}
			$qak = '';
			if (!empty($row['s_qak'])) {
				$qak = '<pre class="my-0 d-none c-qak">'.tippify_cg($row['s_qak']).'</pre>';
			}
			echo '<tr id="r'.$row['s_num'].'"><td><a href="#r'.$row['s_num'].'">'.$row['s_num'].'</a></td><td>'.$kal.'</td><td>'.$dan.'</td><td>'.$qak.'</td></tr>';
		}
		echo '</tbody></table></div>';
		echo $pgs;
	}

	echo '</div>';
	\LGO\footer($state);
}
