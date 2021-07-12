<?php

namespace App\Investidor10\Categories\Models\Repositories;

use App\Investidor10\Categories\Models\Category;

/**
 * Interface CategoryRepositoryInterface
 * @package App\Investidor10\Categories\Models\Repositories
 */
interface CategoryRepositoryInterface
{
    /**
     * @inheritDoc
     */
    public function findById(int $id);

    /**
     * @inheritDoc
     */
    public function findAll();

    /**
     * @inheritDoc
     */
    public function store(array $data);

    /**
     * @inheritDoc
     */
    public function update(Category $category, array $data);

    /**
     * @inheritDoc
     */
    public function enable(Category $category);

    /**
     * @inheritDoc
     */
    public function disable(Category $category);

    /**
     * @inheritDoc
     */
    public function destroy(Category $category);
}
