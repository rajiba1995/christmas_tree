/********** Sales Report Chart **********/
var element = document.getElementById("Sales-bar");
if (element !== null) {
  element.innerHTML = "";
	var options1 = {
		series: [{
			name: 'success',
			data: [74, 85, 57, 56, 76, 35, 61, 98, 36, 50, 48, 29]
		}, {
			name: 'Pending',
			data: [46, 35, 101, 98, 44, 55, 57, 56, 55, 34, 79, 46]
		}, {
			name: 'Failed',
			data: [26, 35, 41, 78, 34, 65, 27, 46, 37, 65, 49, 23]
		}],
		chart: {
			height: 256,
			type: "bar",
			toolbar: {
				show: false,
			},
			fontFamily: 'Nunito, sans-serif',
		},
		dataLabels: {
			enabled: false
		},
		stroke: {
			show: true,
			width: 2,
			endingShape: 'rounded',
			colors: ['transparent'],
		},
		grid: {
			borderColor: '#f3f3f3',
			xaxis: {
				lines: {
					show: false
				}
			},
		},
		xaxis: {
			categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
			axisBorder: {
				show: false,
			},
			axisTicks: {
				show: false,
			},
		},
		yaxis: {
			axisBorder: {
				show: false,
			},
		},
		legend: {
			show: false
		},
		labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
		markers: {
			size: 0
		},
		colors: ['#0162e8', '#f93a5a', '#f7a556'],
		plotOptions: {
			bar: {
				columnWidth: "45%",
				endingShape: 'rounded',
			}
		},
		fill: {
			opacity: 1
		},
		legend: {
			show: false,
		},
		tooltip: {
			y: {
				formatter: function (val) {
					return "$ " + val + " thousands"
				}
			}
		}
	};
	// document.getElementById('Sales-bar').innerHTML = ''
	var chart1 = new ApexCharts(document.querySelector("#Sales-bar"), options1);
	chart1.render();
}
export function salesReport(myVarVal) {
	chart1.updateOptions({
		colors: ["rgb(" + myVarVal + ")", "#f93a5a", "#f7a556"],
	})
}

var element = document.getElementById("chart");
if (element !== null) {
  element.innerHTML = "";
	var options = {
		chart: {
			width: 200,
			height: 205,
			responsive: 'true',
			reset: 'true',
			type: 'radialBar',
			offsetX: 0,
			offsetY: 0,
		},
		plotOptions: {
			radialBar: {
				responsive: 'true',
				startAngle: -135,
				endAngle: 135,
				size: 120,
				imageWidth: 50,
				imageHeight: 50,

				track: {
					strokeWidth: "80%",
					background: '#ecf0fa',
				},
				dropShadow: {
					enabled: false,
					top: 0,
					left: 0,
					bottom: 0,
					blur: 3,
					opacity: 0.5
				},
				dataLabels: {
					name: {
						fontSize: '16px',
						color: undefined,
						offsetY: 30,
					},
					hollow: {
						size: "60%"
					},
					value: {
						offsetY: -10,
						fontSize: '22px',
						color: undefined,
						formatter: function (val) {
							return val + "%";
						}
					}
				}
			}
		},
		colors: ['#0db2de'],
		fill: {
			type: "gradient",
			gradient: {
				shade: "dark",
				type: "horizontal",
				shadeIntensity: .5,
				gradientToColors: ['#0162e8'],
				inverseColors: !0,
				opacityFrom: 1,
				opacityTo: 1,
				stops: [0, 100]
			}
		},
		stroke: {
			dashArray: 4
		},
		series: [83],
		labels: [""]
	};

	document.querySelector('#chart').innerHTML = ""
	var chart = new ApexCharts(document.querySelector("#chart"), options);
	chart.render();
}
export function sales(myVarVal) {
	chart.updateOptions({
		fill: {
			type: "gradient",
			gradient: {
				shade: "dark",
				type: "horizontal",
				shadeIntensity: .5,
				gradientToColors:["rgb(" + myVarVal + ")"],
				inverseColors: !0,
				opacityFrom: 1,
				opacityTo: 1,
				stops: [0, 100]
			}
		},
	})
}

export function vectormap(myVarVal) {
	document.querySelector('#us-map1').innerHTML = ""
		/* us vector map */
		var map = new jsVectorMap({
		selector: "#us-map1",
		map: "us_merc_en",
		regionStyle: {
			initial: {
				stroke: "#e9e9e9",
				strokeWidth: .15,
				fill: "rgb(" + myVarVal + ")",
				fillOpacity: 1,
				enableZoom: false,
			}
		},
		});
}


/********** crmdashboard **********/


/* lead by source */
var element = document.getElementById("leadbysouce");
if (element !== null) {
	element.innerHTML = "";
	var options = {
		series: [40, 30, 25, 20, 45],
		labels: ['New Deal', 'Lost Deal', 'Won Deal','Proposal Deal','Referral Deal'],
		chart: {
			type: 'polarArea',
			height: 280
		},
		stroke: {
			colors: ['#fff'],
			width: 0
		},
		fill: {
			opacity: 1
		},
		legend: {
			show: false,
			position: 'bottom',
			itemMargin: {
				horizontal: 5,
				vertical: 5
			},
			fontFamily: "Montserrat",
		},
		dropShadow: {
			enabled: true,
			enabledOnSeries: undefined,
			top: 7,
			left: 10,
			blur: 3,
			color: '#000',
			opacity: 1
		},
		plotOptions: {
			polarArea: {
			rings: {
				strokeWidth: 0
			},
			spokes: {
				strokeWidth: 0
			},
			}
		},
		grid: {
			padding: {
			top: 30,
			bottom: -30
			}
		},
		yaxis: {
			show: false
		},
		
		colors: ['#f93a5a','#f7a556','rgb( 34 ,192, 60)','rgb(0 ,185, 255)','#0162e8'],
	};
	var chart9 = new ApexCharts(document.querySelector("#leadbysouce"), options);
	chart9.render();
}
export function leadbysouce(myVarVal) {
    chart9.updateOptions({
        colors: ['#f93a5a','#f7a556','rgb( 34 ,192, 60)','rgb(0 ,185, 255)',"rgb(" + myVarVal + ")"],
    })
}
/* lead  by source */

/*revenue*/
var element = document.getElementById("revenue");
if (element !== null) {
  element.innerHTML = "";
	var options = {
		chart: {
			height: 300,
			type: "line",
			stacked: false,
			fontFamily: 'poppins, sans-serif',
		},
		dataLabels: {
			enabled: false
		},
		series: [{
			name: 'Sales',
			type: 'column',
			data: [106, 150, 230, 212, 134, 112, 225, 128, 87, 200, 253, 167],
		},{
			name: 'Revenue',
			type: 'line',
			data: [35, 52, 86, 65, 102, 70, 152, 87, 55, 92, 170, 80],
		}],
		stroke: {
			width: [0,2],
			curve: 'smooth'
		},
		plotOptions: {
			bar: {
				columnWidth: '20%',
			}
		},
		fill: {
			opacity: [1, 1]
		},
		grid: {
			borderColor: '#f2f6f7',
		},
		legend: {
			show: true,
			position: 'top',
			fontWeight: 500,
			fontSize: 13,
			markers: {
				width: 10,
				height: 10,
				shape: 'square',
				radius: 5,
			}
		},
		colors: ['#0162e8', '#f93a5a'],
		yaxis: {
			min: 0,
			forceNiceScale: true,
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
				formatter: function (y) {
					return y.toFixed(0) + "";
				}
			}
		},
		toolbar:{
			show: false,
		},
		xaxis: {
			type: 'month',
			categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
			axisBorder: {
				show: true,
				color: 'rgba(119, 119, 142, 0.05)',
				offsetX: 0,
				offsetY: 0,
			},
			axisTicks: {
				show: true,
				borderType: 'solid',
				color: 'rgba(119, 119, 142, 0.05)',
				width: 6,
				offsetX: 0,
				offsetY: 0
			},
			labels: {
				rotate: -90
			}
		},
		tooltip: {
			enabled: true,
			shared: false,
			intersect: true,
			x: {
				show: false
			}
		},
	};
	var chart1 = new ApexCharts(document.querySelector("#revenue"), options);
	chart1.render();
	}
export function revenue(myVarVal) {
	chart1.updateOptions({
		colors: ["rgb(" + myVarVal + ")", "#f93a5a"],
	})
}
/*revenue*/


/**********  ecommercedashboard **********/


