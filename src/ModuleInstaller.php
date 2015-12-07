<?php

namespace SocietyCMS\Composer;

use Composer\Installer\LibraryInstaller;
use Composer\Package\PackageInterface;

class ModuleInstaller extends LibraryInstaller
{
    /**
     * {@inheritdoc}
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

        return 'modules/'.ucfirst(substr($package->getPrettyName(), 18));
    }

    /**
     * {@inheritdoc}
     */
    public function supports($packageType)
    {
        return 'societycms-module' === $packageType;
    }
}
