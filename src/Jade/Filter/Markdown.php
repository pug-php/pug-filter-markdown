<?php

namespace Jade\Filter;

use Jade\Compiler;
use Jade\Nodes\Filter;
use cebe\markdown\Markdown as Parser;

class Markdown extends AbstractFilter
{
    public function __invoke(Filter $node, Compiler $compiler)
    {
        $parser = new Parser();

        return $parser->parse($this->getNodeString($node, $compiler));
    }
}
