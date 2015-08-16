<?php

namespace Dnoegel\PhpRrd\RoundRobinArchive;

use Dnoegel\PhpRrd\Consolidator\ConsolidatorInterface;

class RoundRobinArchive implements RoundRobinArchiveInterface
{
    /**
     * @var ConsolidatorInterface
     */
    private $consolidationFunction;

    public function __construct(ConsolidatorInterface $consolidationFunction)
    {
        $this->consolidationFunction = $consolidationFunction;
    }

    /**
     * @return ConsolidatorInterface
     */
    public function getConsolidationFunction()
    {
        return $this->consolidationFunction;
    }
}