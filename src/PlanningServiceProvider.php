<?php

use Filament\PluginServiceProvider;
use Filament\Navigation\UserMenuItem;
use Alucard29\Planning\Pages\Planning;
use Spatie\LaravelPackageTools\Package;

class PlanningServiceProvider extends PluginServiceProvider
{
    protected array $pages = [
        Planning::class,
    ];

    public function configurePackage(Package $package): void
    {
        $package->name('planning');
    }

    protected function getUserMenuItems(): array
    {
        return [
            UserMenuItem::make()
                ->label('Settings')
                ->url(route('filament.pages.settings'))
                ->icon('heroicon-s-cog'),
        ];
    }
}
