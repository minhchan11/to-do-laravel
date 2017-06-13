<?php

namespace todo;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
  protected $primaryKey = 'id';
  protected $table = 'tasks';
  protected $fillable = array('name', 'slug', 'created_at_ip', 'updated_at_ip');

  public function category()
  {
  	return $this->belongsTo('todo\Category');
  }

  public function getRouteKeyName()
  {
      return 'slug';
  }
}
