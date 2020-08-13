<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Collaborator extends Model
{
    protected $fillable = ['cpf', 'name', 'email', 'telephone', 'birth', 'address'];

    /**
    * Filter Collaborators
    */
   public function search($filter = null)
   {
       $results = $this->where(function ($query) use($filter) {
           if($filter){
               $query->where('name', 'LIKE', "%{$filter}%");
           }
       })//->toSql();
       ->paginate();
 
       return $results;
   }

}
