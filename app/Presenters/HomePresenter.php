<?php

declare(strict_types=1);

namespace App\Presenters;

use PL\NetteInertia\InertiaPresenter;


final class HomePresenter extends InertiaPresenter {

	public function renderDefault(): void {
		$this->inertia([
			'name' => 'Universe',
			'frameworks' => [
				'Nette',
				'Vue',
				'Inertia',
			],
		], 'Home');
	}

	protected function getAssetVersion(): string {
		return '1.0';
	}


}
