
var list = document.getElementById('listFormat');

var oneAnswerForm = document.getElementById('oneAnswer');
var radioAnswerForm = document.getElementById('radioButtonAnswer');
var checkBoxAnswerForm = document.getElementById('checkBoxAnswer');


list.onclick = function (elem) {
    var target = elem.target.value;
    chengeFormItem(target);
}

function chengeFormItem(elem) {

    var text = oneAnswerForm.style;
    var radio = radioAnswerForm.style;
    var check = checkBoxAnswerForm.style;

    if(elem == 'text'){
        text.display = 'block';
        check.display = 'none';
        radio.display = 'none';
    }else if (elem == 'radiobutton'){
        radio.display = 'block';
        text.display = 'none';
        check.display = 'none';
    }else if(elem == 'checkbox'){
        check.display = 'block';
        radio.display = 'none';
        text.display = 'none';
    }
}