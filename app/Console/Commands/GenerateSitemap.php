<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\SitemapGenerator;

class GenerateSitemap extends Command
{
    protected $signature = 'sitemap:generate';
    protected $description = 'Generar el sitemap para el sitio';

    public function handle()
    {
        Sitemap::create()
            ->add('/')
            ->add('/conductor')
            ->add('/servicios')
            ->add('/preguntas')
            ->add('/informacion')
            ->add('/contacto')
            ->writeToFile(public_path('sitemap.xml'));

        $this->info('Sitemap generado exitosamente.');
    }
}