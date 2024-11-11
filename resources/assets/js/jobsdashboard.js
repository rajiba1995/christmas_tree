
var swiper = new Swiper(".swiper-vertical", {
    direction: "vertical",
    slidesPerView: 4,
    spaceBetween: 0,
    mousewheel: true,
    loop: true,
    autoplay: {
        delay: 1500,
        disableOnInteraction: false
    }
});

// var options8 = {
//     series: [
//         {
//             name: 'Actual',
//             data: [
//                 {
//                     x: 'Recruited',
//                     y: 300,
//                     goals: [
//                         {
//                             name: 'Expected',
//                             value: 350,
//                             strokeHeight: 5,
//                             strokeColor: 'rgb(1, 98, 232)'
//                         }
//                     ]
//                 },
//                 {
//                     x: 'Shortlisted',
//                     y: 500,
//                     goals: [
//                         {
//                             name: 'Expected',
//                             value: 550,
//                             strokeHeight: 5,
//                             strokeColor: 'rgb(34 ,192 ,60)'
//                         }
//                     ]
//                 },
//                 {
//                     x: 'Rejected',
//                     y: 1000,
//                     goals: [
//                         {
//                             name: 'Expected',
//                             value: 1050,
//                             strokeHeight: 5,
//                             strokeColor: 'rgb(238, 51, 94)'
//                         }
//                     ]
//                 },
//                 {
//                     x: 'Blocked',
//                     y: 1500,
//                     goals: [
//                         {
//                             name: 'Expected',
//                             value:1550,
//                             strokeHeight: 5,
//                             strokeColor: 'rgb(251, 188, 11)'
//                         }
//                     ]
//                 }
//             ]
//         }
//     ],
//     chart: {
//         height: 320,
//         type: 'bar'
//     },
//     plotOptions: {
//         bar: {
//             columnWidth: '50%',
//             distributed: true,
//         }
//     },
//     colors: ['rgba(1, 98, 232,0.4)', "rgba(34 ,192 ,60,0.4)", "rgba(238, 51, 94, 0.4)", "rgba(251, 188, 11, 0.4)"],
//     dataLabels: {
//         enabled: false
//     },
//     grid: {
//       show: false,
//       borderColor: '#f1f1f1',
//       strokeDashArray: 3
//     },
//     legend: {
//         show: false,
//         showForSingleSeries: true,
//         customLegendItems: ['Actual', 'Expected'],
//     },
//     xaxis: {
//         labels: {
//             show: true,
//             style: {
//                 colors: "#8c9097",
//                 fontSize: '11px',
//                 fontWeight: 600,
//                 cssClass: 'apexcharts-xaxis-label',
//             },
//         }
//     },
//     yaxis: {
//         labels: {
//             show: true,
//             style: {
//                 colors: "#8c9097",
//                 fontSize: '11px',
//                 fontWeight: 600,
//                 cssClass: 'apexcharts-xaxis-label',
//             },
//         }
//     }
// };
// var chart8 = new ApexCharts(document.querySelector("#acquisitions"), options8);
// chart8.render();