/*earnings*/
var element = document.getElementById("earnings");
if (element !== null) {
  element.innerHTML = "";
	var options = {
		series: [{
			name: "First Half",
			data: [30, 38, 25, 42, 35, 23, 63, 25, 53, 57, 38, 40],
			type: 'line',
		},
		{
			name: "Top Gross",
			data: [20, 38, 38, 72, 55, 63, 43, 55, 33, 45, 30, 60],
			type: 'line',
		},
		{
			name: "Second Half",
			data: [20, 53, 15, 23, 48, 52, 78, 43, 47, 73, 45, 28],
			type: 'line',
		}],
		chart: {
			type: 'line',
			height: 315
		},
		grid: {
			borderColor: 'rgba(167, 180, 201 ,0.2)',
		},
		colors: ['#0162e8', '#f93a5a', 'rgb(34 ,192, 60)'],
		stroke: {
			curve: 'smooth',
			width: [2, 2, 2],
			dashArray: [0, 0, 0]
		},
		dataLabels: {
			enabled: false,
		},
		legend: {
			show: true,
			position: 'top',
			labels: {
				colors: '#74767c',
			},
		},
		yaxis: {
			labels: {
				formatter: function (y) {
					return y.toFixed(0) + "";
				}
			},
			labels: {
				style: {
					colors: "#8c9097",
					fontSize: '11px',
					fontWeight: 600,
					cssClass: 'apexcharts-xaxis-label',
				},
			}
		},
		xaxis: {
			type: 'month',
			categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'sep', 'oct', 'nov', 'dec'],
			axisBorder: {
				show: true,
				color: 'rgba(167, 180, 201 ,0.2)',
				offsetX: 0,
				offsetY: 0,
			},
			axisTicks: {
				show: true,
				borderType: 'solid',
				color: 'rgba(167, 180, 201 ,0.2)',
				width: 6,
				offsetX: 0,
				offsetY: 0
			},
			labels: {
				rotate: -90,
				style: {
					colors: "#8c9097",
					fontSize: '11px',
					fontWeight: 600,
					cssClass: 'apexcharts-xaxis-label',
				},
			}
		}
	};
	var chart1 = new ApexCharts(document.querySelector("#earnings"), options);
	chart1.render();
}
export function earnings(myVarVal) {
    chart1.updateOptions({
        colors: ["rgb(" + myVarVal + ")", "#f93a5a", "#f7a556"],
    })
}
/*earnings*/

/* sales category */
var element = document.getElementById("salesDonut");
if (element !== null) {
  element.innerHTML = "";
	var options = {
		plotOptions: {
			pie: {
				size: 10,
				donut: {
					size: '70%',
					labels: {
						show: true,
						name: {
							show: true,
							fontSize: '20px',
							color: '',
							offsetY: -4
						},
						value: {
							show: true,
							fontSize: '18px',
							color: undefined,
							offsetY: 8,
							formatter: function (val) {
								return val + "%"
							}
						},
						total: {
							show: true,
							showAlways: true,
							label: 'Total',
							fontSize: '22px',
							fontWeight: 600,
							color: '',
						}

					}
				}
			}
		},
		dataLabels: {
			enabled: false,
		},
		series: [125, 34, 51],
		labels: ['Electronics', 'Women\'s', 'Men\'s'],
		chart: {
			type: 'donut',
			fontFamily: 'Poppins, Arial, sans-serif',
			height: 255,
		},
		colors: ['#0162e8', '#f93a5a', 'rgb(247, 165, 86)'],
		legend: {
			show: false,
			fontSize: '13px',
			position: 'bottom',
			labels: {
				colors: '#5d6162',
			},
		},
		responsive: [{
			breakpoint: 0,
			options: {
				chart: {
					width: 100,
				},
				legend: {
					show: true,
					fontSize: '14px',
					position: 'bottom',
				}
			},
		}]
	};
	var chart9 = new ApexCharts(document.querySelector("#salesDonut"), options);
	chart9.render();
}
export function salesDonut(myVarVal) {
    chart9.updateOptions({
        colors: ["rgb(" + myVarVal + ")", '#f93a5a', 'rgb(247, 165, 86)'],
    })
}
/* sales category */


/********** cryptodashboard **********/


/* Start:: Crypto Statistics chart */
var element = document.getElementById("crypto");
if (element !== null) {
  element.innerHTML = "";
	var options = {
		series: [{
		data: [{
			x: new Date(1538778600000),
			y: [6629.81, 6650.5, 6623.04, 6633.33]
		},
		{
			x: new Date(1538780400000),
			y: [6632.01, 6643.59, 6620, 6630.11]
		},
		{
			x: new Date(1538782200000),
			y: [6630.71, 6648.95, 6623.34, 6635.65]
		},
		{
			x: new Date(1538784000000),
			y: [6635.65, 6651, 6629.67, 6638.24]
		},
		{
			x: new Date(1538785800000),
			y: [6638.24, 6640, 6620, 6624.47]
		},
		{
			x: new Date(1538787600000),
			y: [6624.53, 6636.03, 6621.68, 6624.31]
		},
		{
			x: new Date(1538789400000),
			y: [6624.61, 6632.2, 6617, 6626.02]
		},
		{
			x: new Date(1538791200000),
			y: [6627, 6627.62, 6584.22, 6603.02]
		},
		{
			x: new Date(1538793000000),
			y: [6605, 6608.03, 6598.95, 6604.01]
		},
		{
			x: new Date(1538794800000),
			y: [6604.5, 6614.4, 6602.26, 6608.02]
		},
		{
			x: new Date(1538796600000),
			y: [6608.02, 6610.68, 6601.99, 6608.91]
		},
		{
			x: new Date(1538798400000),
			y: [6608.91, 6618.99, 6608.01, 6612]
		},
		{
			x: new Date(1538800200000),
			y: [6612, 6615.13, 6605.09, 6612]
		},
		{
			x: new Date(1538802000000),
			y: [6612, 6624.12, 6608.43, 6622.95]
		},
		{
			x: new Date(1538803800000),
			y: [6623.91, 6623.91, 6615, 6615.67]
		},
		{
			x: new Date(1538805600000),
			y: [6618.69, 6618.74, 6610, 6610.4]
		},
		{
			x: new Date(1538807400000),
			y: [6611, 6622.78, 6610.4, 6614.9]
		},
		{
			x: new Date(1538809200000),
			y: [6614.9, 6626.2, 6613.33, 6623.45]
		},
		{
			x: new Date(1538811000000),
			y: [6623.48, 6627, 6618.38, 6620.35]
		},
		{
			x: new Date(1538812800000),
			y: [6619.43, 6620.35, 6610.05, 6615.53]
		},
		{
			x: new Date(1538814600000),
			y: [6615.53, 6617.93, 6610, 6615.19]
		},
		{
			x: new Date(1538816400000),
			y: [6615.19, 6621.6, 6608.2, 6620]
		},
		{
			x: new Date(1538818200000),
			y: [6619.54, 6625.17, 6614.15, 6620]
		},
		{
			x: new Date(1538820000000),
			y: [6620.33, 6634.15, 6617.24, 6624.61]
		},
		{
			x: new Date(1538821800000),
			y: [6625.95, 6626, 6611.66, 6617.58]
		},
		{
			x: new Date(1538823600000),
			y: [6619, 6625.97, 6595.27, 6598.86]
		},
		{
			x: new Date(1538825400000),
			y: [6598.86, 6598.88, 6570, 6587.16]
		},
		{
			x: new Date(1538827200000),
			y: [6588.86, 6600, 6580, 6593.4]
		},
		{
			x: new Date(1538829000000),
			y: [6593.99, 6598.89, 6585, 6587.81]
		},
		{
			x: new Date(1538830800000),
			y: [6587.81, 6592.73, 6567.14, 6578]
		},
		{
			x: new Date(1538832600000),
			y: [6578.35, 6581.72, 6567.39, 6579]
		},
		{
			x: new Date(1538834400000),
			y: [6579.38, 6580.92, 6566.77, 6575.96]
		},
		{
			x: new Date(1538836200000),
			y: [6575.96, 6589, 6571.77, 6588.92]
		},
		{
			x: new Date(1538838000000),
			y: [6588.92, 6594, 6577.55, 6589.22]
		},
		{
			x: new Date(1538839800000),
			y: [6589.3, 6598.89, 6589.1, 6596.08]
		},
		{
			x: new Date(1538841600000),
			y: [6597.5, 6600, 6588.39, 6596.25]
		},
		{
			x: new Date(1538843400000),
			y: [6598.03, 6600, 6588.73, 6595.97]
		},
		{
			x: new Date(1538845200000),
			y: [6595.97, 6602.01, 6588.17, 6602]
		},
		{
			x: new Date(1538847000000),
			y: [6602, 6607, 6596.51, 6599.95]
		},
		{
			x: new Date(1538848800000),
			y: [6600.63, 6601.21, 6590.39, 6591.02]
		},
		{
			x: new Date(1538850600000),
			y: [6591.02, 6603.08, 6591, 6591]
		},
		{
			x: new Date(1538852400000),
			y: [6591, 6601.32, 6585, 6592]
		},
		{
			x: new Date(1538854200000),
			y: [6593.13, 6596.01, 6590, 6593.34]
		},
		{
			x: new Date(1538856000000),
			y: [6593.34, 6604.76, 6582.63, 6593.86]
		},
		{
			x: new Date(1538857800000),
			y: [6593.86, 6604.28, 6586.57, 6600.01]
		},
		{
			x: new Date(1538859600000),
			y: [6601.81, 6603.21, 6592.78, 6596.25]
		},
		{
			x: new Date(1538861400000),
			y: [6596.25, 6604.2, 6590, 6602.99]
		},
		{
			x: new Date(1538863200000),
			y: [6602.99, 6606, 6584.99, 6587.81]
		},
		{
			x: new Date(1538865000000),
			y: [6587.81, 6595, 6583.27, 6591.96]
		},
		{
			x: new Date(1538866800000),
			y: [6591.97, 6596.07, 6585, 6588.39]
		},
		{
			x: new Date(1538868600000),
			y: [6587.6, 6598.21, 6587.6, 6594.27]
		},
		{
			x: new Date(1538870400000),
			y: [6596.44, 6601, 6590, 6596.55]
		},
		{
			x: new Date(1538872200000),
			y: [6598.91, 6605, 6596.61, 6600.02]
		},
		{
			x: new Date(1538874000000),
			y: [6600.55, 6605, 6589.14, 6593.01]
		},
		{
			x: new Date(1538875800000),
			y: [6593.15, 6605, 6592, 6603.06]
		},
		{
			x: new Date(1538877600000),
			y: [6603.07, 6604.5, 6599.09, 6603.89]
		},
		{
			x: new Date(1538879400000),
			y: [6604.44, 6604.44, 6600, 6603.5]
		},
		{
			x: new Date(1538881200000),
			y: [6603.5, 6603.99, 6597.5, 6603.86]
		},
		{
			x: new Date(1538883000000),
			y: [6603.85, 6605, 6600, 6604.07]
		},
		{
			x: new Date(1538884800000),
			y: [6604.98, 6606, 6604.07, 6606]
		},
		]
		}],
		chart: {
		type: 'candlestick',
		borderRadius: 20,
		height: 327,
		toolbar: {
			show: false,
		}
		},
		plotOptions: {
		candlestick: {
			colors: {
			upward: "rgb(1, 98, 232)",
			downward: "rgb(238 ,51, 94)"
			}
		}
		},
		title: {
		align: 'left'
		},
		grid: {
		borderColor: '#f2f6f7',
		},
		xaxis: {
		type: 'datetime',
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
		},
		yaxis: {
		tooltip: {
			enabled: true
		}
		}
	};
	document.getElementById('crypto').innerHTML = '';
	var chart = new ApexCharts(document.querySelector("#crypto"), options);
	chart.render();
}
export function cryptoCurrency(myVarVal) {
	chart.updateOptions({ plotOptions: {
	  candlestick: {
		colors: {
		  upward: "rgb(" + myVarVal + ")",
		  downward: "rgb(238 ,51, 94)"
		} 
	  }
	},
	})
}
/* End:: Crypto Statistics chart */

  
/**********  nftdashboard **********/


