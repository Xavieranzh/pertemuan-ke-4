<?php 
/**
 * Class NilaiMahasiswa
 */

class NilaiMahasiswa {
    /**
     * properti
     * @var string $nama
     * @var string $mataKuliah
     * @var string $nilaiUTS
     * @var string $nilaiUAS
     * @var string $nilaiTugas
     */
    public $nama;
    public $mataKuliah;
    public $nilaiUTS;
    public $nilaiUAS;
    public $nilaiTugas;
    /**
     * 
     * 
     */

    public const PERSENTASE_UTS = 0.25;
    public const PERSENTASE_UAS = 0.30;
    public const PERSENTASE_TUGAS = 0.45;
    public const KKM = 60; 
    /**
     * konstanta KKM = Kriteria Ketuntasan Minimal
     */

    public function getNilaiAkhir() {
     $nilaiAkhir = ($this->nilaiUTS * self::PERSENTASE_UTS)
        + ($this->nilaiUAS * self::PERSENTASE_UAS)
        + ($this->nilaiTugas * self::PERSENTASE_TUGAS);
        return $nilaiAkhir;
}

public function kelulusan(){
    if ($this->getNilaiAkhir() >= self::KKM){
        return "Lulus";
    } else {
        return "Tidak Lulus";
    }

} 
}



?>