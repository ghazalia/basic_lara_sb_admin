<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'RKD01_Peribadi';

    protected $primaryKey = 'RKD01_NoMatrik';

    protected $keyType = 'string';

    public $incrementing = false;

    public function invoices()
    {
        //        $invoices = Invoice::where('RKD01_NoMatrik', '=', $this->RKD01_NoMatrik)->get();

        return $this->hasMany(Invoice::class, 'RKD01_NoMatrik', 'RKD01_NoMatrik');
    }
}
