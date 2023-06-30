<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $table = 'doctor';

    protected $fillable = [
        'Nombre', 'MedicalBranchId', 'CedulaProfesional', 'Especialidad', 'CedulaEspecialidad',
        'Dirección', 'Telefono1', 'Telefono2', 'Email', 'Facebook', 'PhotoPath', 'LogoPath', 'UniveridadPath',
        'User', 'Password', 'DoctorStatusId', 'UltimoAcceso', 'UserId', 'Created', 'Modified'
    ];

    protected $guarded = [
        'DoctorId'
    ];

    public static function createPatient($data)
    {
        return self::create($data);
    }

    public function updatePatient($data)
    {
        return $this->update($data);
    }

    public static function getAllPatients()
    {
        return self::all();
    }

    public static function getPatientById($id)
    {
        return self::find($id);
    }

    public function deletePatient()
    {
        return $this->delete();
    }
}

