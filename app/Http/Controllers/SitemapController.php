<?php

namespace App\Http\Controllers;

use App\Models\PortfolioItem;
use Illuminate\Http\Response;

class SitemapController extends Controller
{
    protected array $locales = ['it', 'en'];

    protected array $routes = [
        'home' => ['priority' => '1.0', 'changefreq' => 'weekly', 'lastmod' => '2026-01-27'],
        'services' => ['priority' => '0.8', 'changefreq' => 'monthly', 'lastmod' => '2026-01-27'],
        'portfolio' => ['priority' => '0.8', 'changefreq' => 'weekly', 'lastmod' => null],
        'contacts' => ['priority' => '0.7', 'changefreq' => 'monthly', 'lastmod' => '2026-01-27'],
        'privacy-policy' => ['priority' => '0.3', 'changefreq' => 'yearly', 'lastmod' => '2026-01-26'],
        'cookie-policy' => ['priority' => '0.3', 'changefreq' => 'yearly', 'lastmod' => '2026-01-26'],
    ];

    public function index(): Response
    {
        $urls = $this->buildUrls();

        $content = view('sitemap', compact('urls'))->render();

        return response($content, 200)
            ->header('Content-Type', 'application/xml');
    }

    protected function buildUrls(): array
    {
        $urls = [];
        $portfolioLastmod = $this->getPortfolioLastmod();

        foreach ($this->routes as $routeName => $config) {
            $lastmod = $config['lastmod'];

            if ($routeName === 'portfolio') {
                $lastmod = $portfolioLastmod;
            }

            foreach ($this->locales as $locale) {
                $url = [
                    'loc' => route($routeName, ['locale' => $locale]),
                    'lastmod' => $lastmod,
                    'changefreq' => $config['changefreq'],
                    'priority' => $config['priority'],
                    'alternates' => [],
                ];

                foreach ($this->locales as $altLocale) {
                    $url['alternates'][] = [
                        'hreflang' => $altLocale,
                        'href' => route($routeName, ['locale' => $altLocale]),
                    ];
                }

                $url['alternates'][] = [
                    'hreflang' => 'x-default',
                    'href' => route($routeName, ['locale' => 'it']),
                ];

                $urls[] = $url;
            }
        }

        return $urls;
    }

    protected function getPortfolioLastmod(): string
    {
        $latestItem = PortfolioItem::active()
            ->orderByDesc('updated_at')
            ->first();

        if ($latestItem) {
            return $latestItem->updated_at->toDateString();
        }

        return $this->routes['home']['lastmod'];
    }
}
