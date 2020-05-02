Survey
    .StylesManager
    .applyTheme("modern");

var json = {
"completeText": "Save",
"pageNextText": "Continue",
"pagePrevText": "Previous",
"pages": [
    {
     "elements": [
      {
       "type": "radiogroup",
       "name": "physical activity",
       "title": "Did you have any physical activity or not in the previous day",
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
       "type": "multipletext",
       "name": "duration",
       "visibleIf": "{physical activity} = 1",
       "title": "For how long?",
       "isRequired": true,
       "items": [
        {
         "name": "Hours",
         "title": "Hours"
        },
        {
         "name": "Minutes",
         "isRequired": true,
         "title": "Minutes"
        }
       ]
      },
      {
       "type": "radiogroup",
       "name": "fruit and vege intake",
       "title": "Did you have any serve of fruit or vegetable?",
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
       "type": "text",
       "name": "servings",
       "visibleIf": "{fruit and vege intake} = 1",
       "title": "How many servings?",
       "inputType": "number"
      },
      {
       "type": "radiogroup",
       "name": "smoke",
       "title": "Did you smoke today?",
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
        "name": "date",
        "type": "bootstrapdatepicker",
        "inputType": "date",
        "title": "Log for which date?",
        "dateFormat": "mm/dd/yy",
        "isRequired": true
      }
     ]
    }
],
"requiredText": "",
"showQuestionNumbers": "off",
"storeOthersAsComment": false
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