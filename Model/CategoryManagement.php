<?php

namespace Rasel\CategoryImage\Model;

class CategoryManagement extends \Magento\Catalog\Model\CategoryManagement
    implements \Rasel\CategoryImage\Api\CategoryManagementInterface
{
    /**
     * @var CategoryRepository
     */
    protected $categoryRepository;

    /**
     * @var \Rasel\CategoryImage\Model\Category\Tree
     */
    protected $categoryTree;

    /**
     * @var \Magento\Catalog\Model\ResourceModel\Category\CollectionFactory
     */
    private $categoriesFactory;

    /**
     * @param \Magento\Catalog\Api\CategoryRepositoryInterface $categoryRepository
     * @param \Rasel\CategoryImage\Model\Category\Tree $categoryTree
     * @param \Magento\Catalog\Model\ResourceModel\Category\CollectionFactory $categoriesFactory
     */
    public function __construct(
        \Magento\Catalog\Api\CategoryRepositoryInterface $categoryRepository,
        \Rasel\CategoryImage\Model\Category\Tree $categoryTree,
        \Magento\Catalog\Model\ResourceModel\Category\CollectionFactory $categoriesFactory
    ) {
        $this->categoryRepository = $categoryRepository;
        $this->categoryTree = $categoryTree;
        $this->categoriesFactory = $categoriesFactory;
    }


}