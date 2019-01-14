<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\CmsArticle */

$this->title = $model->id_art;
$this->params['breadcrumbs'][] = ['label' => 'Cms Articles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cms-article-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_art], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_art], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_art',
            'id_cat',
            'art_title',
            'art_text:ntext',
        ],
    ]) ?>

</div>
