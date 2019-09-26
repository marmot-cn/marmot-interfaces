<?php
namespace Marmot\Interfaces;

interface IErrorAdapter
{
    public function lastErrorId() : int;

    public function lastErrorInfo() : array;
}
