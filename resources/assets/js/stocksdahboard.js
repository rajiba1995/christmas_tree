
/* Portfolio Value Chart */
var stocks3 = {
    chart: {
        type: 'line',
        height: 50,
        width: 100,
        sparkline: {
            enabled: true
        }
    },
    stroke: {
        show: true,
        curve: 'smooth',
        lineCap: 'butt',
        colors: undefined,
        width: 2,
        dashArray: 0,
    },
    fill: {
        type: 'dolif'
    },
    series: [{
        name: 'Value',
        data: [20, 14, 19, 10, 23, 20, 22, 9, 12,17,14,25,8]
    }],
    yaxis: {
        min: 0,
        show: false,
        axisBorder: {
            show: false
        },
    },
    xaxis: {
        show: false,
        axisBorder: {
            show: false
        },
    },
    tooltip: {
        enabled: false,
    },
    colors: ["rgb(238 ,51 ,94)"],

}
var stocks3 = new ApexCharts(document.querySelector("#portfolio-value"), stocks3);
stocks3.render();
/* Portfolio Value Chart */

/* Returns Rate Chart */
var stocks4 = {
    chart: {
        type: 'line',
        height: 50,
        width: 100,
        sparkline: {
            enabled: true
        }
    },
    stroke: {
        show: true,
        curve: 'smooth',
        lineCap: 'butt',
        colors: undefined,
        width: 2,
        dashArray: 0,
    },
    fill: {
        type: 'solid'
    },
    series: [{
        name: 'Value',
        data: [20, 14, 19, 10, 23, 20, 22, 9, 12,17,14,25,8]
    }],
    yaxis: {
        min: 0,
        show: false,
        axisBorder: {
            show: false
        },
    },
    xaxis: {
        show: false,
        axisBorder: {
            show: false
        },
    },
    tooltip: {
        enabled: false,
    },
    colors: ["rgb(34 ,192 ,60)"],

}
var stocks4 = new ApexCharts(document.querySelector("#returns-rate"), stocks4);
stocks4.render();
/* Returns Rate Chart */

/* Returns Rate Chart */
var stocks4 = {
    chart: {
        type: 'line',
        height: 50,
        width: 100,
        sparkline: {
            enabled: true
        }
    },
    stroke: {
        show: true,
        curve: 'smooth',
        lineCap: 'butt',
        colors: undefined,
        width: 2,
        dashArray: 0,
    },
    fill: {
        type: 'solid'
    },
    series: [{
        name: 'Value',
        data: [20, 14, 19, 10, 23, 20, 22, 9, 12,17,14,25,8]
    }],
    yaxis: {
        min: 0,
        show: false,
        axisBorder: {
            show: false
        },
    },
    xaxis: {
        show: false,
        axisBorder: {
            show: false
        },
    },
    tooltip: {
        enabled: false,
    },
    colors: ["rgb(0, 185 ,255)"],

}
var stocks4 = new ApexCharts(document.querySelector("#investiments"), stocks4);
stocks4.render();
/* Returns Rate Chart */

/* nvida-stock chart */
var spark1 = {
    chart: {
        type: 'line',
        height: 30,
        width: 90,
        sparkline: {
            enabled: true
        },
        dropShadow: {
            enabled: true,
            enabledOnSeries: undefined,
            top: 0,
            left: 0,
            blur: 3,
            color: '#000',
            opacity: 0.1
        }
    },
    stroke: {
        show: true,
        curve: 'smooth',
        lineCap: 'butt',
        colors: undefined,
        width: 1.5,
        dashArray: 0,
    },
    fill: {
        gradient: {
            enabled: false
        }
    },
    series: [{
        name: 'Value',
        data: [0, 45, 54, 38, 56, 24, 65, 27, 93, 53, 61, 27, 54, 43, 19, 46, 31, 37, 39, 62, 51, 35, 41, 35]
    }],
    yaxis: {
        min: 0,
        show: false
    },
    xaxis: {
        axisBorder: {
            show: false
        },
    },
    yaxis: {
        axisBorder: {
            show: false
        },
    },
    colors: ['rgb(238, 51 ,94)'],

}
var spark1 = new ApexCharts(document.querySelector("#nvida-stock"), spark1);
spark1.render();
/* nvida-stock chart */

