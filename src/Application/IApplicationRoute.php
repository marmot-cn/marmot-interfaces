<?php
namespace Marmot\Interfaces\Application;

interface IApplicationRoute
{
    public function getIndexRoute() : array;

    public function getRouteRules() : array;
}
