<?php   

namespace App\Repository\Eloquent;   

use App\Repository\EloquentRepositoryInterface; 
use Illuminate\Database\Eloquent\Model;   

class BaseRepository implements EloquentRepositoryInterface 
{     
    protected $model;       

    public function __construct(Model $model)     
    {         
        $this->model = $model;
    }
 
    public function Store(array $attributes): Model
    {
        return $this->model->create($attributes);
    }

}