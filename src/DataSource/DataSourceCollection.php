<?php

namespace Dnoegel\PhpRrd\DataSource;

use Doctrine\Common\Collections\ArrayCollection;

class DataSourceCollection extends ArrayCollection
{
    /**
     * Initializes a new ArrayCollection.
     *
     * @param DataSourceInterface[] $elements
     */
    public function __construct(array $elements = array())
    {
        parent::__construct($elements);
    }

}