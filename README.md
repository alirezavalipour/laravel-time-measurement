# laravel-time-measurement

this package use for measuring execution time of your operation, it's  event based

#### install
```bash
composer require alirezavalipour/laravel-time-measurement
```
##### publish config file 
```bash
php artisan vendor:publish 
```
#### migration
```bash
php artisan migrate
```
#### usage

```php

event(new LatencyStartEvent);

/**
  some heavy operation
**/

event(new LatencyFinishEvent( "source of operation for exampel user create controller" , "#tag1#tag2"));

```



## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
