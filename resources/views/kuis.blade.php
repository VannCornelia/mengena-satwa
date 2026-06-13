@extends('layouts.app')

@section('content')
<div class="quiz-container">
    <!-- Card diperlebar menjadi 900px -->
    <div id="quiz-wrapper" class="card quiz-card shadow-lg border-hutan">
        
        <!-- Progress Bar Lebih Tebal -->
        <div class="progress mb-5 rounded-pill" style="height: 20px; background: rgba(26, 36, 33, 0.1);">
            <div id="quiz-progress" class="progress-bar bg-oranye progress-bar-striped progress-bar-animated" role="progressbar" style="width: 0%"></div>
        </div>

        <div id="quiz-content" class="text-center">
            <!-- Box Pertanyaan -->
            <div id="question-box">
                <!-- Ukuran Font Pertanyaan Digedein -->
                <h2 id="question-text" class="fw-800 text-hutan mb-5 display-6">Memuat Pertanyaan...</h2>
                
                <!-- Answer Buttons dengan Grid 2 Kolom agar Gede -->
                <div id="answer-buttons" class="row g-4">
                    <!-- Tombol muncul di sini -->
                </div>
            </div>

            <!-- Tampilan Hasil Akhir -->
            <div id="result-box" class="d-none animate__animated animate__fadeIn">
                <h1 class="display-3 fw-800 text-hutan mb-3">LUAR BIASA!</h1>
                <p class="fs-3 text-hutan opacity-75">Kamu adalah Penjaga Hutan Sejati!</p>
                
                <div class="score-circle-large mx-auto my-5">
                    <span id="final-score">0</span>
                </div>
                
                <button onclick="restartQuiz()" class="btn btn-oranye btn-xl px-5 rounded-pill fw-800 shadow">
                    <i class="bi bi-arrow-clockwise me-2"></i>MAIN LAGI
                </button>
            </div>
        </div>
    </div>
</div>

<style>
    .quiz-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: calc(100vh - 160px); /* Fit Screen tanpa scroll */
        padding: 20px;
    }

    .quiz-card {
        width: 100%;
        max-width: 950px; /* Diperlebar signifikan */
        min-height: 550px;
        background-color: #FFFDF5 !important; /* Putih Tulang / Krem Poster */
        border-radius: 50px !important;
        padding: 60px;
        border: 6px solid var(--hutan-gelap) !important;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    /* Styling Tombol Jawaban Raksasa */
    .btn-answer {
        background: white;
        border: 4px solid var(--hutan-gelap);
        color: var(--hutan-gelap);
        padding: 25px 30px;
        border-radius: 30px;
        font-weight: 800;
        font-size: 1.4rem; /* Font digedein */
        transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 8px 0 var(--hutan-gelap); /* Efek tombol 3D */
    }

    .btn-answer:hover {
        background: var(--oranye-poster);
        color: white;
        transform: translateY(-5px);
        box-shadow: 0 13px 0 var(--hutan-gelap);
    }

    .btn-answer:active {
        transform: translateY(2px);
        box-shadow: 0 4px 0 var(--hutan-gelap);
    }

    /* Lingkaran Skor Raksasa */
    .score-circle-large {
        width: 180px;
        height: 180px;
        background: var(--kuning-poster);
        border: 8px solid var(--hutan-gelap);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 5rem;
        font-weight: 900;
        color: var(--hutan-gelap);
        box-shadow: 0 15px 30px rgba(0,0,0,0.1);
    }

    .btn-xl {
        font-size: 1.5rem;
        padding: 20px 60px;
        border: 4px solid var(--hutan-gelap);
    }

    /* Penyesuaian Grid Tombol */
    #answer-buttons .col-md-6 {
        display: flex;
    }

    .bg-oranye { background-color: var(--oranye-poster) !important; }
    .text-hutan { color: var(--hutan-gelap); }
    .fw-800 { font-weight: 800; }
</style>
@endsection

