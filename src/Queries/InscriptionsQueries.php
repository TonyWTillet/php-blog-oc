<?php

namespace App\Queries;

use App\Entity\Globals;
use App\Middleware\GlobalRepository;
use App\Middleware\InscriptionsRepository;

class InscriptionsQueries
{
    private InscriptionsRepository $inscriptionsRepository;

    /**
     * @return InscriptionsRepository
     */
    public function __construct()
    {
        $this->inscriptionsRepository = new InscriptionsRepository();
    }

    /**
     * It gets all the categories from the database.
     *
     * @return Globals[] The categories are being returned.
     * @throws \Exception
     */
    public function getInscriptions(): array
    {
        return $this->inscriptionsRepository->findAllInscriptions();
    }

}