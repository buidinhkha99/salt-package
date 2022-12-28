<?php

namespace Salt\Nova;

use Illuminate\Http\Request as HttpRequest;

class Nova
{
    public static $scripts = [];

    public static $styles = [];

    public static function script($name, $path)
    {
        static::$scripts[] = new Script($name, $path);

        return new static();
    }

    /**
     * Register the given CSS file with Nova.
     *
     * @param  string|\Laravel\Nova\Style  $name
     * @param  string  $path
     * @return static
     */
    public static function style($name, $path)
    {
        static::$styles[] = new Style($name, $path);

        return new static();
    }

    public static function availableScripts(HttpRequest $request)
    {
        return static::$scripts;
    }

    public static function availableStyles(HttpRequest $request)
    {
        return static::$styles;
    }

    public static function allScripts()
    {
        return static::$scripts;
    }

    public static function allStyles()
    {
        return static::$styles;
    }
}
