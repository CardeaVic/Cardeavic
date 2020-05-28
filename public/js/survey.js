Survey
    .StylesManager
    .applyTheme("modern");

var myCss = {
    "body": "color-white custom-body",
    "title": "color-white custom-title",
    "progressBar": "color-white",
    "progressTextUnderBar": "color-white",
    "completedPage": "color-white",
    "navigation": {
        "complete": "custom-start-button",
        "prev": "custom-start-button",
        "next": "custom-start-button",
        "start": "custom-start-button"
    },

};

var json = {
    "completeText": "Submit",
    "pageNextText": "Next",
    "pagePrevText": "Previous",
    "title": "CARDIOVASCULAR HEALTH ASSESSMENT",
    "startSurveyText": "Start Assessment",
    "pages": [
        {
            "name": "intro",
            "elements": [
                {
                    "type": "html",
                    "name": "intro html",
                    "html": "<div style='color: white'>" +
                        "<h2><strong>Important!</strong></h2>\n <p> None of the questions asked are related to your identity except Age and Gender.</p>" +
                        "\n<p>Please answer all the questions appropriately.</p>" +
                        "<p>Are you ready for the assessment?</p>" +
                        "</div>"
                }
            ],
            "readOnly": true
        },
        {
            "name": "questions",
            "elements": [
                {
                    "type": "radiogroup",
                    "name": "Gender?",
                    "isRequired": true,
                    "requiredErrorText": "Please select an option",
                    "choices": [
                        {
                            "value": "1",
                            "text": "Male"
                        },
                        {
                            "value": "0",
                            "text": "Female"
                        }
                    ]
                },
                {
                    "type": "text",
                    "name": "Age?",
                    "isRequired": true,
                    "requiredErrorText": "Please enter a value",
                    "inputType": "number",
                    "validators": [
                        {
                            type: "numeric",
                            minValue: 21,
                            maxValue: 100,
                            text: "The assessment is applicable to ages 21 years and above",
                        }
                    ],
                },
                {
                    "type": "radiogroup",
                    "name": "Ever Married?",
                    "isRequired": true,
                    "requiredErrorText": "Please select an option",
                    "choices": [
                        {
                            "value": "1",
                            "text": "Yes"
                        },
                        {
                            "value": "0",
                            "text": "No"
                        }
                    ]
                },
                {
                    "type": "radiogroup",
                    "name": "Work Type?",
                    "isRequired": true,
                    "requiredErrorText": "Please select an option",
                    "choices": [
                        {
                            "value": "4",
                            "text": "Home Maker"
                        },
                        {
                            "value": "1",
                            "text": "Never Worked",
                            "itemChecked": "checked",
                        },
                        {
                            "value": "3",
                            "text": "Self Employed"
                        },
                        {
                            "value": "0",
                            "text": "Government Job"
                        },
                        {
                            "value": "2",
                            "text": "Private Job"
                        }
                    ]
                },
                {
                    "type": "radiogroup",
                    "name": "Your smoking status?",
                    "isRequired": true,
                    "requiredErrorText": "Please select an option",
                    "choices": [
                        {
                            "value": "1",
                            "text": "Never Smoked"
                        },
                        {
                            "value": "0",
                            "text": "Former Smoker"
                        },
                        {
                            "value": "2",
                            "text": "Current Smoker"
                        }
                    ]
                },
                {
                    "type": "radiogroup",
                    "name": "Residence Type?",
                    "isRequired": true,
                    "requiredErrorText": "Please select an option",
                    "choices": [
                        {
                            "value": "0",
                            "text": "Rural"
                        },
                        {
                            "value": "1",
                            "text": "Urban"
                        }
                    ]
                },
                {
                    "type": "text",
                    "name": "Height(cm)?",
                    "isRequired": true,
                    "requiredErrorText": "Please enter your height in centimeters",
                    "inputType": "number",
                    "validators": [
                        {
                            type: "numeric",
                            minValue: 50,
                            maxValue: 250,
                            text: "Height should be between 50 and 250",
                        }
                    ],
                },
                {
                    "type": "text",
                    "name": "Weight(kgs)?",
                    "isRequired": true,
                    "requiredErrorText": "Please enter your weight in kilograms",
                    "inputType": "number",
                    "validators": [
                        {
                            type: "numeric",
                            minValue: 1,
                            maxValue: 300,
                            text: "Weight should be between 1 and 300",
                        }
                    ],
                },
                {
                    "type": "text",
                    "name": "What is your average Glucose level?",
                    "description": "hint: 100 for normal person",
                    "isRequired": true,
                    "requiredErrorText": "Please enter a value",
                    "inputType": "number",
                    "validators": [
                        {
                            type: "numeric",
                            minValue: 20,
                            maxValue: 300,
                            text: "Glucose level should be between 20 and 300",
                        }
                    ],
                },
                {
                    "type": "radiogroup",
                    "name": "Do you have any kind of heart disease?",
                    "isRequired": true,
                    "requiredErrorText": "Please select an option",
                    "choices": [
                        {
                            "value": "1",
                            "text": "Yes"
                        },
                        {
                            "value": "0",
                            "text": "No"
                        }
                    ]
                },
                {
                    "type": "radiogroup",
                    "name": "Are you suffering from hypertension?",
                    "isRequired": true,
                    "requiredErrorText": "Please select an option",
                    "choices": [
                        {
                            "value": "1",
                            "text": "Yes"
                        },
                        {
                            "value": "0",
                            "text": "No"
                        }
                    ]
                }
            ]
        }
    ],
    "questionErrorLocation": "bottom",
    "showProgressBar": "top",
    "progressBarType": "pages",
    "firstPageIsStarted": true,
    "questionsOnPageMode": "questionPerPage",
    "requiredText": ""
};

window.survey = new Survey.Model(json);

survey
    .onComplete
    .add(function (result) {
        document.getElementById('formData').value = JSON.stringify(result.data);
        document.surveyForm.submit();
    });

Survey.surveyStrings.progressText = "Question {0} of {1}";

$("#surveyElement").Survey({model: survey, css: myCss});
