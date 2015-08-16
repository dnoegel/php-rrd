<?php

namespace Dnoegel\PhpRrd\Consolidator;

class MaxConsolidator extends AbstractConsolidator
{
    public function getName()
    {
        return 'max';
    }
}