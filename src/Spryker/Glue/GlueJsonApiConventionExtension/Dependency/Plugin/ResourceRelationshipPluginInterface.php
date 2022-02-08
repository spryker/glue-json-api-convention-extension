<?php


/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Glue\GlueJsonApiConventionExtension\Dependency\Plugin;

use Generated\Shared\Transfer\GlueRequestTransfer;

/**
 * Use this interface to interact with resource relationship plugin.
 */
interface ResourceRelationshipPluginInterface
{
    /**
     * Specification:
     * - Adds relationships for resources.
     *
     * @api
     *
     * @param array<\Generated\Shared\Transfer\GlueResourceTransfer> $resources
     * @param \Generated\Shared\Transfer\GlueRequestTransfer $glueRequestTransfer
     *
     * @return \Generated\Shared\Transfer\GlueResourceTransfer
     */
    public function addRelationships(array $resources, GlueRequestTransfer $glueRequestTransfer): void;

    /**
     * Specification:
     * - Related resource name, when adding relationship e.g items have products, then this will have products literal
     *
     * @api
     *
     * @return string
     */
    public function getRelationshipResourceType(): string;
}
