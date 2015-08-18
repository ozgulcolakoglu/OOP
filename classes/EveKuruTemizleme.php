<meta charset="UTF-8">
<?php
class EveKuruTemizleme extends KuruTemizleme{

    function __construct(){
        parent::__construct();
    }

    function  __destruct()
    {
        parent::__destruct();
    }

    public function yika($gelenCamasir=null , $teslimAlinacakMi=true , $teslimEdilecekMi =true){
        //istersek bu fonksile çamaşırı üstüne yazabiliyoruz kullanırken daha düzgün gözükmesiiçin
        if(!is_null($gelenCamasir))
            $this->setCamasir($gelenCamasir);
        if($teslimAlinacakMi) $this->teslimAl();
        parent::yika();
        if($teslimEdilecekMi) $this->teslimEt();
    }
    private function teslimAl(){
        echo $this->camasir." teslim alındı<br>";
    }
    private function teslimEt(){
        echo $this->camasir." teslim edildi<br>";
    }
}
