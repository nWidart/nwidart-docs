<?php

use App\Http\Navigation\Navigation;
use App\Markdown\Converter as MarkdownConverter;
use Spatie\Menu\Laravel\Menu;

function markdown(string $markdown) : string
{
    return MarkdownConverter::convert($markdown);
}

function menu() : Menu
{
    return app(Navigation::class)->menu();
}

function current_package() : string
{
    return request()->segment(1);
}

function current_version() : string
{
    return request()->segment(2);
}

function guess_title_from_url(string $uri)
{
    $title = explode('/', $uri);

    return ucfirst(str_replace('-', ' ', end($title)));
}
