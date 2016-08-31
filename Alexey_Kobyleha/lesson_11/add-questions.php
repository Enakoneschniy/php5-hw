<?php
include_once 'views/header.tpl.php';
include_once 'class/Test.php';
$test = new Test();
$oneValueQuestion = new OneValueQuestion();
$severalValueQuestion = new SeveralValueQuestion();
?>
<div class="row">
    <div class="col-md-8"><br>
        <h3>Добавление вопроса к тестам</h3><br>

        <?php // Errors processing ?>
        <?php if (!isset($_REQUEST['type']) || isset($_REQUEST['type']) && $_REQUEST['type'] == 'Вопрос с одним ответом'): ?>
        <?php if ($oneValueQuestion->generateError() > 0): ?>
            <?php foreach ($oneValueQuestion->generateError() as $errors): ?>
                <div role="alert" class="alert alert-danger">
                <strong><?php echo $errors; ?></strong>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
        <?php endif; ?>
        <?php if (isset($_REQUEST['type']) && $_REQUEST['type'] == 'Вопрос с несколькими ответами'): ?>
            <?php if ($severalValueQuestion->generateError() > 0): ?>
                <?php foreach ($severalValueQuestion->generateError() as $errors): ?>
                    <div role="alert" class="alert alert-danger">
                        <strong><?php echo $errors; ?></strong>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        <?php endif; ?>
        <?php // End Errors processing ?>

        <form method="post" name="add-questions">
            <div class="form-group">
                <label for="type">Тип вопроса</label>
                <select title="Выберите тип вопроса" name="type" id="type" class="form-control" onchange="document.forms['add-questions'].submit()">
                    <option <?php echo (isset($_REQUEST['type']) && $_REQUEST['type'] == 'Вопрос с одним ответом') ? 'selected="selected"' : ''?>>Вопрос с одним ответом</option>
                    <option <?php echo (isset($_REQUEST['type']) && $_REQUEST['type'] == 'Вопрос с несколькими ответами') ? 'selected="selected"' : ''?>>Вопрос с несколькими ответами</option>
                    <option <?php echo (isset($_REQUEST['type']) && $_REQUEST['type'] == 'Вопрос с ручным вводом ответа') ? 'selected="selected"' : ''?>>Вопрос с ручным вводом ответа</option>
                </select>
            </div>

            <div class="form-group">
                <label for="question">Вопрос</label>
                <textarea name="question" id="question" class="form-control" rows="10"><?php echo (isset($_REQUEST['AddIncorrectField']) || isset($_REQUEST['save'])) ? $_REQUEST['question'] : ''; ?></textarea>
            </div>

            <?php if (isset($_REQUEST['type']) && $_REQUEST['type'] == 'Вопрос с несколькими ответами'): ?>

                <?php $сorrectAnswerFields = (!empty($_REQUEST['AddСorrectField']) && $_REQUEST['AddСorrectField'] <= 10) ? $_REQUEST['AddСorrectField'] : 1; ?>
                <?php for ($y = 1; $y <= $сorrectAnswerFields; $y++): ?>
                    <div class="form-group correctanswer">
                        <label for="correctanswer">Правильный ответ</label>
                        <input type="text" title="" value="<?php echo (!empty($_REQUEST['correctAnswer-'.$y]) && isset($_REQUEST['AddСorrectField']) || isset($_REQUEST['save'])) ? $_REQUEST['correctAnswer-'.$y] : '' ?>" class="form-control" id="CorrectAnswer" name="correctAnswer-<?php echo $y; ?>">
                    </div>
                <?php endfor; ?>

                <div class="form-group" style="float: right">
                    <button class="btn btn-link" type="submit" value="<?php echo ++$сorrectAnswerFields; ?>" name="AddСorrectField">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Добавить еще поле для правильного ответа
                    </button>
                </div>


                <?php $incorrectAnswerFields = (!empty($_REQUEST['AddIncorrectField']) && $_REQUEST['AddIncorrectField'] <= 10) ? $_REQUEST['AddIncorrectField'] : 1; ?>
                <?php for ($i = 1; $i <= $incorrectAnswerFields; $i++): ?>
                    <div class="form-group incorrectanswer">
                        <label for="incorrectanswer">Ложный ответ</label>
                        <input type="text" title="" value="<?php echo (!empty($_REQUEST['incorrectAnswer-'.$i]) && isset($_REQUEST['AddIncorrectField']) || isset($_REQUEST['save'])) ? $_REQUEST['incorrectAnswer-'.$i] : '' ?>" class="form-control" id="IncorrectAnswer" name="incorrectAnswer-<?php echo $i; ?>">
                    </div>
                <?php endfor; ?>

                <div class="form-group" style="float: right">
                    <button class="btn btn-link" type="submit" value="<?php echo ++$incorrectAnswerFields; ?>" name="AddIncorrectField">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Добавить еще поле для ложного ответа
                    </button>
                </div>

            <?php endif; ?>

            <?php if (!isset($_REQUEST['type']) || isset($_REQUEST['type']) && $_REQUEST['type'] == 'Вопрос с одним ответом'): ?>


                <div class="form-group correctanswer">
                    <label for="correctanswer">Правильный ответ</label>
                    <input type="text" title="" value="<?php echo (isset($_REQUEST['AddIncorrectField']) || isset($_REQUEST['save'])) ? $_REQUEST['correctAnswer'] : ''; ?>" class="form-control" id="CorrectAnswer" name="correctAnswer">
                </div>


                <?php $incorrectAnswerFields = (!empty($_REQUEST['AddIncorrectField']) && $_REQUEST['AddIncorrectField'] <= 10) ? $_REQUEST['AddIncorrectField'] : 1; ?>
                <?php for ($i = 1; $i <= $incorrectAnswerFields; $i++): ?>
                    <div class="form-group incorrectanswer">
                        <label for="incorrectanswer">Ложный ответ</label>
                        <input type="text" title="" value="<?php echo (!empty($_REQUEST['incorrectAnswer-'.$i]) && isset($_REQUEST['AddIncorrectField']) || isset($_REQUEST['save'])) ? $_REQUEST['incorrectAnswer-'.$i] : '' ?>" class="form-control" id="IncorrectAnswer" name="incorrectAnswer-<?php echo $i; ?>">
                    </div>
                <?php endfor; ?>

                <div class="form-group" style="float: right">
                    <button class="btn btn-link" type="submit" value="<?php echo ++$incorrectAnswerFields; ?>" name="AddIncorrectField">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Добавить еще поле для ложного ответа
                    </button>
                </div>


            <?php endif; ?>

            <?php if (isset($_REQUEST['type']) && $_REQUEST['type'] == 'Вопрос с ручным вводом ответа'): ?>
            <?php endif; ?>
            <button name="save" type="submit" class="btn btn-primary">Сохранить вопрос</button>
        </form>
        <?php  if (isset($_REQUEST['save'])): $oneValueQuestion->addQuestion(); endif ?>
    </div>
    <div class="col-md-4"></div>
</div>
<?php include_once 'views/bottom.tpl.php'; ?>

