<?php

namespace Dnoegel\PhpRrd\Consolidator;

abstract class AbstractConsolidator implements ConsolidatorInterface
{
    /**
     * @var
     */
    private $xff;

    /**
     * @var
     */
    private $steps;

    /**
     * @var
     */
    private $rows;

    abstract public function getName();

    public function __construct($xff, $steps, $rows)
    {
        $this->xff = $xff;
        $this->steps = $steps;
        $this->rows = $rows;
    }

    /**
     * @return mixed
     */
    public function getXff()
    {
        return $this->xff;
    }

    /**
     * @return mixed
     */
    public function getSteps()
    {
        return $this->steps;
    }

    /**
     * @return mixed
     */
    public function getRows()
    {
        return $this->rows;
    }
}