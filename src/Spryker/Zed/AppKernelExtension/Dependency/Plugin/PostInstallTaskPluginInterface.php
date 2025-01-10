<?php

namespace Spryker\Zed\AppKernelExtension\Dependency\Plugin;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Introduced to run post install tasks.
 * Despite the name, this plugin is not intended to be executed in Spryker post-deploy hook `SPRYKER_HOOK_AFTER_DEPLOY` as it is not executed in the context of the application.
 */
interface PostInstallTaskPluginInterface
{
    /**
     * Specification:
     * - Runs task that should be executed after deployment.
     *
     * @api
     *
     * @param \Symfony\Component\Console\Input\InputInterface $input
     * @param \Symfony\Component\Console\Output\OutputInterface $output
     *
     * @return void
     */
    public function run(InputInterface $input, OutputInterface $output): void;
}
