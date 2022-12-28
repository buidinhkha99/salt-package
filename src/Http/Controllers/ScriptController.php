<?php 

namespace Salt\Nova\Http\Controllers;

use Illuminate\Http\Request as HttpRequest;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Request;
use Salt\Nova\Nova;

class ScriptController extends Controller
{
    /**
     * Serve the requested script.
     */
    public function index(HttpRequest $request)
    {
        $asset = collect(Nova::allScripts())
                    ->filter(function ($asset) use ($request) {
                        return $asset->name() === $request->script;
                    })->first();

        abort_if(is_null($asset), 404);

        return $asset->toResponse();
    }
}
