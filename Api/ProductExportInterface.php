<?php

namespace AtenSoftware\ProductExport\Api;

/**
 * Defines the service contract.
 */
interface ProductExportInterface
{
    /**
     * Return product export.
     *
     * @api
     * @param string $parameters_json The parameters.
     * @return string The result.
     */
    public function export($parameters_json);
}