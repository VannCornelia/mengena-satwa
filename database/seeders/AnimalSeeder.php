<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Animal::insert([
            [
                'nama' => 'Harimau Sumatera (Panthera Tigris Sondaica)',
                'habitat' => 'Darat',
                'gambar' => 'harimau.jpg',
                'asal' => 'Pulau Sumatera',
                'populasi' => 'Sekitar 400 - 500 ekor',
                'deskripsi' => 'Harimau Sumatera adalah penguasa hutan yang sering disebut "Permata
                                Pulau Sumatera". Sebagai subspesies harimau terkecil yang masih ada, satwa ini
                                memiliki ciri khas pada pola garis hitam yang sangat rapat di kulitnya yang berwarna
                                oranye gelap. Tubuhnya yang kecil sebenarnya adalah hasil adaptasi yang sempurna
                                untuk bergerak di hutan hujan Sumatera yang sangat padat. Yang menarik, harimau ini
                                adalah perenang ulung berkat lapisan tipis di antara jari-jarinya yang memudahkan
                                mereka untuk mengejar mangsa di sungai. Mereka juga dikenal sebagai hewan yang
                                soliter dan sangat menjaga teritorialnya.',
                'video_url' => 'https://youtu.be/CSSLjjh9O00?si=wb-GAndDzMoUIvC5',
            ],
            [
                'nama' => 'Jalak Bali (Leucopsar rothschildi)',
                'habitat' => 'Udara',
                'gambar' => 'jalakbali.jpg',
                'asal' => 'Hutan bagian barat Pulau Bali',
                'populasi' => '600 - 900 ekor',
                'deskripsi' => 'Jalak Bali adalah satu-satunya spesies hewan asli yang hanya ditemukan di
                                Pulau Dewata dan memiliki penampilan yang sangat menawan. Seluruh tubuhnya
                                diselimuti bulu putih bersih, kecuali pada bagian ujung sayap dan ekor yang berwarna
                                hitam. Keindahan yang paling mencolok adalah jambul tegak di bagian atas kepalanya
                                yang akan berdiri saat burung ini mengeluarkan suara, serta kulit di sekitar matanya
                                yang tidak berbulu dan berwarna biru cerah. Sebagai makhluk yang setia kepada
                                pasangan, Jalak Bali biasanya tinggal di lubang pohon di kawasan hutan barat Bali dan
                                menghabiskan waktu untuk saling berkomunikasi dengan kicauan yang khas.',
                'video_url' => 'https://youtu.be/JTtbc7K_8Q8?si=eLYFszxTVx53PxFM',
            ],
            [
                'nama' => 'Badak Jawa (Rhinoceros sondaicus)',
                'habitat' => 'Darat',
                'gambar' => 'badak.jpg',
                'asal' => 'Taman Nasional Ujung Kulon',
                'populasi' => 'Sekitar 70 - 80 ekor',
                'deskripsi' => 'Badak Jawa merupakan salah satu mamalia yang paling langka dan penuh
                                misteri di dunia, saat ini hanya dapat ditemukan di bagian barat Pulau Jawa. Ciri-ciri
                                badak ini sangat unik karena kulitnya yang tebal berwarna abu-abu memiliki lipatan
                                besar, seolah-olah ia mengenakan pelindung tubuh atau armor dari era kuno. Berbeda
                                dengan jenis badak lainnya di lokasi lain, Badak Jawa hanya memiliki satu cula dengan
                                ukuran yang tergolong kecil. Hewan ini dikenal sangat pemalu dan lebih memilih untuk
                                menghabiskan waktunya sendirian di hutan lebat di Semenanjung Ujung Kulon, sering
                                kali berendam di dalam lumpur.',
                'video_url' => 'https://youtu.be/5e6hfq45usQ?si=fgclCMH693xgkMmH',
            ],
            [
                'nama' => 'Komodo (Varanus komodoensis)',
                'habitat' => 'Darat',
                'gambar' => 'komodo.jpg',
                'asal' => 'Pulau Komodo & Rinca',
                'populasi' => 'Sekitar 3.000 ekor',
                'deskripsi' => 'Di daerah Nusa Tenggara Timur, terdapat seekor naga kuno bernama
                                Komodo yang diakui sebagai kadal paling besar di dunia. Hewan ini bisa mencapai
                                panjang hingga tiga meter dengan berat yang sangat besar. Kekuatan utamanya terletak
                                pada ekornya yang kuat dan lidahnya yang kuning serta bercabang, yang berfungsi
                                sebagai alat sensor untuk "merasakan" udara demi menemukan mangsa meski dari jarak
                                yang sangat jauh. Walaupun tampak lambat, Komodo merupakan predator tertinggi
                                yang mematikan karena memiliki kelenjar racun di mulutnya yang dapat membuat
                                mangsanya lemas setelah tergigit, menjadikannya sebagai penguasa yang tidak
                                tertandingi di lingkungan alaminya.',
                'video_url' => 'https://youtu.be/Blbcz4VZUK8?si=AVxeK0squp2u80KT',
            ],
            
            // Tambahkan hewan lainnya di sini sesuai keinginanmu...
        ]);
    }
}