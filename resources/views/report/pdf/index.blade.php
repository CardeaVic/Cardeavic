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
    .last-page{
        width: 100%;
    }

    .front-image {
        margin-top: 15%;
        margin-left: 45%;
        transform: scale(1.5, 1.5);
        -webkit-transform: scale(1.5, 1.5);
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

    .text {
        font-size: 14pt;
        font-weight: lighter;
    }

    .Quote{
        bottom: 10px;
        position: fixed;
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
                From {{ $startDate }} - To {{ $endDate }}
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
                        <td width="60%" class="text" style="text-align: left">
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
                        <td width="60%" class="text" style="text-align: right">
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
                        <td width="60%" class="text" style="text-align: left">
                            Smoking increases the risk of almost all types of CVD.
                            @if($daysSmoked == 0)
                                Well done you did not smoke last week.
                            @else
                                you smoked {{ $daysSmoked }} days out of 7.
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
               <div class="col-md-12" style="background-color: #50a3a2; margin-top: 3%;">
                   <p class="nutrition">
                       Focus for Next Week
                   </p>
               </div>
           </div>
            <div class="row" style="height: 20%; margin-left: 5%;">
                <table width="100%" style=" margin-top: 5%">
                    @if($numberOfServings < 35)
                        <tr>
                            <td>
                                <li>Try to eat healthy and complete your weekly nutritional goal of 35 Servings.
                                    <ul>
                                        <li>Fruit and vegetables can help lower your risk of heart disease, stroke, type
                                            2 diabetes and some cancers.
                                        </li>
                                        <li>Eating fruit and vegetables can also help manage cholesterol levels and
                                            weight.
                                        </li>
                                        <li>Less than 10 per cent of Australians eat the recommended amount of fruit and
                                            vegetables.
                                        </li>
                                        <li>Try to make fruit or vegetables a part of every meal. Variety is key.</li>
                                    </ul>
                                </li>
                            </td>
                        </tr>
                    @endif
                    @if($weeklyTotalMinutes < 150)
                        <tr>
                            <td>
                                <li>Try to complete you weekly physical activity target of 150 minutes.
                                    <ul>
                                        <li>Live your best life by getting into the habit of being active – you’ll enjoy
                                            the benefits for the rest of your life
                                        </li>
                                        <li>Stay active year-round. Mix up your activity between indoors and outdoors to
                                            be ready for any weather.
                                        </li>
                                        <li>More than half of all Australians aren’t active enough. Start slowly and
                                            gradually increase your physical activity. Consult your doctor for advice on
                                            the best exercises for you.
                                        </li>
                                        <li>Aim for 150 minutes (2.5 hours) of moderate physical activity each week or
                                            75 minutes (1 ¼ hours) of vigorous exercise. ‘Vigorous’ exercise requires
                                            more effort and makes you breathe harder and faster, for example, jogging.
                                            Moderate and vigorous physical activity can help improve heart health, blood
                                            pressure, cholesterol, muscle and bone strength.
                                        </li>
                                    </ul>
                                </li>
                            </td>
                        </tr>
                    @endif
                    @if($daysSmoked > 0)
                        <tr>
                            <td>
                                <li>
                                    Try Quiting Smoking.
                                    <ul>
                                        <li> Smoking rates are coming down in Australia but there are still more than
                                            15,000 deaths caused by smoking every year.
                                        </li>
                                        <li>Tobacco smoke is one of the main risk factors for heart disease and is
                                            responsible for 12% of the burden (death and illness) of cardiovascular
                                            disease in Australia.
                                        </li>
                                        <li>Get your quit smoking action plan from here. <a
                                                href="https://www.heartfoundation.org.au/heart-health-education/action-plans/quit-smoking-action-plan">https://www.heartfoundation.org.au/heart-health-education/action-plans/quit-smoking-action-plan</a>
                                        </li>
                                    </ul>
                                </li>
                            </td>
                        </tr>
                    @endif
                    @if($numberOfServings >= 35 && $$weeklyTotalMinutes >= 150 && $daysSmoked = 0)
                        <tr><td>Well done. You have acheived all the goals of the week. Keep up the good work and your body healthy</td></tr>
                        @endif
                </table>
            </div>
            <div class="row">
               <table width="100%" style="bottom: 10%; position: fixed">
                   <tr class="text-md-center">
                       <td><p>"Take care of your body, it's the only place you have to live."</p> Jim Rohn</td>
                   </tr>
               </table>
            </div>
        </div>
    </div>
</div></body></html>
