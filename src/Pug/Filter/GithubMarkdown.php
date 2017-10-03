<?php

namespace Pug\Filter;

use cebe\markdown\GithubMarkdown as Parser;

class GithubMarkdown extends AbstractFilter
{
    public function parse($code)
    {
        $parser = new Parser();

        return $parser->parse($code);
    }
}
