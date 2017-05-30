<?php

namespace AppBundle\Services;

class GenerateData {
    

    public function generateDataMain() {
        $dirpath = '/home/benki/projects/resume.loc/web/external/avatar';
        
        return $this->getSimpleFilesList($dirpath);
        
    }

    protected function generateDataUser() {

    }

    protected function generateDataContact() {

    }

    protected function generateDatCertificate() {

    }

    protected function generateDataCources() {

    }

    protected function generateDataEducation() {

    }

    protected function generateDataHobby() {

    }

    protected function generateDataLanguage() {

    }

    protected function generateDataPractic() {

    }

    protected function generateDataScill() {

    }

    function getSimpleFilesList($dirpath) {
        $result = array();

        $cdir = scandir($dirpath);
        foreach ($cdir as $value) {

            if (!in_array($value,array(".", ".."))
                && !is_dir($dirpath . DIRECTORY_SEPARATOR . $value)) {
                $result[] = $value;
            }
        }

        return $result;
    }


}