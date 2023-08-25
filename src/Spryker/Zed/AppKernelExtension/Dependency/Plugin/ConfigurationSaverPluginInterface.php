<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\AppKernelExtension\Dependency\Plugin;

use Generated\Shared\Transfer\AppConfigTransfer;

/**
 * Implement this plugin to add save an App configuration.
 */
interface ConfigurationSaverPluginInterface
{
    /**
     * Specification:
     * - Saves an App Configuration.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\AppConfigTransfer $appConfigTransfer
     *
     * @return \Generated\Shared\Transfer\AppConfigTransfer
     */
    public function save(AppConfigTransfer $appConfigTransfer): AppConfigTransfer;
}
