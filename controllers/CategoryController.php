<?php

class CategoryController extends BaseController
{
    public function index()
    {
        return $this->view('fontend.categories.index', [
            "categories" => ["one" => 1, "two" => 2, "three" => 3]
        ]);
    }

    public function show()
    {
        echo __METHOD__;
    }
}
