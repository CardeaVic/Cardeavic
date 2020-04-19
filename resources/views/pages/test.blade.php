<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset("/css/cd.common.css?".uniqid()) }}">
        <link href="https://surveyjs.azureedge.net/1.7.2/modern.css" type="text/css" rel="stylesheet"/>
        <script src="https://unpkg.com/jquery"></script>
        <script src="https://surveyjs.azureedge.net/1.7.2/survey.jquery.js"></script>
    </head>
    <body>
        <h1>Assessment</h1>
        <div class="row verticle-align-center form">
            <div class="col l12 s12 m12 center">
                <p class="single-text-center">Heart Health Assessment</p>
            </div>

            <div id="surveyElement" style="display:inline-block;width:100%;"></div>
            <div id="surveyResult"></div>

        </div>

        <script src="{{ asset('/js/survey.js') }}"></script>
    </body>
</html>
