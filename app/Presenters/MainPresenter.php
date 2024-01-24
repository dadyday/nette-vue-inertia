<?php

declare(strict_types=1);

namespace App\Presenters;


use Nette\Database\Table\Selection;

final class MainPresenter extends BasePresenter {


	/** @var Selection @inject */
	public Selection $oUsers;


	protected function share(array $aProp): array {
		return array_merge([
			'name' => 'World',
		], parent::share($aProp));
	}

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
		$oFaker = \Faker\Factory::create();
		$aRow = [];
		for ($id = 1; $id <= 100; $id++) {
			$aRow[] = [
				'id' => $id,
				'name' => $oFaker->name(),
				'email' => $oFaker->email(),
			];
		}

		sleep(1);
		$this->inertia([
			'users' => $aRow,
			'time' => date('Y-m-d H:i:s'),
		], 'Users');
	}

	public function renderSettings(): void {
		$this->inertia([], 'Settings');
	}

}
