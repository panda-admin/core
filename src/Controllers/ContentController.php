<?php

namespace PandaAdmin\Core\Controllers;


use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ContentController extends Controller
{
    protected $contenttype;

    public function __construct(Request $request)
    {
        $this->contenttype = $request->route('contenttype');
    }

    public function index()
    {
        return new JsonResponse([
            [
                'title' => 'Some title',
                'content' => '<p>HTML Content!</p>',
                'cover' => 'content/some-image.png'
            ],
            [
                'title' => 'Some title 2',
                'content' => '<p>HTML Content!</p>',
                'cover' => 'content/some-image.png'
            ],
            [
                'title' => 'Some title 3',
                'content' => '<p>HTML Content!</p>',
                'cover' => 'content/some-image.png'
            ],
        ]);
    }

    public function store()
    {

    }

    public function create()
    {

    }

    public function show()
    {

    }

    public function update()
    {

    }

    public function destroy()
    {

    }

    public function edit()
    {

    }
}