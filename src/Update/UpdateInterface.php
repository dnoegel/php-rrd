<?php

namespace Dnoegel\PhpRrd\Update;

interface UpdateInterface
{
    public function getDataSource();
    public function getValue();
    public function getUnixTimeStamp();
}