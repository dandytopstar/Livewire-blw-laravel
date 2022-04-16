<?php

namespace App\Services;

use App\Models\Page;

class PageService
{
    private Page $pageModel;

    public function __construct(Page $pageModel)
    {
        $this->pageModel = $pageModel;
    }

    public function getPageBySlug($slug)
    {
        return $this->pageModel::where('slug', $slug)->first();
    }
}