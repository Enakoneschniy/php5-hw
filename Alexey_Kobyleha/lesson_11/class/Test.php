<?php

class Test
{
    const QUESTIONS_FILE = 'db/questions.json';
    const ANSWER_FILE = 'db/answer.json';

    protected $id;
    protected $type;
    protected $question;
    protected $answers;

    public function setId()
    {
        if (!empty(file_get_contents(Test::QUESTIONS_FILE))) {
            $tempArray = json_decode(file_get_contents(Test::QUESTIONS_FILE), true);
            $id = $tempArray[count($tempArray) - 1]['id'] + 1;
        } else {
            $id = 1;
        }
        $this->id = $id;
    }

    protected function setType($type)
    {
        $this->type = $type;
    }

    protected function setQuestion($question)
    {
        $this->question = $question;
    }

    protected function setAnswers($answers)
    {
        $this->answers = $answers;
    }

    private function arrData()
    {
        $arrData[] = [
            'id' => $this->id,
            'type' => $this->type,
            'question' => $this->question,
            'answers' => $this->answers
        ];

        return $arrData;
    }

    public function putData($file)
    {
        if (!empty(file_get_contents($file))) {
            $tempArray = json_decode(file_get_contents($file), true);
            $newDataArr = $this->arrData();
            $mergetArr = array_merge($tempArray, $newDataArr);
            file_put_contents($file, json_encode($mergetArr, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
        } else {
            file_put_contents($file, json_encode($this->arrData(), JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
        }

    }

    protected function gettingData($file)
    {
        $string = file_get_contents($file);
        $arrData = json_decode($string, true);
        return $arrData;
    }

    public function getQuestion($id)
    {

    }
}

class OneValueQuestion extends Test
{

    public function addQuestion()
    {
        if (empty($this->generateError())) {
            $this->setId();
            $this->setType($type = 'OneAnswer');
            $this->setQuestion(htmlspecialchars($_REQUEST['question']));
            $this->setAnswers($this->answerData());
            $this->putData(Test::QUESTIONS_FILE);

        } else {
            $this->generateError();
        }
    }

    private function answerData()
    {
        $answerArr = [];
        for ($i = 1; $i <= 10; $i++) {
            if (!empty($_REQUEST['incorrectAnswer-' . $i])) {
                $answerArr[] = [false => htmlspecialchars($_REQUEST['incorrectAnswer-' . $i])];
            }
        }
        if (!empty($_REQUEST['correctAnswer'])) {
            $answerArr[] = [true => htmlspecialchars($_REQUEST['correctAnswer'])];
        }
        return $answerArr;
    }

    public function generateError()
    {
        $errorArr = [];
        if (isset($_REQUEST['AddIncorrectField']) || isset($_REQUEST['save'])) {
            if (empty($_REQUEST['incorrectAnswer-1'])) {
                $errorArr[] = 'One WRONG answer required';
            }
        }
        if (isset($_REQUEST['save'])) {
            if (empty($_REQUEST['question'])) {
                $errorArr[] = 'Question field empty!';
            }
            if (empty($_REQUEST['correctAnswer'])) {
                $errorArr[] = 'Correct answer empty!';
            }
        }

        return $errorArr;
    }
}

class SeveralValueQuestion extends Test
{

}

class ManualValueQuestion extends Test
{

}

