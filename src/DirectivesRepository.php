<?php

namespace Appstract\BladeDirectives;

use Illuminate\Support\Facades\Blade;

class DirectivesRepository
{
    /**
     * Register the directives.
     *
     * @param  array $directives
     * @return void
     */
    public static function register($directives)
    {
        collect($directives)->each(function ($item, $key) {
            Blade::directive($key, $item);
        });
    }

    /**
     * Parse expression.
     *
     * @param  string $expression
     * @return \Illuminate\Support\Collection
     */
    public static function parseExpression($expression)
    {
        return collect(explode(',', $expression))->map(function ($item) {
            return trim($item);
        });
    }
}
