<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceDt extends Model
{
    use HasFactory;

    protected $table = 'Bil01_APDebitCajDt';

    protected $primaryKey = 'Bil01_ID';

    public function invoice()
    {
        return $this->belongsTo(Invoice::class,'bil01_dcid', 'bil01_dcid');
    }

}
