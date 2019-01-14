<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CmsCategory */

$this->title = 'Update Cms Category: ' . ' ' . $model->id_cat;
$this->params['breadcrumbs'][] = ['label' => 'Cms Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_cat, 'url' => ['view', 'id' => $model->id_cat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cms-category-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
