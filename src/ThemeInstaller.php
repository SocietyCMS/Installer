<?php

namespace SocietyCMS\Composer;

use Composer\Installer\LibraryInstaller;
use Composer\Package\PackageInterface;

class ThemeInstaller extends LibraryInstaller
{
    /**
     * {@inheritdoc}
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
     * {@inheritdoc}
     */
    public function supports($packageType)
    {
        return 'societycms-theme' === $packageType;
    }
}
