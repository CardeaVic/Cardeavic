
Survey
.StylesManager
.applyTheme("modern");

var json = {
"completeText": "Submit",
"pageNextText": "Continue",
"pagePrevText": "Previous",
"title": "Cardea Health Assessment",
"pages": [
    {
     "name": "intro",
     "elements": [
      {
       "type": "html",
       "name": "intro html",
       "html": "<h1>Health Assessment</h1>\n<p>Are you ready to take the assessment?</p>\n<p>Click start to continue</p>"
      }
     ],
     "readOnly": true
    },
    {
     "name": "questions",
     "elements": [
      {
       "type": "radiogroup",
       "name": "Gender",
       "isRequired": true,
       "choices": [
        {
         "value": "Male",
         "text": "Male"
        },
        {
         "value": "Female",
         "text": "Female"
        }
       ]
      },
      {
       "type": "text",
       "name": "Age",
       "isRequired": true,
       "inputType": "number",
       "min": "1",
       "max": "3"
      },
      {
       "type": "radiogroup",
       "name": "Marital Status",
       "isRequired": true,
       "choices": [
        {
         "value": "Maried",
         "text": "Maried"
        },
        {
         "value": "In a registered relationship",
         "text": "In a registered relationship"
        },
        {
         "value": "Living with my partner",
         "text": "Living with my partner"
        },
        {
         "value": "Widowed",
         "text": "Widowed"
        },
        {
         "value": "Single",
         "text": "Single"
        }
       ]
      },
      {
       "type": "radiogroup",
       "name": "Work Type",
       "isRequired": true,
       "choices": [
        {
         "value": "Full-time",
         "text": "Full-time"
        },
        {
         "value": "Part-time",
         "text": "Part-time"
        },
        {
         "value": "Unemployed",
         "text": "Unemployed"
        }
       ]
      },
      {
       "type": "radiogroup",
       "name": "Residency Type",
       "isRequired": true,
       "choices": [
        {
         "value": "Permanent Resident",
         "text": "Permanent Resident"
        },
        {
         "value": "Citizen",
         "text": "Citizen"
        },
        {
         "value": "VISA",
         "text": "VISA"
        }
       ]
      },
      {
       "type": "text",
       "name": "BMI",
       "isRequired": true,
       "inputType": "number",
       "min": "2",
       "max": "2"
      },
      {
       "type": "boolean",
       "name": "Heart Disease History",
       "isRequired": true,
       "labelTrue": "Yes",
       "labelFalse": "No"
      },
      {
       "type": "boolean",
       "name": "Heart Stroke",
       "isRequired": true,
       "labelTrue": "Yes",
       "labelFalse": "No"
      },
      {
       "type": "boolean",
       "name": "Hypertension",
       "isRequired": true,
       "labelTrue": "Yes",
       "labelFalse": "No"
      },
      {
       "type": "boolean",
       "name": "Diabetes",
       "isRequired": true,
       "labelTrue": "Yes",
       "labelFalse": "No"
      },
      {
       "type": "boolean",
       "name": "Smoking",
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
    document
        .querySelector('#surveyResult')
        .textContent = "Result JSON:\n" + JSON.stringify(result.data, null, 3);
});

$("#surveyElement").Survey({model: survey});