<?php

namespace App\Screens;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller;
use Inertia\Inertia;

class BaseScreen extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public string $page = '';
    public array $data = [];

    public function header(): static
    {
        $this->data = [
            'header' => [
                'title' => 'Base',
                'id' => 'fa fa-home',
                'url' => '/',
            ],
        ];

        return $this;
    }

    public function __invoke(): \Inertia\Response
    {
        return Inertia::render($this->page, $this->data);
    }
}
