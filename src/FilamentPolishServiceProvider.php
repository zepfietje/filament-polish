<?php

namespace ZepFietje\FilamentPolish;

use Filament\Facades\Filament;
use Filament\PluginServiceProvider;
use Filament\Tables\Actions\EditAction;
use Spatie\LaravelPackageTools\Package;

class FilamentPolishServiceProvider extends PluginServiceProvider
{
    public static string $name = 'filament-polish';

    protected array $styles = [
        'filament-polish' => __DIR__.'/../resources/dist/index.css',
    ];

    public function configurePackage(Package $package): void
    {
        $package->name(static::$name);
    }

    public function packageBooted(): void
    {
        foreach ($this->styles as $name => $path) {
            Filament::registerRenderHook(
                'head.end',
                fn (): string => '<link rel="stylesheet" href="'.route('filament.asset', ['file' => "$name.css"]).'" />',
            );
        }

        EditAction::configureUsing(
            callback: fn (EditAction $action): EditAction => $action->icon(null),
            isImportant: true,
        );
    }
}
