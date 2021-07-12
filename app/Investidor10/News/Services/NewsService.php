<?php

namespace App\Investidor10\News\Services;

use App\Investidor10\News\Models\News;
use App\Investidor10\News\Models\Repositories\NewsRepositoryInterface as NewsRepository;

/**
 * Class NewsService
 * @package App\Investidor10\Services
 */
class NewsService
{
    /**
     * @var NewsRepository
     */
    private $newsRepository;

    /**
     * @param NewsRepository $newsRepository
     */
    public function __construct(
        newsRepository $newsRepository
    ) {
        $this->newsRepository = $newsRepository;
    }

    /**
     * @return mixed
     */
    public function findAll()
    {
        return $this->newsRepository->findAll();
    }

    /**
     * @param array $data
     * @return News
     */
    public function store(array $data): News
    {
        return $this->newsRepository->store($data);
    }

    /**
     * @param News $news
     * @param array $data
     * @return News
     */
    public function update(News $news, array $data): News
    {
        return $this->newsRepository->update($news, $data);
    }

    /**
     * @param News $news
     * @return News
     */
    public function enable(News $news): News
    {
        return $this->newsRepository->enable($news);
    }

    /**
     * @param News $news
     * @return News
     */
    public function disable(News $news): News
    {
        return $this->newsRepository->disable($news);
    }

    /**
     * @param News $news
     * @return mixed
     */
    public function destroy(News $news)
    {
        return $this->newsRepository->destroy($news);
    }
}
