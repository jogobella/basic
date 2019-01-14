<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use \app\models\CmsCategory;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\CmsArticle */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="cms-article-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php echo $form->field($model, 'id_cat')->dropDownList( ArrayHelper::map(CmsCategory::find()->all(),'id_cat','cat_title') ); ?>

    <?php echo $form->field($model, 'art_title')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'art_text')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?php echo Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