var element = document.getElementById("nft-statistics");
if (element !== null) {
  element.innerHTML = "";
	var options = {
		series: [
			{
				type: "area",
				name: "This Year",
				data: [30, 32, 20, 23, 35, 37, 55, 30, 29, 19, 18, 40],
			},
			{
				type: "line",
				name: "Previous Year",
				data: [40, 42, 30, 32, 14, 15, 24, 25, 35, 36, 30, 45],
			}
		],
		chart: {
			height: 350,
			toolbar: {
				show: false
			},
		},
		plotOptions: {
			bar: {
				columnWidth: "40%",
				borderRadius: 4,
			}
		},
		colors: ['rgb(1, 98, 232)', 'rgba(238, 51, 94)'],
		fill: {
			type: 'gradient',
			gradient: {
				shadeIntensity: 1,
				opacityFrom: 0.4,
				opacityTo: 0.1,
				type: "vertical",
				stops: [0, 90, 100],
				colorStops: [
					[
						{
							offset: 0,
							color: "rgba(1, 98, 232,0.1)",
							opacity: 50
						},
						{
							offset: 75,
							color: "rgba(1, 98, 232,0.1)",
							opacity: 1
						},
						{
							offset: 100,
							color: 'rgba(1, 98, 232,0.1)',
							opacity: 1
						}
					],	
					[
						{
							offset: 0,
							color: 'rgba(238, 51, 94)',
							opacity: 1
						},
						{
							offset: 75,
							color: 'rgba(238, 51, 94)',
							opacity: 1
						},
						{
							offset: 100,
							color: 'rgba(238, 51, 94)',
							opacity: 1
						}
					],
				]
			}
		},
		dataLabels: {
			enabled: false,
		},
		legend: {
			show: false,
			fontSize: '13px',
			position: 'bottom',
			labels: {
				colors: '#5d6162',
			},
		},
		stroke: {
			curve: 'smooth',
			width: [2, 2],
			lineCap: 'round',
			dashArray: [0, 4]
		},
		grid: {
			borderColor: "#edeef1",
			strokeDashArray: 4,
			xaxis: {
				lines: {
					show: true
				}
			},
			yaxis: {
				lines: {
					show: false
				}
			}
		},
		yaxis: {
			axisBorder: {
				show: true,
				color: "rgba(119, 119, 142, 0.05)",
				offsetX: 0,
				offsetY: 0,
			},
			axisTicks: {
				show: true,
				borderType: "solid",
				color: "rgba(119, 119, 142, 0.05)",
				width: 6,
				offsetX: 0,
				offsetY: 0,
			},
			labels: {
				formatter: function (y) {
					return y.toFixed(0) + "";
				},
			},
		},
		xaxis: {
			type: "month",
			categories: [
				"Jan",
				"Feb",
				"Mar",
				"Apr",
				"May",
				"Jun",
				"Jul",
				"Aug",
				"sep",
				"oct",
				"nov",
				"dec",
			],
			axisBorder: {
				show: false,
				color: "rgba(119, 119, 142, 0.05)",
				offsetX: 0,
				offsetY: 0,
			},
			axisTicks: {
				show: false,
				borderType: "solid",
				color: "rgba(119, 119, 142, 0.05)",
				width: 6,
				offsetX: 0,
				offsetY: 0,
			},
			labels: {
				rotate: -90,
			},
		},
		tooltip: {
			enabled: true,
			theme: "dark",
		}
	};
	var chart2 = new ApexCharts(document.querySelector("#nft-statistics"), options);
	chart2.render();
}
export function nftstatistics(myVarVal) {
    chart2.updateOptions({
        colors: ["rgb(" + myVarVal + ")", "rgba(238, 51, 94)"],
    })
}


/**********  analyticsdashboard **********/


/* overalsession */
var element = document.getElementById("sessionoverview");
if (element !== null) {
  element.innerHTML = "";
	var options1 = {
		series: [
		{
			name: "Views",
			data: [144, 155, 141, 142, 122, 143, 121, 135, 156, 127, 143, 127],
		},
		{
			name: "Followers",
			data: [133, 21, 32, 37, 123, 32, 47, 131, 54, 132, 20, 138],
		},
		{
			name: "Sessions",
			data: [30, 125, 36, 30, 45, 135, 64, 51, 59, 136, 39, 51],
		},
		],
		chart: {
		toolbar: {
			show: false,
		},
		type: "bar",
		fontFamily: "'Roboto', sans-serif",
		fontWeight:'600',
		height: 370,  
		stacked: true,
		},
		colors: ['rgb(1, 98, 232)', 'rgb(238, 51 ,94)','rgb(247, 165, 86)'],
		plotOptions: {
		bar: {
			horizontal: false,
			columnWidth: "15%",
			borderRadius: "4"
		},
		},
		dataLabels: {
		enabled: false,
		},
		legend: {
		show: true,
		position: "top",
		offsetX: 0,
		offsetY: 8,
		fontSize:'14px',
		markers: {
			width: 9,
			height: 9,
			strokeWidth: 0,
			strokeColor: '#fff',
			fillColors: undefined,
			radius: 12,
			customHTML: undefined,
			onClick: undefined,
			offsetX: 0,
			offsetY: 0
		},
		},
		grid: {
		borderColor: "rgba(0,0,0,0.1)",
		strokeDashArray: 3,
		xaxis: {
			lines: {
			show: false,
			},
		},
		},
		xaxis: {
		axisBorder: {
			show: false,
		},
		categories: [
			"Jan",
			"Feb",
			"Mar",
			"Apr",
			"May",
			"Jun",
			"Jul",
			"Aug",
			"Sep",
			"Oct",
			"Nov",
			"Dec",
		],
	
		},
		yaxis: {
		tickAmount: 4,
		},
	};

	var chart2 = new ApexCharts(document.querySelector("#sessionoverview"), options1);
	chart2.render();
}
export function sessionoverview(myVarVal) {
    chart2.updateOptions({
        colors: ["rgb(" + myVarVal + ")", 'rgb(238, 51 ,94)','rgb(247, 165, 86)'],
    })
}
/* overalsession */

