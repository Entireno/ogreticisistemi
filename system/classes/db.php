<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
/**
 * ÖRNEK KULLANIM :
 * $crud=new DB;
 *  echo $crud->guncelle('uyeler',"k_adi='mehmet'",'id=5' );
 *      $crud->ekle('uyeler',"k_adi","'crayz'" );
 *      $crud->sil('uyeler',"k_adi='crayz'" );
 *      print_r($crud->sec('id','uyeler','WHERE id=6'));
 *     NOT: Sec method'unun kosul kısmınının ucu açık bırakılmıstır kosul kullanılmadan diger (order by gibi)
 *     sql deyimlerinin kullanılabilmesi için veya where ile birleştirilip kullanılabilirler.
 *     UYARI: Sec fonksiyonu iç içe dizi göndermektedir. Kullanımda dikkat edilmelidir.
 * EXTRA: Sayfaların backendleri yazılırken db->fonskiyonlarının yapılarının  uyarlanması gerebilir.
 *
 *
 **/

class DB {
        private  $db;
        private $sorgu;
        private $sonuc;
        private $uygula;
    public  function __construct($host, $dbname, $username, $password)
    {
        try{
       $this->db=new PDO('mysql:host=' . $host . ';dbname=' . $dbname, $username, $password);
       $this->db->exec("SET NAMES 'utf8'; SET CHARSET 'utf8'");
        }
       catch (PDOException $e){
        die($e->getMessage());
    }
    }

    public  function sec($kolon,$Tablo,$kosul=''){

        $this->sorgu='SELECT '.$kolon.' FROM '. $Tablo.' '. $kosul;
        $this->uygula=$this->db->prepare($this->sorgu);
        $this->sonuc=$this->uygula->execute();
        $cikti=$this->uygula->fetchAll(PDO::FETCH_ASSOC);
        if ($this->sonuc){
            if (count($cikti)>0){
                return $cikti;
            }
            else{
                return false;
            }
        }
        else{
            return false;
        }
    }
    public  function ekle($tablo,$kolonlar,$degerler){
      $this->sorgu="INSERT INTO ".$tablo.' ('.$kolonlar.')'.'  VALUES  '.'('.$degerler.')';
      $this->uygula=$this->db->prepare($this->sorgu);
      $this->sonuc = $this->uygula->execute();
        if($this->sonuc) {
            if ($this->uygula->rowcount() > 0) {
                return 'Basarıyla Eklendi';
            }
            else {
                return 'Sorgudan Etkilenen satır olmadı ' . $this->sorgu;
            }
        }
        else{
            return 'Sorgu Deyimi Hatalı';
        }

    }

    public  function sil($tablo,$kosul=''){
        $this->sorgu='DELETE FROM '.$tablo.' WHERE '.$kosul;
        $this->uygula=$this->db->prepare($this->sorgu);
        $this->sonuc = $this->uygula->execute();
        if($this->sonuc) {
            if ($this->uygula->rowcount() > 0) {
                return 'Basarıyla Silindi';
            }
            else {
                return 'Sorgudan Etkilenen satır olmadı ' . $this->sorgu;
            }
        }
        else{
            return 'Sorgu Deyimi Hatalı';
        }
    }

    public  function  guncelle($tablo,$kolonlar,$kosul){
        $this->sorgu='UPDATE '.$tablo.' SET '.$kolonlar.' WHERE '.$kosul;
        $this->uygula=$this->db->prepare($this->sorgu);
        $this->sonuc = $this->uygula->execute();
        if($this->sonuc) {
            if ($this->uygula->rowcount() > 0) {
                return 'Basarıyla Guncellendi';
            }
            else {
                return 'Sorgudan Etkilenen Satır Olmadı ';
            }
        }
        else{
            return 'Sorgu Deyimi Hatalı'.$this->sorgu;
        }
    }
    public  function  varmi($tablo,$kosul){
        $this->sorgu='SELECT id FROM '.$tablo.' WHERE '.$kosul;
        $this->uygula=$this->db->prepare($this->sorgu);
        $this->sonuc=$this->uygula->execute();
        $dene=$this->uygula->fetchAll(PDO::FETCH_ASSOC);
        if ($this->sonuc){
            if (count($dene)>0){
            return true;
                    }
                    else{
            return false;
                     }
        }
        else{
            return true;
        }


    }
    public function  __destruct()
    {
      $this->db=NULL;
      $this->sonuc=NULL;
      $this->uygula=NULL;
      $this->sorgu=NULL;
    }

}




?>