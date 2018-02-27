<?php

/**
 * @copyright Copyright (c) 2018 Daxslab
 * @license http://opensource.org/licenses/mit-license.php The MIT License (MIT)
 * @package yii2-facebookcomments-widget
 */

namespace daxslab\facebook;

use Yii;
use yii\base\ErrorException;
use yii\base\InvalidParamException;

/**
 * Widget to include the Facebook widget for comments in views.
 *
 * The following example shows how to use CommentsBox:
 *
 * ```php
 * echo CommentsBox::widget([
 *     'appId' => 'MY_FACEBOOK_APP_ID', //defaults to Yii::$app->paramss['facebook_app_id']
 *     'numPosts' => 10 //defaults to 5
 * ]);
 * ```
 *
 * @author Gabriel Alejandro López López <glpz@daxslab.com>
 * @author Carlos Cesar Cabellero Díaz <ccesar@daxslab.com>
 */
class CommentsBox extends \yii\base\Widget
{

    /*
     * @var string the Facebook application ID needed to authorize their API usage.
     */
    public $appId = null;

    /*
     * @var int the number of post to display in every page
     */
    public $numPosts = 5;

    /**
     * Checks for correct parameters configuration
     */
    public function init()
    {
        try{
            $appId = Yii::$app->params['facebook_app_id'];
        }catch (ErrorException $e){
            throw new InvalidParamException('You should define `facebook_app_id` as an application param.');
        }

        $this->appId = $this->appId ?: $appId;
    }

    /**
     * @inheritdoc
     * @return string the widget markup
     */
    public function run()
    {
        return $this->render('_comments');
    }
}
