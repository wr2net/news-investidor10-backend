<?php

namespace App\Investidor10\Categories\Services;

use App\Investidor10\Categories\Models\Category;
use App\Investidor10\Categories\Models\Repositories\CategoryRepositoryInterface as CategoryRepository;

/**
 * Class CategoryService
 * @package App\Investidor10\Categories\Services
 */
class CategoryService
{
    /**
     * @var CategoryRepository
     */
    private $categoryRepository;

    /**
     * @param CategoryRepository $categoryRepository
     */
    public function __construct(
        CategoryRepository $categoryRepository
    ) {
        $this->categoryRepository = $categoryRepository;
    }

    /**
     * @return mixed
     */
    public function findAll()
    {
        return $this->categoryRepository->findAll();
    }

    /**
     * @param array $data
     * @return Category
     */
    public function store(array $data): Category
    {
        return $this->categoryRepository->store($data);
    }

    /**
     * @param Category $category
     * @param array $data
     * @return Category
     */
    public function update(Category $category, array $data): Category
    {
        return $this->categoryRepository->update($category, $data);
    }

    /**
     * @param Category $category
     * @return Category
     */
    public function enable(Category $category): Category
    {
        return $this->categoryRepository->enable($category);
    }

    /**
     * @param Category $category
     * @return Category
     */
    public function disable(Category $category): Category
    {
        return $this->categoryRepository->disable($category);
    }

    /**
     * @param Category $category
     * @return mixed
     */
    public function destroy(Category $category)
    {
        return $this->categoryRepository->destroy($category);
    }
}
