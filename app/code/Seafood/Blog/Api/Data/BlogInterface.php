<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Seafood\Blog\Api\Data;

interface BlogInterface
{

    const TITLE = 'title';
    const BLOG_ID = 'blog_id';

    /**
     * Get blog_id
     * @return string|null
     */
    public function getBlogId();

    /**
     * Set blog_id
     * @param string $blogId
     * @return \Seafood\Blog\Blog\Api\Data\BlogInterface
     */
    public function setBlogId($blogId);

    /**
     * Get title
     * @return string|null
     */
    public function getTitle();

    /**
     * Set title
     * @param string $title
     * @return \Seafood\Blog\Blog\Api\Data\BlogInterface
     */
    public function setTitle($title);
}