/* Leads By Source Chart */
var element = document.getElementById("sourcechart");
if (element !== null) {
  element.innerHTML = "";
	var options = {
		series: [31, 21, 15, 53],
		chart: {
		width: 220,
		type: 'pie',
			sparkline: {
				enabled: true
			}
		},
		legend: {
		show: false,
		},
		stroke: {
			width: 0
		},
		colors: ['#f93a5a','rgb( 34 ,192, 60)','rgb(0 ,185, 255)','#0162e8','rgb(251, 188 ,11)'],
		labels: ["Desktop", "Laptop", "Tablet", "Mobile"],
		responsive: [{
		breakpoint: 480,
		options: {
			chart: {
			width: 200
			},
			legend: {
			enabled: true,
			position: 'bottom',
			}
		}
		}]
	};
	var chart4 = new ApexCharts(document.querySelector("#sourcechart"), options);
	chart4.render();
}
export function sourcechart(myVarVal) {
    chart4.updateOptions({
        colors: ['#f93a5a','rgb( 34 ,192, 60)','rgb(0 ,185, 255)',"rgb(" + myVarVal + ")",'rgb(251, 188 ,11)'],
    })
}
/* Leads By Source Chart */

/* Impressions Chart */
var element = document.getElementById("impressions");
if (element !== null) {
  element.innerHTML = "";
	var options = {
		chart: {
			height: 130,
			width: 130,
			type: "radialBar",
		},

		series: [48],
		colors: ["rgb(1, 98, 232)"],
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
	var chart5 = new ApexCharts(document.querySelector("#impressions"), options);
	chart5.render();
}
export function impressions(myVarVal) {
    chart5.updateOptions({
        colors: ["rgb(" + myVarVal + ")"],
    })
}
/* Impressions Chart */

/* Bounce rate Chart */
var element = document.getElementById("analytics-bouncerate");
if (element !== null) {
  element.innerHTML = "";
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
		colors: ["rgb(1, 98, 232)"],
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
					color: 'rgba(1, 98, 232,0.2)',
					opacity: 1
					},
					{
					offset: 60,
					color: 'rgba(1, 98, 232,0.2)',
					opacity: 0.1
					}
				],
				]
			},
		},
	};
	var chart7 = new ApexCharts(document.querySelector("#analytics-bouncerate"), total);
	chart7.render();
}
export function analyticsbouncerate(myVarVal) {
    chart7.updateOptions({
        colors: ["rgba(" + myVarVal + ")"],
    })
}
/* Bounce rate Chart */


/**********  hrmdashboard **********/


/* performance by category */
var element = document.getElementById("performanceReport");
if (element !== null) {
  element.innerHTML = "";
	var options = {
		series: [
		{
			name: "Designing",
			type: "bar",
			data: [30, 25, 36, 30, 45, 35, 64, 52, 59, 36, 39, 40],
		},
		{
			name: "Development",
			type: "area",
			data: [44, 55, 41, 67, 22, 43, 21, 41, 56, 27, 43, 44],
		},
		{
			name: "SEO",
			type: "column",
			data: [23, 11, 22, 27, 13, 22, 37, 21, 44, 22, 30, 11],
		},
		],
		chart: {
		toolbar: {
			show: false,
		},
		height: 290,
		type: "line",
		stacked: false,
		},
		stroke: {
		width: [0, 1, 1],
		curve: "smooth",
		},
		plotOptions: {
		bar: {
			columnWidth: "30%",
		},
		},
		colors: [
		"rgba(1, 98, 232, 0.95)",
		"rgba(1, 98, 232, 0.05)",
		"rgb(238, 51, 94)",
		],
		fill: {
		opacity: [0.85, 0.25, 1],
		gradient: {
			inverseColors: false,
			shade: "light",
			type: "vertical",
			opacityFrom: 0.65,
			opacityTo: 0.15,
			stops: [0, 100, 100, 100],
		},
		},
	
		labels: [
		"Jan",
		"Feb",
		"Mar",
		"Apr",
		"May",
		"Jun",
		"Jul",
		"Aug",
		"Sep",
		"Oct",
		"Nov",
		"Dec",
		],
		markers: {
		size: 0,
		},
		xaxis: {
		type: "month",
		},
		yaxis: {
		title: {
			text: "Points",
		},
		min: 0,
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
		legend: {
		show: false,
		},
	};
	
	var chart1 = new ApexCharts(document.querySelector("#performanceReport"), options);
	chart1.render();
}
  export function performanceReport(myVarVal) {
    chart1.updateOptions({
      colors: [
        "rgba(" + myVarVal + ", 0.95)",
        "rgba(" + myVarVal + ", 0.05)",
        "rgb(238, 51, 94)",
      ],
    });
  
}
  
/* jobs summery */
var element = document.getElementById("jobsummery");
if (element !== null) {
  element.innerHTML = "";
	var options = {
		series: [1754, 634, 878, 470],
		labels: ["Published", "Private", "Onhold", "Rejected"],
		chart: {
			height: 290,
			type: 'donut',
		},
		dataLabels: {
			enabled: false,
		},

		legend: {
			show: false,
		},
		stroke: {
			show: true,
			curve: 'smooth',
			lineCap: 'round',
			colors: "#fff",
			width: 0,
			dashArray: 0,
		},
		plotOptions: {
			pie: {
				startAngle: -100,
				endAngle: 100,
				offsetY: 10,
				expandOnClick: false,
				donut: {
					size: '75%',
					background: 'transparent',
					labels: {
						show: true,
						name: {
							show: true,
							fontSize: '20px',
							color: '#495057',
							offsetY: -25
						},
						value: {
							show: true,
							fontSize: '15px',
							color: undefined,
							offsetY: -20,
							formatter: function (val) {
								return val + "%"
							}
						},
						total: {
							show: true,
							showAlways: true,
							label: 'Total',
							fontSize: '22px',
							fontWeight: 600,
							color: '#495057',
						}

					}
				}
			}
		},
		grid: {
		padding: {
			bottom: -100
		}
		},
		colors: ['#0162e8','#f93a5a','rgb( 34 ,192, 60)','rgb(0 ,185, 255)'],
	};
	var chart2 = new ApexCharts(document.querySelector("#jobsummery"), options);
	chart2.render();
}
export function jobsummery(myVarVal) {
    chart2.updateOptions({
        colors: ["rgb(" + myVarVal + ")", '#f93a5a','rgb( 34 ,192, 60)','rgb(0 ,185, 255)'],
    })
}
/* jobs summery */


/**********  projectsdashboard **********/


var element = document.getElementById("compltedprojects");
if (element !== null) {
  element.innerHTML = "";
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
	
	colors:['rgb(1, 98, 232)'],
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
	var chart9 = new ApexCharts(document.querySelector("#compltedprojects"), options2);
	chart9.render();
}
export function compltedprojects(myVarVal) {
    chart9.updateOptions({
        colors: ["rgb(" + myVarVal + ")"],
    })
}

/* projects analysis */
var element = document.getElementById("projectsanalysis");
if (element !== null) {
  element.innerHTML = "";
	var options = {
	series: [{
		name: 'Sales',
		type: "column",
		data: [100, 210, 180, 324, 230, 320, 256, 430, 350, 350, 510, 610]
	}, {
		name: "Profit",
		type: "line",
		data: [200, 320, 370, 350, 540, 480, 500,580,600,680,720,810],
	}, {
		name: "Growth",
		type: "line",
		data: [300, 450, 470, 450, 640, 580, 600,680,700,880,820,910],
	}],
	chart: {
		height: 350,
		type: "line",
		toolbar: {
		show: false
		},
		dropShadow: {
		enabled: true,
		enabledOnSeries: undefined,
		top: 7,
		left: 0,
		blur: 1,
		color: ["transparent", "rgb(235, 173, 126)", 'rgb(151, 186, 125)'],
		opacity: 0.05,
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
		borderColor: '#f1f1f1',
		strokeDashArray: 3
	},
	dataLabels: {
		enabled: false
	},
	stroke: {
		width: [0, 2, 2],
		curve: "smooth",
	},
	legend: {
		show: true,
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
	colors: ["rgb(1, 98, 232)", "rgb(238 ,51 ,94)", 'rgb(34 ,192 ,60)'],
	yaxis: {
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
		formatter: function (y) {
			return y.toFixed(0) + "";
		},
		show: true,
		style: {
			colors: "#8c9097",
			fontSize: '11px',
			fontWeight: 600,
			cssClass: 'apexcharts-xaxis-label',
		},
		}
	},
	xaxis: {
		type: "month",
		categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Agu', 'Sep', 'Oct', 'Nov', 'Dec'],
		axisBorder: {
		show: true,
		color: 'rgba(119, 119, 142, 0.05)',
		offsetX: 0,
		offsetY: 0,
		},
		axisTicks: {
		show: true,
		borderType: 'solid',
		color: 'rgba(119, 119, 142, 0.05)',
		width: 6,
		offsetX: 0,
		offsetY: 0
		},
		labels: {
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
	}

	var chart5 = new ApexCharts(document.querySelector("#projectsanalysis"), options);
	chart5.render();
}
export function projectsanalysis(myVarVal) {
	chart5.updateOptions({
		colors: ["rgb(" + myVarVal + ")","rgb(238 ,51 ,94)", 'rgb(34 ,192 ,60)'],
	})
}

/* projects analysis */

/* task overview */
var element = document.getElementById("totalRevenue");
if (element !== null) {
  element.innerHTML = "";
	var options = {
	series: [
		{
		name: "Revenue",
		data: [55, 52, 55, 52, 55, 55, 58, 58, 53, 55, 54, 55, 53],
		},
	],
	chart: {
		height: 150,
		type: "area",
		sparkline: {
		enabled: true,
		},
	},
	dataLabels: {
		enabled: false,
	},
	stroke: {
		width: [1.4],
		show: true,
		curve: ["smooth"],
	},
	xaxis: {
		crosshairs: {
		show: false,
		},
	},
	legend: {
		show: false,
	},
	labels: [
		"Jan",
		"Feb",
		"Mar",
		"Apr",
		"May",
		"Jun",
		"Jul",
		"Aug",
		"Sep",
		"Oct",
		"Nov",
		"Dec",
	],
	markers: {
		size: 0,
	},
	colors: ["rgb(1, 98, 232)"],
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
				color: 'rgba(1, 98, 232,0.1)',
				opacity: 1
				},
				{
				offset: 100,
				color: 'rgba(1, 98, 232,0.1)',
				opacity: 0.8
				}
			],
			]
		},
	},
	};
	document.getElementById("totalRevenue").innerHTML = "";
	var charttotalRevenue = new ApexCharts(
	document.querySelector("#totalRevenue"),
	options
	);
	charttotalRevenue.render();
}
export function totalRevenue(myVarVal) {
function rgbToHex(r, g, b) {
	return "#" + ((1 << 24) | (r << 16) | (g << 8) | b).toString(16).slice(1);
}
charttotalRevenue.updateOptions({
	colors: [
	rgbToHex(
		myVarVal.split(",")[0],
		myVarVal.split(",")[1],
		myVarVal.split(",")[2]
	),
	],
});
}
/* task overview */


