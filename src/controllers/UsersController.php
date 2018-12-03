<?php
/**
 * DingTalk plugin for Craft 3
 *
 * @link      https://panlatent.com/
 * @copyright Copyright (c) 2018 panlatent@gmail.com
 */

namespace panlatent\craft\dingtalk\controllers;

use Craft;
use craft\web\Controller;
use panlatent\craft\dingtalk\elements\User;
use panlatent\craft\dingtalk\enums\PermissionItems;

/**
 * Class UsersController
 *
 * @package panlatent\craft\dingtalk\controllers
 * @author Panlatent <panlatent@gmail.com>
 */
class UsersController extends Controller
{
    /**
     * @return \yii\web\Response|null
     */
    public function actionSaveUserFieldLayout()
    {
        $this->requirePostRequest();
        $this->requirePermission(PermissionItems::EditUserSettings);

        $fieldLayout = Craft::$app->getFields()->assembleLayoutFromPost();
        $fieldLayout->type = User::class;

        if (!Craft::$app->getFields()->saveLayout($fieldLayout)) {
            Craft::$app->getSession()->setError(Craft::t('dingtalk', 'Couldn’t save field layout.'));

            return null;
        }

        Craft::$app->getSession()->setNotice(Craft::t('dingtalk', 'Field layout saved.'));

        return $this->redirectToPostedUrl();
    }
}