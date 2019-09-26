<?php
namespace Marmot\Interfaces;

interface IRestfulTranslator extends ITranslator
{
    public function arrayToObjects(array $expression) : array;
}
