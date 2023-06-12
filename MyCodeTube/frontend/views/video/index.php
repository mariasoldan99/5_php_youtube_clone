<?php

/** @var $dataProvider ActiveDataProvider  */

use yii\data\ActiveDataProvider;

?>
<?php
echo \yii\widgets\ListView::widget([
        'dataProvider' => $dataProvider,
        'pager' => [
          'class' => \yii\bootstrap4\LinkPager::class,
        ],
        'itemView' => '_video_item',
        'itemOptions' => [
            'tag' => false
        ],
        'layout' => '<div class="d-flex flex-wrap">{items}</div> {pager}'
]) ?>