/**********  jobsdashboard **********/ 


var element = document.getElementById("vacancystatus");
if (element !== null) {
  element.innerHTML = "";
	var options = {
		series: [
			{
				name: "Online",
				data: [60, 41, 70, 42, 95, 60, 39, 77, 56, 61, 105, 55],
				type: 'area',
			},
			{
				name: 'Offline',
				data: [33, 65, 54, 99, 60, 48, 82, 57, 95, 46, 82, 67],
				type: 'line',
			}
		],
		chart: {
			height: 278,

			toolbar: {
				show: false,
			},
			zoom: {
				enabled: false
			},
		},
		dataLabels: {
			enabled: false
		},
		stroke: {
			width: [2, 2],
			curve: 'smooth',
			dashArray: [0, 5]
		},
		colors: ['rgb(1, 98, 232)', 'rgba(238, 51, 94,0.8)'],
		title: {
			align: 'left',
			style: {
				fontSize: '13px',
				fontWeight: 'bold',
				color: '#8c9097'
			},
		},
		legend: {
			show: false,
			position: 'top',
			horizontalAlign: 'center',
			fontWeight: 600,
			fontSize: '12px',
			tooltipHoverFormatter: function (val, opts) {
				return val + ' - ' + opts.w.globals.series[opts.seriesIndex][opts.dataPointIndex] + ''
			},
			labels: {
				colors: '#74767c',
			},
			markers: {
				width: 9,
				height: 9,
				strokeWidth: 0,
				radius: 12,
				offsetX: 0,
				offsetY: 0
			},
		},
		markers: {
			discrete: [
				{
					seriesIndex: 0,
					dataPointIndex: 7,
					fillColor: '#fff',
					strokeColor: 'rgb(1, 98, 232)',
					size: 5,
					shape: "circle"
				}, {
					seriesIndex: 1,
					dataPointIndex: 2,
					fillColor: '#fff',
					strokeColor: 'rgb(238, 51, 94)',
					size: 5,
					shape: "circle"
				},
				{
					seriesIndex: 1,
					dataPointIndex: 6,
					fillColor: '#fff',
					strokeColor: 'rgb(238, 51, 94)',
					size: 5,
					shape: "circle"
				}],
			hover: {
				sizeOffset: 6
			}
		},
		xaxis: {
			categories: [
				"Jan",
				"Feb",
				"Mar",
				"Apr",
				"May",
				"Jun",
				"Jul",
				"Aug",
				"Sep",
				"Oct",
				"Nov",
				"Dec",
			],
			labels: {
				show: true,
				style: {
					colors: "#8c9097",
					fontSize: '11px',
					fontWeight: 600,
					cssClass: 'apexcharts-xaxis-label',
				},
				rotate: -90,
			},
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
		},
		yaxis: {
			labels: {
				show: true,
				style: {
					colors: "#8c9097",
					fontSize: '11px',
					fontWeight: 600,
					cssClass: 'apexcharts-xaxis-label',
				},
			}
		},
		tooltip: {
			y: [
				{
					title: {
						formatter: function (val) {
							return val + " (mins)"
						}
					}
				},
				{
					title: {
						formatter: function (val) {
							return val + " per session"
						}
					}
				},
				{
					title: {
						formatter: function (val) {
							return val;
						}
					}
				}
			]
		},
		grid: {
			show: true,
			borderColor: 'rgba(119, 119, 142, 0.1)',
			strokeDashArray: 4,
		},
		fill: {
			type: 'gradient',
			gradient: {
				shadeIntensity: 1,
				opacityFrom: 0.4,
				opacityTo: 0.1,
				type: "vertical",
				stops: [0, 90, 100],
				colorStops: [
					[
						{
							offset: 0,
							color: "rgba(1, 98, 232,0.1)",
							opacity: 50
						},
						{
							offset: 75,
							color: "rgba(1, 98, 232,0.1)",
							opacity: 0.5
						},
						{
							offset: 100,
							color: 'transparent',
							opacity: 0.5
						}
					],
					[
						{
							offset: 0,
							color: 'rgba(238, 51, 94,0.8)',
							opacity: 1
						},
						{
							offset: 75,
							color: 'rgba(238, 51, 94,0.8)',
							opacity: 1
						},
						{
							offset: 100,
							color: 'rgba(238, 51, 94,0.8)',
							opacity: 1
						}
					],
				]
			}
		},
	};
	var chart2 = new ApexCharts(document.querySelector("#vacancystatus"), options);
	chart2.render();
}
export function vacancystatus(myVarVal) {
    chart2.updateOptions({
        colors: ["rgb(" + myVarVal + ")", 'rgba(238, 51, 94,0.8)'],
    })
}

