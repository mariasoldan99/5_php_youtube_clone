<?php

/** @var \yii\web\View $this */
/** @var string $content */


use common\widgets\Alert;

$this->beginContent('@frontend/views/layouts/base.php')
?>

     <div class="content-wrapper p-3">
                <?= Alert::widget() ?>
                <?= $content ?>
     </div>

<?php $this->endContent(); ?>