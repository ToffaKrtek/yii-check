<?php
    use yii\widgets\ActiveForm;
    use yii\helpers\Html;
    ?>
<h1>Test</h1>
<?php if( Yii::$app->session->hasFlash('success')): ?>
    <div class="alert alert-success alert-dismissible" role="alert">  
        <?php echo Yii::$app->session->getFlash('success'); ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    
<?php endif; ?>
<?php if( Yii::$app->session->hasFlash('error')): ?>
    <div class="alert alert-danger alert-dismissible" role="alert">
        <?php echo Yii::$app->session->getFlash('error'); ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    
<?php endif; ?>
<?php 
    // debug($model);
    $form = ActiveForm::begin(['options' => ['id' => 'test-form']]) 
    ?>
    <?= $form->field($model, 'name')?>
    <?= $form->field($model, 'email')->input('email')?>
    <?= $form->field($model, 'text')->textarea(['rows' => 5])?>
    <?= Html::submitButton('Отправить', ['class' => 'btn btn-success big'])?>
    <?php ActiveForm::end() ?>

    