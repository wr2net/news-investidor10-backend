<?php

namespace App\Investidor10\News\Models\Repositories;

use App\Investidor10\News\Models\News;

/**
 * Interface NewsRepositoryInterface
 * @package App\Investidor10\Models\Repositories
 */
interface NewsRepositoryInterface
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
    public function update(News $news, array $data);

    /**
     * @inheritDoc
     */
    public function enable(News $news);

    /**
     * @inheritDoc
     */
    public function disable(News $news);

    /**
     * @inheritDoc
     */
    public function destroy(News $news);
}
