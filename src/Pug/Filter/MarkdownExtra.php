<?php

namespace Pug\Filter;

use cebe\markdown\MarkdownExtra as Parser;

class MarkdownExtra extends AbstractFilter
{
    public function parse($code)
    {
        $parser = new Parser();

        return $parser->parse($code);
    }
}
