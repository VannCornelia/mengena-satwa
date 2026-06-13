

<?php $__env->startSection('content'); ?>
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
<?php $__env->stopSection(); ?>

<script>
const questions = [
    {
        q: "Satwa apa yang memiliki pola garis unik seperti sidik jari manusia?",
        a: [
            { text: "Gajah Sumatera", correct: false },
            { text: "Harimau Sumatera", correct: true },
            { text: "Badak Jawa", correct: false }
        ]
    },
    {
        q: "Berapa jarak indra penciuman Komodo untuk menemukan mangsanya?",
        a: [
            { text: "1 Kilometer", correct: false },
            { text: "5 Kilometer", correct: false },
            { text: "9 Kilometer", correct: true }
        ]
    },
    {
        q: "Lidah satwa manakah yang beratnya bisa mencapai seberat satu ekor gajah?",
        a: [
            { text: "Paus Biru", correct: true },
            { text: "Hiu Putih", correct: false },
            { text: "Gajah Afrika", correct: false }
        ]
    },
    {
        q: "Elang Jawa biasanya bertelur setiap berapa tahun sekali?",
        a: [
            { text: "Setiap tahun", correct: false },
            { text: "2 Tahun sekali", correct: true },
            { text: "5 Tahun sekali", correct: false }
        ]
    },
    {
        q: "Apa nama alat bantu pernapasan yang dimiliki oleh Penyu saat berada di air?",
        a: [
            { text: "Insang", correct: false },
            { text: "Paru-paru", correct: true },
            { text: "Kulit", correct: false }
        ]
    },
    {
        q: "Di pulau manakah habitat asli dari Badak bercula satu (Badak Jawa)?",
        a: [
            { text: "Pulau Kalimantan", correct: false },
            { text: "Pulau Sumatera", correct: false },
            { text: "Ujung Kulon, Banten", correct: true }
        ]
    },
    {
        q: "Satwa pintar ini berasal dari Kalimantan dan memiliki rambut merah kecokelatan. Siapakah dia?",
        a: [
            { text: "Orangutan", correct: true },
            { text: "Bekantan", correct: false },
            { text: "Monyet Ekor Panjang", correct: false }
        ]
    },
    {
        q: "Burung Cendrawasih sering dijuluki sebagai burung apa karena keindahannya?",
        a: [
            { text: "Burung Penyanyi", correct: false },
            { text: "Burung dari Surga", correct: true },
            { text: "Burung Pemburu", correct: false }
        ]
    },
    {
        q: "Gajah Sumatera menggunakan bagian tubuh apa untuk berinteraksi dan mengambil makanan?",
        a: [
            { text: "Gading", correct: false },
            { text: "Telinga", correct: false },
            { text: "Belalai", correct: true }
        ]
    },
    {
        q: "Apa ancaman terbesar yang menyebabkan Harimau Sumatera menjadi langka?",
        a: [
            { text: "Perburuan dan Kerusakan Hutan", correct: true },
            { text: "Perubahan Musim", correct: false },
            { text: "Kekurangan Air", correct: false }
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\Documents\htdocs\info-satwa\resources\views/kuis.blade.php ENDPATH**/ ?>