/* tesla-stock chart */
var spark1 = {
    chart: {
        type: 'line',
        height: 30,
        width: 90,
        sparkline: {
            enabled: true
        },
        dropShadow: {
            enabled: true,
            enabledOnSeries: undefined,
            top: 0,
            left: 0,
            blur: 3,
            color: '#000',
            opacity: 0.1
        }
    },
    stroke: {
        show: true,
        curve: 'smooth',
        lineCap: 'butt',
        colors: undefined,
        width: 1.5,
        dashArray: 0,
    },
    fill: {
        gradient: {
            enabled: false
        }
    },
    series: [{
        name: 'Value',
        data: [0, 45, 54, 38, 56, 24, 65, 27, 93, 53, 61, 27, 54, 43, 19, 46, 31, 37, 39, 62, 51, 35, 41, 35]
    }],
    yaxis: {
        min: 0,
        show: false
    },
    xaxis: {
        axisBorder: {
            show: false
        },
    },
    yaxis: {
        axisBorder: {
            show: false
        },
    },
    colors: ['rgb(0 ,185 ,255)'],

}
var spark1 = new ApexCharts(document.querySelector("#tesla-stock"), spark1);
spark1.render();
/* tesla-stock chart */

/* amazon-stock chart */
var spark1 = {
    chart: {
        type: 'line',
        height: 30,
        width: 90,
        sparkline: {
            enabled: true
        },
        dropShadow: {
            enabled: true,
            enabledOnSeries: undefined,
            top: 0,
            left: 0,
            blur: 3,
            color: '#000',
            opacity: 0.1
        }
    },
    stroke: {
        show: true,
        curve: 'smooth',
        lineCap: 'butt',
        colors: undefined,
        width: 1.5,
        dashArray: 0,
    },
    fill: {
        gradient: {
            enabled: false
        }
    },
    series: [{
        name: 'Value',
        data: [0, 45, 54, 38, 56, 24, 65, 27, 93, 53, 61, 27, 54, 43, 19, 46, 31, 37, 39, 62, 51, 35, 41, 35]
    }],
    yaxis: {
        min: 0,
        show: false
    },
    xaxis: {
        axisBorder: {
            show: false
        },
    },
    yaxis: {
        axisBorder: {
            show: false
        },
    },
    colors: ['rgb(251 ,188 ,11)'],

}
var spark1 = new ApexCharts(document.querySelector("#amazon-stock"), spark1);
spark1.render();
/* amazon-stock chart */

/* ali-stock chart */
var spark1 = {
    chart: {
        type: 'line',
        height: 30,
        width: 90,
        sparkline: {
            enabled: true
        },
        dropShadow: {
            enabled: true,
            enabledOnSeries: undefined,
            top: 0,
            left: 0,
            blur: 3,
            color: '#000',
            opacity: 0.1
        }
    },
    stroke: {
        show: true,
        curve: 'smooth',
        lineCap: 'butt',
        colors: undefined,
        width: 1.5,
        dashArray: 0,
    },
    fill: {
        gradient: {
            enabled: false
        }
    },
    series: [{
        name: 'Value',
        data: [0, 45, 54, 38, 56, 24, 65, 27, 93, 53, 61, 27, 54, 43, 19, 46, 31, 37, 39, 62, 51, 35, 41, 35]
    }],
    yaxis: {
        min: 0,
        show: false
    },
    xaxis: {
        axisBorder: {
            show: false
        },
    },
    yaxis: {
        axisBorder: {
            show: false
        },
    },
    colors: ['rgb(34 ,192, 60)'],

}
var spark1 = new ApexCharts(document.querySelector("#ali-stock"), spark1);
spark1.render();
/* ali-stock chart */

/* samsong-stock chart */
var spark1 = {
    chart: {
        type: 'line',
        height: 30,
        width: 90,
        sparkline: {
            enabled: true
        },
        dropShadow: {
            enabled: true,
            enabledOnSeries: undefined,
            top: 0,
            left: 0,
            blur: 3,
            color: '#000',
            opacity: 0.1
        }
    },
    stroke: {
        show: true,
        curve: 'smooth',
        lineCap: 'butt',
        colors: undefined,
        width: 1.5,
        dashArray: 0,
    },
    fill: {
        gradient: {
            enabled: false
        }
    },
    series: [{
        name: 'Value',
        data: [0, 45, 54, 38, 56, 24, 65, 27, 93, 53, 61, 27, 54, 43, 19, 46, 31, 37, 39, 62, 51, 35, 41, 35]
    }],
    yaxis: {
        min: 0,
        show: false
    },
    xaxis: {
        axisBorder: {
            show: false
        },
    },
    yaxis: {
        axisBorder: {
            show: false
        },
    },
    colors: ['rgb(253 ,126,20)'],

}
var spark1 = new ApexCharts(document.querySelector("#samsong-stock"), spark1);
spark1.render();
/* samsong-stock chart */
