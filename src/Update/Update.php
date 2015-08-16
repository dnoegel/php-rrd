<?php

namespace Dnoegel\PhpRrd\Update;

class Update implements UpdateInterface
{
    private $dataSourceName;
    private $value;
    /**
     * @var null
     */
    private $time;

    public function __construct($dataSourceName, $value, $time = null)
    {
        $this->dataSourceName = $dataSourceName;
        $this->value = $value;
        $this->time = $time;
    }

    /**
     * @return mixed
     */
    public function getDataSource()
    {
        return $this->dataSourceName;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @return null
     */
    public function getUnixTimeStamp()
    {
        return $this->time;
    }




}