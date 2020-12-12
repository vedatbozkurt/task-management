<?php
/*
 * @Author: @vedatbozkurt
 * @Email: info@wedat.org
 * @Date: 2020-12-12 14:12:16
 * @LastEditors: @vedatbozkurt
 * @LastEditTime: 2020-12-12 16:48:16
 */

namespace VedatBozkurt\TaskManagement\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $guarded = [];
    
    protected $fillable = [
        'body',
        'status',
        'taskable_id',
        'taskable_type',
    ];

    public function taskable()
    {
        return $this->morphTo();
    }
}
