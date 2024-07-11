<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Spryker\Zed\AppKernelExtension\Dependency\Plugin;

use Generated\Shared\Transfer\AppConfigTransfer;
use Generated\Shared\Transfer\AppConfigValidateResponseTransfer;

interface AppKernelPlatformPluginInterface
{
    /**
     * Specification:
     * - Receives a `AppConfigTransfer` with the current App/Tenant Configuration in the `AppConfigTransfer::content`.
     * - Returns a `AppConfigValidateResponseTransfer`.
     * - Requires `AppConfigValidateResponseTransfer::isSuccessful`to be set.
     * - Requires `AppConfigValidateResponseTransfer::configurationValidationErrors` when the validation of the configuration has errors.
     *
     * @api
     */
    public function validateConfiguration(AppConfigTransfer $appConfigTransfer): AppConfigValidateResponseTransfer;
}
