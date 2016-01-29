<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Composers;

use CachetHQ\Cachet\Facades\Setting;
use GrahamCampbell\Markdown\Facades\Markdown;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Config;

class AppComposer
{
    /**
     * Index page view composer.
     *
     * @param \Illuminate\Contracts\View\View $view
     *
     * @return void
     */
    public function compose(View $view)
    {
<<<<<<< HEAD
        $view->withAboutApp(Markdown::convertToHtml(Setting::get('app_about')));
        $view->withAppAnalytics(Setting::get('app_analytics'));
        $view->withAppAnalyticsGoSquared(Setting::get('app_analytics_gs'));
=======
        $support = Setting::get('show_support');
        $view->withAboutApp(Markdown::convertToHtml(Setting::get('app_about')));
        $view->withAppAnalytics(Setting::get('app_analytics'));
        $view->withAppAnalyticsGoSquared(Setting::get('app_analytics_go_squared'));
>>>>>>> e5c137f82b44a4fbd2d63c36abbfe0cec29ead52
        $view->withAppAnalyticsPiwikUrl(Setting::get('app_analytics_piwik_url'));
        $view->withAppAnalyticsPiwikSiteId(Setting::get('app_analytics_piwik_siteid'));
        $view->withAppBanner(Setting::get('app_banner'));
        $view->withAppBannerStyleFullWidth(Setting::get('style_fullwidth_header'));
        $view->withAppBannerType(Setting::get('app_banner_type'));
        $view->withAppDomain(Setting::get('app_domain'));
        $view->withAppGraphs(Setting::get('display_graphs'));
        $view->withAppLocale(Setting::get('app_locale'));
        $view->withAppName(Setting::get('app_name'));
<<<<<<< HEAD
        $view->withAppStylesheet(Setting::get('stylesheet'));
        $view->withAppUrl(Config::get('app.url'));
        $view->withShowSupport(Setting::get('show_support'));
=======
        if ($support) {
            $view->withSiteTitle(Setting::get('app_name').' | Cachet');
        } else {
            $view->withSiteTitle(Setting::get('app_name'));
        }
        $view->withAppStylesheet(Setting::get('stylesheet'));
        $view->withAppUrl(Config::get('app.url'));
        $view->withShowSupport($support);
>>>>>>> e5c137f82b44a4fbd2d63c36abbfe0cec29ead52
    }
}
