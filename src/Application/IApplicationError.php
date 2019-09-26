<?php
namespace Marmot\Interfaces\Application;

interface IApplicationError
{
    public function initErrorConfig() : void;

    public function getErrorDescriptions() : array;
}
