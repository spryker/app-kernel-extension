<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\AppKernelExtension\Dependency\Plugin;

use Generated\Shared\Transfer\AppConfigTransfer;

/**
 * Implement this plugin to implement business logic that needs to be executed before the Configuration gets deleted (marked as inactive).
 */
interface ConfigurationBeforeDeletePluginInterface
{
    /**
     * Specification:
     * - Plugin gets executed before the Configuration of an App gets deleted.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\AppConfigTransfer $appConfigTransfer
     *
     * @return \Generated\Shared\Transfer\AppConfigTransfer
     */
    public function beforeDelete(AppConfigTransfer $appConfigTransfer): AppConfigTransfer;
}
