/* Start:: Main cards charts */
var spark1 = {
  chart: {
    type: 'line',
    height: 40,
    width: 120,
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
    data: [0, 45, 54, 38, 56, 24, 65, 31, 37, 39, 62, 51, 35, 41, 35, 27, 93, 53, 61, 27, 54, 43, 19, 46]
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
  colors: ['rgb( 34 ,192, 60)'],

}
document.getElementById('btc-chart').innerHTML = '';
var spark1 = new ApexCharts(document.querySelector("#btc-chart"), spark1);
spark1.render();

var spark3 = {
  chart: {
    type: 'line',
    height: 40,
    width: 120,
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
    data: [0, 45, 54, 38, 56, 24, 65, 31, 37, 39, 62, 51, 35, 41, 35, 27, 93, 53, 61, 27, 54, 43, 19, 46]
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
  colors: ['#f93a5a'],

}
document.getElementById('dash-chart').innerHTML = '';
var spark3 = new ApexCharts(document.querySelector("#dash-chart"), spark3);
spark3.render();


var spark2 = {
  chart: {
    type: 'line',
    height: 40,
    width: 120,
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
    data: [0, 45, 54, 38, 56, 24, 65, 31, 37, 39, 62, 51, 35, 41, 35, 27, 93, 53, 61, 27, 54, 43, 19, 46]
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
  colors: ['rgb( 34 ,192, 60)'],

}
document.getElementById('eth-chart').innerHTML = '';
var spark2 = new ApexCharts(document.querySelector("#eth-chart"), spark2);
spark2.render();
/* End:: Main cards charts */

/* Start:: Crypto Currencies Market Value charts */
var spark4 = {
  chart: {
    type: 'area',
    height: 20,
    width: 120,
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
  tooltip: {
    enabled: false,
  },
  series: [{
    name: 'Value',
    data: [0, 45, 54, 38, 56, 24, 65, 31, 37, 39, 62, 51, 35, 41, 35, 27, 93, 53, 61, 27, 54, 43, 19, 46]
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
  colors: ['rgb( 1, 98, 232)'],

}
document.getElementById('bitcoin-price-graph').innerHTML = '';
var spark4 = new ApexCharts(document.querySelector("#bitcoin-price-graph"), spark4);
spark4.render();

var spark5 = {
  chart: {
    type: 'area',
    height: 20,
    width: 120,
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
  tooltip: {
    enabled: false,
  },
  series: [{
    name: 'Value',
    data: [0, 45, 54, 38, 56, 24, 65, 35, 27, 93, 53, 61, 27, 54, 43, 19, 46, 31, 37, 39, 62, 51, 35, 41]
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
  colors: ['rgb(238 ,51 ,94)'],

}
document.getElementById('etherium-price-graph').innerHTML = '';
var spark5 = new ApexCharts(document.querySelector("#etherium-price-graph"), spark5);
spark5.render();

var spark6 = {
  chart: {
    type: 'area',
    height: 20,
    width: 120,
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
  tooltip: {
    enabled: false,
  },
  series: [{
    name: 'Value',
    data: [61, 27, 54, 43, 19, 46, 31, 37, 39, 0, 45, 54, 38, 56, 24, 65, 35, 27, 93, 53, 62, 51, 35, 41]
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
  colors: ['rgb(251 ,188, 11)'],

}
document.getElementById('dash-price-graph').innerHTML = '';
var spark6 = new ApexCharts(document.querySelector("#dash-price-graph"), spark6);
spark6.render();

var spark7 = {
  chart: {
    type: 'area',
    height: 20,
    width: 120,
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
  tooltip: {
    enabled: false,
  },
  series: [{
    name: 'Value',
    data: [61, 27, 54, 43, 19, 56, 24, 65, 35, 27, 93, 53, 46, 31, 37, 39, 0, 45, 54, 38, 62, 51, 35, 41]
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
  colors: ['rgb(34 ,192 ,60)'],

}
document.getElementById('ripple-price-graph').innerHTML = '';
var spark7 = new ApexCharts(document.querySelector("#ripple-price-graph"), spark7);
spark7.render();

var spark8 = {
  chart: {
    type: 'area',
    height: 20,
    width: 120,
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
  tooltip: {
    enabled: false,
  },
  series: [{
    name: 'Value',
    data: [61, 27, 54, 37, 39, 0, 45, 54, 38, 62, 51, 35, 41, 43, 19, 56, 24, 65, 35, 27, 93, 53, 46, 31]
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
  colors: ['rgb(0 ,185, 255)'],

}
document.getElementById('iota-price-graph').innerHTML = '';
var spark8 = new ApexCharts(document.querySelector("#iota-price-graph"), spark8);
spark8.render();

var spark9 = {
  chart: {
    type: 'area',
    height: 20,
    width: 120,
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
  tooltip: {
    enabled: false,
  },
  series: [{
    name: 'Value',
    data: [62, 51, 35, 41, 43, 19, 56, 24, 65, 35, 27, 93, 53, 46, 31, 61, 27, 54, 37, 39, 0, 45, 54, 38]
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
  colors: ['rgb(72, 0 ,201)'],

}
document.getElementById('neo-price-graph').innerHTML = '';
var spark9 = new ApexCharts(document.querySelector("#neo-price-graph"), spark9);
spark9.render();
/* End:: Crypto Currencies Market Value charts */