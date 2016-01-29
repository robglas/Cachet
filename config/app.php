<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [

    /*
    |--------------------------------------------------------------------------
<<<<<<< HEAD
=======
    | Application Environment
    |--------------------------------------------------------------------------
    |
    | This value determines the "environment" your application is currently
    | running in. This may determine how you prefer to configure various
    | services your application utilizes. Set this in your ".env" file.
    |
    */

    'env' => env('APP_ENV', 'production'),

    /*
    |--------------------------------------------------------------------------
>>>>>>> e5c137f82b44a4fbd2d63c36abbfe0cec29ead52
    | Application Debug Mode
    |--------------------------------------------------------------------------
    |
    | When your application is in debug mode, detailed error messages with
    | stack traces will be shown on every error that occurs within your
    | application. If disabled, a simple generic error page is shown.
    |
    */

    'debug' => env('APP_DEBUG', false),

    /*
    |--------------------------------------------------------------------------
    | Application URL
    |--------------------------------------------------------------------------
    |
    | This URL is used by the console to properly generate URLs when using
    | the Artisan command line tool. You should set this to the root of
    | your application so that it is used when running Artisan tasks.
    |
    */

    'url' => env('APP_URL', 'http://localhost'),

    /*
    |--------------------------------------------------------------------------
    | Application Timezone
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default timezone for your application, which
    | will be used by the PHP date and date-time functions. We have gone
    | ahead and set this to a sensible default for you out of the box.
    |
    */

    'timezone' => 'UTC',

    /*
    |--------------------------------------------------------------------------
    | Application Locale Configuration
    |--------------------------------------------------------------------------
    |
    | The application locale determines the default locale that will be used
    | by the translation service provider. You are free to set this value
    | to any of the locales which will be supported by the application.
    |
    */

    'locale' => env('APP_LOCALE', 'en'),

    /*
    |--------------------------------------------------------------------------
    | Application Fallback Locale
    |--------------------------------------------------------------------------
    |
    | The fallback locale determines the locale to use when the current one
    | is not available. You may change the value to correspond to any of
    | the language folders that are provided through your application.
    |
    */

    'fallback_locale' => 'en',

    /*
    |--------------------------------------------------------------------------
    | Encryption Key
    |--------------------------------------------------------------------------
    |
    | This key is used by the Illuminate encrypter service and should be set
    | to a random, 32 character string, otherwise these encrypted strings
    | will not be safe. Please do this before deploying an application!
    |
    */

<<<<<<< HEAD
    'key' => env('APP_KEY', 'SomeRandomString'),
=======
    'key' => env('APP_KEY'),
>>>>>>> e5c137f82b44a4fbd2d63c36abbfe0cec29ead52

    'cipher' => 'AES-256-CBC',

    /*
    |--------------------------------------------------------------------------
    | Logging Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure the log settings for your application. Out of
    | the box, Laravel uses the Monolog PHP logging library. This gives
    | you a variety of powerful log handlers / formatters to utilize.
    |
    | Available Settings: "single", "daily", "syslog", "errorlog"
    |
    */

<<<<<<< HEAD
    'log' => env('LOGGING_MODE', 'daily'),
=======
    'log' => env('APP_LOG', 'daily'),
>>>>>>> e5c137f82b44a4fbd2d63c36abbfe0cec29ead52

    /*
    |--------------------------------------------------------------------------
    | Autoloaded Service Providers
    |--------------------------------------------------------------------------
    |
    | The service providers listed here will be automatically loaded on the
    | request to your application. Feel free to add your own services to
    | this array to grant expanded functionality to your applications.
    |
    */

    'providers' => array_filter([

        /*
         * Laravel Framework Service Providers...
         */
<<<<<<< HEAD
        'Illuminate\Foundation\Providers\ArtisanServiceProvider',
        'Illuminate\Auth\AuthServiceProvider',
        'Illuminate\Broadcasting\BroadcastServiceProvider',
        'Illuminate\Bus\BusServiceProvider',
        'Illuminate\Cache\CacheServiceProvider',
        'Illuminate\Foundation\Providers\ConsoleSupportServiceProvider',
        'Illuminate\Routing\ControllerServiceProvider',
=======
        'Illuminate\Auth\AuthServiceProvider',
        'Illuminate\Broadcasting\BroadcastServiceProvider',
        'AltThree\Bus\BusServiceProvider',
        'Illuminate\Cache\CacheServiceProvider',
        'Illuminate\Foundation\Providers\ConsoleSupportServiceProvider',
>>>>>>> e5c137f82b44a4fbd2d63c36abbfe0cec29ead52
        'Illuminate\Cookie\CookieServiceProvider',
        'Illuminate\Database\DatabaseServiceProvider',
        'Illuminate\Encryption\EncryptionServiceProvider',
        'Illuminate\Filesystem\FilesystemServiceProvider',
        'Illuminate\Foundation\Providers\FoundationServiceProvider',
        'Illuminate\Hashing\HashServiceProvider',
        'Illuminate\Mail\MailServiceProvider',
        'Illuminate\Pagination\PaginationServiceProvider',
        'Illuminate\Pipeline\PipelineServiceProvider',
        'Illuminate\Queue\QueueServiceProvider',
        'Illuminate\Redis\RedisServiceProvider',
        'Illuminate\Auth\Passwords\PasswordResetServiceProvider',
        'Illuminate\Session\SessionServiceProvider',
        'Illuminate\Translation\TranslationServiceProvider',
        'Illuminate\Validation\ValidationServiceProvider',
        'Illuminate\View\ViewServiceProvider',

        /*
         * Packages Service Providers...
         */
<<<<<<< HEAD
        env('CACHET_EMOJI', false) ? 'AltThree\Emoji\EmojiServiceProvider' : null,
=======
        'AltThree\Emoji\EmojiServiceProvider',
>>>>>>> e5c137f82b44a4fbd2d63c36abbfe0cec29ead52
        'Barryvdh\Cors\ServiceProvider',
        'Fideloper\Proxy\TrustedProxyServiceProvider',
        'GrahamCampbell\Binput\BinputServiceProvider',
        'GrahamCampbell\Exceptions\ExceptionsServiceProvider',
        'GrahamCampbell\Core\CoreServiceProvider',
        'GrahamCampbell\Markdown\MarkdownServiceProvider',
        'GrahamCampbell\Security\SecurityServiceProvider',
        'GrahamCampbell\Throttle\ThrottleServiceProvider',
        'Jenssegers\Date\DateServiceProvider',
        'McCool\LaravelAutoPresenter\AutoPresenterServiceProvider',
        'PragmaRX\Google2FA\Vendor\Laravel\ServiceProvider',
        'Roumen\Feed\FeedServiceProvider',
        'TwigBridge\ServiceProvider',

        /*
         * Application Service Providers...
         */
<<<<<<< HEAD
        'CachetHQ\Cachet\Providers\AppServiceProvider',
        'CachetHQ\Cachet\Providers\ComposerServiceProvider',
        'CachetHQ\Cachet\Providers\ConfigServiceProvider',
        'CachetHQ\Cachet\Providers\EventServiceProvider',
        'CachetHQ\Cachet\Providers\RepositoryServiceProvider',
        'CachetHQ\Cachet\Providers\RouteServiceProvider',
=======
        'CachetHQ\Cachet\Foundation\Providers\AppServiceProvider',
        'CachetHQ\Cachet\Foundation\Providers\ComposerServiceProvider',
        'CachetHQ\Cachet\Foundation\Providers\ConfigServiceProvider',
        'CachetHQ\Cachet\Foundation\Providers\EventServiceProvider',
        'CachetHQ\Cachet\Foundation\Providers\GitHubServiceProvider',
        'CachetHQ\Cachet\Foundation\Providers\RepositoryServiceProvider',
        'CachetHQ\Cachet\Foundation\Providers\RouteServiceProvider',
>>>>>>> e5c137f82b44a4fbd2d63c36abbfe0cec29ead52

    ]),

    /*
    |--------------------------------------------------------------------------
    | Class Aliases
    |--------------------------------------------------------------------------
    |
    | This array of class aliases will be registered when this application
    | is started. However, feel free to register as many as you wish as
    | the aliases are "lazy" loaded so they don't hinder performance.
    |
    */

    'aliases' => [

        'App'       => 'Illuminate\Support\Facades\App',
        'Artisan'   => 'Illuminate\Support\Facades\Artisan',
        'Auth'      => 'Illuminate\Support\Facades\Auth',
        'Blade'     => 'Illuminate\Support\Facades\Blade',
<<<<<<< HEAD
        'Bus'       => 'Illuminate\Support\Facades\Bus',
=======
>>>>>>> e5c137f82b44a4fbd2d63c36abbfe0cec29ead52
        'Cache'     => 'Illuminate\Support\Facades\Cache',
        'Config'    => 'Illuminate\Support\Facades\Config',
        'Cookie'    => 'Illuminate\Support\Facades\Cookie',
        'Crypt'     => 'Illuminate\Support\Facades\Crypt',
        'DB'        => 'Illuminate\Support\Facades\DB',
<<<<<<< HEAD
        'Eloquent'  => 'Illuminate\Database\Eloquent\Model',
=======
>>>>>>> e5c137f82b44a4fbd2d63c36abbfe0cec29ead52
        'Event'     => 'Illuminate\Support\Facades\Event',
        'File'      => 'Illuminate\Support\Facades\File',
        'Gate'      => 'Illuminate\Support\Facades\Gate',
        'Hash'      => 'Illuminate\Support\Facades\Hash',
<<<<<<< HEAD
        'Input'     => 'Illuminate\Support\Facades\Input',
        'Inspiring' => 'Illuminate\Foundation\Inspiring',
=======
>>>>>>> e5c137f82b44a4fbd2d63c36abbfe0cec29ead52
        'Lang'      => 'Illuminate\Support\Facades\Lang',
        'Log'       => 'Illuminate\Support\Facades\Log',
        'Mail'      => 'Illuminate\Support\Facades\Mail',
        'Password'  => 'Illuminate\Support\Facades\Password',
        'Queue'     => 'Illuminate\Support\Facades\Queue',
        'Redirect'  => 'Illuminate\Support\Facades\Redirect',
        'Redis'     => 'Illuminate\Support\Facades\Redis',
        'Request'   => 'Illuminate\Support\Facades\Request',
        'Response'  => 'Illuminate\Support\Facades\Response',
        'Route'     => 'Illuminate\Support\Facades\Route',
        'Schema'    => 'Illuminate\Support\Facades\Schema',
        'Session'   => 'Illuminate\Support\Facades\Session',
        'Storage'   => 'Illuminate\Support\Facades\Storage',
        'URL'       => 'Illuminate\Support\Facades\URL',
        'Validator' => 'Illuminate\Support\Facades\Validator',
        'View'      => 'Illuminate\Support\Facades\View',

<<<<<<< HEAD
=======
        'Binput'    => 'GrahamCampbell\Binput\Facades\Binput',
>>>>>>> e5c137f82b44a4fbd2d63c36abbfe0cec29ead52
        'Setting'   => 'CachetHQ\Cachet\Facades\Setting',
        'Str'       => 'Illuminate\Support\Str',

    ],

];
