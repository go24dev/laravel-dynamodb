<?php

namespace Nham24\Dynamodb\Tests\Model;

use Nham24\Dynamodb\Model\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class UserC extends Model implements AuthenticatableContract
{
    use Authenticatable;

    protected $table = 'User';
    protected $primaryKey = 'partition';
    protected $sortKey = 'sort';
    protected $sortKeyDefault = 'sort_default';
    protected $fillable = [
        'partition', 'sort', 'name', 'password'
    ];
}
