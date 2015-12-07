<?php

namespace SocietyCMS\Composer;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;

class ThemeInstaller extends LibraryInstaller
{
    /**
     * {@inheritDoc}
     */
    public function getInstallPath(PackageInterface $package)
    {
        $prefix = substr($package->getPrettyName(), 0, 17);
        if ('societycms/theme-' !== $prefix) {
            throw new \InvalidArgumentException(
                'Unable to install theme, societycms themes '
                .'should always start their package name with '
                .'"societycms/theme-"'
            );
        }

        return 'themes/'.substr($package->getPrettyName(), 17);
    }

    /**
     * {@inheritDoc}
     */
    public function supports($packageType)
    {
        return 'societycms-theme' === $packageType;
    }
}
