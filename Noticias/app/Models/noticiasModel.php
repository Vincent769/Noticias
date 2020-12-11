<?php namespace App\Models;

use CodeIgniter\Model;

class noticiasModel extends Model
{
    protected $table      = 'noticias';
    protected $primaryKey = 'idNoticia';

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['titulo', 'contenido', 'imagen', 'idAdmin'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
    
    public function getData($idAdmin) {
        return $this->where('idAdmin', $idAdmin)->findAll();
    }

    //CRUD
    public function createCRUD($data) {
        $this->insert($data);
    }

    public function updateCRUD($id, $data) {
        $this->update($id, $data);
    }

    public function searchCRUD($key, $value) {
        return $this->where($key, $value)->first();
    }

    public function deleteCRUD($id) {
        $this->delete($id);
    }

}