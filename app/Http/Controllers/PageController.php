<?php

namespace App\Http\Controllers;

use App\Services\PageService;
use Illuminate\Http\Request;

class PageController extends Controller
{
    private PageService $pageService;

    public function __construct(PageService $pageService)
    {
        $this->pageService = $pageService;
    }

    public function showPageBySlug(Request $request, $slug)
    {
        $page = $this->pageService->getPageBySlug($slug);

        if(!$page) {
            return redirect('/');
        }

        return view('pages.page-slug', 'page');
    }
}
