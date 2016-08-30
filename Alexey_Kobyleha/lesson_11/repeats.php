<?php
include_once 'class/CountRepeats.php';

$obj = new CountRepeats();
$obj->countAllRepeats();

if (isset($_REQUEST['save'])) {
    $obj->setStrings($_REQUEST['text']);
}
include_once 'views/header.tpl.php';
?>
<div class="row">
    <div class="col-md-8"><br>
        <h3>Repeats counting (Task №1)</h3><br>
        <?php $allRepeats = $obj->countAllRepeats(); ?>
        <?php if (count($allRepeats) > 1): ?>
        <div class="jumbotron">
            <h4>Global Result</h4>
            <p style="font-size: 14px !important;">
                <?php foreach ($allRepeats as $key => $value): ?>
                    <?php echo 'Word: <strong>' . $key . '</strong> repeats: <strong>' . $value . '</strong><br>'; ?>
                <?php endforeach; ?>
            </p>
            <?php $stringRepeats = $obj->countStringRepeats(); ?>
            <?php if ($stringRepeats['count'] !== 0): ?>
                <hr class="m-y-2">
                <h4>All matches found</h4>
                <p style="font-size: 14px !important;">
                    <?php foreach ($stringRepeats as $key => $value): ?>
                        <?php if (is_array($value)): ?>
                            <?php foreach ($value as $string => $param): ?>
                                <?php if ($param === true): ?>
                                    <?php echo 'In string # ' . ++$key . ' => ' . $string . '<br>'; ?>
                                <?php endif; ?>
                            <?php endforeach; ?>
                         <?php endif; ?>
                    <?php endforeach; ?>
                </p>
            <?php endif; ?>
        </div>
        <?php endif; ?>
		<form method="post">
            <div class="form-group">
                <label for="editText">Strings</label>
                <textarea name="text" id="editText" class="form-control" rows="10"><?php echo (isset($_REQUEST['save'])) ? $obj->getStings(false) : $obj->getStings(false) ?></textarea>
            </div>
            <button name="save" type="submit" class="btn btn-primary">Save strings</button>
        </form>
    </div>
    <div class="col-md-4"></div>
</div>
<?php include_once 'views/bottom.tpl.php'; ?>