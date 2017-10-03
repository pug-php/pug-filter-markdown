<?php

namespace Pug\Filter;

use cebe\markdown\GithubMarkdown as Parser;

class InlineGithubMarkdown extends AbstractFilter
{
    public function parse($code)
    {
        $parser = new Parser();

        return $parser->parseParagraph($code);
    }
}
