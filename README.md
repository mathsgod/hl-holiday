![PHP Composer](https://github.com/mathsgod/hl-holiday/workflows/PHP%20Composer/badge.svg)

![LICENSE](https://img.shields.io/github/license/mathsgod/hl-holiday)


# holiday-hk

Hong Kong holiday 2011 to 2018

```php
$hs=new HL\Holiday("en");
foreach($hs->getHoliday("2018-01-01","2018-12-31") as $h){
    print_r($h);
}
```
  
