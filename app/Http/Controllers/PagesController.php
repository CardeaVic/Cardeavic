<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use function MongoDB\BSON\toJSON;


class PagesController extends Controller
{
    public function landing()
    {
        // Returning the landing page
        $title = 'Welcome to Cardea';
        return view('pages.landing')->with('title', $title);
    }

    public function submitForm(Request $request)
    {
        //receiving the assessment page user input
        $input = $request->all();
        $formData = json_decode(json_decode(json_encode($input['formData']), true), true);
        $gender = intval($formData["Gender?"]);
        $age = intval($formData["Age?"]);
        $everMarried = intval($formData["Ever Married?"]);
        $workType = intval($formData["Work Type?"]);
        $smokingStatus = intval($formData["Your smoking status?"]);
        $residenceType = intval($formData["Residence Type?"]);
        $height = intval($formData["Height(cm)?"]);
        $weight = intval($formData["Weight(kgs)?"]);
        $bmi = round($weight/(pow(($height/100),2)),2);
        $glucoseLevel = floatval($formData["What is your average Glucose level?"]);
        $heartDisease = intval($formData["Do you have any kind of heart disease?"]);
        $hyperTension = intval($formData["Are you suffering from hypertension?"]);

        //Putting them in array to pass as json data to API
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

        //closing the curl command
        curl_close($ch);

        // modifying the received response
        $response = explode(" ", $response);
        $response = intval(round(str_replace('[[', '', $response[0]) * 100, 0));
        return view('pages.result', compact('response'));
    }

}
