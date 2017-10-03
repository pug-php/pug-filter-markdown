<?php

namespace Pug\Filter;

use cebe\markdown\Markdown as Parser;

class Markdown extends AbstractFilter
{
    public function parse($code)
    {
        $parser = new Parser();

        return $parser->parse($code);
    }
}
