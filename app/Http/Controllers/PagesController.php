<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class PagesController extends Controller
{
    public function landing()
    {
        $title = 'Welcome to Cardea';
        return view('pages.landing')->with('title', $title);
    }

    public function submitForm(Request $request)
    {
        $input = $request->all();
        $formData = json_decode(json_decode(json_encode($input['formData']), true), true);
        $gender = intval($formData["Gender?"]);
        $age = intval($formData["Age?"]);
        $everMarried = intval($formData["Ever Married?"]);
        $workType = intval($formData["Work Type?"]);
        $smokingStatus = intval($formData["Your smoking status?"]);
        $residenceType = intval($formData["Residence Type?"]);
        $bmi = floatval($formData["Your BMI? (Weight in Kgs / Height in meters squared)"]);
        $glucoseLevel = floatval($formData["What is your average Glucose level?"]);
        $heartDisease = $formData["Do you have any kind of heart disease?"] = true ? 1 : 0;
        $hyperTension = $formData["Are you suffering from hypertension?"] = true ? 0 : 1;

        $data = [$gender, $age, $hyperTension, $heartDisease, $everMarried, $workType, $residenceType, $glucoseLevel, $bmi, $smokingStatus];
        $endpoint = "ec2-3-22-233-87.us-east-2.compute.amazonaws.com/predict";


        // executing the cURL to get the prediction from the server
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $endpoint);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);

        
        return view('pages.result', compact('response'));
    }

    // public function services(){
    //     $data = array(
    //         'title' => 'Services',
    //         'services' => ['Service A', 'Service B', 'Service C']
    //     );
    //     return view('pages.services')->with($data);
    // }
}
