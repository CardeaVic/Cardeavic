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
    "completeText": "Complete",
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
                        "<p>Are you ready to take the assessment?</p>\n <p> Please select or enter the appropriate response to the given questions.</p>" +
                        "\n<p>No Questions related to your identity are asked except \"Age\" and \"Gender\"</p>" +
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
                    "inputType": "number",
                    "validators": [
                        {
                            type: "numeric",
                            minValue: 21,
                            maxValue: 100,
                            text: "Age should be between 21 and 100",
                        }
                        ],
                },
                {
                    "type": "radiogroup",
                    "name": "Ever Married?",
                    "isRequired": true,
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
                    "choices": [
                        {
                            "value": "4",
                            "text": "Children"
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
                    "choices": [
                        {
                            "value": "1",
                            "text": "Never Smoked"
                        },
                        {
                            "value": "0",
                            "text": "Formerly Smoked"
                        },
                        {
                            "value": "2",
                            "text": "Smokes"
                        }
                    ]
                },
                {
                    "type": "radiogroup",
                    "name": "Residence Type?",
                    "isRequired": true,
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
                    "name": "Your BMI?",
                    "isRequired": true,
                    "inputType": "number",
                    "validators": [
                        {
                            type: "numeric",
                            minValue: 10,
                            maxValue: 50,
                            text: "BMI should be between 10 and 50",
                        }
                    ],
                },
                {
                    "type": "text",
                    "name": "What is your average Glucose level?",
                    "isRequired": true,
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
                    "type": "boolean",
                    "name": "Do you have any kind of heart disease?",
                    "isRequired": true,
                    "labelTrue": "Yes",
                    "labelFalse": "No"
                },
                {
                    "type": "boolean",
                    "name": "Are you suffering from hypertension?",
                    "isRequired": true,
                    "labelTrue": "Yes",
                    "labelFalse": "No"
                }
            ]
        }
    ],
    "showProgressBar": "top",
    "progressBarType": "questions",
    "firstPageIsStarted": true,
    "questionsOnPageMode": "questionPerPage",
};

window.survey = new Survey.Model(json);

survey
    .onComplete
    .add(function (result) {
        document.getElementById('formData').value = JSON.stringify(result.data);
        document.surveyForm.submit();
    });


$("#surveyElement").Survey({model: survey, css: myCss});
