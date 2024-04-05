<?php 
namespace App\Models;
use CodeIgniter\Model;
 
class kendaraan_model extends Model
{
    protected $table = 'kendaraan'; // Assuming your table name is 'kendaraan'
    protected $primaryKey = 'id_kendaraan'; // Assuming your primary key column is 'id_kendaraan'

    // Define the allowed fields for insert and update
    protected $allowedFields = ['no_kendaraan', 'status_kendaraan', 'harga_sewa', 'merk', 'jenis_bbm', 'jenis_kendaraan'];
     
    public function getkendaraan($id = false)
    {
        if($id === false){
            return $this->findAll();
        }else{
            return $this->getWhere(['id_kendaraan' => $id]);
        }   
    }

    public function savekendaraan($data)
    {
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }

    public function editkendaraan($data,$id)
    {
        $builder = $this->db->table($this->table);
        $builder->where('id_kendaraan', $id);
        return $builder->update($data);
    }
 
    public function hapuskendaraan($id)
    {
        $builder = $this->db->table($this->table);
        return $builder->delete(['id_kendaraan' => $id]);
    }
}