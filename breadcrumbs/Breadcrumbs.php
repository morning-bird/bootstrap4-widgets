<?php

namespace app\widgets\breadcrumbs;

use yii\helpers\Html;

class Breadcrumbs extends \yii\widgets\Breadcrumbs {
    public $tag = 'ol';
    public $itemTemplate = "<li class=\"breadcrumb-item\">{link}</li>\n";
    public $activeItemTemplate = "<li class=\"breadcrumb-item active\" aria-current=\"page\">{link}</li>\n";

}