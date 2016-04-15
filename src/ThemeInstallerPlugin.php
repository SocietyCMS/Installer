<?php

namespace SocietyCMS\Composer;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

/**
 * Class ThemeInstallerPlugin
 * @package SocietyCMS\Composer
 */
class ThemeInstallerPlugin implements PluginInterface
{
    /**
     * @param Composer $composer
     * @param IOInterface $io
     */
    public function activate(Composer $composer, IOInterface $io)
    {
        $installer = new ThemeInstaller($io, $composer);
        $composer->getInstallationManager()->addInstaller($installer);
    }
}
