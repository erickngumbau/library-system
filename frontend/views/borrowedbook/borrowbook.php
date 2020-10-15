<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Borrowedbook */
/* @var $form ActiveForm */
?>
<div class="borrowbook">

    <?php $form = ActiveForm::begin(); ?>
    <?php $form = ActiveForm::begin([
            'action' =>['book/borrowbook'],
            'method'=>'post',
        ]); ?>
    

        <?= $form->field($model, 'bookId') ?>
        <?= $form->field($model, 'borrowDate')->textInput(['readonly'=> true])?>
        <?= $form->field($model, 'expectedreturndate')->textInput(['readonly'=> true])?>
    
        <div class="form-group">
            <?= Html::submitButton('Confirm', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- borrowbook -->