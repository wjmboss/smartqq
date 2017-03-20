<?php
/**
 * SmartQQ Library
 * @author Tao <taosikai@yeah.net>
 */
namespace Slince\SmartQQ\Message\Request;

use Slince\SmartQQ\Message\Content;
use Slince\SmartQQ\Message\MessageInterface;

class GroupMessage extends Message
{
    /**
     * 群编号
     * @var int
     */
    protected $groupUin;

    public function __construct($groupUin, Content $content)
    {
        $this->groupUin = $groupUin;
        parent::__construct(MessageInterface::TYPE_GROUP, $content);
    }
}