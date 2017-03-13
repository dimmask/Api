<?php
/**
 * Created by PhpStorm.
 * User: dimmask
 * Date: 12.03.17
 * Time: 15:50
 */

namespace TelegramBot\Api\Types\Inline;

use TelegramBot\Api\BaseType;
use TelegramBot\Api\Types\User;
use TelegramBot\Api\Types\Message;

/**
 * Class CallbackQuery
 * @package TelegramBot\Api\Types\Inline
 */
class CallbackQuery extends BaseType
{
    /**
     * {@inheritdoc}
     *
     * @var array
     */
    static protected $requiredParams = ['id', 'from', 'chat_instance'];

    /**
     * {@inheritdoc}
     *
     * @var array
     */
    static protected $map = [
        'id' => true,
        'from' => User::class,
        'message' => Message::class,
        'inline_message_id' => true,
        'chat_instance' => true,
        'data' => true,
        'game_short_name' => true,
    ];

    /**
     * @var Id
     */
    protected $id;

    /**
     * @var From User
     */
    protected $from;

    /**
     * @var Message (Optional)
     */
    protected $message;

    /**
     * @var Inline message Id (Optional)
     */
    protected $inlineMessageId;

    /**
     * @var Chat Instance ID
     */
    protected $chatInstance;

    /**
     * @var Playload data (Optional)
     */
    protected $data;

    /**
     * @var Game short name (Optional)
     */
    protected $gameShortName;

    /**
     * ID getter
     */
    public function getId(){
        return $this->id;
    }

    /**
     * ID setter
     *
     * @param $id
     */
    public function setId($id){
       $this->id = $id;
    }

    /**
     * @return User
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * @param User $from
     */
    public function setFrom(User $from)
    {
        $this->from = $from;
    }

    /**
     * @return Message
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Message setter
     *
     * @param Message
     */
    public function setMessage(Message $message)
    {
        $this->message = $message;
    }

    /**
     * Get inline message ID
     */
    public function getInlineMessageId()
    {
        return $this->inlineMessageId;
    }

    /**
     * Inline message id setter
     *
     * @param $id
     */
    public function setInlineMessageId($id)
    {
        $this->inlineMessageId = $id;
    }

    /**
     * Get chat instance ID
     */
    public function getChatInstance()
    {
        return $this->chatInstance;
    }

    /**
     * chat instance ID setter
     *
     * @param $id
     */
    public function setChatInstance($id)
    {
        $this->chatInstance = $id;
    }

    /**
     * Data playload getter
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Data playload setter
     */
    public function setData($data)
    {
        $this->data = $data;
    }

    /**
     * Game short name getter
     */
    public function getGameShortName()
    {
        return $this->gameShortName;
    }

    /**
     * Game short name setter
     */
    public function setGameShortName($name)
    {
        $this->gameShortName = $name;
    }
}
