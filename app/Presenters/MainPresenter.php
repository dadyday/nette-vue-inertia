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

	public function renderUsers(int $page = null, string $search = null, int $sleep = 0): void {

		if ($search) $this->oUsers->where('name LIKE ?', "%$search%");

		$oPaginator = (new Paginator())
			->setPage($page ?? 1)
			->setItemsPerPage(10)
			->setItemCount(count($this->oUsers))
		;

		$aRow = $this->oUsers
			->select('id, name')
			->page($page ?? 1, 10)
			->fetchAssoc('id')
		;


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

				'data' => array_values($aRow),
			],
			'filters' => [
				'search' => $this->getRequest()->getParameter('search'),
			],
			'time' => date('Y-m-d H:i:s'),
		], 'Users');
	}

	public function renderSettings(): void {
		$this->inertia([], 'Settings');
	}

    public function renderEdit(): void {
        $this->inertia([], 'Edit');
    }

    public function renderWraptest(): void {
        $this->inertia([], 'WrapTest');
    }

}
