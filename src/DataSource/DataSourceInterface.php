<?php

namespace Dnoegel\PhpRrd\DataSource;

interface DataSourceInterface
{
    /**
     * @return mixed
     */
    public function getName();

    /**
     * @return mixed
     */
    public function getType();
}