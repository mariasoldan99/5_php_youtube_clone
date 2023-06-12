<?php

/** @var $model \common\models\Video */
/** @var $similarVideos \common\models\Video[] */

use yii\helpers\Html;

?>

<div class="row">
    <div class="col-sm-8">
        <div class="embed-responsive embed-responsive-16by9 shadow p-3 mb-5 bg-white">
            <video class="embed-responsive-item"
                   poster="<?php echo $model->getThumbnailLink() ?>"
                   src="<?php echo $model->getVideoLink() ?>"
                   controls></video>
        </div>
        <h4 class="m-2"> <?php echo $model->title ?></h4>
        <div class="d-flex justify-content-between align-items-center">
           <div>
               <?php echo $model->getViews()->count() ?> views * <?php echo Yii::$app->formatter->asDate($model->created_at) ?>
           </div>
            <div>
                <?php \yii\widgets\Pjax::begin() ?>
                    <?php echo $this->render('_buttons', [
                            'model' => $model
                ]) ?>
                <?php \yii\widgets\Pjax::end() ?>
            </div>
        </div>
        <div>
            <p>
                <?php echo  Html::a($model->createdBy->username, [
                    '/channel/view', 'username' => $model->createdBy->username
                ])?>
            </p>
            <?php echo Html::encode($model->description) ?>
        </div>
    </div>
    <div class="col-sm-4">
        <?php foreach ($similarVideos as $similarVideo): ?>
            <div class="media">
                <a href="<?php echo \yii\helpers\Url::to(['video/view', 'id' => $similarVideo->video_id]) ?>">
                    <div class="embed-responsive embed-responsive-16by9 mr-2 shadow p-3 mb-3 bg-white" style="width:180px">
                        <video class="embed-responsive-item"
                               poster="<?php echo $similarVideo->getThumbnailLink() ?>"
                               src="<?php echo $similarVideo->getVideoLink() ?>"
                        </video>
                    </div>
                </a>
                <div class="media-body">
                    <h6 class="m-0"><?php echo $similarVideo->title ?></h6>
                    <div >
                        <p class="text-muted card-text m-0">
                            <?php echo  Html::a($similarVideo->createdBy->username, [
                                '/channel/view', 'username' => $similarVideo->createdBy->username
                            ]) ?>
                        </p>
                        <p>
                            <?php echo $similarVideo->getViews()->count() ?> views * <?php echo Yii::$app->formatter->asDate($similarVideo->created_at) ?>
                        </p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
