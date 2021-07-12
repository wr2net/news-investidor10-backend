<?php

namespace App\Investidor10\Categories\Models\Repositories;

use App\Investidor10\Categories\Models\Category;
use Exception;
use Illuminate\Support\Facades\DB;

/**
 * Class CategoryRepository
 * @package App\Investidor10\Categories\Models\Repositories
 */
class CategoryRepository implements CategoryRepositoryInterface
{
    /**
     * @param int $id
     * @return Category|null
     */
    public function findById(int $id)
    {
        return Category::withTrashed()
            ->findOrFail($id);
    }

    /**
     * @return Category[]
     */
    public function findAll()
    {
        return Category::withTrashed()
            ->get();
    }

    /**
     * @param array $data
     * @return Category
     */
    public function store(array $data)
    {
        $category = new Category;
        $category->name = $data['name'];
        $category->save();
        return $category;
    }

    /**
     * @param Category $category
     * @param array $data
     * @return Category
     */
    public function update(Category $category, array $data)
    {
        $category->name = $data['name'];
        $category->save();
        return $category;
    }

    /**
     * @param Category $category
     * @return Category
     */
    public function enable(Category $category)
    {
        $category->restore();
        return $category;
    }

    /**
     * @param Category $category
     * @return Category
     */
    public function disable(Category $category)
    {
        $category->delete();
        return $category;
    }

    /**
     * @param Category $category
     * @return null
     */
    public function destroy(Category $category)
    {
        $category->forceDelete();
        return null;
    }
}
