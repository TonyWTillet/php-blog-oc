<?php

namespace App\Queries;

use App\Entity\Globals;
use App\Middleware\GlobalRepository;

class GlobalsQueries
{
    private globalRepository $globalRepository;

    /**
     * @return GlobalRepository
     */
    public function __construct()
    {
        $this->globalRepository = new GlobalRepository();
    }

    /**
     * It gets all the categories from the database.
     *
     * @return Globals[] The categories are being returned.
     * @throws \Exception
     */
    public function getGlobals(): array
    {
        $globals = $this->globalRepository->findAllGlobals();
        foreach ($globals as  $value) {
            $globals[$value->getName()] = $value->getValue();
        }
        return $globals;
    }

}
