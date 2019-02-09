<?php

namespace Modules\Crud\Repositories\Eloquent;

use Modules\Crud\Repositories\UserRepository;
use Modules\Core\Repositories\Eloquent\EloquentBaseRepository;

class EloquentUserRepository extends EloquentBaseRepository implements UserRepository
{
  
 

   /* public function getall()
    {
        return  $this->user->all();
    }

    public function create(array $attributes)
    {
        return $this->user->create($attributes);
    }

    public function update($id, array $attributes)
    {
        return $this->user->find($id)->update($attributes);
    }
    
    public function delete($id)
    {
        return $this->user->find($id)->delete();
    }*/


    protected $model;

    
    public function __construct($model)
    {
        $this->model = $model;
    }

    
    public function all()
    {
        
        return $this->model->all();
    }
   
    public function create($data)
    {
        return $this->model->create($data);
    }

    public function update($model, $data)
    {
        $model->update($data);

        return $model;
    }
 
    public function destroy($model)
    {
        return $model->delete();
    }

  
}
