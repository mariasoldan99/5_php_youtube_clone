<?php

/** @var \yii\web\View $this */
/** @var string $content */

use backend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
$this->beginContent('@backend/views/layouts/base.php')
?>

     <div class="content-wrapper p-3">
                <?= Alert::widget() ?>
                <?= $content ?>
     </div>

<?php $this->endContent(); ?>