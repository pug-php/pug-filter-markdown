<?php

namespace Pug\Filter;

use cebe\markdown\MarkdownExtra as Parser;
use Jade\Compiler;
use Jade\Filter\AbstractFilter as JadeAbstractFilter;
use Jade\Nodes\Filter;

class MarkdownExtra extends JadeAbstractFilter
{
    public function __invoke(Filter $node, Compiler $compiler)
    {
        $parser = new Parser();

        return $parser->parse($this->getNodeString($node, $compiler));
    }
}
