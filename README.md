# SocietyCMS Composer Installer Plugin

This installer ensures that modules and themes end up in the correct directory:

## Usage

Your plugins themselves do not need to require societycms/installer. They only need to specify the type in their composer config:

    "type": "societycms-module"
or if you're building a theme:

    "type": "societycms-theme"

For more information check out the documentation at [societycms.com](https://societycms.com/docs/master)