<?php

class Test
{
    const QUESTIONS_FILE = 'db/questions.json';
    const ANSWER_FILE = 'db/answer.json';

    protected $id;
    protected $type;
    protected $question;
    protected $answers;

    protected function setId()
    {
        if (0 != filesize(Test::QUESTIONS_FILE)) {
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

    protected function putData($file)
    {
        if (0 != filesize($file)) {
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

        $questionsArr = $this->gettingData(Test::QUESTIONS_FILE);
        $questionData = [];
        foreach ($questionsArr as $value) {
            foreach ($value as $key => $item) {
                if ($key === 'id' && $item == $id) {
                    $questionData = $value;
                }
            }
        }
        return $questionData;
    }
    public function getResult($id) {
        $dataArr = $this->getQuestion($id);
        $answers = $dataArr['answers'];
        $result = [];

        foreach ($answers as $key => $value) {
            if ($key == $_REQUEST['variant'] && $value == true) {
                $result['correctly'] = $key;
            }
        }

    return $result;
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
                $answerArr[htmlspecialchars($_REQUEST['incorrectAnswer-' . $i])] = false;
            }
        }
        if (!empty($_REQUEST['correctAnswer'])) {
            $answerArr[htmlspecialchars($_REQUEST['correctAnswer'])] = true;
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
    public function addQuestion()
    {
        if (empty($this->generateError())) {
            $this->setId();
            $this->setType($type = 'SeveralAnswer');
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
            if (!empty($_REQUEST['correctAnswer-' . $i])) {
                $answerArr[htmlspecialchars($_REQUEST['correctAnswer-' . $i])] = true;
            }
        }
        for ($i = 1; $i <= 10; $i++) {
            if (!empty($_REQUEST['incorrectAnswer-' . $i])) {
                $answerArr[htmlspecialchars($_REQUEST['incorrectAnswer-' . $i])] = false;
            }
        }
        return $answerArr;
    }

    public function generateError()
    {
        $errorArr = [];
        if (isset($_REQUEST['AddCorrectField']) || isset($_REQUEST['save'])) {
            if (empty($_REQUEST['correctAnswer-1'])) {
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

class ManualValueQuestion extends Test
{

}

