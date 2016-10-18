Call Center Platform
===========

[![Build Status](https://travis-ci.org/diegoangel/call-center-platform.svg?branch=master)](https://travis-ci.org/diegoangel/call-center-platform)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/diegoangel/call-center-platform/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/diegoangel/call-center-platform/?branch=master)

[![SensioLabsInsight](https://insight.sensiolabs.com/projects/4b444c8f-b095-4174-a333-11477268f697/small.png)](https://insight.sensiolabs.com/projects/4b444c8f-b095-4174-a333-11477268f697)

### Register the bundle

To start using the bundle, register it in `app/AppKernel.php`:

```php
public function registerBundles()
{
    $bundles = [
        // Other bundles...
        new Fresh\DoctrineEnumBundle\FreshDoctrineEnumBundle(),
        new FOS\RestBundle\FOSRestBundle(),
        new FOS\UserBundle\FOSUserBundle(),
        new FOS\JsRoutingBundle\FOSJsRoutingBundle(),
        new Ivory\CKEditorBundle\IvoryCKEditorBundle(),
        new Ivory\CKEditorBundle\IvoryCKEditorBundle(),
        new Stof\DoctrineExtensionsBundle\StofDoctrineExtensionsBundle(),        
        new CallCenter\Bundle\CommonBundle(),
    ];

    //...
    if (in_array($this->getEnvironment(), ['dev', 'test'])) {
        //...
        $bundles[] = new Hautelook\AliceBundle\HautelookAliceBundle();
        $bundles[] = new Doctrine\Bundle\FixturesBundle\DoctrineFixturesBundle();        
    }    
}
```
