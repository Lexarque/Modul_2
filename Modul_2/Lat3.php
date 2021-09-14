<?php
    
    $siswa = array( 
        
        ['nama' => 'Ahmad Habibi', 'kelas' => 'X', 'jurusan' => 'RPL'],

        ['nama' => 'Zainul Abidin', 'kelas' => 'XII', 'jurusan' => 'RPL'],

        ['nama' => 'Firdaus', 'kelas' => 'XI', 'jurusan' => 'TKJ'],

        ['nama' => 'Achmad Ilham', 'kelas' => 'X', 'jurusan' => 'TKJ']
    
    );

    $keys = array_keys($siswa);
    for($i = 0; $i < sizeof($siswa); $i++){
        foreach($siswa[$i] as $key=>$value){
            echo $value;
            echo '<br>' ;
        }
        
    }

?>