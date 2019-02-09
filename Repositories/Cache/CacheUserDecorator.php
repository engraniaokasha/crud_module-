<?php

namespace Modules\Crud\Repositories\Cache;

use Modules\Crud\Repositories\UserRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheUserDecorator extends BaseCacheDecorator implements UserRepository
{
    public function __construct(UserRepository $user)
    {
        parent::__construct();
        $this->entityName = 'crud.users';
        $this->repository = $user;
    }
}
