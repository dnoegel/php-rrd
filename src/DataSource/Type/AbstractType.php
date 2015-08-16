<?php

namespace Dnoegel\PhpRrd\DataSource\Type;

abstract class AbstractType implements TypeInterface
{
    /**
     * @var
     */
    private $heartBeat;
    /**
     * @var
     */
    private $min;
    /**
     * @var
     */
    private $max;

    public function __construct($heartBeat, $min, $max)
    {
        $this->heartBeat = $heartBeat;
        $this->min = $min;
        $this->max = $max;
    }

    /**
     * @return mixed
     */
    public function getHeartBeat()
    {
        return $this->heartBeat;
    }

    /**
     * @return mixed
     */
    public function getMin()
    {
        return $this->min;
    }

    /**
     * @return mixed
     */
    public function getMax()
    {
        return $this->max;
    }


    abstract function getName();

}
