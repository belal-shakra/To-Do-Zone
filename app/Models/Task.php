<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    use HasFactory;
    use SoftDeletes;


    protected $fillable = ['task', 'description', 'task_list_id'];


    public function task_list(){
        return $this->belongsTo(TaskList::class);
    }
}
