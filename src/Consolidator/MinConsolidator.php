<?php

namespace Dnoegel\PhpRrd\Consolidator;

class MinConsolidator extends AbstractConsolidator
{
    public function getName()
    {
        return 'min';
    }
}