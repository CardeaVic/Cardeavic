var records_list = daily_activities.records;
var smoked =0, notSmoked=0;
for(record in records_list){
    if(records_list[record].smoke == '1'){
        smoked += 1;
    }else if(records_list[record].smoke == '0'){
        notSmoked += 1;
    }
}

var ctx = document.getElementById("piechart");
var myPieChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: ["Not Smoked", "Smoked"],
        datasets: [{
            backgroundColor: ['#00c292', '#F44336'],
            borderColor: 'white',
            data: [notSmoked, smoked]
        }],
    },
    options: {
        responsive: true,
        title:{
            display:true,
            text:'Smoking'
        },
        tooltips: {
            mode: 'index',
            intersect: false,
        },
        hover: {
            mode: 'nearest',
            intersect: true
        },
    }
});