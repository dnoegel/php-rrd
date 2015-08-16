<?php
namespace Dnoegel\PhpRrd\DataSource\Type;

interface TypeInterface
{
    public function getName();

    public function getHeartBeat();

    public function getMax();

    public function getMin();
}