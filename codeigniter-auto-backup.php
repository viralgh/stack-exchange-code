<?php

# http://stackoverflow.com/questions/33363705/codeigniter-zip-archive-with-exclude-a-folder/33364453


$this->load->library('zip');

$data = array_diff(scandir(FCPATH), array('..', '.','backups'));
// 'backups' folder will be excluded here with '.' and '..'

foreach($data as $d) {

    $path = FCPATH.$d;

    if(is_dir($path))
        $this->zip->read_dir($path, false);

    if(is_file($path))
        $this->zip->read_file($path, false);
}

$this->zip->archive(FCPATH.'backups/'.date('Y-m-d-His').'.zip');