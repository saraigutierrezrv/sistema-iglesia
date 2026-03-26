<?php

namespace App\Providers\Filament;

use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Pages\Dashboard;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Widgets\AccountWidget;
use Filament\Widgets\FilamentInfoWidget;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\PreventRequestForgery;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Filament\Navigation\NavigationItem; //para poder cambiar de panel

class MckinneyPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->id('mckinney')
            ->path('mckinney')
            ->colors([
                'primary' => Color::Rose,
            ])
            // --- INICIO DE LO NUEVO ---
            ->homeUrl('/') // Al hacer clic en el nombre arriba a la izquierda, te lleva al portal
            ->navigationItems([
                NavigationItem::make('Cambiar Panel')
                    ->url('/')
                    ->icon('heroicon-o-arrow-left-start-on-rectangle')
                    ->sort(-2), // Para que aparezca de primero en el menú
            ])
            // --- FIN DE LO NUEVO ---
            ->discoverResources(in: app_path('Filament/Mckinney/Resources'), for: 'App\Filament\Mckinney\Resources')
            ->discoverPages(in: app_path('Filament/Mckinney/Pages'), for: 'App\Filament\Mckinney\Pages')
            ->pages([
                Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Mckinney/Widgets'), for: 'App\Filament\Mckinney\Widgets')
            ->widgets([
                AccountWidget::class,
                FilamentInfoWidget::class,
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                PreventRequestForgery::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ]);
    }
}
