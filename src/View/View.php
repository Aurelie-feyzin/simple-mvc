<?php

namespace View;


class View
{
    public function render(string $path, array $params) : string
    {
        extract($params);
        ob_start();
        require $path;
        $content = ob_get_flush();
        return $content;

    }
}