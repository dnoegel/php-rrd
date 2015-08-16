<?php

namespace Dnoegel\PhpRrd\DataSource;


class DataSource implements DataSourceInterface
{
    private $name;
    private $type;

    public function __construct($name, Type\TypeInterface $type)
    {
        $this->name = $name;
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }
}