<?php

namespace Dnoegel\PhpRrd\Consolidator;

class AverageConsolidator extends AbstractConsolidator
{
    public function getName()
    {
        return 'average';
    }
}