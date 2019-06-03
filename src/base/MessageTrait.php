<?php
/**
 * DingTalk plugin for Craft 3
 *
 * @link      https://panlatent.com/
 * @copyright Copyright (c) 2018 panlatent@gmail.com
 */

namespace panlatent\craft\dingtalk\base;

/**
 * Trait MessageTrait
 *
 * @package panlatent\craft\dingtalk\base
 * @author Panlatent <panlatent@gmail.com>
 */
trait MessageTrait
{
    // Properties
    // =========================================================================

    /**
     * @var string|null
     */
    public $title;

    /**
     * @var string|null
     */
    public $content;

    /**
     * @var bool
     */
    public $isAtAll = false;

    /**
     * @var string[]
     */
    public $atMobiles = [];
}