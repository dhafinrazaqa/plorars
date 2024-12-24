<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class QuestionController extends Controller
{
    // Inisialisasi kategori MBTI
    private $category = [
        'E' => 0,
        'I' => 0,
        'S' => 0,
        'N' => 0,
        'T' => 0,
        'F' => 0,
        'J' => 0,
        'P' => 0,
    ];

    // Array pertanyaan MBTI
    private $pertanyaan = [
        "1. Kamu cenderung menghindari acara yang ramai.",
        "2. Kamu tidak suka menarik perhatian dan tetap berada di belakang.",
        "3. Kamu berbicara dengan banyak orang yang berbeda di pesta.",
        "4. Kamu cenderung menjaga jarak dengan orang lain dan sulit untuk dikenal.",
        "5. Kamu cenderung memulai percakapan dan mempertahankannya daripada bergantung pada orang lain.",
        "6. Kamu akan bosan jika menghabiskan akhir pekan sendirian.",
        "7. Kamu kehilangan minat dalam percakapan yang menjadi filosofis.",
        "8. Kamu cenderung melamun dan tenggelam dalam pikiranmu.",
        "9. Kamu sering berpikir tentang arti hidup.",
        "10. Kamu melihat hal-hal secara realistis daripada membayangkan seperti apa mereka nantinya.",
        "11. Kamu sering menghabiskan waktu untuk mengeksplorasi ide-ide menarik meskipun tidak realistis.",
        "12. Kamu melihat dirimu lebih realistis daripada visioner.",
        "13. Kamu lebih suka bersikap diplomatis untuk melindungi perasaan seseorang daripada mengecewakan mereka dengan kebenaran.",
        "14. Jika temanmu sedih tentang sesuatu, insting pertamamu adalah mendukungnya secara emosional, bukan mencoba menyelesaikan masalahnya.",
        "15. Kamu percaya bahwa bersikap terus terang lebih penting daripada melindungi perasaan seseorang.",
        "16. Kamu lebih suka membuat jadwal yang terstruktur dan mengikuti rencana yang sudah direncanakan dengan baik.",
        "17. Kamu cenderung fleksibel dan terbuka terhadap perubahan rencana yang bisa terjadi kapan saja.",
        "18. Kamu lebih suka menyelesaikan tugas-tugas secepat mungkin agar tidak ada yang tertinggal.",
        "19. Kamu lebih suka menunggu dan melihat bagaimana situasi berkembang sebelum mengambil langkah berikutnya.",
        "20. Kamu cenderung memiliki daftar prioritas yang jelas dan menyelesaikan satu pekerjaan pada satu waktu.",
    ];

    // Menampilkan semua pertanyaan
    public function tampilkanQuiz(Request $request)
    {
        $nomorQuiz = intval($request->input('nomorQuiz'));

        if ($nomorQuiz < count($this->pertanyaan) && $nomorQuiz >= 0) {
            return response()->json([
                'pertanyaan' => $this->pertanyaan[$nomorQuiz],
                'option_a' => 'Setuju',
                'option_b' => 'Tidak Setuju',
            ]);
        } else {
            return response()->json(['pertanyaan' => null], 404);
        }
    }

    // Menyimpan hasil MBTI
    public function saveResult(Request $request)
    {
        // Validasi jawaban
        $validated = $request->validate([
            'jawaban' => 'required|array',
            'jawaban.*' => 'in:A,B',
        ]);

        // Update kategori berdasarkan jawaban
        foreach ($request->jawaban as $nomorQuiz => $jawaban) {
            $this->updateCategory($nomorQuiz, $jawaban);
        }

        // Hitung tipe MBTI berdasarkan kategori
        $mbtiType = $this->calculateMbti();

        // Simpan hasil ke API
        $response = Http::post(route('api.mbti.storeResult'), [
            'mbti_type' => $mbtiType,
        ]);

        if ($response->successful()) {
            return response()->json([
                'status' => 'success',
                'message' => 'Hasil MBTI berhasil disimpan.',
                'mbti_type' => $mbtiType,
            ]);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Gagal menyimpan hasil MBTI.',
            ], 500);
        }
    }

    // Mengupdate kategori berdasarkan jawaban
    private function updateCategory($nomorQuiz, $jawaban)
    {
        switch ($nomorQuiz + 1) {
            case 1:
            case 2:
            case 3:
            case 4:
            case 5:
            case 6:
                if ($jawaban === 'A') {
                    $this->category['E']++;
                } else {
                    $this->category['I']++;
                }
                break;

            case 7:
            case 8:
            case 9:
            case 10:
                if ($jawaban === 'A') {
                    $this->category['S']++;
                } else {
                    $this->category['N']++;
                }
                break;

            case 11:
            case 12:
                if ($jawaban === 'A') {
                    $this->category['N']++;
                } else {
                    $this->category['S']++;
                }
                break;

            case 13:
            case 14:
            case 15:
                if ($jawaban === 'A') {
                    $this->category['T']++;
                } else {
                    $this->category['F']++;
                }
                break;

            case 16:
            case 17:
            case 18:
            case 19:
                if ($jawaban === 'A') {
                    $this->category['J']++;
                } else {
                    $this->category['P']++;
                }
                break;

            case 20:
                if ($jawaban === 'A') {
                    $this->category['J']++;
                } else {
                    $this->category['P']++;
                }
                break;
        }
    }

    // Menghitung tipe MBTI
    private function calculateMbti()
    {
        $mbtiType = '';
        $mbtiType .= $this->category['E'] >= $this->category['I'] ? 'E' : 'I';
        $mbtiType .= $this->category['S'] >= $this->category['N'] ? 'S' : 'N';
        $mbtiType .= $this->category['T'] >= $this->category['F'] ? 'T' : 'F';
        $mbtiType .= $this->category['J'] >= $this->category['P'] ? 'J' : 'P';

        return $mbtiType;
    }
}