<script>
const questions = [
    {
        q: "Siapakah nama anak Harimau Sumatera yang menjadi tokoh utama dalam cerita ini?",
        img: "raka_harimau.jpg", // Sesuaikan nama file gambarmu di public/img/
        a: [
            { text: "Ujang", correct: false },
            { text: "Raka", correct: true },
            { text: "Oza", correct: false },
            { text: "Dewi", correct: false }
        ]
    },
    {
        q: "Bencana alam apa yang terjadi pada malam hari hingga memisahkan Raka dari orang tuanya?",
        img: "hujan_lebat.jpg",
        a: [
            { text: "Gempa bumi", correct: false },
            { text: "Gunung meletus", correct: false },
            { text: "Hujan lebat dan banjir", correct: true },
            { text: "Kebakaran hutan", correct: false }
        ]
    },
    {
        q: "Apa yang menyebabkan Raka terpisah dan tidak bisa mengejar ibunya saat banjir?",
        img: "pohon_tumbang.jpg",
        a: [
            { text: "Sebuah pohon tumbang jatuh di antara mereka", correct: true },
            { text: "Raka terjebak di dalam gua", correct: false },
            { text: "Arus air membawa Raka terbang tinggi", correct: false },
            { text: "Raka tertidur terlalu nyenyak", correct: false }
        ]
    },
    {
        q: "Di bawah pohon apakah Raka duduk termenung dan menangis terisak-isak karena tersesat?",
        img: "pohon_beringin.jpg",
        a: [
            { text: "Pohong Pisang", correct: false },
            { text: "Pohon Beringin tua", correct: true },
            { text: "Pohon Kelapa", correct: false },
            { text: "Pohon Mangga", correct: false }
        ]
    },
    {
        q: "Dewi adalah seekor burung kecil berbulu putih bersih dengan mahkota biru. Hewan apakah Dewi?",
        img: "dewi_jalak_bali.jpg",
        a: [
            { text: "Burung Elang Jawa", correct: false },
            { text: "Burung Merpati", correct: false },
            { text: "Burung Jalak Bali", correct: true },
            { text: "Burung Cendrawasih", correct: false }
        ]
    },
    {
        q: "Siapakah nama sahabat badak jawa kecil yang memiliki kulit keras seperti armor?",
        img: "ujang_badak.jpg",
        a: [
            { text: "Oza", correct: false },
            { text: "Raka", correct: false },
            { text: "Ujang", correct: true },
            { text: "Dewi", correct: false }
        ]
    },
    {
        q: "Hewan apakah Oza, sahabat yang sedang berjemur di atas batu dan membantu mencarikan makanan?",
        img: "oza_komodo.jpg",
        a: [
            { text: "Komodo kecil", correct: true },
            { text: "Buaya muara", correct: false },
            { text: "Kancil cerdik", correct: false },
            { text: "Ular sanca", correct: false }
        ]
    },
    {
        q: "Ke arah manakah Oza menyarankan rombongan untuk berjalan menuju bukit tempat keluarga harimau berkumpul?",
        img: "arah_timur.jpg",
        a: [
            { text: "Arah Barat", correct: false },
            { text: "Arah Utara", correct: false },
            { text: "Arah Selatan", correct: false },
            { text: "Arah Timur", correct: true }
        ]
    },
    {
        q: "Apa tugas yang dilakukan oleh Ujang si badak kecil saat mereka berjalan bersama mencari orang tua Raka?",
        img: "ujang_mencium_jejak.jpg",
        a: [
            { text: "Terbang tinggi melihat situasi", correct: false },
            { text: "Mencium aroma atau jejak di tanah", correct: true },
            { text: "Berlari paling depan memimpin jalan", correct: false },
            { text: "Menjaga sisi sebelah kanan", correct: false }
        ]
    },
    {
        q: "Pesan persatuan apa yang diucapkan oleh Dewi si Jalak Bali di akhir cerita setelah mereka berhasil berkumpul?",
        img: "pelangi_hutan.jpg",
        a: [
            { text: "Kita berbeda, namun kita satu kesatuan Indonesia", correct: true },
            { text: "Hutan ini hanya milik hewan yang kuat", correct: false },
            { text: "Jangan pernah bermain saat hujan deras", correct: false },
            { text: "Setiap hewan harus hidup sendirian", correct: false }
        ]
    }
];

    let currentQuestionIndex = 0;
    let score = 0;

    function startQuiz() {
        showQuestion(questions[currentQuestionIndex]);
    }

    function showQuestion(question) {
        document.getElementById('question-text').innerText = question.q;
        const answerButtons = document.getElementById('answer-buttons');
        answerButtons.innerHTML = '';
        
        question.a.forEach(answer => {
            const button = document.createElement('button');
            button.innerText = answer.text;
            button.classList.add('btn', 'btn-answer');
            button.onclick = () => selectAnswer(answer.correct);
            answerButtons.appendChild(button);
        });

        // Update Progress
        const progress = ((currentQuestionIndex) / questions.length) * 100;
        document.getElementById('quiz-progress').style.width = progress + '%';
    }

    function selectAnswer(isCorrect) {
        if (isCorrect) score += 10; // Contoh skor per soal
        currentQuestionIndex++;

        if (currentQuestionIndex < questions.length) {
            showQuestion(questions[currentQuestionIndex]);
        } else {
            showResult();
        }
    }

    function showResult() {
        document.getElementById('question-box').classList.add('d-none');
        document.getElementById('result-box').classList.remove('d-none');
        document.getElementById('final-score').innerText = score;
        document.getElementById('quiz-progress').style.width = '100%';
    }

    function restartQuiz() {
        currentQuestionIndex = 0;
        score = 0;
        document.getElementById('question-box').classList.remove('d-none');
        document.getElementById('result-box').classList.add('d-none');
        startQuiz();
    }

    // Jalankan Kuis saat halaman dimuat
    window.onload = startQuiz;
</script>