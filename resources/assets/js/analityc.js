var ctx = document.getElementById("myChart");
var myChart = new Chart(ctx, {
    responsive: true,
    type: 'horizontalBar',
    data: {
        labels: ["Activity Management", "Quality Control", "Customer Expirience"],
        datasets: [{
            label: 'Total Score',
            data: response,
            backgroundColor: [
                'rgba(137,167,191,0.7)',
                'rgba(91,111,127,0.7)',
                'rgba(182,222,255,0.7)',
                'rgba(46,56,64,0.7)',
                'rgba(164,200,229,0.7)'
            ],
            borderColor: [
                'rgba(137,167,191,0.7)',
                'rgba(91,111,127,0.7)',
                'rgba(182,222,255,0.7)',
                'rgba(46,56,64,0.7)',
                'rgba(164,200,229,0.7)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true,
                }
            }]
        }
    }
});

var ctx2 = document.getElementById("activity_chart");
var myChart2 = new Chart(ctx2, {
    responsive: true,
    type: 'bar',
    data: {
        labels: ["SDC Production", "Production Goal", "SDC Service", "Service Goal"],
        datasets: [{
            label: 'Data presented on Percentage (%)',
            data: response_activity,
            backgroundColor: [
                'rgba(137,167,191,0.7)',
                'rgba(91,111,127,0.7)',
                'rgba(182,222,255,0.7)',
                'rgba(46,56,64,0.7)',
                'rgba(164,200,229,0.7)'
            ],
            borderColor: [
                'rgba(137,167,191,0.7)',
                'rgba(91,111,127,0.7)',
                'rgba(182,222,255,0.7)',
                'rgba(46,56,64,0.7)',
                'rgba(164,200,229,0.7)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        responsive: true,
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true,
                }
            }]
        }
    }
});