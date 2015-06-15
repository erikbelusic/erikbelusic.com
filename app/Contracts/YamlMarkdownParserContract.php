<?php

namespace App\Contracts;

interface YamlMarkdownParserContract
{
    public function parse($str, $parseMarkdown = true);
}