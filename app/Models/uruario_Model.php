<?php
namespace App\Models;
use CodeIgniter\Model;

class usuario_Model extends Model
{
    protected $table = ´usuario´
    protected $primaryKey = ´idd_usuario´
    protected $allowedFields = [´nombre´,´apellido´,´usuario´,´email´,´pass´,´perfil_id´,´baja´,´created_at´];
}
