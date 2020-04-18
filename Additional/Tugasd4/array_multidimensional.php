    <?php

    $mahasiswa = [
        [
            'nama' => 'leonardo',
            'jurusan' => 'manajemen',
            'ipk' => '3.9',
            'pembimbing' => [
                'p1' => "zailani M.Kom",
                'p2' => "Ani S.T.",
            ],
            'email' => 'leonardo@gmail.com',
        ],
        [
            'nama' => 'beno',
            'jurusan' => 'manajemen',
            'ipk' => '3.9',
            'pembimbing' => [
                'p1' => "zailani M.Kom",
                'p2' => "Ani S.T.",
            ],
            'email' => 'leonardo@gmail.com',
        ],
        [
            'nama' => 'ujang',
            'jurusan' => 'manajemen',
            'ipk' => '3.9',
            'pembimbing' => [
                'p1' => "zailani M.Kom",
                'p2' => "Ani S.T.",
            ],
            'email' => 'leonardo@gmail.com',
        ],
    ];


    foreach ($mahasiswa as $mhs) {
        echo $mhs['nama'] . "<br>";
        echo $mhs['jurusan'] . "<br>";
        echo $mhs['ipk'] . "<br>";
        echo $mhs['pembimbing']

    }





    ?>

    php