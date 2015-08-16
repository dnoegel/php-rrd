<?php

namespace Dnoegel\PhpRrd\RoundRobinArchive;

use Dnoegel\PhpRrd\Consolidator\ConsolidatorInterface;

interface RoundRobinArchiveInterface
{
    public function __construct(ConsolidatorInterface $consolidationFunction);

    /**
     * @return ConsolidatorInterface
     */
    public function getConsolidationFunction();
}