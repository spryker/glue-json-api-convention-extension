<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Glue\GlueJsonApiConventionExtension\Dependency\Plugin;

use Generated\Shared\Transfer\GlueRequestTransfer;
use Spryker\Glue\GlueJsonApiConventionExtension\Dependency\Plugin\ResourceRelationshipCollectionInterface;

interface RelationshipProviderPluginInterface
{
    /**
     * Specification:
     * - Check if request transfer is applicable.
     *
     * @api
     *
     * @param
     * @return bool
     */
    public function isApplicable(GlueRequestTransfer $glueRequestTransfer): bool;

    /**
     * Specification:
     * - Returns an array of Glue Storefront Resource Relationship plugins.
     *
     * @api
     *
     * @return \Spryker\Glue\GlueJsonApiConventionExtension\Dependency\Plugin\ResourceRelationshipCollectionInterface
     */
    public function getResourceRelationshipCollection(): ResourceRelationshipCollectionInterface;
}
