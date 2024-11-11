
 // linegraph1
 var options = {
    chart: {
        type: 'line',
        height: 30,
        width: 100,
        sparkline: {
        enabled: true
        },
        dropShadow: {
        enabled: false,
        blur: 3,
        opacity: 0.2,
        }
        },
        stroke: {
        show: true,
        curve: 'straight',
        lineCap: 'butt',
        colors: undefined,
        width: 2,
        dashArray: 0,
        },
        fill: {
        gradient: {
        enabled: false
        }
    },
    series: [{
        name: 'Total Income',
        data: [0, 30, 10, 35, 26, 31, 14, 22, 40, 12]
    }],
    yaxis: {
        min: 0
    },
	colors: ['#0a9ae1'],
};
var chart2 = new ApexCharts(document.querySelector("#line-graph1"), options);
chart2.render();

//linegarph2
var options = {
    chart: {
        type: 'line',
        height: 30,
        width: 100,
        sparkline: {
        enabled: true
        },
        dropShadow: {
        enabled: false,
        blur: 3,
        opacity: 0.2,
        }
        },
        stroke: {
        show: true,
        curve: 'straight',
        lineCap: 'butt',
        colors: undefined,
        width: 2,
        dashArray: 0,
        },
        fill: {
        gradient: {
        enabled: false
        }
    },
    series: [{
        name: 'Total Income',
        data: [0, 20, 15, 25, 15, 25, 6, 25, 32, 15]
    }],
    yaxis: {
        min: 0
    },
	colors: ['#ff516e'],
};
var chart3 = new ApexCharts(document.querySelector("#line-graph2"), options);
chart3.render();

//linegraph3
var options = {
    chart: {
        type: 'line',
        height: 30,
        width: 100,
        sparkline: {
        enabled: true
        },
        dropShadow: {
        enabled: false,
        blur: 3,
        opacity: 0.2,
        }
        },
        stroke: {
        show: true,
        curve: 'straight',
        lineCap: 'butt',
        colors: undefined,
        width: 2,
        dashArray: 0,
        },
        fill: {
        gradient: {
        enabled: false
        }
    },
    series: [{
        name: 'Total Income',
        data: [0, 10, 30, 12, 16, 25, 4, 35, 26, 15]
    }],
    yaxis: {
        min: 0
    },
	colors: ['#28b98a'],
};
var chart4 = new ApexCharts(document.querySelector("#line-graph3"), options);
chart4.render();

//linegraph4
var options = {
    chart: {
        type: 'line',
        height: 30,
        width: 100,
        sparkline: {
        enabled: true
        },
        dropShadow: {
        enabled: false,
        blur: 3,
        opacity: 0.2,
        }
        },
        stroke: {
        show: true,
        curve: 'straight',
        lineCap: 'butt',
        colors: undefined,
        width: 2,
        dashArray: 0,
        },
        fill: {
        gradient: {
        enabled: false
        }
    },
    series: [{
        name: 'Total Income',
        data: [0, 12, 19, 26, 10, 18, 8, 17, 35, 14]
    }],
    yaxis: {
        min: 0
    },
	colors: ['#f48846'],
};
var chart5 = new ApexCharts(document.querySelector("#line-graph4"), options);
chart5.render();

//linegraph5
var options = {
    chart: {
        type: 'line',
        height: 30,
        width: 100,
        sparkline: {
        enabled: true
        },
        dropShadow: {
        enabled: false,
        blur: 3,
        opacity: 0.2,
        }
        },
        stroke: {
        show: true,
        curve: 'straight',
        lineCap: 'butt',
        colors: undefined,
        width: 2,
        dashArray: 0,
        },
        fill: {
        gradient: {
        enabled: false
        }
    },
    series: [{
        name: 'Total Income',
        data: [12, 8, 19, 26, 10, 18, 8, 17, 35, 14]
    }],
    yaxis: {
        min: 0
    },
	colors: ['#673ab7'],
};
var chart5 = new ApexCharts(document.querySelector("#line-graph5"), options);
chart5.render();