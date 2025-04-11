<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
class GenerateSitemap extends Command
{
    protected $signature = 'generate:sitemap';
    protected $description = 'Generate the sitemap.xml file';

    public function handle()
    {
        Sitemap::create()
            ->add(Url::create('/')->setPriority(1.0))
            ->add(Url::create('/about')->setPriority(0.8))
            ->add(Url::create('/contact')->setPriority(0.8))
            ->add(Url::create('/services')->setPriority(0.8))
            ->writeToFile(public_path('sitemap.xml'));

        $this->info('Sitemap generated successfully!');
    }

}
