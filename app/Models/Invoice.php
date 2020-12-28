<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $table = 'BIL01_APDebitCaj';

    protected $primaryKey = 'BIL01_DCID';

    protected $fillable = ['RKD01_NoMatrik', 'BIL01_KodSesi', 'BIL_KodVot', 'BIL01_JumDC',
        'BIL01_JumDCSbnr', 'BIL01_JumBayar', 'BIL01_StatusHutang', 'BIL01_JumKC', 'BIL01_TkhKC',
        'BIL01_NoInvois', 'BIL01_FlagInvois', 'BIL01_TkhInvois',
        'BIL01_StatusInvois',
        'BIL01_StafBatal', 'BIL01_TkhBatal',
        'BIL01_SebabBatal', 'BIL01_TkhKemaskini', 'BIL01_TkhWujud', 'BIL01_StafLogin' ];

    public function lines()
    {
        return $this->hasMany(InvoiceDt::class, 'BIL01_DCID', 'BIL01_DCID');
    }

    public function student()
    {
        return $this->belongsTo(Student::class, 'RKD01_NoMatrik', 'RKD01_NoMatrik');
    }
}
