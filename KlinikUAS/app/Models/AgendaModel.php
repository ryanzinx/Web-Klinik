<?php

namespace App\Models;

use CodeIgniter\Model;

class AgendaModel extends Model
{
    protected $table = 'agenda';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'keterangan', 'file'];

    // Add any additional methods or customizations for the AgendaModel class here
}
