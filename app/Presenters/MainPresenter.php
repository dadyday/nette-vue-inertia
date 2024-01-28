<?php

declare(strict_types=1);

namespace App\Presenters;


use Nette\Database\Table\Selection;
use Nette\Utils\Paginator;

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

	public function renderUsers(int $page = null, int $sleep = 0): void {
		$oPaginator = (new Paginator())
			->setPage($page ?? 1)
			->setItemsPerPage(10)
			->setItemCount(81)
		;

		$oFaker = \Faker\Factory::create();
		$aRow = [];
		for ($id = $oPaginator->firstItemOnPage; $id <= $oPaginator->lastItemOnPage; $id++) {
			$oFaker->seed($id); # always the same fakes
			$aRow[] = [
				'id' => $id,
				'name' => $oFaker->name(),
				'email' => $oFaker->email(),
			];
		}

		sleep($sleep);
		$this->inertia([
			'users' => [
				'currentPage' => $oPaginator->page,
				'perPage' => $oPaginator->itemsPerPage,
				'firstPage' => $oPaginator->firstPage,
				'lastPage' => $oPaginator->lastPage,
				'pageCount' => $oPaginator->pageCount,

				'from' => $oPaginator->firstItemOnPage,
				'to' => $oPaginator->lastItemOnPage,
				'total' => $oPaginator->itemCount,

				'data' => $aRow,
			],
			'time' => date('Y-m-d H:i:s'),
		], 'Users');
	}

	public function renderSettings(): void {
		$this->inertia([], 'Settings');
	}

}
