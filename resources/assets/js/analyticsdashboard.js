var options = {
    series: [{
        name: 'series1',
        data: [12, 40, 35, 51, 48, 62, 99]
      },{
        name: 'series2',
        data: [20, 72, 59, 65, 57, 79, 110]
      }],
    chart: {
        height: 150,
        type: 'line',
        toolbar: {
            show: false
        },
        dropShadow: {
            enabled: true,
            enabledOnSeries: undefined,
            top: 3,
            left: 3,
            blur: 3,
            color: '#000',
            opacity: 0.05
        },
      },
    dataLabels: {
        enabled: false
    },
    grid: {
        show: false,
        borderColor: 'transparent',
        padding: {
            top: 0,
            right: 0,
            bottom: 0,
            left: 0
        }
    },
    stroke: {
        curve: 'smooth',
        width: 2,
        dashArray: [0, 6],
    },
    colors: ["rgba(255,255,255,0.8)", "rgba(255,255,255,0.3)"],
    // fill: {
    // 	colors: [myVarVal],
    // },
    legend: {
        show: false
    },
    xaxis: {
        type: 'week',
        categories: ['S', 'M', 'T', 'W', 'T', 'F', 'S'],
        axisBorder: {
            show: false
        },
        axisTicks: {
            show: false
        },
        labels: {
            show: false
        }
    },
    yaxis: {
        labels: {
            show: false
        }
    },
    tooltip: {
      enabled: false,
        x: {
            format: 'dd/MM/yy HH:mm'
        },
    },
};

var chart = new ApexCharts(document.querySelector("#activeusers"), options);
chart.render();

/* sessions Chart */
var total = {
    series: [{
        data: [98, 110, 90, 145, 105, 112, 87, 148, 102]
    }],
    chart: {
        height: 50,
        type: 'area',
        fontFamily: 'Poppins, sans-serif',
        foreColor: '#5d6162',
        zoom: {
            enabled: false
        },
        sparkline: {
            enabled: true
        }
    },
    tooltip: {
        enabled: true,
        x: {
            show: false
        },
        y: {
            title: {
                formatter: function (seriesName) {
                    return ''
                }
            }
        },
        marker: {
            show: false
        }
    },
    dataLabels: {
        enabled: false
    },
    stroke: {
        curve: 'straight'
    },
    title: {
        text: undefined,
    },
    grid: {
        borderColor: 'transparent',
    },
    xaxis: {
        crosshairs: {
            show: false,
        }
    },
    colors: ["rgba(238 ,51 ,94)"],
    stroke: {
        width: [1.5],
    },
    fill: {
        type: 'gradient',
        gradient: {
            opacityFrom: 0.5,
            opacityTo: 0.2,
            stops: [0, 60],
            colorStops: [
              [
                {
                  offset: 0,
                  color: 'rgba(238 ,51 ,94,0.2)',
                  opacity: 1
                },
                {
                  offset: 60,
                  color: 'rgba(238 ,51 ,94,0.2)',
                  opacity: 0.1
                }
              ],
            ]
        },
    },
};
var total = new ApexCharts(document.querySelector("#analytics-sessions"), total);
total.render();
function bounceRate() {
    total.updateOptions({
        colors: ["rgba(" + myVarVal + ")"],
    })
}
/* sessions Chart */

/* visitors Chart */
var total = {
    series: [{
        data: [98, 110, 90, 145, 105, 112, 87, 148, 102]
    }],
    chart: {
        height: 50,
        type: 'area',
        fontFamily: 'Poppins, sans-serif',
        foreColor: '#5d6162',
        zoom: {
            enabled: false
        },
        sparkline: {
            enabled: true
        }
    },
    tooltip: {
        enabled: true,
        x: {
            show: false
        },
        y: {
            title: {
                formatter: function (seriesName) {
                    return ''
                }
            }
        },
        marker: {
            show: false
        }
    },
    dataLabels: {
        enabled: false
    },
    stroke: {
        curve: 'straight'
    },
    title: {
        text: undefined,
    },
    grid: {
        borderColor: 'transparent',
    },
    xaxis: {
        crosshairs: {
            show: false,
        }
    },
    colors: ["rgba(34, 192 ,60)"],
    stroke: {
        width: [1.5],
    },
    fill: {
        type: 'gradient',
        gradient: {
            opacityFrom: 0.5,
            opacityTo: 0.2,
            stops: [0, 60],
            colorStops: [
              [
                {
                  offset: 0,
                  color: 'rgba(34, 192 ,60,0.2)',
                  opacity: 1
                },
                {
                  offset: 60,
                  color: 'rgba(34, 192 ,60,0.2)',
                  opacity: 0.1
                }
              ],
            ]
        },
    },
};
var total = new ApexCharts(document.querySelector("#analytics-visitors"), total);
total.render();
// function bounceRate() {
//     total.updateOptions({
//         colors: ["rgba(" + myVarVal + ")"],
//     })
// }
/* visitors Chart */

/* pageviews Chart */
var total = {
    series: [{
        data: [98, 110, 90, 145, 105, 112, 87, 148, 102]
    }],
    chart: {
        height: 50,
        type: 'area',
        fontFamily: 'Poppins, sans-serif',
        foreColor: '#5d6162',
        zoom: {
            enabled: false
        },
        sparkline: {
            enabled: true
        }
    },
    tooltip: {
        enabled: true,
        x: {
            show: false
        },
        y: {
            title: {
                formatter: function (seriesName) {
                    return ''
                }
            }
        },
        marker: {
            show: false
        }
    },
    dataLabels: {
        enabled: false
    },
    stroke: {
        curve: 'straight'
    },
    title: {
        text: undefined,
    },
    grid: {
        borderColor: 'transparent',
    },
    xaxis: {
        crosshairs: {
            show: false,
        }
    },
    colors: ["rgba(251, 188 ,11)"],
    stroke: {
        width: [1.5],
    },
    fill: {
        type: 'gradient',
        gradient: {
            opacityFrom: 0.5,
            opacityTo: 0.2,
            stops: [0, 60],
            colorStops: [
              [
                {
                  offset: 0,
                  color: 'rgba(251, 188 ,11,0.2)',
                  opacity: 1
                },
                {
                  offset: 60,
                  color: 'rgba(251, 188 ,11,0.2)',
                  opacity: 0.1
                }
              ],
            ]
        },
    },
};
var total = new ApexCharts(document.querySelector("#analytics-views"), total);
total.render();
// function bounceRate() {
//     total.updateOptions({
//         colors: ["rgba(" + myVarVal + ")"],
//     })
// }

/* pageviews Chart */

/* total users Chart */
var options = {
    chart: {
        height: 130,
        width: 130,
        type: "radialBar",
    },

    series: [48],
    colors: ["rgb(238, 51 ,94)"],
    plotOptions: {
        radialBar: {
            hollow: {
                margin: 0,
                size: "50%",
                background: "#fff"
            },
            dataLabels: {
                name: {
                    offsetY: -10,
                    color: "#23b7e5",
                    fontSize: "10px",
                    show: false
                },
                value: {
                    offsetY: 5,
                    color: "#23b7e5",
                    fontSize: "12px",
                    show: true,
                    fontWeight: 800
                }
            }
        }
    },
    stroke: {
        lineCap: "round"
    },
    labels: ["Followers"]
};
document.querySelector("#totalusers").innerHTML = ""
var chart6 = new ApexCharts(document.querySelector("#totalusers"), options);
chart6.render();
/* total users Chart */