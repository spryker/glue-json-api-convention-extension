<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Glue\GlueJsonApiConventionExtension\Dependency\Plugin;

use Generated\Shared\Transfer\GlueRequestTransfer;

/**
 * Use this plugin for JSON API convention to build and format the request.
 */
interface RequestBuilderPluginInterface
{
    /**
     * Specification:
     * - Build the request by extracting transport and format specific fields (e.g.: HTTP headers to GlueRequestTransfer.meta).
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\GlueRequestTransfer $glueRequestTransfer
     *
     * @return \Generated\Shared\Transfer\GlueRequestTransfer
     */
    public function build(GlueRequestTransfer $glueRequestTransfer): GlueRequestTransfer;
}
