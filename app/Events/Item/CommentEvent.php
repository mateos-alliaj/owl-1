<?php

/**
 * @copyright (c) owl
 */

namespace Owl\Events\Item;

use Owl\Events\Item\BaseItemEvent;

/**
 * Class CommentEvent
 * 記事へのコメントのイベントクラス
 *
 * @package Owl\Events\Item
 */
class CommentEvent extends BaseItemEvent {

    /** @var string */
    protected $comment;

    /**
     * Create a new event instance.
     *
     * @param string  $itemId
     * @param string  $comment
     */
    public function __construct($itemId, $comment)
    {
        parent::__construct($itemId);
        $this->comment = $comment;
    }

    /**
     * Get text of comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }
}
