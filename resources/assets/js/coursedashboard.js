
/* Ethereum Chart */
var options = {
    series: [
      {
        data: [14, 48, 20, 64, 10, 55, 45, 75, 35],
      },
    ],
    chart: {
      sparkline: {
        enabled: true,
      },
      type: "line",
      height: 50,
      width: 100,
    },
    tooltip: {
      x: {
        show: false,
      },
      y: {
        title: {
          formatter: function (seriesName) {
            return "";
          },
        },
      },
      marker: {
        show: false,
      },
    },
    colors: ["rgb(1, 98, 232)"],
    stroke: {
      width: [2],
      curve: ["smooth"],
    },
    xaxis: {
      crosshairs: {
        show: false,
      },
    },
  };

  var chart3 = new ApexCharts(document.querySelector("#totalusers"), options);
chart3.render();
function totalusers() {
	chart3.updateOptions({
		colors: ["rgb(" + myVarVal + ")"],
	})
}
  
  function ethCoin() {
    function rgbToHex(r, g, b) {
      return "#" + ((1 << 24) | (r << 16) | (g << 8) | b).toString(16).slice(1);
    }
    chartethCoin.updateOptions({
      colors: [
        rgbToHex(
          myVarVal.split(",")[0],
          myVarVal.split(",")[1],
          myVarVal.split(",")[2]
        ),
      ],
    });
  }
  var options1 = {
    series: [
      {
        data: [14, 48, 20, 64, 10, 55, 45, 75, 35],
      },
    ],
    chart: {
      sparkline: {
        enabled: true,
      },
      type: "line",
      height: 50,
      width: 100,
    },
    tooltip: {
      x: {
        show: false,
      },
      y: {
        title: {
          formatter: function (seriesName) {
            return "";
          },
        },
      },
      marker: {
        show: false,
      },
    },
    colors: ["rgb(238, 51, 94)"],
    stroke: {
      width: [2],
      curve: ["smooth"],
    },
    xaxis: {
      crosshairs: {
        show: false,
      },
    },
  };
  var chart1 = new ApexCharts(document.querySelector("#accesstime"), options1);
  chart1.render();

  var options = {
    series: [
      {
        data: [14, 48, 20, 64, 10, 55, 45, 75, 35],
      },
    ],
    chart: {
      sparkline: {
        enabled: true,
      },
      type: "line",
      height: 50,
      width: 100,
    },
    tooltip: {
      x: {
        show: false,
      },
      y: {
        title: {
          formatter: function (seriesName) {
            return "";
          },
        },
      },
      marker: {
        show: false,
      },
    },
    colors: ["rgb(34 ,192 ,60)"],
    stroke: {
      width: [2],
      curve: ["smooth"],
    },
    xaxis: {
      crosshairs: {
        show: false,
      },
    },
  };
  document.getElementById("totalearning").innerHTML = "";
  var chartethCoin = new ApexCharts(document.querySelector("#totalearning"), options);
  chartethCoin.render();
  
  // function ethCoin() {
  //   function rgbToHex(r, g, b) {
  //     return "#" + ((1 << 24) | (r << 16) | (g << 8) | b).toString(16).slice(1);
  //   }
  //   chartethCoin.updateOptions({
  //     colors: [
  //       rgbToHex(
  //         myVarVal.split(",")[0],
  //         myVarVal.split(",")[1],
  //         myVarVal.split(",")[2]
  //       ),
  //     ],
  //   });
  // }

  var options1 = {
    series: [
      {
        data: [14, 48, 20, 64, 10, 55, 45, 75, 35],
      },
    ],
    chart: {
      sparkline: {
        enabled: true,
      },
      type: "line",
      height: 50,
      width: 100,
    },
    tooltip: {
      x: {
        show: false,
      },
      y: {
        title: {
          formatter: function (seriesName) {
            return "";
          },
        },
      },
      marker: {
        show: false,
      },
    },
    colors: ["rgb(251, 188 ,11)"],
    stroke: {
      width: [2],
      curve: ["smooth"],
    },
    xaxis: {
      crosshairs: {
        show: false,
      },
    },
  };
  var chart1 = new ApexCharts(document.querySelector("#totalvedio"), options1);
  chart1.render();
  
  /* Ethereum Chart 1*/
