
  var options2 = {
    series: [{
    data: [12, 14, 2, 47, 42, 15, 47, 75, 65, 19, 14]
  }],
    chart: {
    type: 'line',
    width: 90,
    height: 40,
    sparkline: {
      enabled: true
    }
  },
  stroke: {
    curve: 'smooth',
    width: '2',
  },
  
  colors:['rgb(238, 51,94)'],
  tooltip: {
    fixed: {
      enabled: false
    },
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
  }
  };
  
  var chart2 = new ApexCharts(document.querySelector("#overdueprojects"), options2);
  chart2.render();

  var options2 = {
    series: [{
    data: [12, 14, 2, 47, 42, 15, 47, 75, 65, 19, 14]
  }],
    chart: {
    type: 'line',
    width: 90,
    height: 40,
    sparkline: {
      enabled: true
    }
  },
  stroke: {
    curve: 'smooth',
    width: '2',
  },
  
  colors:['rgb(34 ,192, 60)'],
  tooltip: {
    fixed: {
      enabled: false
    },
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
  }
  };
  
  var chart2 = new ApexCharts(document.querySelector("#pendingprojects"), options2);
  chart2.render();

  //total clients//
  var options = {
    series: [{
      name: 'Sales',
      type: "bar",
      data: [300, 410, 550, 424, 330, 320, 456, 530, 450, 350, 410, 510,420,330,300,420]
    }],
    chart: {
      redrawOnWindowResize: true,
      height: 215,
      type: 'bar',
      toolbar: {
        show: false
      },
    },
    plotOptions: {
      bar: {
        horizontal: false,
        columnWidth: '20%',
        borderRadius: 2
      },
    },
    grid: {
      show: false,
      borderColor: '#f1f1f1',
      strokeDashArray: 3
    },
    dataLabels: {
      enabled: false
    },
    legend: {
      show: false,
      fontSize: "12px",
      position: 'bottom',
      horizontalAlign: 'center',
      fontWeight: 500,
      height: 40,
      offsetX: 0,
      offsetY: 10,
      labels: {
        colors: '#9ba5b7',
      },
      markers: {
        width: 10,
        height: 10,
        strokeWidth: 0,
        strokeColor: '#fff',
        fillColors: undefined,
        radius: 12,
        offsetX: 0,
        offsetY: 0
      },
    },
    colors: ["rgba(255,255,255,0.9)"],
    yaxis: {
        show: false,
      title: {
        style: {
          color: '#adb5be',
          fontSize: '14px',
          fontFamily: 'poppins, sans-serif',
          fontWeight: 600,
          cssClass: 'apexcharts-yaxis-label',
        },
      },
      labels: {
        show: false,
        formatter: function (y) {
          return y.toFixed(0) + "";
        },
        style: {
          colors: "#8c9097",
          fontSize: '11px',
          fontWeight: 600,
          cssClass: 'apexcharts-xaxis-label',
        },
      }
    },
    xaxis: {
      show: false,
      type: "month",
      axisBorder: {
        show: false,
        color: 'rgba(119, 119, 142, 0.05)',
        offsetX: 0,
        offsetY: 0,
      },
      axisTicks: {
        show: false,
        borderType: 'solid',
        color: 'rgba(119, 119, 142, 0.05)',
        width: 6,
        offsetX: 0,
        offsetY: 0
      },
      labels: {
        show: false,
        rotate: -90,
        style: {
          colors: "#8c9097",
          fontSize: '11px',
          fontWeight: 600,
          cssClass: 'apexcharts-xaxis-label',
        },
      }
    },
    fill: {
      opacity: 1
    },
    tooltip: {
      shared: true,
      intersect: false,
      y: {
        formatter: function (y) {
          if (typeof y !== "undefined") {
            return y.toFixed(0) + " points";
          }
          return y;
        },
      },
    },
    fill: {
        type: "gradient",
        gradient: {
            shade: "dark",
            type: "vertical",
            shadeIntensity: 0,
            inverseColors: false,
            gradientToColors: ["rgba(255,255,255,0.8)"],
            opacityFrom: [0.6,0.8,1],
            opacityTo: [0.6, 1, 1],
            stops: [0, 90, 100]
        }
    },
  }

  document.querySelector("#totalclients").innerHTML = '';
  var chart = new ApexCharts(document.querySelector("#totalclients"), options);
  chart.render();
  //total clients
