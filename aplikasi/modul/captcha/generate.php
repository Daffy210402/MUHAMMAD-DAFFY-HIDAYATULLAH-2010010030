<?php
    session_start();

function acakCaptcha() {
    $captchaOptions = array('banyu', 'tudung', 'bungas', 'abah', 'waluh', 'ulun', 'karindangan', 'pian', 'nyawa', 'ikam', 'tangkup', 'takajut', 'supan', 'randah', 'ranai', 'rabah', 'puhun', 'pajah', 'nyunyuk', 'mantah', 'kijil', 'lampau', 'lampau', 'licak', 'harat', 'sabat', 'gancang', 'dulak', 'abut', 'adangan', 'andak', 'cangkal', 'galuh', 'gendak', 'guntur', 'rantau', 'sambat', 'tumbuh', 'lungguh', 'jalai', 'kambiang', 'kurinting', 'lintang', 'mambang', 'nangka', 'panglima', 'sabirin', 'tatang', 'waluh', 'banyu', 'tiwadak', 'halaman', 'ampar', 'pantai', 'bangau', 'kaputing', 'tahu', 'jukut', 'kapal', 'laut', 'rumah', 'manuk', 'tumbuh', 'mata', 'kali', 'padi', 'ampiang', 'kuputing', 'gadang', 'tutup', 'anak', 'dapur', 'gantung', 'alas', 'pantai', 'batu', 'kucing', 'bangun', 'pancing', 'adat', 'tutung', 'lantai', 'panas', 'kalut', 'dalaman', 'alim', 'cukai', 'jarum', 'bintang', 'bulan', 'hujan', 'angin', 'sabuah', 'sabulan', 'satahun', 'bulan', 'nanam', 'basa', 'belaja', 'masak', 'mati', 'hidup', 'juo', 'antuk', 'makan', 'turu', 'bangun', 'tulang', 'serang', 'jalan', 'buaian', 'basa', 'tangga', 'pangkalan', 'laki', 'ampir', 'ulai', 'talut', 'ambil', 'muntang', 'buaian', 'kampung', 'malam', 'taruih', 'panas', 'seribu', 'bangau', 'tanah', 'bingin', 'manis', 'pisang', 'kentang', 'taruih', 'bayam', 'banjur', 'taruih', 'kari', 'baruah');
    $n = rand(0, count($captchaOptions) - 1);
    return $captchaOptions[$n];
}
    
    //hasil kode acak disimpan di $code
    $code = acakCaptcha();
    

    //membuat background
    $wh = imagecreatetruecolor(173, 50);
    
    $bgc = imagecolorallocate($wh, 22, 86, 165);
    
    //membuat text warna 
    $fc = imagecolorallocate($wh, 223, 230, 233);
    imagefill($wh, 0, 0, $bgc);
    
    imagestring($wh, 10, 50, 15,  $_SESSION["code"], $fc);

        //kode acak disimpan di dalam session agar data dapat dipassing ke halaman lain
        $_SESSION["code"] = $code;


    //membuat gambar
    header('content-type: image/jpg');

    imagejpeg($wh);

    imagedestroy($wh);
?>