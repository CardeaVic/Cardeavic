<html>
<head>
    <title>Cardea - Weekly Report</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ public_path('css/app.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">

</head>
<style>
    body {
        font-family: 'Roboto', sans-serif;
        background-color: white;
        margin: 0px;
    }

    @media print {
        body {
            margin: 0 0 0 0;
        }
    }

    @page {
        margin: 0px 0px 0px 0px;
    }

    .page {
        width: 100%;
        page-break-after: always;
    }

    .last-page {
        width: 100%;
    }

    .front-image {
        margin-top: 15%;
        margin-left: 45%;
        transform: scale(1.5, 1.5);
        -webkit-transform: scale(1.5, 1.5);
    }

    .focus-page-image{
        transform: scale(0.5, 0.5);
        -webkit-transform: scale(0.5, 0.5);
    }

    .weekly-report-title {
        margin-top: 20%;
        font-size: 24pt;
        text-transform: uppercase;

        color: white;
    }

    .for-user {
        margin-top: 5%;
        font-size: 20pt;
        text-transform: uppercase;

        color: white;
    }

    .fontawesome {
        margin-top: 10%;
        color: white;
        margin-left: 45%;
    }

    .from-to-date {
        margin-top: 10%;
        color: white;
        font-size: 20pt;
    }

    .nutrition {
        letter-spacing: 1.5;
        margin-left: 5%;
        color: white;
        font-size: 20pt;
        text-transform: uppercase;
    }

    .sub-heading {
        letter-spacing: 1.5;
        margin-left: 5%;
        color: grey;
        font-size: 14pt;
        text-transform: uppercase;
    }

    .sub-sub-heading{
        margin-top: 3%;
        letter-spacing: 1.5;
        color: grey;
        font-size: 12pt;
        text-transform: uppercase;
    }

    .text {
        font-size: 14pt;
        font-weight: lighter;
    }

    .Quote {
        bottom: 10px;
        position: fixed;
    }

    .missed-goals {
        letter-spacing: 1.5;
        margin-left: 5%;
        color: black;
        font-size: 10pt;
        text-transform: capitalize;
    }

    .summary {
        letter-spacing: 1.5;
        margin-left: 5%;
        color: black;
        font-size: 10pt;
        text-transform: capitalize;
    }
</style>
<body>
{{-- Page 1--}}
<div class="row page">
    <div class="col-md-12" style="background: #50a3a2; height: 100%">
        <div class="front-image">
            <img style="transform: scale(1.5,1.5)" src="{{ public_path('images/CardeaLogoSmall.png') }}">
        </div>
        <div class="text-md-center justify-content-center">
            <div class="weekly-report-title">
                Weekly Report
            </div>
            <div class="fontawesome">
                <span><i class="fas fa-hand-holding-heart fa-4x"></i></span>
            </div>
            <div class="for-user">
                For {{ $user }}
            </div>
            <div class="from-to-date">
                From {{ $startDate }} - {{ $endDate }}
            </div>
        </div>
    </div>
</div>
{{-- Page 2--}}
<div class="container page">
    <div class="row ">
        <div class="col-sm-12" style="background-color: white; height: 100%">
            <div class="col-md-12" style="background-color: #50a3a2; margin-top: 3%;">
                <p class="nutrition">
                    Nutrition
                </p>
            </div>
            <div class="row" style="height: 20%;">
                <table width="100%" style=" margin-top: 3%">
                    <tr>
                        <td style="width: 40%; text-align: center ">
                            <img src="{{ public_path('images/report/FruitsAndVeges.jpg') }}">
                        </td>
                        <td width="60%" class="summary" style="text-align: left">
                            The standard nutrition intake value is <strong>35 Servings</strong> per week, and your
                            intake value is <strong>{{ $numberOfServings }} Servings</strong>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="col-md-12" style="background-color: #50a3a2; margin-top: 3%;">
                <p class="nutrition">
                    Physical Activity
                </p>
            </div>
            <div class="row" style="height: 20%;">
                <table width="100%" style=" margin-top: 3%">
                    <tr>
                        <td width="60%" class="summary" style="text-align: right">
                            World Health Organisation recommends doing <strong>150 minutes</strong> of physical
                            activity, and your acitivity time is <strong>{{ $weeklyTotalMinutes }} minutes.</strong>
                        </td>
                        <td style="width: 40%; text-align: center;">
                            <img style=" margin-top: 3%" src="{{ public_path('images/report/physical.png') }}">
                        </td>
                    </tr>
                </table>
            </div>
            <div class="col-md-12" style="background-color: #50a3a2; margin-top: 3%;">
                <p class="nutrition">
                    Smoking Status
                </p>
            </div>
            <div class="row" style="height: 20%;">
                <table width="100%" style=" margin-top: 3%">
                    <tr>
                        <td style="width: 40%; text-align: center;">
                            <img style=" margin-top: 3%" src="{{ public_path('images/report/smoking.png') }}">
                        </td>
                        <td width="60%" class="summary" style="text-align: left">
                            Smoking increases the risk of almost all types of CVD.
                            @if($daysSmoked == 0)
                                Well done you did not smoke last week.
                            @else
                                you smoked <strong>{{ $daysSmoked }}</strong> out of <strong>7 Days</strong>.
                            @endif
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
{{-- Page 3--}}
<div class="container last-page">
    <div class="row ">
        <div class="col-sm-12" style="background-color: white; height: 100%">
            <div class="row">
                <div class="col-md-12" style="background-color: #50a3a2; margin-top: 1%;">
                    <p class="nutrition">
                        Focus for Next Week
                    </p>
                </div>
            </div>
            <div class="row" style="height: 20%">
                <img class="focus-page-image" src="{{ public_path('images/report/focus_page.png') }}">
            </div>
           @if($numberOfServings <= 35 or $$weeklyTotalMinutes <= 150 or $daysSmoked != 0)
                @if($numberOfServings <= 35 or $$weeklyTotalMinutes <= 150 or $daysSmoked != 0)
                    <div class="row">
                        <div class="col-md-12" style="margin-top: 3%;">
                            <p class="sub-heading">
                                Goals you missed previous week
                            </p>
                        </div>
                    </div>
                    <div class="row" style="margin-left: 5%;">
                        <ul>
                            @if($numberOfServings < 35)
                                <li class="missed-goals">Not consumed enough servings of fruits and vegetables, minimum
                                    required 35 servings.
                                </li>
                            @endif
                            @if($weeklyTotalMinutes < 150)
                                <li class="missed-goals">You missed doing atleast 150 Minutes of physical activity.</li>
                            @endif
                            @if($daysSmoked > 0)
                                <li class="missed-goals">You smoked, Try minimising or quiting</li>
                            @endif
                        </ul>
                    </div>
                @endif

                @if($numberOfServings <= 35 or $$weeklyTotalMinutes <= 150 or $daysSmoked != 0)
                    <div class="row">
                        <div class="col-md-12" style="margin-top: 3%;">
                            <p class="sub-heading">
                                Tips to achieve weekly goals
                            </p>
                        </div>
                    </div>
                    <div class="row" style="margin-left: 5%;">
                        <ul>
                            @if($numberOfServings < 35)
                                <p class="sub-sub-heading">Nutrition</p>
                                <li class="missed-goals"> Read about <a href="https://www.verywellfit.com/calorie-counts-and-nutrition-facts-overview-4581869calorie count and nutrition facts">calorie count and nutrition facts</a></li>
                                <li class="missed-goals">Collection of <a href="https://www.bbcgoodfood.com/recipes/collection/fruit-salad"> Fruit Salad Receipe</a></li>
                                <li class="missed-goals">Making <a href="https://www.heartfoundation.org.au/Heart-health-education/Making-healthier-meals-at-home">Healthier Meals at home</a></li>
                                <li class="missed-goals">Make <a href="https://www.ambitiouskitchen.com/healthy-veggie-packed-dinners/">Veggie Pack dinners at home</a></li>
                            @endif
                            @if($weeklyTotalMinutes < 150)
                                <p class="sub-sub-heading">Physical Activity</p>
                                <li class="missed-goals">Check out <a href="https://www.fatherly.com/health-science/easy-workout-quick-workout/">some living room exercises</a></li>
                                <li class="missed-goals">How much <a href="https://www.heartfoundation.org.au/heart-health-education/physical-activity-and-exercise">physical activity do you need?</a></li>
                                <li class="missed-goals">Sitting less <a href="https://www.heartfoundation.org.au/getmedia/88c39659-675e-44b2-9da8-b9b28b5f0c83/PA-Sitting-Less-Adults.pdf">guidelines for adults</a></li>
                            @endif
                            @if($daysSmoked > 0)
                                <p class="sub-sub-heading">Quit Smoking</p>
                                <li class="missed-goals">If you have not quit smoking yet, use <a href="https://www.heartfoundation.org.au/heart-health-education/action-plans/quit-smoking-action-plan">Quit Smoking Action Plan</a> Now</li>
                                <li class="missed-goals">Smoking Increases risk of:
                                    <ul class="missed-goals">
                                        <li>Heart attack – 2x higher
                                        </li>
                                        <li>Stroke – 3x higher
                                        </li>
                                        <li>Angina – 20x higher
                                        </li>
                                        <li>Peripheral Arterial Disease – 5x higher
                                        </li>
                                    </ul></li>
                            @endif
                        </ul>
                    </div>
                @endif
               @else
                <div class="row">
                    <div class="col-md-12" style="margin-top: 3%;">
                        <p class="sub-heading">
                            Congratulation!! You have meet all the goals of previous week. Keep up the good work.
                        </p>
                    </div>
                </div>
               @endif
            <div class="row">
                <table width="100%" style="bottom: 10%; position: fixed">
                    <tr class="text-md-center">
                        <td class="missed-goals"><p>"Take care of your body, it's the only place you have to live."</p> Jim Rohn</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div></body></html>
