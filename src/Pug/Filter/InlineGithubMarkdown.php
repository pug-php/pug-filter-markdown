<?php

namespace Pug\Filter;

use Jade\Compiler;
use Jade\Filter\AbstractFilter;
use Jade\Nodes\Filter;
use cebe\markdown\GithubMarkdown as Parser;

class InlineGithubMarkdown extends AbstractFilter
{
    public function __invoke(Filter $node, Compiler $compiler)
    {
        $parser = new Parser();

        return $parser->parseParagraph($this->getNodeString($node, $compiler));
    }
}
