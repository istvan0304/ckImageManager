<?php

use Yii;
use yii\widgets\ActiveForm;
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $form yii\widgets\ActiveForm */
/* @var $ckImageManagerForm istvan0304\imagemanager\models\CkImageForm */

?>

<div class="ck-handle-row">
    <button id="ck-img-upload" class="ck-btn ck-btn-second"><?= Yii::t('ckimage', 'Upload') ?></button>

    <?php $form = ActiveForm::begin(['id' => 'img-upload-form', 'enableClientValidation' => false]); ?>

    <?= $form->field($ckImageManagerForm, 'img_files[]')->fileInput(['multiple' => true, 'accept' => 'image/*'])->label(false) ?>

    <?php ActiveForm::end(); ?>
</div>
