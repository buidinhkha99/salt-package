<?php

namespace Salt\Nova;

use DateTime;
use Illuminate\Support\Str;

class Script
{
    /**
     * Construct a new Asset instance.
     *
     * @param  string|self  $name
     * @param  string|null  $path
     * @param  bool|null  $remote
     */
    public function __construct($name, $path)
    {
        if ($name instanceof self) {
            $this->name = $name->name();
            $this->path = $name->path();

            return;
        }

        $this->name = $name;
        $this->path = $path;
    }

    public function url()
    {
        return "/salt-api/scripts/{$this->name}";
    }

    public function name()
    {
        return $this->name;
    }

    /**
     * Get asset path.
     *
     * @return string|null
     */
    public function path()
    {
        return $this->path;
    }

    public function toResponse()
    {
        return response(
            file_get_contents($this->path), 200, $this->toResponseHeaders(),
        )->setLastModified(DateTime::createFromFormat('U', (string) filemtime($this->path)));
    }

    /**
     * Get the response headers for the asset.
     *
     * @return array<string, string>
     */
    public function toResponseHeaders()
    {
        return [
            'Content-Type' => 'application/javascript',
        ];
    }
}
