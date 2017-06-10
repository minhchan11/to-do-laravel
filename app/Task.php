<?php

namespace todo;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
  protected $primaryKey = 'id';
  protected $table = 'tasks';
  protected $fillable = array('name', 'created_at_ip', 'updated_at_ip');
}
