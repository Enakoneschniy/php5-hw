<?php
include_once 'views/header.tpl.php';
include_once 'class/Test.php';
$test = new Test();
$oneValueQuestion = new OneValueQuestion();
?>
<div class="row">
    <div class="col-md-8"><br>
        <h3>Add test</h3><br>

        <?php // Errors processing ?>
        <?php if ($oneValueQuestion->generateError() > 0): ?>
            <?php foreach ($oneValueQuestion->generateError() as $errors): ?>
                <div role="alert" class="alert alert-danger">
                <strong><?php echo $errors; ?></strong>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
        <?php // End Errors processing ?>

        <form method="post">
            <div class="form-group">
                <label for="question">Question</label>
                <textarea name="question" id="question" class="form-control" rows="10"><?php echo (isset($_REQUEST['AddIncorrectField']) || isset($_REQUEST['save'])) ? $_REQUEST['question'] : ''; ?></textarea>
            </div>

            <div class="form-group correctanswer">
                <label for="correctanswer">Correct answer</label>
                <input type="text" value="<?php echo (isset($_REQUEST['AddIncorrectField']) || isset($_REQUEST['save'])) ? $_REQUEST['correctAnswer'] : ''; ?>" placeholder="Enter the correct answer to the question" class="form-control" id="CorrectAnswer" name="correctAnswer">
            </div>


            <?php $incorrectAnswerFields = (!empty($_REQUEST['AddIncorrectField']) && $_REQUEST['AddIncorrectField'] <= 10) ? $_REQUEST['AddIncorrectField'] : 1; ?>
            <?php for ($i = 1; $i <= $incorrectAnswerFields; $i++): ?>
                <div class="form-group incorrectanswer">
                    <label for="incorrectanswer">Incorrect answer</label>
                    <input type="text" value="<?php echo (!empty($_REQUEST['incorrectAnswer-'.$i]) && isset($_REQUEST['AddIncorrectField']) || isset($_REQUEST['save'])) ? $_REQUEST['incorrectAnswer-'.$i] : '' ?>" placeholder="Enter the Incorrect answer to the question" class="form-control" id="IncorrectAnswer" name="incorrectAnswer-<?php echo $i; ?>">
                </div>
            <?php endfor; ?>

            <div class="form-group" style="float: right">
            <button class="btn btn-link" type="submit" value="<?php echo ++$incorrectAnswerFields; ?>" name="AddIncorrectField">
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add field for incorrect answers
            </button>
            </div>
            <button name="save" type="submit" class="btn btn-primary">Save question</button>
        </form>
        <?php  if (isset($_REQUEST['save'])): $oneValueQuestion->addQuestion(); endif ?>
    </div>
    <div class="col-md-4"></div>
</div>
<?php include_once 'views/bottom.tpl.php'; ?>

