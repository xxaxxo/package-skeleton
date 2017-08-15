<?php
/**
 * @author: Michael Kumar <michael.kumar@sirma.bg>
 * Date: 15.08.17
 * Time: 13:32
 */

namespace xXc\PackageName;


class PackageNameServiceProvider
{
    public function boot()
    {}

    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'skeleton');
    }
}