<?php

namespace Dnoegel\PhpRrd\Consolidator;

class LastConsolidator extends AbstractConsolidator
{
    public function getName()
    {
        return 'last';
    }
}