<?php

namespace Modules\Crud\Repositories;

use Modules\Core\Repositories\BaseRepository;

interface UserRepository extends BaseRepository
{
    
   //all methods 
    public function all();
    public function create($data);  
    public function update($model, $data);
    public function destroy($model);
     
}
