<?php

namespace PandaAdmin\Core\Controllers;


use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ContentTypeController extends Controller
{
    public function index()
    {
        return new JsonResponse([
            'model1' => [
                'label' => 'Model 1'
            ],

            'model2' => [
                'label' => 'Model 2'
            ]
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