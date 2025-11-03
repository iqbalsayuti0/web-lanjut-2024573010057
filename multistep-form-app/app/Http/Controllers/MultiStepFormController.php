<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MultiStepFormController extends Controller
{
    public function showStep1(){
        return view('multistep.step1', [
            'step' => 1,
            'progres' => 0
        ]);
    }

    public function storeStep1(Request $request){
        $validated = $request->validate([
            'full_name' => 'required|string|max:100',
            'email' => 'required|email',
            'phone' => 'required|string|max:15',
            'address' => 'required|string|max:200',
        ]);

        session(['step1_data' => $validated]);
        return redirect()->route('multistep.step2');
    }

    public function showStep2(){
        if(!session('step1_data')){
            return redirect()->route('multistep.step1');
        }
        return view('multistep.step2', [
            'step' => 2,
            'progress' => 33
        ]);
    }

    public function storeStep2(Request $request){
        $validated = $request->validate([
            'education' => 'required|string|max:50',
            'institution' => 'required|string|max:100',
            'graduation_year' => 'required|integer|min:1900|max:' .date('Y'),
            'major' => 'required|string|max:100',
        ]);
        session(['step2_data' => $validated]);
        return redirect()->route('multistep.step3');
    }

    public function showStep3(){
        if(!session('step1_data') || !session('step2_data')){
            return redirect()->route('multistep.step1');
        }
        return view('multistep.step3', [
            'step' => 3,
            'progress' => 66
        ]);
    }

    public function storeStep3(Request $request){
        $validated = $request->validate([
            'currect_job' => 'nullable|string|max:100',
            'company' => 'nullable|string|max:100',
            'experience_years' => 'required|integer|min:0|max:50',
            'skills' => 'required|string|max:200',
        ]);
        session(['step3_data' => $validated]);
        return redirect()->route('multistep.summary');
    }

    public function showSummary(){
        $step1Data = session('step1_data');
        $step2Data = session('step2_data');
        $step3Data = session('step3_data');

        if(!$step1Data || !$step2Data || !$step3Data){
            return redirect()->route('multistep.step1');
        }

        return view('multistep.summary', [
            'step' => 4,
            'progress' => 100,
            'step1Data' => $step1Data,
            'step2Data' => $step2Data,
            'step3Data' => $step3Data,
        ]);
    }

    public function complete(Request $request){
        $allData = [
            'personal' => session('step1_data'),
            'education' => session('step2_data'),
            'experience' => session('step3_data')
        ];

        $request->session()->forget(['step1_data', 'step2_data', 'step3_data']);
        return view('multistep.complete', [
            'data' => $allData
        ]);
    }
}
