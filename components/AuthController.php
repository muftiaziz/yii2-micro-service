<?php
/**
 * User: Taufiq Rahman (Rahman.taufiq@gmail.com)
 * Date: 11/08/19
 * Time: 09.35
 */

namespace micro\components;

use yii\filters\auth\HttpBearerAuth;
use micro\components\Controller;

class AuthController extends Controller
{
    /**
      * @inheritdoc
      */
    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors['authenticator'] = [
            'class' => HttpBearerAuth::className(),
        ];
        return $behaviors;
    }
}
