<?php
/**
 * DingTalk plugin for Craft 3
 *
 * @link      https://panlatent.com/
 * @copyright Copyright (c) 2018 panlatent@gmail.com
 */

namespace panlatent\craft\dingtalk\base;

use craft\base\SavableComponentInterface;

/**
 * Interface MessageInterface
 *
 * @package panlatent\craft\dingtalk\base
 * @author Panlatent <panlatent@gmail.com>
 */
interface MessageInterface extends SavableComponentInterface
{
    // Static Methods
    // =========================================================================

    public static function hasContent(): bool;

    public static function hasTitle(): bool;

    public static function hasAts(): bool;

    // Public Methods
    // =========================================================================

    /**
     * @return mixed
     */
    public function getRequestPayload();

    public function getSender();

    public function getTarget();

    public function getChannel();
}