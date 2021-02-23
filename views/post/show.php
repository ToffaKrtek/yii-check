<?php
//  $this->title= "Sooos"
$this->beginBlock('block1'); ?>
<h1>HOHOHOH</h1>
<?php $this->endBlock(); ?>
<h1>Show</h1>
<button class="btn btn-success" id="btn">Click..</button>
<?php $this->registerJsFile('@web/js/scripts.js', ['depends' => 'yii\web\YiiAsset']) ?>
<?php $this->registerJs("
$('.container').append('<p>SHOWasdasd!!!!!</p>');") ?>
<?php 
$js = <<< JS
        $('#btn').on('click', function(){
            $.ajax({
                url: 'index.php?r=post/index',
                type: 'POST',
                data: {test: '123'},
                success: function(res){
                    console.log(res)
                },
                error: function(){
                    alert("Error");
                }
            })
        })
    JS;

$this->registerJs($js) ?>

<?php debug($prod); ?>