<?php

namespace Mockapi\Interfaces;

interface SerializerInterface
{
    public function decode($v);
    public function encode($v);
}
