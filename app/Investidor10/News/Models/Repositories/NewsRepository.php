<?php

namespace App\Investidor10\News\Models\Repositories;

use App\Investidor10\News\Models\News;
use Exception;
use Illuminate\Support\Facades\DB;

/**
 * Class NewsRepository
 * @package App\Investidor10\Models\Repositories
 */
class NewsRepository implements NewsRepositoryInterface
{
    /**
     * @param int $id
     * @return News|null
     */
    public function findById(int $id)
    {
        return News::withTrashed()
            ->findOrFail($id);
    }

    /**
     * @return News[]
     */
    public function findAll()
    {
        return News::withTrashed()
            ->get();
    }

    /**
     * @param array $data
     * @return News
     */
    public function store(array $data)
    {
        $news = new News;
        $news->category_id = $data['category_id'];
        $news->title = $data['title'];
        $news->subtitle = $data['subtitle'] ?? null;
        $news->font = $data['font'];
        $news->date = $data['date'];
        $news->news = $data['news'];
        $news->save();
        return $news;
    }

    /**
     * @param News $news
     * @param array $data
     * @return News
     */
    public function update(News $news, array $data)
    {
        $news->category_id = $data['category_id'];
        $news->title = $data['title'];
        $news->subtitle = $data['subtitle'] ?? null;
        $news->font = $data['font'];
        $news->date = $data['date'];
        $news->news = $data['news'];
        $news->save();
        return $news;
    }

    /**
     * @param News $news
     * @return News
     */
    public function enable(News $news)
    {
        $news->restore();
        return $news;
    }

    /**
     * @param News $news
     * @return News
     */
    public function disable(News $news)
    {
        $news->delete();
        return $news;
    }

    /**
     * @param News $news
     * @return null
     */
    public function destroy(News $news)
    {
        $news->forceDelete();
        return null;
    }
}
