<?php

namespace App\Controllers;

use App\Models\AboutModel;
use App\Models\ResumeModel;
use App\Models\ContactModel;
use App\Models\PortfolioModel;



class Home extends BaseController
{
    
    public function index()
    {
        $aboutModel = new AboutModel();

        $about = $aboutModel->first();
        return view('templates/header')
             . view('sections/index')
             . view('sections/about', ['about' => $about])
             . view('templates/footer');
    }

        public function resume()
    {
        $resumeModel = new ResumeModel();

        $education = $resumeModel->getEducation();
        $experience = $resumeModel->getExperience();
        $skills = $resumeModel->getSkills();

        return view('templates/header')
            . view('sections/resume', [
                'education' => $education,
                'experience' => $experience,
                'skills' => $skills
            ])
            . view('templates/footer');
    }


        public function portfolio()
    {
        $portfolioModel = new PortfolioModel();
        $portfolios = $portfolioModel->findAll();

        return view('templates/header')
            . view('sections/portfolio', ['portfolios' => $portfolios])
            . view('templates/footer');
    }


        public function contact()
    {
        $contactModel = new ContactModel();
        $data['contact'] = $contactModel->first();

        return view('templates/header')
            . view('sections/contact', $data)
            . view('templates/footer');
    }

}
