<?php

class Cylinder
{
    public function getVolume($radius, $height)
    {
        $baseArea = pi() * $radius * $radius;
        $perimeter = 2 * pi() * $radius;
        $volume = $perimeter * $height + 2 * $baseArea;
        return $volume;
    }
    public function getPerimeter($radius)
    {
        $baseArea = pi() * $radius * $radius;
        return $baseArea;
    }

    public function getBaseArea($radius)
    {
        $perimeter = 2 * pi() * $radius;
        return $perimeter;
    }
}