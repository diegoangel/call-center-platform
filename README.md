Call Center Platform
===========

[![Build Status](https://travis-ci.org/diegoangel/call-center-common-bundle.svg?branch=master)](https://travis-ci.org/diegoangel/call-center-common-bundle)

### Register the bundle

To start using the bundle, register it in `app/AppKernel.php`:

```php
public function registerBundles()
{
    $bundles = [
        // Other bundles...
        new CallCenter\CommonBundle\CallCenterCommonBundle(),
        new Fresh\DoctrineEnumBundle\FreshDoctrineEnumBundle(),
    ];
}
```
