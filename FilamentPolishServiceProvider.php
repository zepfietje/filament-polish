<?php

namespace ZepFietje\FilamentPolish;

use Filament\Facades\Filament;
use Filament\Tables\Actions\EditAction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;

class FilamentServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->configureComponents();
    }

    protected function configureComponents(): void
    {
        EditAction::configureUsing(
            callback: fn (EditAction $action): EditAction => $action
                ->icon(null)
                ->url(function (Model $record): ?string {
                    $resource = Filament::getModelResource($record);

                    if (! $resource::hasPage('edit')) {
                        return null;
                    }

                    return $resource::getUrl('edit', ['record' => $record]);
                }),
            isImportant: true,
        );
    }
}
