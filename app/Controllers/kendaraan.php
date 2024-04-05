<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\kendaraan_model;

class kendaraan extends Controller
{
    public function index()
    {
        $model = new kendaraan_model;
        $data['title'] = 'Data kendaraan';
        $data['getkendaraan'] = $model->getkendaraan();
        echo view('header_view', $data);
        echo view('kendaraan_view', $data);
        echo view('footer_view', $data);
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Data kendaraan';
        echo view('header_view', $data);
        echo view('tambah_view', $data);
        echo view('footer_view', $data);
    }

    public function add()
    {
        $model = new kendaraan_model;
        $data = array(
            'no_kendaraan' => $this->request->getPost('no_kendaraan'),
            'status_kendaraan' => $this->request->getPost('status_kendaraan'),
            'harga_sewa' => $this->request->getPost('harga_sewa'),
            'merk' => $this->request->getPost('merk'),
            'jenis_bbm' => $this->request->getPost('jenis_bbm'),
            'jenis_kendaraan' => $this->request->getPost('jenis_kendaraan')
        );
        $model->savekendaraan($data);
        echo '<script>
                alert("Sukses Tambah Data kendaraan");
                window.location="'.base_url('kendaraan').'"
            </script>';
    }

    public function edit($id)
    {
        $model = new kendaraan_model;
        $getkendaraan = $model->getkendaraan($id)->getRow();
        if (isset($getkendaraan)) {
            $data['kendaraan'] = $getkendaraan;
            $data['title'] = 'Edit ' . $getkendaraan->id_kendaraan;

            echo view('header_view', $data);
            echo view('edit_view', $data);
            echo view('footer_view', $data);
        } else {

            echo '<script>
                    alert("ID kendaraan ' . $id . ' Tidak ditemukan");
                    window.location="' . base_url('kendaraan') . '"
                </script>';
        }
    }

    public function update()
    {
        $model = new kendaraan_model;
        $id = $this->request->getPost('id_kendaraan');
        $data = array(
            'no_kendaraan' => $this->request->getPost('no_kendaraan'),
            'status_kendaraan' => $this->request->getPost('status_kendaraan'),
            'harga_sewa' => $this->request->getPost('harga_sewa'),
            'merk' => $this->request->getPost('merk'),
            'jenis_bbm' => $this->request->getPost('jenis_bbm'),
            'jenis_kendaraan' => $this->request->getPost('jenis_kendaraan')
        );
        $model->update($id, $data); // Update method provided by CodeIgniter Model
        echo '<script>
                alert("Sukses Edit Data kendaraan");
                window.location="' . base_url('kendaraan') . '"
            </script>';
    }

    public function hapus($id)
    {
        $model = new kendaraan_model;
        $getkendaraan = $model->getkendaraan($id)->getRow();
        if(isset($getkendaraan))
        {
            $model->hapuskendaraan($id);
            echo '<script>
                    alert("Hapus Data kendaraan Sukses");
                    window.location="'.base_url('kendaraan').'"
                </script>';

        }else{

            echo '<script>
                    alert("Hapus Gagal !, ID kendaraan '.$id.' Tidak ditemukan");
                    window.location="'.base_url('kendaraan').'"
                </script>';
        }
    }
}

