<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Seafood\Blog\Model;

use Magento\Framework\Model\AbstractModel;
use Seafood\Blog\Api\Data\Post\PostInterface;

class Post extends AbstractModel implements PostInterface
{
    /**
     * @inheritDoc
     */
    public function _construct()
    {
        $this->_init(\Seafood\Blog\Model\ResourceModel\Post::class);
    }

    /**
     * @inheritDoc
     */
    public function getPostId()
    {
        return $this->getData(self::POST_ID);
    }

    /**
     * @inheritDoc
     */
    public function setPostId($postId)
    {
        return $this->setData(self::POST_ID, $postId);
    }

    /**
     * @inheritDoc
     */
    public function getTitle()
    {
        return $this->getData(self::TITLE);
    }

    /**
     * @inheritDoc
     */
    public function setTitle($title)
    {
        return $this->setData(self::TITLE, $title);
    }
}

