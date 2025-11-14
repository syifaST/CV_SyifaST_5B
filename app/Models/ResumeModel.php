<?php
namespace App\Models;
use CodeIgniter\Model;

class ResumeModel extends Model
{
    protected $db;

    public function __construct()
    {
        parent::__construct();
        $this->db = \Config\Database::connect();
    }

    public function getExperience()
    {
        return $this->db->table('experience')->orderBy('tahun_mulai', 'DESC')->get()->getResultArray();
    }

    public function getEducation()
    {
        return $this->db->table('education')->orderBy('tahun_mulai', 'DESC')->get()->getResultArray();
    }

        public function getSkills()
    {
        return $this->db->table('skills')
            ->orderBy('persen', 'DESC')
            ->get()
            ->getResultArray();
    }
}
