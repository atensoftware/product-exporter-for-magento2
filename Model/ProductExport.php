<?php

namespace AtenSoftware\ProductExport\Model;

use AtenSoftware\ProductExport\Api\ProductExportInterface;

/**
 * Defines the implementation class of the product export contract.
 */
class ProductExport implements ProductExportInterface
{
    /**
     * Return product export data
     *
     * @api
     * @param string $parameters_json Parameters in JSON format.
     * @return string The export results.
     */
    public function export($parameters_json) {
        return "parameters you sent are: ".$parameters_json;
    }
}

?>