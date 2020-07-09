<?php

namespace app\widgets;

use yii\bootstrap\Html;

class ActiveField extends \yii\bootstrap\ActiveField {
    public function image($fileAttribute, $options = []) {
        $attribute = $this->attribute;
        $model = $this->model;
        $s = $this->begin();
        $s .= Html::activeLabel($model, $attribute);
        $s .= Html::tag('div', Html::img($model->$attribute));
        $s .= Html::activeFileInput($model, $fileAttribute);
        $s .= Html::error($model, $attribute);
        $s .= $this->end();
        return $s;
    }
}