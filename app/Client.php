<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Client extends Model
{
    protected $fillable = ['DateOfBirth', 'gender', 'firstName', 'middleName', 'lastName', 'address1', 'address2',
        'address3', 'postcode', 'homeTel', 'mobTel', 'workTel'];

    public function insertClient(array $client)
    {

        $clientCreated = DB::table('clients')->insertGetId($client);
        return $clientCreated;
    }
}
