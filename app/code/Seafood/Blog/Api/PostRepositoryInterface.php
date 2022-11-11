<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Seafood\Blog\Api;

use Magento\Framework\Api\SearchCriteriaInterface;

interface PostRepositoryInterface
{
    /**
     * Save Post
     * @param \Seafood\Blog\Api\Data\Post\PostInterface $post
     * @return \Seafood\Blog\Api\Data\Post\PostInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function save(
        \Seafood\Blog\Api\Data\Post\PostInterface $post
    );

    /**
     * Retrieve Blog
     * @param string $blogId
     * @return \Seafood\Blog\Api\Data\Post\PostInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function get($postId);

    /**
     * Retrieve Post matching the specified criteria.
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \Seafood\Blog\Api\Data\Post\PostSearchResultsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getList(
        \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
    );

    /**
     * Delete Blog
     * @param \Seafood\Blog\Api\Data\Post\PostInterface $post
     * @return bool true on success
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete(
        \Seafood\Blog\Api\Data\Post\PostInterface $post
    );

    /**
     * Delete Post by ID
     * @param string $postId
     * @return bool true on success
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteById($postId);
}