var element = document.getElementById("acceptanceratio");
if (element !== null) {
  element.innerHTML = "";
	var options1 = {
		series: [1754, 1234],
		labels: ["Accepted", "Rejected"],
		chart: {
			height: 260,
			type: "donut",
		},
		dataLabels: {
			enabled: false,
		},

		legend: {
			show: false,
		},
		stroke: {
			show: true,
			curve: "smooth",
			lineCap: "round",
			colors: "#fff",
			width: 0,
			dashArray: 0,
		},
		plotOptions: {
			pie: {
				expandOnClick: false,
				donut: {
					size: "85%",
					background: "transparent",
					labels: {
						show: true,
						name: {
							show: true,
							fontSize: "20px",
							color: "#495057",
							offsetY: -4,
						},
						value: {
							show: true,
							fontSize: "18px",
							color: undefined,
							offsetY: 8,
							formatter: function (val) {
								return val + "%";
							},
						},
						total: {
							show: true,
							showAlways: true,
							label: "Total",
							fontSize: "22px",
							fontWeight: 600,
							color: "#495057",
						},
					},
				},
			},
		},

		colors: ["rgb(1, 98, 232)", "rgb(238, 51 ,94)"],
	};
	var chart9 = new ApexCharts(document.querySelector("#acceptanceratio"), options1);
	chart9.render();
}
export function acceptanceratio(myVarVal) {
    chart9.updateOptions({
        colors: ["rgb(" + myVarVal + ")", "rgb(238, 51 ,94)"],
    })
}


/**********  stocksdahboard  **********/


/* total Investments Chart */
    var element = document.getElementById("totalInvestmentsStats");
    if (element !== null) {
    element.innerHTML = "";
        var options = {
            series: [{
                'name': 'Invested',
                data: [
                    [1327359600000, 30.95],
                    [1327446000000, 31.34],
                    [1327532400000, 31.18],
                    [1327618800000, 31.05],
                    [1327878000000, 31.00],
                    [1327964400000, 30.95],
                    [1328050800000, 31.24],
                    [1328137200000, 31.29],
                    [1328223600000, 31.85],
                    [1328482800000, 31.86],
                    [1328569200000, 32.28],
                    [1328655600000, 32.10],
                    [1328742000000, 32.65],
                    [1328828400000, 32.21],
                    [1329087600000, 32.35],
                    [1329174000000, 32.44],
                    [1329260400000, 32.46],
                    [1329346800000, 32.86],
                    [1329433200000, 32.75],
                    [1329778800000, 32.54],
                    [1329865200000, 32.33],
                    [1329951600000, 32.97],
                    [1330038000000, 33.41],
                    [1330297200000, 33.27],
                    [1330383600000, 33.27],
                    [1330470000000, 32.89],
                    [1330556400000, 33.10],
                    [1330642800000, 33.73],
                    [1330902000000, 33.22],
                    [1330988400000, 31.99],
                    [1331074800000, 32.41],
                    [1331161200000, 33.05],
                    [1331247600000, 33.64],
                    [1331506800000, 33.56],
                    [1331593200000, 34.22],
                    [1331679600000, 33.77],
                    [1331766000000, 34.17],
                    [1331852400000, 33.82],
                    [1332111600000, 34.51],
                    [1332198000000, 33.16],
                    [1332284400000, 33.56],
                    [1332370800000, 33.71],
                    [1332457200000, 33.81],
                    [1332712800000, 34.40],
                    [1332799200000, 34.63],
                    [1332885600000, 34.46],
                    [1332972000000, 34.48],
                    [1333058400000, 34.31],
                    [1333317600000, 34.70],
                    [1333404000000, 34.31],
                    [1333490400000, 33.46],
                    [1333576800000, 33.59],
                    [1333922400000, 33.22],
                    [1334008800000, 32.61],
                    [1334095200000, 33.01],
                    [1334181600000, 33.55],
                    [1334268000000, 33.18],
                    [1334527200000, 32.84],
                    [1334613600000, 33.84],
                    [1334700000000, 33.39],
                    [1334786400000, 32.91],
                    [1334872800000, 33.06],
                    [1335132000000, 32.62],
                    [1335218400000, 32.40],
                    [1335304800000, 33.13],
                    [1335391200000, 33.26],
                    [1335477600000, 33.58],
                    [1335736800000, 33.55],
                    [1335823200000, 33.77],
                    [1335909600000, 33.76],
                    [1335996000000, 33.32],
                    [1336082400000, 32.61],
                    [1336341600000, 32.52],
                    [1336428000000, 32.67],
                    [1336514400000, 32.52],
                    [1336600800000, 31.92],
                    [1336687200000, 32.20],
                    [1336946400000, 32.23],
                    [1337032800000, 32.33],
                    [1337119200000, 32.36],
                    [1337205600000, 32.01],
                    [1337292000000, 31.31],
                    [1337551200000, 32.01],
                    [1337637600000, 32.01],
                    [1337724000000, 32.18],
                    [1337810400000, 31.54],
                    [1337896800000, 31.60],
                    [1338242400000, 32.05],
                    [1338328800000, 31.29],
                    [1338415200000, 31.05],
                    [1338501600000, 29.82],
                    [1338760800000, 30.31],
                    [1338847200000, 30.70],
                    [1338933600000, 31.69],
                    [1339020000000, 31.32],
                    [1339106400000, 31.65],
                    [1339365600000, 31.13],
                    [1339452000000, 31.77],
                    [1339538400000, 31.79],
                    [1339624800000, 31.67],
                    [1339711200000, 32.39],
                    [1339970400000, 32.63],
                    [1340056800000, 32.89],
                    [1340143200000, 31.99],
                    [1340229600000, 31.23],
                    [1340316000000, 31.57],
                    [1340575200000, 30.84],
                    [1340661600000, 31.07],
                    [1340748000000, 31.41],
                    [1340834400000, 31.17],
                    [1340920800000, 32.37],
                    [1341180000000, 32.19],
                    [1341266400000, 32.51],
                    [1341439200000, 32.53],
                    [1341525600000, 31.37],
                    [1341784800000, 30.43],
                    [1341871200000, 30.44],
                    [1341957600000, 30.20],
                    [1342044000000, 30.14],
                    [1342130400000, 30.65],
                    [1342389600000, 30.40],
                    [1342476000000, 30.65],
                    [1342562400000, 31.43],
                    [1342648800000, 31.89],
                    [1342735200000, 31.38],
                    [1342994400000, 30.64],
                    [1343080800000, 30.02],
                    [1343167200000, 30.33],
                    [1343253600000, 30.95],
                    [1343340000000, 31.89],
                    [1343599200000, 31.01],
                    [1343685600000, 30.88],
                    [1343772000000, 30.69],
                    [1343858400000, 30.58],
                    [1343944800000, 32.02],
                    [1344204000000, 32.14],
                    [1344290400000, 32.37],
                    [1344376800000, 32.51],
                    [1344463200000, 32.65],
                    [1344549600000, 32.64],
                    [1344808800000, 32.27],
                    [1344895200000, 32.10],
                    [1344981600000, 32.91],
                    [1345068000000, 33.65],
                    [1345154400000, 33.80],
                    [1345413600000, 33.92],
                    [1345500000000, 33.75],
                    [1345586400000, 33.84],
                    [1345672800000, 33.50],
                    [1345759200000, 32.26],
                    [1346018400000, 32.32],
                    [1346104800000, 32.06],
                    [1346191200000, 31.96],
                    [1346277600000, 31.46],
                    [1346364000000, 31.27],
                    [1346709600000, 31.43],
                    [1346796000000, 32.26],
                    [1346882400000, 32.79],
                    [1346968800000, 32.46],
                    [1347228000000, 32.13],
                    [1347314400000, 32.43],
                    [1347400800000, 32.42],
                    [1347487200000, 32.81],
                    [1347573600000, 33.34],
                    [1347832800000, 33.41],
                    [1347919200000, 32.57],
                    [1348005600000, 33.12],
                    [1348092000000, 34.53],
                    [1348178400000, 33.83],
                    [1348437600000, 33.41],
                    [1348524000000, 32.90],
                    [1348610400000, 32.53],
                    [1348696800000, 32.80],
                    [1348783200000, 32.44],
                    [1349042400000, 32.62],
                    [1349128800000, 32.57],
                    [1349215200000, 32.60],
                    [1349301600000, 32.68],
                    [1349388000000, 32.47],
                    [1349647200000, 32.23],
                    [1349733600000, 31.68],
                    [1349820000000, 31.51],
                    [1349906400000, 31.78],
                    [1349992800000, 31.94],
                    [1350252000000, 32.33],
                    [1350338400000, 33.24],
                    [1350424800000, 33.44],
                    [1350511200000, 33.48],
                    [1350597600000, 33.24],
                    [1350856800000, 33.49],
                    [1350943200000, 33.31],
                    [1351029600000, 33.36],
                    [1351116000000, 33.40],
                    [1351202400000, 34.01],
                    [1351638000000, 34.02],
                    [1351724400000, 34.36],
                    [1351810800000, 34.39],
                    [1352070000000, 34.24],
                    [1352156400000, 34.39],
                    [1352242800000, 33.47],
                    [1352329200000, 32.98],
                    [1352415600000, 32.90],
                    [1352674800000, 32.70],
                    [1352761200000, 32.54],
                    [1352847600000, 32.23],
                    [1352934000000, 32.64],
                    [1353020400000, 32.65],
                    [1353279600000, 32.92],
                    [1353366000000, 32.64],
                    [1353452400000, 32.84],
                    [1353625200000, 33.40],
                    [1353884400000, 33.30],
                    [1353970800000, 33.18],
                    [1354057200000, 33.88],
                    [1354143600000, 34.09],
                    [1354230000000, 34.61],
                    [1354489200000, 34.70],
                    [1354575600000, 35.30],
                    [1354662000000, 35.40],
                    [1354748400000, 35.14],
                    [1354834800000, 35.48],
                    [1355094000000, 35.75],
                    [1355180400000, 35.54],
                    [1355266800000, 35.96],
                    [1355353200000, 35.53],
                    [1355439600000, 37.56],
                    [1355698800000, 37.42],
                    [1355785200000, 37.49],
                    [1355871600000, 38.09],
                    [1355958000000, 37.87],
                    [1356044400000, 37.71],
                    [1356303600000, 37.53],
                    [1356476400000, 37.55],
                    [1356562800000, 37.30],
                    [1356649200000, 36.90],
                    [1356908400000, 37.68],
                    [1357081200000, 38.34],
                    [1357167600000, 37.75],
                    [1357254000000, 38.13],
                    [1357513200000, 37.94],
                    [1357599600000, 38.14],
                    [1357686000000, 38.66],
                    [1357772400000, 38.62],
                    [1357858800000, 38.09],
                    [1358118000000, 38.16],
                    [1358204400000, 38.15],
                    [1358290800000, 37.88],
                    [1358377200000, 37.73],
                    [1358463600000, 37.98],
                    [1358809200000, 37.95],
                    [1358895600000, 38.25],
                    [1358982000000, 38.10],
                    [1359068400000, 38.32],
                    [1359327600000, 38.24],
                    [1359414000000, 38.52],
                    [1359500400000, 37.94],
                    [1359586800000, 37.83],
                    [1359673200000, 38.34],
                    [1359932400000, 38.10],
                    [1360018800000, 38.51],
                    [1360105200000, 38.40],
                    [1360191600000, 38.07],
                    [1360278000000, 39.12],
                    [1360537200000, 38.64],
                    [1360623600000, 38.89],
                    [1360710000000, 38.81],
                    [1360796400000, 38.61],
                    [1360882800000, 38.63],
                    [1361228400000, 38.99],
                    [1361314800000, 38.77],
                    [1361401200000, 38.34],
                    [1361487600000, 38.55],
                    [1361746800000, 38.11],
                    [1361833200000, 38.59],
                    [1361919600000, 39.60],
                ]
            }],
            chart: {
                id: 'area-datetime',
                fontFamily: 'Poppins, Arial, sans-serif',
                type: 'area',
                height: 350,
                zoom: {
                    autoScaleYaxis: true
                },
                toolbar: {
                    show: false
                },
            },
            grid: {
                borderColor: '#f3f3f3',
                strokeDashArray: 3
            },
            dataLabels: {
                enabled: false
            },
            markers: {
                size: 0,
                style: 'hollow',
            },
            xaxis: {
                type: 'datetime',
                min: new Date('01 Mar 2012').getTime(),
                tickAmount: 6,
            },
            tooltip: {
                x: {
                    format: 'dd MMM yyyy'
                }
            },
            colors: ["rgb(1, 98, 232)"],
            stroke: {
                width: [1.5],
                curve: ['stepline']
            },
            fill: {
                type: 'gradient',
                gradient: {
                    shadeIntensity: 1,
                    opacityFrom: 0.4,
                    opacityTo: 0.1,
                    stops: [0, 90, 100],
                    colorStops: [
                        [
                            {
                                offset: 0,
                                color: "rgba(1, 98, 232, 0.1)",
                                opacity: 1
                            },
                            {
                                offset: 75,
                                color: "rgba(1, 98, 232, 0.1)",
                                opacity: 1
                            },
                            {
                                offset: 100,
                                color: "rgba(1, 98, 232, 0.1)",
                                opacity: 1
                            }
                        ]
                    ]
                }
            },
        };
        var chart2 = new ApexCharts(document.querySelector("#totalInvestmentsStats"), options);
        chart2.render();
    }
    export function totalInvestmentsStats(myVarVal) {
        chart2.updateOptions({
            colors: ["rgb(" + myVarVal + ")"],
        })
    }
