<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Seafood\Blog\Api\Data\Post;

interface PostSearchResultsInterface extends \Magento\Framework\Api\SearchResultsInterface
{

    /**
     * Get Post list.
     * @return \Seafood\Blog\Api\Data\Post\PostInterface[]
     */
    public function getItems();

    /**
     * Set title list.
     * @param \Seafood\Blog\Api\Data\Post\PostInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}

