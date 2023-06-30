<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $table = 'patient';

    protected $fillable = [
        'PatientId', 'Number', 'FirstName', 'LastName', 'Sex', 'Age', 'BlodType', 'Address', 'Telephone'
        , 'Email', 'History', 'FilePath', 'DoctorId', 'Active', 'Created', 'Modified'
    ];

    protected $guarded = [
        'PatientId'
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