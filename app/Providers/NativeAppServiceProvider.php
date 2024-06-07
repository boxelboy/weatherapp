<?php

namespace App\Providers;

use Native\Laravel\Facades\Window;
use Native\Laravel\Contracts\ProvidesPhpIni;
use Native\Laravel\Facades\MenuBar;
use Native\Laravel\Menu\Menu;

class NativeAppServiceProvider
{
    /**
     * Executed once the native application has been booted.
     * Use this method to open windows, register global shortcuts, etc.
     */
    public function boot(): void
    {
        /*Menubar::create()
            ->route('weather')
            ->label('Status: Online')
            ->icon(storage_path('app/public/menuBarIcon.png'))
            ->withContextMenu(
                Menu::new()
                    ->label('The App')
                    ->separator()
                    ->quit()
            );*/

        /*Menu::new()
            ->appMenu()
            //->editMenu()
            //->viewMenu()
            //->windowMenu()
            ->submenu('Test', Menu::new()
                ->link('https://procim.tceg.com/procim/Main/ProcimMain.aspx', 'Procim')
                ->link('https://app.resourceguruapp.com/hi/tceg-digital/schedule', 'Guru')
            )
            ->register();*/

        Window::open()
            ->title('The App')
            ->route('weather')
            ->showDevTools(false)
            ->closable(true)
            ->fullscreen(true);
    }

    /**
     * Return an array of php.ini directives to be set.
     */
    public function phpIni(): array
    {
        return [
        ];
    }
}
