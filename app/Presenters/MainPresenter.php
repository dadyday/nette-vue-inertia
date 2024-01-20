<?php

declare(strict_types=1);

namespace App\Presenters;

use PL\NetteInertia\InertiaPresenter;


final class MainPresenter extends BasePresenter {

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

	public function renderUsers(): void {
		sleep(2);
		$this->inertia([], 'Users');
	}

	public function renderSettings(): void {
		$this->inertia([], 'Settings');
	}

}
