# laravel-time-measurement

this package use for measuring execution time of your operation, it's  event based

#### Install
```bash
composer require alirezavalipour/laravel-time-measurement
```
##### Publish config file and migration
```bash
php artisan vendor:publish 
```
#### Migration
```bash
php artisan migrate
```
#### Usage

```php

event(new LatencyStartEvent);

/**
  some heavy operation
**/

event(new LatencyFinishEvent( "source of operation for exampel user create controller" , "#tag1#tag2"));

```
### Note
you should always call  ``` LatencyStartEvent ``` first then call ``` LatencyFinishEvent ```

After calling ``` LatencyStartEvent ``` then ``` LatencyFinishEvent ``` you would have a log in database or whatever impelemented by ``` LogOperation ``` interface.


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
