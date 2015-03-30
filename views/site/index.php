<?php
use app\models\Status;
use yii\helpers\BaseHtml;
/* @var $this yii\web\View */
$this->title = 'The Dating Network';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>The Dating Network Is Trending!</h1>

        <p class="lead">Here are some of the thoughts on the mind of our dating network lovers.</p>

        <!--<p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>-->
    </div>

    <div class="body-content">

        <div class="row">
            <?php
              $count = 0;
              foreach(Status::find()->limit(3)->all() as $status) {
                  $count++;
            ?>
            <div class="col-lg-4">
                <h2><?= BaseHtml::img(Yii::$app->request->baseUrl."/../assets/images/image{$count}.jpg", array('width' => '300')) ?></h2>

                <p><?= $status->message ?></p>

                <!--<p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>-->
            </div>
            <?php
              }
            ?>
        </div>

    </div>
</div>
