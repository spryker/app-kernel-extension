<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\AppKernelExtension\Dependency\Plugin;

use Generated\Shared\Transfer\AppConfigTransfer;

/**
 * Implement this plugin to implement business logic that needs to be executed after the Configuration was saved.
 */
interface ConfigurationAfterSavePluginInterface
{
    /**
     * Specification:
     * - Plugin gets executed after the Configuration of an App was saved.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\AppConfigTransfer $appConfigTransfer
     *
     * @return \Generated\Shared\Transfer\AppConfigTransfer
     */
    public function afterSave(AppConfigTransfer $appConfigTransfer): AppConfigTransfer;
}
