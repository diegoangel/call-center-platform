Call Center Platform
===========

[![Build Status](https://travis-ci.org/diegoangel/call-center-platform.svg?branch=master)](https://travis-ci.org/diegoangel/call-center-platform)

### Register the bundle

To start using the bundle, register it in `app/AppKernel.php`:

```php
public function registerBundles()
{
    $bundles = [
        // Other bundles...
        new CallCenter\Bundle\CommonBundle(),
        new Fresh\DoctrineEnumBundle\FreshDoctrineEnumBundle(),
    ];
}
```
