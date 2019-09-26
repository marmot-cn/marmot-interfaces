<?php
namespace Marmot\Basecode\Interfaces;

interface IResponseFormatter
{
    /**
     * Formats the specified response.
     * @param Response $response the response to be formatted.
     */
    public function format($response);
}
