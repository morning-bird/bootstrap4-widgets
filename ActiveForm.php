<?php

namespace app\widgets;

class ActiveForm extends \yii\bootstrap\ActiveForm {
    public $errorCssClass = 'error';
    public $successCssClass = 'success';
    public $fieldClass = 'app\widgets\ActiveField';
}