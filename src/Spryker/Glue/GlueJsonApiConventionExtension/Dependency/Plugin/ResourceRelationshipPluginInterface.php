<?php


namespace Spryker\Glue\GlueJsonApiConventionExtension\Dependency\Plugin;


use Generated\Shared\Transfer\GlueRequestTransfer;
use Generated\Shared\Transfer\GlueResourceTransfer;
use Spryker\Glue\GlueApplication\Rest\Request\Data\RestRequestInterface;

interface ResourceRelationshipPluginInterface
{
    /**
     * @api
     *
     * @param array<\Generated\Shared\Transfer\GlueResourceTransfer> $glueResourceTransfer
     * @param \Generated\Shared\Transfer\GlueRequestTransfer $glueRequestTransfer
     *
     * @return \Generated\Shared\Transfer\GlueResourceTransfer
     */
    public function addRelationships(array $resources, GlueRequestTransfer $glueRequestTransfer): void;

    /**
     * @api
     *
     * Specification:
     *  - Related resource name, when adding relationship e.g items have products, then this will have products literal
     *
     * @return string
     */
    public function getRelationshipResourceType(): string;
}
