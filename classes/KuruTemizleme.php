<meta charset="UTF-8">
<?php
// kurutemizleme sınıfı
// kirli çamaşırlar verilip temizlenmiş olarak istenir
// teslim almak
// yıkamak, kirli çamaşır, deterjan
// kurulamak, yıkanmış çamaşırlar (ıslak)
// ütülemek, kurumuş çamaşırlar
// teslim etmek
class KuruTemizleme{
    //sınıf içindekullanılacak çamaşırı...
    protected $camasir;
    const deterjan = "Ariel";

    function  __construct(){
        //sınıf kurulurken çalışan kısım,public private gibi bişi yazamayız çünkü biz onu çağırmıyoruz kendisi otomatik public yapar
        echo "Kuru temizlemeciye Hoşgeldiniz<br>";
    }
    function  __destruct(){
        //sınıfla işimiz bittiğinde yapılacak olanlar
        echo "Gülegüle, yine bekleriz..<br>";
    }
//sınıf çamaşır değişkenine muhtaç olduğundan bu değişkene değer atayabilmekiçin metodumuzu yazıyoruz
    public function setCamasir($gelenCamasir){
        $this->camasir = $gelenCamasir;
    }
    public function yika($gelenCamasir = NULL){
        if(!is_null($gelenCamasir))
            $this->setCamasir($gelenCamasir);
        if(!$this->camasir) die("Çamaşır yok :(");
        $this->yikamaIslemi();
        $this->kurulamaIslemi();
        $this->utulemeIslemi();
    }
    private function yikamaIslemi(){
        echo $this->camasir . ", " . $this::deterjan . " ile yıkandı<br>";
    }
    private function kurulamaIslemi(){
        echo $this->camasir . " kurulandı<br>";
    }
    private function utulemeIslemi(){
        echo $this->camasir . " ütülendi<br>";
    }
}



