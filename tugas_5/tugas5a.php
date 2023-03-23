<?php 

$mahasiswa = [
    [
        "nrp" => " 223040080 ",
        "nama" => " GEORGE FREDERIK PINGAK ",
        "email" => " george.223040080@mail.unpas.ac.id ",
        "jurusan" => " Teknik Informatika ",
        "gambar" => " https://storage.googleapis.com/assets-edlink/p/thumb-bf4cf0400602ffcd2d612385c80d791a3e72d2f75a866bc49378d95268a3e7cb-img-20221004-094704-2414392154335463072.jpg "
    ],
    [
        "nrp" => " 223040090 ",
        "nama" => " ALDI MAULANA FADILAH ",
        "email" => " aldi.223040090@mail.unpas.ac.id ",
        "jurusan" => " Teknik Informatika ",
        "gambar" => " https://storage.googleapis.com/assets-edlink/p/thumb-3d645078570986478a7f0a6edf2a2175db09daa9f6e58e6651f7ac42d3d78388-img-20220927-212947-1894469362424162894.jpg "
    ],
    [
        "nrp" => " 223040079 ",
        "nama" => " Muhammad Indra Krishna ",
        "email" => " indra.223040079@mail.unpas.ac.id ",
        "jurusan" => " Teknik Informatika ",
        "gambar" => " https://storage.googleapis.com/assets-edlink/p/thumb-87ce3bc49379c88307084816e4adfc42065026710b5fe21c75b1af9d5cb5ddce-img-20221104-122402-2455645472068998392.jpg "
    ],
    [
        "nrp" => " 223040095 ",
        "nama" => " RAFI IKHSANUL HAKIM ",
        "email" => " rafi.223040095@mail.unpas.ac.id ",
        "jurusan" => " Teknik Informatika ",
        "gambar" => " https://storage.googleapis.com/assets-edlink/p/thumb-32ebcefe4c181967eb09a45fce7c1193f78b3c20077dff870fb7aaabdb3bf841-rafi-ikhsanul-hakim-%281%29.jpg "
    ],
    [
        "nrp" => " 223040101 ",
        "nama" => " Moch Zuhdi Maulana Nabilah ",
        "email" => " zuhdi.223040101@mail.unpas.ac.id ",
        "jurusan" => " Teknik Informatika ",
        "gambar" => " https://storage.googleapis.com/assets-edlink/p/thumb-418e7d6cef27f6f6d6fad432581d25001b82f2e8c4a0b5502f25c1fc7236fe4f-img-20221021-104947-8495892487363707014.jpg "
    ],
    [
        "nrp" => " 223040073 ",
        "nama" => " MUHAMAD ARIEL SEPTIADI ",
        "email" => " ariel.223040073@mail.unpas.ac.id ",
        "jurusan" => " Teknik Informatika ",
        "gambar" => " https://storage.googleapis.com/assets-edlink/p/thumb-4a85aad485e4b287d8442bccf161d2b2084b2f294a36cd54e7dfac468fc61b6c-bed7ec99-3649-4d78-b440-1e8cdab0a776.jpeg "
    ],
    [
        "nrp" => " 223040098 ",
        "nama" => " MEUTUAH DICCO LINGE ",
        "email" => " meutuah.223040098@mail.unpas.ac.id ",
        "jurusan" => " Teknik Informatika ",
        "gambar" => " https://storage.googleapis.com/assets-edlink/p/thumb-6e3d1ba749e6ba9a1edbfe04d89b7272f43ca32e832c0fce9ab1e606a7d82cf5-96becfa7-379d-4398-9d44-bfc912455e84.jpeg "
    ],
    [
        "nrp" => " 223040094 ",
        "nama" => " M. Robby A ",
        "email" => " robby.223040094@mail.unpas.ac.id ",
        "jurusan" => " Teknik Informatika ",
        "gambar" => " https://storage.googleapis.com/assets-edlink/p/thumb-2ddd3c496eb5dbde010fb01e987d77502a3d68611bebe70772338557a8974f62-278aa3bb-2f0b-4d35-9ce7-fa32cf1aa9d1.jpeg "
    ],
    [
        "nrp" => " 223040076 ",
        "nama" => " Irsan Moch. Taufik Febrian ",
        "email" => " irsan.223040076@mail.unpas.ac.id ",
        "jurusan" => " Teknik Informatika ",
        "gambar" => " https://storage.googleapis.com/assets-edlink/p/thumb-a2f6e73ad075695a9c6c19a88235a9b86ee814c8548f92363c4e94dbf2654835-img-20220927-143326-291298467983859640.jpg "
    ],
    [
        "nrp" => " 223040088 ",
        "nama" => " Bima Hafit Prakoso ",
        "email" => " bima.223040088@mail.unpas.ac.id ",
        "jurusan" => " Teknik Informatika ",
        "gambar" => " https://storage.googleapis.com/assets-edlink/p/thumb-1380ad319a16a226db28f7eec386d11382c02e664c6bdc6a85fb08daf1cfbb2e-img-20221111-084533-461445979329162709.jpg "
    ],
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>

    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li> <img src="<?= $mhs ["gambar"];?> "> </li>
            <li>Nama : <?= $mhs ["nama"];?></li>
            <li>NRP : <?= $mhs ["nrp"];?></li>
            <li>Jurusan : <?= $mhs ["jurusan"];?></li>
            <li>Email : <?= $mhs ["email"];?></li>
        </ul>

    <?php endforeach; ?>

</body>

</html>