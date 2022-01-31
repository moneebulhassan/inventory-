<?php
namespace App\Services;

use App\Http\Resources\PerformaResource;
use App\Repositories\PerfomraRepository;

class PerformaService extends AppService
{
    public function __construct(PerfomraRepository $repository)
    {
        parent::__construct($repository, PerformaResource::class);
    }
}
