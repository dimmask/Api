<?php
/**
 * Created by PhpStorm.
 * User: dimmask
 * Date: 11/03/17
 * Time: 11:04
 */

namespace TelegramBot\Api\Types\Inline;

use TelegramBot\Api\BaseType;

/**
 * Class InlineKeyboardMarkup
 * @package TelegramBot\Api\Types\Inline
 */
class InlineKeyboardMarkup extends BaseType
{
    /**
     * {@inheritdoc}
     *
     * @var array
     */
    static protected $requiredParams = ['inline_keyboard'];

    /**
     * {@inheritdoc}
     *
     * @var array
     */
    static protected $map = [
        'inline_keyboard' => true
    ];

    /**
     * Array of button rows, each represented by an Array of Strings
     * Array of Array of String
     *
     * @var array
     */
    protected $inlineKeyboard;

    /**
     * InlineKeyboardMarkup constructor.
     * @param $inline_keyboard
     */
    public function __construct($inline_keyboard)
    {
        $this->setInlineKeyboard($inline_keyboard);
    }

    /**
     * @return array
     */
    public function getInlineKeyboard()
    {
        return $this->inlineKeyboard;
    }

    /**
     * @param array $keyboard
     */
    public function setInlineKeyboard($keyboard)
    {
        $this->inlineKeyboard = $keyboard;
    }
}
