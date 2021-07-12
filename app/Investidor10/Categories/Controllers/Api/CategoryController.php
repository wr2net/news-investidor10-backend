<?php

namespace App\Investidor10\Categories\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Investidor10\Categories\Models\Category;
use App\Investidor10\Categories\Requests\CategoryRequest;
use App\Investidor10\Categories\Resources\CategoryResource;
use App\Investidor10\Categories\Services\CategoryService;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

/**
 * Class CategoryController
 * @package App\Investidor10\Categories\Controllers\Api
 */
class CategoryController extends Controller
{
    /**
     * @var CategoryService
     */
    private $service;

    /**
     * @param CategoryService $service
     */
    public function __construct(CategoryService $service)
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
        return CategoryResource::collection($list);
    }

    /**
     * @param CategoryRequest $request
     * @return JsonResponse
     */
    public function store(CategoryRequest $request)
    {
        $category = $this->service->store($request->validated());
        return response()->json($category, Response::HTTP_CREATED);
    }

    /**
     * @param Category $category
     * @return JsonResponse
     */
    public function show(Category $category)
    {
        return response()->json($category, Response::HTTP_OK);
    }

    /**
     * @param CategoryRequest $request
     * @param Category $category
     * @return JsonResponse
     */
    public function update(CategoryRequest $request, Category $category)
    {
        $category = $this->service->update($category, $request->validated());
        return response()->json($category, Response::HTTP_OK);
    }

    /**
     * @param Category $category
     * @return JsonResponse
     */
    public function enable(Category $category)
    {
        $category = $this->service->enable($category);
        return response()->json($category, Response::HTTP_OK);
    }

    /**
     * @param Category $category
     * @return JsonResponse
     * @throws AuthorizationException
     */
    public function disable(Category $category)
    {
        $this->authorize('disable', $category);
        $category = $this->service->disable($category);
        return response()->json($category, Response::HTTP_OK);
    }

    /**
     * @param Category $category
     * @return JsonResponse
     * @throws AuthorizationException
     */
    public function destroy(Category $category)
    {
        $this->authorize('destroy', $category);
        $this->service->destroy($category);
        return response()->json([], Response::HTTP_NO_CONTENT);
    }
}
