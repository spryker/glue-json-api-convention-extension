<?php


/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Glue\GlueJsonApiConventionExtension\Dependency\Plugin;

use Generated\Shared\Transfer\GlueRequestTransfer;
use Spryker\Glue\GlueJsonApiConvention\Resource\JsonApiResourceInterface;

interface RouteMatcherPluginInterface
{
    /**
     * Specification:
     * - Route given request to executable resource (e.g.: match HTTP path to Controller).
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\GlueRequestTransfer $glueRequestTransfer
     * @param array<\Spryker\Glue\GlueApplication\Resource\ResourceInterface> $resources
     *
     * @return \Spryker\Glue\GlueJsonApiConvention\Resource\JsonApiResourceInterface
     */
    public function route(GlueRequestTransfer $glueRequestTransfer, array $resources): JsonApiResourceInterface;
}
