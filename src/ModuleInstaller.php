<?php

namespace SocietyCMS\Composer;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;

class ModuleInstaller extends LibraryInstaller
{
    /**
     * {@inheritDoc}
     */
    public function getInstallPath(PackageInterface $package)
    {
        $prefix = substr($package->getPrettyName(), 0, 18);
        if ('societycms/module-' !== $prefix) {
            throw new \InvalidArgumentException(
                'Unable to install module, societycms modules '
                .'should always start their package name with '
                .'"societycms/module-"'
            );
        }

        return 'modules/'.substr($package->getPrettyName(), 18);
    }

    /**
     * {@inheritDoc}
     */
    public function supports($packageType)
    {
        return 'societycms-module' === $packageType;
    }
}
