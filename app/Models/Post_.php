<?php

namespace App\Models;



class Post 
{
   private static $blog_posts = [
    [  "title" => "PENGERTIAN MEDIA SOSIAL",
       "slug" => "judul-post-pertama",
       "author" =>"Artikel informatif seputar dunia teknologi, informasi, dan komunikasi",
       "body" => " Dalam perkembangan zaman kita seringkali mendengar kata SOCIAL MEDIA atau media sosial atau jejaring sosial. Media sosial adalah Media sosial dapat dipahami sebagai suatu platform digital yang menyediakan fasilitas untuk melakukan aktivitas sosial bagi setiap penggunanya. Beberapa aktivitas yang dapat dilakukan di media sosial, misalnya yaitu melakukan komunikasi atau interaksi hingga memberikan informasi atau konten berupa tulisan, foto dan video.
        Berbagai informasi dalam konten yang dibagikan tersebut dapat terbuka untuk semua pengguna selama 24 jam penuh.

       Media sosial sendiri pada dasarnya adalah bagian dari pengembangan internet. Kehadiran beberapa dekade lalu telah membuat media sosial dapat berkembang dan bertumbuh secara luas dan cepat seperti sekarang. Hal inilah yang menjadikan semua pengguna yang tersambung dengan koneksi internet dapat melakukan proses penyebaran informasi atau konten kapan pun dan di mana pun.
         Menurut Nasrullah (2015) media sosial adalah medium di internet yang memungkinkan pengguna merepresentasikan dirinya maupun berinteraksi, bekerja sama, berbagi, berkomunikasi dengan pengguna lain membentuk ikatan sosial secara virtual."
   ],

   [
       "title" => " PERAN MEDIA SOSIAL",
       "slug" => "judul-post-kedua",
       "author" =>"",
       "body" =>" Media sosial merupakan alat promosi bisnis yang efektif karena dapat diakses oleh siapa saja, sehingga jaringan promosi bisa lebih luas.
        Media sosial menjadi bagian yang sangat diperlukan oleh pemasaran bagi banyak perusahaan dan merupakan salah satu cara terbaik untuk menjangkau pelanggan dan klien. 
        Media sosial sperti blog, facebook, instagram, twitter, dab youtube memiliki sejumlah manfaat bagi perusahaan dan lebih cepat dari media konvensional seperti media cetak dan iklan TV, brosur dan selebaran."
        
    ],
    [  "title" => "DAMPAK MEDIA SOSIAL",
       "slug" => "judul-post-ketiga",
       "author" =>"",
       "body" => " Dampak positif dari media sosial adalah memudahkan kita untuk berinteraksi dengan banyak orang, memperluas pergaulan, jarak dan waktu bukan lagi masalah, lebih mudah dalam mengekspresikan diri, penyebaran informasi dapat berlangsung secara cepat, biaya lebih murah.
        Sedangkan dampak negatif dari media sosial adalah menjauhkan orang-orang yang sudah dekat dan sebaliknya, interaksi secara tatap muka cenderung menurun, membuat orang-orang menjadi kecanduan terhadap internet, menimbulkan konflik, masalah privasi, rentan terhadap pengaruh buruk orang lain."
   ],

   [  "title" => "MENCEGAH EFEK NEGATIF MEDIA SOSIAL",
       "slug" => "judul-post-keempat",
       "author" =>"",
       "body" => "Social Network atau jejaring sosial merupakan salah satu fasilitas internet yang sedang booming akhir-akhir ini. Terutama di kalangan anak muda. Seolah socmed menjadi hal yang wajib agar menjadi gaul. Hal inilah yang kemudian melandasi permasalahan mengapa perlu untuk belajar atau paling tidak mengetahui etika dalam berinternet. Hal ini perlu guna mencegah efek samping dari berinternet yang tidak terduga dan tidak diharapkan.
       Etika berasal dari bahasa Yunani Kuno yang berarti adat kebiasaan. Etikadalam berinternet dan social network terbagi menjadi 2 jenis etika, yaituetika tertulis dan tidak tertulis. Etika tertulis
       sendiri lebih jauh terbagi menjadi 2 yaitu; etika tertulis berdasar legal forum dan etika tertulis berdasar kesepakatan."
   ],

   [  "title" => "ETIKA MENGGUNAKAN MEDIA SOSIAL",
       "slug" => "judul-post-kelima",
       "author" =>"",
       "body" => " Untuk mencegah efek negatif dalam media sosial
       Pertama, kita harus menahami etika komunikjasi di internet. Pastikan, jika kita link konten dalam situs tertentu, maka situs tersebut bukan situs negatif atau situs-situs pornografi atau situs-situs yang berunsur negatif. 
       Kedua, Membatasi arus informasi yang negatif dan lebih banyak arus informasi yang positif.
       Ketiga,  Manajemen komunikasi dalam media sosial harus diatur dengan baik tidak menggunakan seluruh waktu, kecuali dalam hal  pembuatan tugas makalah, artikel, skripsi, tesis dan disertasi dari perguruan tinggi/universitas. 
       Keempat,  kepada orang tua, guru dan para dosen, agar dapat memberi pembekalan kepada anak-anaknya, kaum remaja, pelajar dan mahasiswa agar dapat memahami efek dan akibat negatif dari media sosial. 
       Kelima, pembekalan ajaran agama harus banyak diutamakan dalam membimbing nilai kerohanian/spritul agar dapat memilah dan memilih hal-hal yang negatif dan positif, mana yang lebih bermanfaat untuk kehidupan. 
       Keenam, mampu mrengontrol diri dalam hal waktu serta dapat mengendalikan diri dari pengaruh negatif yang ada di media sosial."
   ],
];
   
    public static function all()
    {
        return collect(self::$blog_posts) ;
    }

    public static function find($slug)
    {
        $posts = static::all();
         // $post = [];
          //  foreach($posts as $p) {
          //  if($p["slug"] === $slug) {
          //  $post = $p;
     // }
   // }
    return $posts->firstWhere('slug', $slug);

}
}