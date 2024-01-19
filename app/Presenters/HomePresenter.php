<?php

declare(strict_types=1);

namespace App\Presenters;

use Nette;
use PL\NetteInertia\InertiaPresenter;


final class HomePresenter extends InertiaPresenter
{
    protected function getAssetVersion(): string
    {
        return '1.0';
    }

    public function renderDefault(): void
    {
        $this->inertia([
            'frontendFramework' => 'Vue',
            'backendFramework' => 'Nette Backend',
        ]);
    }
}
