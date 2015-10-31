<?php
// Title
$this->assign('title', __('About'));
// Meta Description
$this->append('meta', $this->Html->meta("description", "Frannca is a startup that develops solutions for your business."));
?>
<div class="mdl-grid">
    <div class="mdl-cell mdl-cell--12-col mdl-typography--text-center">
        <h2 class="mdl-typography--display-3"><?= __('About') ?></h2>
    </div>
</div>

<div class="mdl-grid">
	<div class="mdl-cell mdl-cell--3-col"></div>
	<div class="mdl-cell mdl-cell--6-col mdl-cell--4-col-phone mdl-cell--8-col-tablet">
		<p><b>Frannca</b> is a brazilian startup that develops solutions for the internet. Creates websites according to customer needs and general solutions for the Internet. Frannca was founded by <b>Renato França</b> in October 16, 2015.</p>
	</div>
	<div class="mdl-cell mdl-cell--3-col"></div>
</div>