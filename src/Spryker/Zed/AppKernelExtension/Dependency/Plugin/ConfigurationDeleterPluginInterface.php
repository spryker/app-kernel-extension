<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\AppKernelExtension\Dependency\Plugin;

use Generated\Shared\Transfer\AppDisconnectTransfer;

/**
 * Implement this plugin to add save an App configuration.
 */
interface ConfigurationDeleterPluginInterface
{
    /**
     * Specification:
     * - Deletes an App Configuration.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\AppDisconnectTransfer $appDisconnectTransfer
     *
     * @return \Generated\Shared\Transfer\AppDisconnectTransfer
     */
    public function delete(AppDisconnectTransfer $appDisconnectTransfer): AppDisconnectTransfer;
}
