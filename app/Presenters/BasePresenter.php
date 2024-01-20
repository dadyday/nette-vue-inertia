<?php

declare(strict_types=1);

namespace App\Presenters;

use PL\NetteInertia\InertiaPresenter;


class BasePresenter extends InertiaPresenter {

	public function afterRender(): void {
		parent::afterRender();
		$this->view = 'default';
	}

	protected function getAssetVersion(): string {
		return '1.0';
	}


}
