<?php
namespace App\Repositories;

use App\Models\Proforma;

class PerformaRepositroy extends AppRepository
{
    public function __construct(Proforma $model)
    {
        parent::__construct($model);
    }
}
