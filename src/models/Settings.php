<?php
/**
 * DingTalk plugin for Craft 3
 *
 * @link      https://panlatent.com/
 * @copyright Copyright (c) 2018 panlatent@gmail.com
 */

namespace panlatent\craft\dingtalk\models;

use Craft;
use craft\base\Model;

/**
 * Class Settings
 *
 * @package panlatent\craft\dingtalk\models
 * @author Panlatent <panlatent@gmail.com>
 */
class Settings extends Model
{
    /**
     * @var string|null
     */
    public $corpId;

    /**
     * @var string|null
     */
    public $corpSecret;

    /**
     * @var string|null
     */
    public $callbackUrlRule;

    /**
     * @var string|null
     */
    public $callbackToken;

    /**
     * @var string|null
     */
    public $callbackEncodingAesKey;

    /**
     * @return string|null
     */
    public function getCorpId()
    {
        return Craft::parseEnv($this->corpId);
    }

    /**
     * @return string|null
     */
    public function getCorpSecret()
    {
        return Craft::parseEnv($this->corpSecret);
    }
}