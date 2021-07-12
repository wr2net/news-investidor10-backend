<?php

namespace App\Investidor10\News\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Investidor10\News\Models\News;
use App\Investidor10\News\Requests\NewsRequest;
use App\Investidor10\News\Resources\NewsResource;
use App\Investidor10\News\Services\NewsService;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

/**
 * Class NewsController
 * @package App\Investidor10\Controllers\Api
 */
class NewsController extends Controller
{
    /**
     * @var NewsService
     */
    private $service;

    /**
     * @param NewsService $service
     */
    public function __construct(NewsService $service)
    {
        $this->service = $service;
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index(Request $request)
    {
        $list = $this->service->findAll();
        return NewsResource::collection($list);
    }

    /**
     * @param NewsRequest $request
     * @return JsonResponse
     */
    public function store(NewsRequest $request)
    {
        $news = $this->service->store($request->validated());
        return response()->json($news, Response::HTTP_CREATED);
    }

    /**
     * @param News $news
     * @return JsonResponse
     */
    public function show(News $news)
    {
        return response()->json($news, Response::HTTP_OK);
    }

    /**
     * @param NewsRequest $request
     * @param News $news
     * @return JsonResponse
     */
    public function update(NewsRequest $request, News $news)
    {
        $news = $this->service->update($news, $request->validated());
        return response()->json($news, Response::HTTP_OK);
    }

    /**
     * @param News $news
     * @return JsonResponse
     */
    public function enable(News $news)
    {
        $news = $this->service->enable($news);
        return response()->json($news, Response::HTTP_OK);
    }

    /**
     * @param News $news
     * @return JsonResponse
     * @throws AuthorizationException
     */
    public function disable(News $news)
    {
        $this->authorize('disable', $news);
        $news = $this->service->disable($news);
        return response()->json($news, Response::HTTP_OK);
    }

    /**
     * @param News $news
     * @return JsonResponse
     * @throws AuthorizationException
     */
    public function destroy(News $news)
    {
        $this->authorize('destroy', $news);
        $this->service->destroy($news);
        return response()->json([], Response::HTTP_NO_CONTENT);
    }
}
