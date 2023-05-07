<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;
use App\Models\StudentModel;
use CodeIgniter\Commands\Utilities\Environment;

class MainController extends BaseController
{
    // Models
    protected $mahasiswaModel;
    protected $studentModel;


    //Property

    public function __construct()
    {
        //Initialize Models
        $this->mahasiswaModel = new MahasiswaModel();
        $this->studentModel = new StudentModel();
    }

    public function index()
    {
        return view('pages/home');
    }

    public function list()
    {
        $per_page = 5;
        $students = $this->mahasiswaModel->paginate($per_page);

        return view('pages/list', [
            'students' => $students,
            'pager' => $this->mahasiswaModel->pager,
            'per_page' => $per_page,
        ]);
    }

    public function view($id)
    {
        $student = $this->mahasiswaModel->find($id);
        $student['tanggal_lahir'] = date_format(date_create($student['tanggal_lahir']), 'd/m/Y') ?? '';
        $campus = $this->studentModel->find($student['campus']);

        return view('pages/view', [
            'student' => $student,
            'campus' => $student['campus'],
        ]);
    }

    public function create()
    {
        $campus = $this->studentModel->findAll();
        return view('pages/create', [
            "title" => "Tambah Mahasiswa",
            "action" => "create/save",
            "campus" => $campus,
        ]);
    }

    public function save()
    {
        $student = $this->request->getVar();

        $this->mahasiswaModel->insert([
            'nama' => $student['nama'],
            'nim' => $student['nim'],
            'gender' => $student['gender'],
            'tempat_lahir' => $student['tempat_lahir'],
            'tanggal_lahir' => $student['tanggal_lahir'],
            'alamat' => $student['alamat'],
            'no_telp' => $student['no_telp'],
            'jenjang' => $student['jenjang'],
            'campus' => $student['campus'],
        ]);

        return redirect()->to(url_to('list_student'));
    }

    public function edit($id)
    {
        $student = $this->mahasiswaModel->find($id);
        $campus = $this->studentModel->findAll();

        return view('pages/create', [
            "title" => "Edit Mahasiswa",
            "action" => "$id/edit/update",
            'student' => $student,
            "campus" => $campus,
        ]);
    }

    public function update($id)
    {
        $student = $this->request->getVar();
        $this->mahasiswaModel->update($id, [
            'nama' => $student['nama'],
            'nim' => $student['nim'],
            'gender' => $student['gender'],
            'tempat_lahir' => $student['tempat_lahir'],
            'tanggal_lahir' => $student['tanggal_lahir'],
            'alamat' => $student['alamat'],
            'no_telp' => $student['no_telp'],
            'jenjang' => $student['jenjang'],
            'campus' => $student['campus'],
        ]);

        return redirect()->to(url_to('view_student', $id));
    }

    public function delete($id)
    {
        $this->mahasiswaModel->delete($id);

        return redirect()->to(url_to('list_student'));
    }
}
