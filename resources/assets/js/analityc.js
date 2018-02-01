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

// Quality Chart
var ctx3 = document.getElementById("quality_chart");
var myChart3 = new Chart(ctx3, {
    responsive: true,
    type: 'bar',
    data: {
        labels: ["Quality Producion", 'Quality Service'],
        datasets: [{
            label: 'Data presented on Percentage (%)',
            data: response_quality,
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

// CCK Chart
var ctx4 = document.getElementById("cck_chart");
var myChart4 = new Chart(ctx4, {
    responsive: true,
    type: 'bar',
    data: {
        labels: ["BB added", "BB call", "Elegible", "Added"],
        datasets: [{
            label: 'Data presented on Amount',
            data: response_cck,
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
var ctx5 = document.getElementById("cck_chart_goal");
var myChart5 = new Chart(ctx5, {
    responsive: true,
    type: 'bar',
    data: {
        labels: ["CCK %", "CCK Goal"],
        datasets: [{
            label: 'Data presented on percentage %',
            data: response_cck_goal,
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

var ctx6 = document.getElementById("minor");
var myChart6 = new Chart(ctx6, {
    responsive: true,
    type: 'bar',
    data: {
        labels: ["PP %", "QC %", "i90 %"],
        datasets: [{
            label: 'Data presented on percentage %',
            data: response_minor,
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