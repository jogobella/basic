<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CmsArticle */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cms-article-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_cat')->textInput() ?>

    <?= $form->field($model, 'art_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'art_text')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
