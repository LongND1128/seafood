<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Seafood\Blog\Api\Data\Post;

interface PostInterface
{
    const TITLE = 'title';
    const POST_ID = 'post_id';

    /**
     * Get post_id
     * @return string|null
     */
    public function getPostId();

    /**
     * @param $blogId
     * @return mixed
     */
    public function setPostId($postId);

    /**
     * Get title
     * @return string|null
     */
    public function getTitle();

    /**
     * @param $title
     * @return mixed
     */
    public function setTitle($title);
}

