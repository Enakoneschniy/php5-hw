<!--
Home work example at http://php.real.kh.ua/lesson_11/index.php
-->
<?php
include_once 'views/header.tpl.php';
include_once 'class/Test.php';
$test = new Test();
$question = $test->getQuestion(6);

if (isset($_REQUEST['answer']) && !empty($_REQUEST['variant'])) {
    var_dump($test->getResult(6));
} else {
    $error = "Нужно указать ответ!";
}

?>
<div class="row">
    <div class="col-md-8"><br>
        <h3>Дайте ответ на вопрос</h3><br>

        <div class="jumbotron">
            <h4>Вопрос  <?php echo $question['id']; ?></h4>
            <?php echo $question['question']; ?>
        </div>

        <div class="answers">
            <h4>Выберите правильный вариант</h4>
            <form method="post">
                <?php foreach ($question as $key => $value): ?>
                    <?php if ($key === 'answers'): ?>
                        <?php foreach ($value as $k => $v): ?>
                            <p><label><input type="radio" title="" name="<?php echo 'variant'; ?>" value="<?php echo $k; ?>"> <?php echo $k; ?></label></p>
                        <?php endforeach; ?>
                    <?php endif; ?>
                <?php endforeach; ?>

                <button name="answer" type="submit" class="btn btn-primary">Ответить</button>
            </form>
        </div>
    </div>
    <div class="col-md-4"></div>
</div>
<?php include_once 'views/bottom.tpl.php'; ?>
