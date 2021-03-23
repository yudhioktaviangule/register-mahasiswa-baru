<?php 
    namespace App\ServiceTambahan;
    class Upload{
        private $file;
        public function __construct($file)
        {
            $this->file = $file;
        }
        public function upload($fileName,$dir='foto')
        {
            $path = public_path("mhs/$dir");
            $file = $this->file;
            $extension = $file->getClientOriginalExtension();
            $file->move($path,"{$fileName}.$extension");
        }


    }

