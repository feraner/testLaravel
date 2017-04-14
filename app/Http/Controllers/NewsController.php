<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\NewsRepository;
use App\Criteria\MyCriteria;

class NewsController extends Controller
{
    //news repositories
    protected $repository;

    public function __construct(NewsRepository $newsRepository)
    {
        $this->repository = $newsRepository;
    }

    public function index()
    {
        $this->repository->pushCriteria(MyCriteria::class);
        $list = $this->repository->all();
        dd($list->toArray());

    }
}