/* total investments chart */

/* Total Amount Invested Chart */
    var element = document.getElementById("total-invested");
    if (element !== null) {
    element.innerHTML = "";
        var stocks1 = {
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
            colors: ["rgb(1, 98, 232)"],

        }
        var chart9 = new ApexCharts(document.querySelector("#total-invested"), stocks1);
        chart9.render();
    }
    export function totalinvested(myVarVal) {
        chart9.updateOptions({
            colors: ["rgb(" + myVarVal + ")"],
        })
    }

/* Total Amount Invested Chart */


/* apple stock chart */
var element = document.getElementById("apple-stock");
if (element !== null) {
  element.innerHTML = "";
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
		colors: ['rgb(1, 98, 232)'],

	}
	var chart10 = new ApexCharts(document.querySelector("#apple-stock"), spark1);
	chart10.render();
}
export function applestock(myVarVal) {
    chart10.updateOptions({
        colors: ["rgb(" + myVarVal + ")"],
    })
}
/* apple stock chart */


/**********  coursedashboard **********/

/* coursescompleted */
var element = document.getElementById("coursescompleted");
if (element !== null) {
  element.innerHTML = "";
	var options = {
		chart: {
			height: 290,
			type: "line",
			stacked: false,
			fontFamily: 'poppins, sans-serif',
		},
		dataLabels: {
			enabled: false
		},
		colors: ['rgb(1, 98, 232)','rgb(238, 51 ,94)', 'rgb(34, 192 ,60)'],
		series: [{
			name: 'Applications',
			type: 'column',
			data: [53, 61, 42, 57, 33, 42, 57, 31, 64, 72, 45, 35],
		}, {
			name: "Shortlisted",
			type: "column",
			data: [43, 51, 32, 47, 23, 32, 47, 21, 54, 62, 35, 25]
		}, {
			name: 'Hired',
			type: 'line',
			data: [24, 50, 31, 57, 32, 63, 31, 51, 26, 47, 23, 47],
		}],
	stroke: {
		width: [2, 2, 2],
		curve: 'smooth',
		endingShape: 'rounded',
	},
		plotOptions: {
			bar: {
				columnWidth: '45%',
			}
		},
		fill: {
			opacity: [1, 1, 1]
		},
		grid: {
			borderColor: '#f2f6f7',
		},
		legend: {
			show: false,
			position: 'top',
			fontWeight: 500,
			fontSize: 13,
			markers: {
				width: 10,
				height: 10,
				shape: 'square',
				radius: 5,
			}
		},
		yaxis: {
			min: 0,
			forceNiceScale: true,
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
				formatter: function (y) {
					return y.toFixed(0) + "";
				}
			}
		},
		toolbar:{
			show: false,
		},
		xaxis: {
			type: 'month',
			categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
			axisBorder: {
				show: true,
				color: 'rgba(119, 119, 142, 0.05)',
				offsetX: 0,
				offsetY: 0,
			},
			axisTicks: {
				show: true,
				borderType: 'solid',
				color: 'rgba(119, 119, 142, 0.05)',
				width: 6,
				offsetX: 0,
				offsetY: 0
			},
			labels: {
				rotate: -90
			}
		},
		tooltip: {
			enabled: true,
			shared: false,
			intersect: true,
			x: {
				show: false
			}
		},
	};
	var chart9 = new ApexCharts(document.querySelector("#coursescompleted"), options);
	chart9.render();
}
export function coursescompleted(myVarVal) {
	chart9.updateOptions({
		colors: ["rgb(" + myVarVal + ")", 'rgb(238, 51 ,94)', 'rgb(34, 192 ,60)'],
	})
}

