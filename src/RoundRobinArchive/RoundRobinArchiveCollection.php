<?php

namespace Dnoegel\PhpRrd\RoundRobinArchive;

use Doctrine\Common\Collections\ArrayCollection;

class RoundRobinArchiveCollection extends ArrayCollection
{
    /**
     * Initializes a new ArrayCollection.
     *
     * @param RoundRobinArchive[] $elements
     */
    public function __construct(array $elements = array())
    {
        parent::__construct($elements);
    }

}