<?php

/** @var $dataProvider ActiveDataProvider  */

use yii\data\ActiveDataProvider;

?>
<h1> Found videos: </h1>

<?php
echo \yii\widgets\ListView::widget([
        'dataProvider' => $dataProvider,
        'itemView' => '_video_item',
        'itemOptions' => [
            'tag' => false
        ],
        'layout' => '<div class="d-flex flex-wrap">{items}</div> {pager}'
]) ?>
