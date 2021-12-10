<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Glue\GlueJsonApiConventionExtension\Dependency\Plugin;

use Generated\Shared\Transfer\GlueResponseTransfer;

interface SenderPluginInterface
{
    /**
     * Specification:
     * - Send response according to the used transport protocol (e.g.: sending header and body for HTTP).
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\GlueResponseTransfer $glueResponseTransfer
     *
     * @return void
     */
    public function send(GlueResponseTransfer $glueResponseTransfer): void;
}
