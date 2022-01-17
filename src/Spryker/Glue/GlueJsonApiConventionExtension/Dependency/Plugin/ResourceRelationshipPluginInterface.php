<?php


namespace Spryker\Glue\GlueJsonApiConventionExtension\Dependency\Plugin;


use Spryker\Glue\GlueApplication\Rest\Request\Data\RestRequestInterface;

interface ResourceRelationshipPluginInterface
{
//    /**
//     * @api
//     *
//     * Specification:
//     *  - Adds relationship to other resource, this method must connect relationships to given resources, current request object is given for more context.
//     *
//     * @param array<\Spryker\Glue\GlueApplication\Rest\JsonApi\RestResourceInterface> $resources
//     * @param \Spryker\Glue\GlueApplication\Rest\Request\Data\RestRequestInterface $restRequest
//     *
//     * @return void
//     */
//    public function addResourceRelationships(array $resources, RestRequestInterface $restRequest): void;

    /**
     * @api
     *
     * @param \Generated\Shared\Transfer\GlueResourceTransfer $glueResourceTransfer
     * @param \Generated\Shared\Transfer\GlueRequestTransfer $glueRequestTransfer
     *
     * @return \Generated\Shared\Transfer\GlueResourceTransfer
     */
    public function addRelationships(GlueResourceTransfer $glueResourceTransfer, GlueRequestTransfer $glueRequestTransfer): GlueResourceTransfer;

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