/* top course categories */
var element = document.getElementById("course-categories");
if (element !== null) {
  element.innerHTML = "";
	var options = {
	series: [1754, 1234, 878,765],
	labels: ["IT ", "Finanace", "Consultancy" , "Sales"],
	chart: {
		height: 210,
		type: 'donut',
	},
	dataLabels: {
		enabled: false,
	},

	legend: {
		show: false,
	},
	stroke: {
		show: true,
		curve: 'smooth',
		lineCap: 'round',
		colors: "#fff",
		width: 2,
		dashArray: 0,
	},
	plotOptions: {
		pie: {
			expandOnClick: false,
			donut: {
				size: '80%',
				background: 'transparent',
				labels: {
					show: true,
					name: {
						show: true,
						fontSize: '20px',
						color: '#495057',
						offsetY: -4
					},
					value: {
						show: true,
						fontSize: '18px',
						color: undefined,
						offsetY: 8,
						formatter: function (val) {
							return val + "%"
						}
					},
					total: {
						show: true,
						showAlways: true,
						label: 'Total',
						fontSize: '22px',
						fontWeight: 600,
						color: '#495057',
					}

				}
			}
		}
	},
	grid: {
		padding: {
		right:30
		}
	},
	colors: ['#f93a5a','rgb( 34 ,192, 60)','rgb(0 ,185, 255)','#0162e8','rgb(251, 188 ,11)'],
	};

	var chart = new ApexCharts(document.querySelector("#course-categories"), options);
	chart.render();
}
export function coursecategories(myVarVal) {
	chart.updateOptions({
    colors: ['#f93a5a','rgb( 34 ,192, 60)','rgb(0 ,185, 255)',"rgb(" + myVarVal + ")",'rgb(251, 188 ,11)'],
	})
}

/* top course categories */


/**********  personaldashboard **********/


/* Total Revenue Chart Closed */
var element = document.getElementById("statistics");
if (element !== null) {
  element.innerHTML = "";
	var options = {
		series: [{
			name: 'Income',
				type: "column",
			data: [20, 30, 40, 20, 30, 40, 25, 35, 45, 20, 30, 40]
		},{
				name: "Expenses",
				type: "area",
				data: [40, 50, 60, 30, 40, 55, 35, 55, 65, 40, 50, 60],
		}],
		chart: {
			redrawOnWindowResize: true,
			animations: {
				enabled: false,
				animateGradually: {
					enabled: false,
				},
				dynamicAnimation: {
					enabled: false,
				}
			},
			height: 380,
			toolbar: {
				show: false
			},
			dropShadow: {
				enabled: true,
				enabledOnSeries: undefined,
				top: 5,
				left: 0,
				blur: 5,
				color: ["rgb(1, 98, 232)", '#ee335e'],
				opacity: 0.1,
			},
		},
		plotOptions: {
		bar: {
			horizontal: false,
			columnWidth: '18%',
			borderRadius: 5
		},
		},
		dataLabels: {
		enabled: false
		},
		stroke: {
			width: [0, 2],
			curve: "smooth",
			dashArray: [0, 0],
		},
		legend: {
			show: true,
			position: "top",
			horizontalAlign: "center",
			fontSize: "12px",
			fontFamily: "Helvetica, Arial",
			fontWeight: 600,
			labels: {
				colors: '#9ba5b7',
			},
		},
		colors: ["rgb(1, 98, 232)", '#ee335e'],
		yaxis: {
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
				formatter: function (y) {
					return y.toFixed(0) + "";
				},
				show: true,
				style: {
					colors: "#8c9097",
					fontSize: '11px',
					fontWeight: 600,
					cssClass: 'apexcharts-xaxis-label',
				},
			}
		},
		xaxis: {
			type: "month",
			categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Agu', 'Sep','Oct', 'Nov', 'Dec'],
			axisBorder: {
				show: true,
				color: 'rgba(119, 119, 142, 0.05)',
				offsetX: 0,
				offsetY: 0,
			},
			axisTicks: {
				show: true,
				borderType: 'solid',
				color: 'rgba(119, 119, 142, 0.05)',
				width: 6,
				offsetX: 0,
				offsetY: 0
			},
			labels: {
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
			marker: {
				fillColors: ['rgb(1, 98, 232)', '#ee335e']
			}
		},
		fill: {
			colors: undefined,
			opacity: 0.025,
			type: ['solid', 'solid'],
			gradient: {
				shade: 'light',
				type: "horizontal",
				shadeIntensity: 0.5,
				gradientToColors: ['#ee335e'],
				inverseColors: true,
				opacityFrom: 0.35,
				opacityTo: 0.05,
				stops: [0, 50, 100],
				colorStops: ['#ee335e']
			}
		}
	}

	document.querySelector("#statistics").innerHTML = '';
	var chart = new ApexCharts(document.querySelector("#statistics"), options);
	chart.render();
}
export function totalRevenueChart(myVarVal) {
	chart.updateOptions({
		colors: ["rgb(" + myVarVal + ")", "#ee335e"],
	})
}
/* Total Revenue Chart Closed */


/**********  widgets **********/

/* Target report chart */
export function targetReport(myVarVal) {
    var options = {
        series: [{
            data: [17, 22, 37, 47, 39, 28, 14],
            name: 'Revenue',
        }],
        chart: {
            type: 'bar',
            height: 225,
            toolbar: {
                show: false
            },
            dropShadow: {
                enabled: true,
                enabledOnSeries: undefined,
                top: 6,
                left: 6,
                blur: 3,
                color: '#000',
                opacity: 0.05
            },
        },
        plotOptions: {
            bar: {
                columnWidth: '35%',
                borderRadius: 4,
                horizontal: false,
                colors: {
                    ranges: [{
                        from: 41,
                        to: Infinity,
                        color: "rgb(" + myVarVal + ")"
                    },
                    {
                        from: 0,
                        to: 40,
                        color: "rgba(" + myVarVal + ", 0.2)"
                    }]
                },
            }
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
            },
            yaxis: {
                lines: {
                    show: false
                }
            },
        },
        xaxis: {
            categories: ['Mon', 'Tues', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
            colors: '#fff',
            axisBorder: {
                show: false
            },
            axisTicks: {
                show: false
            },
            labels: {
                rotate: -90,
                style: {
                    fontFamily: 'Inter, sans-serif',
                },
            }
        },
        yaxis: {
            colors: '#fff',
            axisBorder: {
                show: false
            },
            axisTicks: {
                show: false
            },
            labels: {
                show: false
            }
        }
    };
    document.querySelector("#report").innerHTML = ""
    var chart = new ApexCharts(document.querySelector("#report"), options);
    chart.render();
}

export function pageviews(myVarVal) {
    var options = {
        series: [{
            name: 'Job Applied',
            type: 'line',
            data: [25, 50, 30, 55, 20, 45, 30]
        }, {
            name: 'Job Viewed',
            type: 'area',
            data: [35, 25, 40, 30, 45, 35, 60]
        }],
        chart: {
            height: 305,
            type: 'line',
            stacked: false,
            toolbar: {
                show: false
            },
            dropShadow: {
                enabled: true,
                enabledOnSeries: undefined,
                top: 7,
                left: 1,
                blur: 3,
                color: '#000',
                opacity: 0.2
            },
        },
        colors: ["rgba(" + myVarVal + ", 1)", "rgba(" + myVarVal + ", 0.1)"],
        grid: {
            borderColor: '#e9edf4',
            padding: {
                top: 10,
                right: 0,
                bottom: 0,
                left: 0
            },
        },
        stroke: {
            width: [2, 2],
            curve: 'smooth',
            dashArray: [0, 4]
        },
        labels: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
        markers: {
            size: 4,
            hover: {
                size: 5
            }
        },
        fill: {
            opacity: [0.85, 0.25, 1],
            gradient: {
                inverseColors: false,
                shadeIntensity: 1,
                shade: 'light',
                type: "vertical",
                opacityFrom: 0.85,
                opacityTo: 0.55,
                stops: [0, 100, 100, 100]
            }
        },
        legend: {
            show: true,
            position: 'top',
            fontFamily: 'Inter, sans-serif',
            markers: {
                width: 10,
                height: 10,
            }
        },
        xaxis: {
            type: 'week',
            axisBorder: {
                show: true,
                color: 'rgba(119, 119, 142, 0.05)',
                offsetX: 0,
                offsetY: 0,
            },
            axisTicks: {
                show: true,
                borderType: 'solid',
                color: 'rgba(119, 119, 142, 0.05)',
                width: 6,
                offsetX: 0,
                offsetY: 0
            },
            labels: {
                rotate: -90
            }
        },
        yaxis: {
            title: {
                style: {
                    color: '#adb5be',
                    fontSize: '14px',
                    fontFamily: 'Inter, sans-serif',
                    fontWeight: 600
                },
            },
            labels: {
                formatter: function (y) {
                    return y.toFixed(0) + "";
                }
            }
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

                }
            }
        }
    };
    document.querySelector("#views").innerHTML = ""
    var chart = new ApexCharts(document.querySelector("#views"), options);
    chart.render();
}