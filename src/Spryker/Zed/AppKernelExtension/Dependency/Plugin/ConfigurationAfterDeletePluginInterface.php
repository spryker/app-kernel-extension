<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\AppKernelExtension\Dependency\Plugin;

use Generated\Shared\Transfer\AppDisconnectTransfer;

/**
 * Implement this plugin to implement business logic that needs to be executed after the Configuration was deleted.
 */
interface ConfigurationAfterDeletePluginInterface
{
    /**
     * Specification:
     * - Plugin gets executed after the Configuration of an App was deleted.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\AppDisconnectTransfer $appDisconnectTransfer
     *
     * @return \Generated\Shared\Transfer\AppDisconnectTransfer
     */
    public function afterDelete(AppDisconnectTransfer $appDisconnectTransfer): AppDisconnectTransfer;
}
