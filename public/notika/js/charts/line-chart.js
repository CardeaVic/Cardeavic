var records_list = daily_activities.records;
var date = [];
var minutes = [];
var servings = [];
for(record in records_list){
	var x = records_list[record];
	var m = x.minutes;
	var h = x.hours * 60;
	date.push(moment(x.date).format('D/M'));
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
                label: "Your Daily Activity Minutes",
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
			},
            layout: {
                padding: {
                    left: 20,
                    right: 0,
                    top: 0,
                    bottom: 20
                }
            },
            annotation: {
                annotations: [{
                    type: 'line',
                    mode: 'horizontal',
                    scaleID: 'y-axis-0',
                    value: '30',
                    borderColor: '#53e3a6',
                    borderWidth: 3,
                    label: {
                        enabled: true,
                        content: 'Expected Level',
                        backgroundColor: 'red'
                    }
                }],
                drawTime: "afterDraw" // (default)
            },
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
                label: "Your Daily Servings",
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
				text:'Fruit and Vegetable Servings'
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
                    ticks: {
                        max: 10,
                        min: 0,
                        stepSize: 1
                    },
					scaleLabel: {
						display: true,
						labelString: 'Servings'
					}
				}]
			},
            layout: {
                padding: {
                    left: 20,
                    right: 0,
                    top: 0,
                    bottom: 20
                }
            },
            annotation: {
                annotations: [{
                    type: 'line',
                    mode: 'horizontal',
                    scaleID: 'y-axis-0',
                    value: '5',
                    borderColor: '#53e3a6',
                    borderWidth: 3,
                    label: {
                        enabled: true,
                        content: 'Expected Level',
                        backgroundColor: 'red'
                    }
                }],
                drawTime: "afterDraw" // (default)
            },
		}
	});

})(jQuery);
