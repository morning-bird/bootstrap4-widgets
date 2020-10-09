<?php

namespace app\widgets\grid;

class ListView extends \yii\widgets\ListView {
    public $pager = [
        'linkOptions' => [
            'class' => 'page-link'
        ],
        'linkContainerOptions' => [
            'class' => 'page-item'
        ],
        'disabledListItemSubTagOptions' => [
            'tag' => 'a', 'class' => 'page-link', 'href' => 'javascript:void(0)'
        ]
    ];
}