/* globals Chart:false, feather:false */

(function () {
    'use strict'
  
    feather.replace()
  
    // Graphs
    var ctx = document.getElementById('myChart')
    // eslint-disable-next-line no-unused-vars
    var myChart = new Chart(ctx, {
      type: 'radar',
      data: {
        labels: [
          'Fruit',
          'Vege',
          'Glucose',
          'Hypertension',
          'BMI'
        ],
        datasets: [{
          data: [
            50,
            45,
            100,
            80,
            25
          ],
          lineTension: 0,
          backgroundColor: 'rgba(83, 227, 166, 0.5)',
          borderColor: '#007bff',
          borderWidth: 3,
          pointBackgroundColor: '#007bff'
        }]
      },
      options: {
        legend: {
          display: false
        }
      }
    })
  }())