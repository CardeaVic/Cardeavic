var records_list = daily_activities.records;
var date = [];
var minutes = [];
var servings = [];
for(record in records_list){
	var x = records_list[record];
	var m = x.minutes;
	var h = x.hours * 60;
	date.push(x.date);
	minutes.push(m+h);
	servings.push(x.servings*1);
}

(function ($) {
 "use strict";
 
	 /*----------------------------------------*/
	/*  1.  Basic Line Chart
	/*----------------------------------------*/
	var ctx = document.getElementById("physical_activity_chart");
	var basiclinechart = new Chart(ctx, {
		type: 'line',
		data: {
			labels: date,
			datasets: [{
				label: "Recommended level",
				fill: false,
                backgroundColor: '#00c292',
				borderColor: '#00c292',
				data: [20, 20, 20, 20, 20, 20, 20]
            }, {
                label: "My actual level",
				fill: false,
                backgroundColor: '#fb9678',
				borderColor: '#fb9678',
				data: minutes
				
		}]
		},
		options: {
			responsive: true,
			title:{
				display:true,
				text:'Physical Activity'
			},
			tooltips: {
				mode: 'index',
				intersect: false,
			},
			hover: {
				mode: 'nearest',
				intersect: true
			},
			scales: {
				xAxes: [{
					display: true,
					scaleLabel: {
						display: true,
						labelString: 'Days'
					}
				}],
				yAxes: [{
					display: true,
					scaleLabel: {
						display: true,
						labelString: 'Minutes'
					}
				}]
			}
		}
	});
	
	/*----------------------------------------*/
	/*  2.  Line Chart Interpolation
	/*----------------------------------------*/
	
	var ctx = document.getElementById("fruit_vege_chart");
	var basiclinechart = new Chart(ctx, {
		type: 'line',
		data: {
			labels: date,
			datasets: [{
				label: "Recommended servings",
				fill: false,
                backgroundColor: '#00c292',
				borderColor: '#00c292',
				data: [5, 5, 5, 5, 5, 5, 5]
            }, {
                label: "My actual servings",
				fill: false,
                backgroundColor: '#fb9678',
				borderColor: '#fb9678',
				data: servings
				
		}]
		},
		options: {
			responsive: true,
			title:{
				display:true,
				text:'Fruit and Vegetable'
			},
			tooltips: {
				mode: 'index',
				intersect: false,
			},
			hover: {
				mode: 'nearest',
				intersect: true
			},
			scales: {
				xAxes: [{
					display: true,
					scaleLabel: {
						display: true,
						labelString: 'Days'
					}
				}],
				yAxes: [{
					display: true,
					scaleLabel: {
						display: true,
						labelString: 'Servings'
					}
				}]
			}
		}
	});
	
})(jQuery); 