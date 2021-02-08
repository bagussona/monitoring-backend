<?php  

class Register{
    //DATA
    public $name;
    public $nik;

    private $student = [
        [
          'name' => "Arief",
          'nik'  => "TOO1"
        ],
        [
          'name' => "Bagus",
          'nik' => "T002"
        ]
      ];

      //FUNGSI

      public function __construct(){
        echo "
        ################################################
        ##          Halo Selamat Datang di            ##
        ##            Pendaftaran Santri              ##
        ################################################";
        echo "\n \n";
      }

        //FUNGSI ADD TAPI NGACO WWKWKW
        // public function InsertStudent($i1, $i2)
        // {
        //     foreach ($this->student as $key => $value) {
                
        //     }
        // }

      //FUNGSI MENAMPILKAN
      public function Santri(){
        echo "Berikut daftar santri" . "\n \n";
        foreach($this->student as $key => $value) { 
            echo "=>" . $key . "\n";
            foreach ($value as $keys => $santri) {
                echo $keys . " => " . $santri . "\n";
            }
            echo "\n";
            }
        }

        //DELETE-Santri
        public function Hapus($data_type, $cari)
        {
            echo "Santri Telah dihapus => ";
        foreach ($this->student as $value) {
            foreach($value as $keys => $val){
                if ($value[$data_type] == $cari) {
                    echo "$val ";
                    }
            }
        }
        echo "\n";
        }

        //Tampilan_sudahterhapus
        public function SantriTerhapus($data_type, $cari){
          $NewSantri = [];
              foreach ($this->student as $keys => $asntri) {
                 if ($asntri[$data_type] == $cari){
                     unset($asntri[$cari]);
                 }
                  else {
                     $NewSantri[] = $asntri;
                 }
                //  print_r($NewSantri);
              }
              echo "Sisa Santri". "\n";
              foreach ($NewSantri as $valuer)
                // echo "=>" . $keyd . "\n";
              foreach ($valuer as $k => $v) {
                echo "$k" . " => " . "$v" . "\n";
              }

              // print_r($NewSantri);
              return $NewSantri;

              }
    
    

}

//TAMPILAN
$Registered = new Register();
$Registered->Santri();

//Hapus Data
echo "Hapus nama santri yang akan dihapus?" . "\n";
$input2 = trim(fgets(STDIN));
echo "\n";
$Registered->Hapus('name', (string)$input2);
echo "\n";

//Tampilan setelah dihapus
$Registered->SantriTerhapus('name', $input2);





//TAMPILKAN DATA SANTRI

    // Register::insertStudent(['name' => $name, 'nik' => $nik]);





// $Registered = new Register()
// $Register::insertStudent(['name' => $name, 'nik' => $nik])
