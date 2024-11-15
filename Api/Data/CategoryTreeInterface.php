<?php
/**
 *
 * Copyright © 2013-2017 Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Rasel\CategoryImage\Api\Data;

/**
 * @api
 */
interface CategoryTreeInterface
{
    /**
     * @return int|null
     */
    public function getId();

    /**
     * @param int $id
     * @return $this
     */
    public function setId($id);

    /**
     * Get parent category ID
     *
     * @return int
     */
    public function getParentId();

    /**
     * Set parent category ID
     *
     * @param int $parentId
     * @return $this
     */
    public function setParentId($parentId);

    /**
     * Get category name
     *
     * @return string
     */
    public function getName();

    /**
     * Set category name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name);

    /**
     * Get category image
     *
     * @return string
     */
    public function getCategoryImage();

    /**
     * Set category image
     *
     * @param string $name
     * @return $this
     */
    public function setCategoryImage($image);

    /**
     * Check whether category is active
     *
     * @return bool
     * @SuppressWarnings(PHPMD.BooleanGetMethodName)
     */
    public function getIsActive();

    /**
     * Set whether category is active
     *
     * @param bool $isActive
     * @return $this
     */
    public function setIsActive($isActive);

    /**
     * Get category position
     *
     * @return int
     */
    public function getPosition();

    /**
     * Set category position
     *
     * @param int $position
     * @return $this
     */
    public function setPosition($position);

    /**
     * Get category level
     *
     * @return int
     */
    public function getLevel();

    /**
     * Set category level
     *
     * @param int $level
     * @return $this
     */
    public function setLevel($level);

    /**
     * Get product count
     *
     * @return int
     */
    public function getProductCount();

    /**
     * Set product count
     *
     * @param int $productCount
     * @return $this
     */
    public function setProductCount($productCount);

    /**
     * @return \Rasel\CategoryImage\Api\Data\CategoryTreeInterface[]
     */
    public function getChildrenData();

    /**
     * @param \Rasel\CategoryImage\Api\Data\CategoryTreeInterface[] $childrenData
     * @return $this
     */
    public function setChildrenData(array $childrenData = null);
}
