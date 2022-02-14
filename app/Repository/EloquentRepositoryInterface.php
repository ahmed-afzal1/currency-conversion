<?php
namespace App\Repository;


use Illuminate\Database\Eloquent\Model;

interface EloquentRepositoryInterface
{

   public function Store(array $attributes): Model;

}