<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Glue\GlueJsonApiConventionExtension\Dependency\Plugin;

use Generated\Shared\Transfer\GlueRequestTransfer;
use Generated\Shared\Transfer\GlueResponseTransfer;
use Spryker\Glue\GlueApplication\Resource\ResourceInterface;

interface ResourceExecutorInterface
{
    /**
     * Specificiation:
     * - Transform given resource into a response.
     *
     * @api
     *
     * @param \Spryker\Glue\GlueApplication\Resource\ResourceInterface $resource
     * @param \Generated\Shared\Transfer\GlueRequestTransfer $glueRequestTransfer
     *
     * @return \Generated\Shared\Transfer\GlueResponseTransfer
     */
    public function execute(ResourceInterface $resource, GlueRequestTransfer $glueRequestTransfer): GlueResponseTransfer;
}
