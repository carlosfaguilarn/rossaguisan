<?php



namespace Doctrine\Inflector;

interface WordInflector
{
    public function inflect(string $word) : string;
}
