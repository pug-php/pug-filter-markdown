<?php

namespace Jade\Filter;

use Jade\Compiler;
use Jade\Nodes\Filter;
use cebe\markdown\GithubMarkdown as Parser;

class GithubMarkdown extends AbstractFilter
{
    public function __invoke(Filter $node, Compiler $compiler)
    {
        $parser = new Parser();

        return $parser->parse($this->getNodeString($node, $compiler));
    }
}
