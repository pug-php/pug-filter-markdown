<?php

namespace Pug\Filter;

use cebe\markdown\GithubMarkdown as Parser;
use Jade\Compiler;
use Jade\Filter\AbstractFilter as JadeAbstractFilter;
use Jade\Nodes\Filter;

class InlineGithubMarkdown extends JadeAbstractFilter
{
    public function __invoke(Filter $node, Compiler $compiler)
    {
        $parser = new Parser();

        return $parser->parseParagraph($this->getNodeString($node, $compiler));
    }
}
