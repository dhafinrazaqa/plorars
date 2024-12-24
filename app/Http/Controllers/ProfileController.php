<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use App\Models\MbtiResult;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ProfileController extends Controller
{
    public function showMBTI()
    {
        $hasilMBTI = MbtiResult::where('user_id', auth()->id())->latest()->first();
        $infoMBTI = DB::table('mbti_info')->where('mbti_type', $hasilMBTI->mbti_type)->first();

        $jenisMBTI = $infoMBTI->mbti_type;
        $jenisMBTIArray = str_split($infoMBTI->mbti_type);

        $gambarMBTI = asset('images/mbti/' . $infoMBTI->mbti_image);

        return view('profile.mbti', compact('hasilMBTI', 'gambarMBTI', 'jenisMBTI', 'jenisMBTIArray'));
    }

    public function showKegiatan()
    {
        $hasilMBTI = MbtiResult::where('user_id', auth()->id())->latest()->first();
        $infoMBTI = DB::table('mbti_info')->where('mbti_type', $hasilMBTI->mbti_type)->first();
        $kegiatans = Kegiatan::where('mbti_type', $infoMBTI->mbti_type)->get();

        $jenisMBTI = $infoMBTI->mbti_type;

        return view('profile.kegiatan', compact('hasilMBTI', 'jenisMBTI', 'kegiatans'));
    }
}
