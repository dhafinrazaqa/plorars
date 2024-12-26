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

        if (is_null($hasilMBTI) || is_null($hasilMBTI->mbti_type)) {
            return redirect()->route('test');
        }

        $infoMBTI = DB::table('mbti_info')->where('mbti_type', $hasilMBTI->mbti_type)->first();

        $jenisMBTI = $infoMBTI->mbti_type;
        $jenisMBTIArray = str_split($infoMBTI->mbti_type);

        $gambarMBTI = asset('images/mbti/' . $infoMBTI->mbti_image);

        return view('profile.mbti', compact('hasilMBTI', 'gambarMBTI', 'jenisMBTI', 'jenisMBTIArray'));
    }

    public function showMinatBakat()
    {
        $mbtiResult = MbtiResult::where('user_id', auth()->id())->latest()->first();
        $mbtiInfo = DB::table('mbti_info')->where('mbti_type', $mbtiResult->mbti_type)->first();

        $jenisMBTI = $mbtiInfo->mbti_type;

        $minatBakatResult = DB::table('minat_bakat_results')->where('user_id', auth()->id())->latest()->first();
        if (is_null($minatBakatResult) || is_null($minatBakatResult->result1)) {
            return redirect()->route('test');
        }

        $result1 = $minatBakatResult->result1;
        $result2 = $minatBakatResult->result2;
        $result3 = $minatBakatResult->result3;

        $minatBakatInfo1 = DB::table('minat_bakat_info')->where('minat_bakat_type', $result1)->first();
        $minatBakatInfo2 = DB::table('minat_bakat_info')->where('minat_bakat_type', $result2)->first();
        $minatBakatInfo3 = DB::table('minat_bakat_info')->where('minat_bakat_type', $result3)->first();

        $karirList1 = json_decode($minatBakatInfo1->karir);
        $karirList2 = json_decode($minatBakatInfo2->karir);
        $karirList3 = json_decode($minatBakatInfo3->karir);

        return view('profile.minatBakat', compact(
            'jenisMBTI',
            'result1',
            'result2',
            'result3',
            'karirList1',
            'karirList2',
            'karirList3'
        ));
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
