<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CmsArticle */

$this->title = 'Update Cms Article: ' . ' ' . $model->id_art;
$this->params['breadcrumbs'][] = ['label' => 'Cms Articles', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_art, 'url' => ['view', 'id' => $model->id_art]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cms-article-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
