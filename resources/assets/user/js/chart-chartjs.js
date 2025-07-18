/**
 * @Package: CryptoKit - Crypto Template & Dashboard
 * @Version: 1.0.0
 */

jQuery(function ($) {
    "use strict";

    var CRYPTOKIT_SETTINGS = window.CRYPTOKIT_SETTINGS || {};

    /*--------------------------------
        Chart Js Chart
     --------------------------------*/
    CRYPTOKIT_SETTINGS.chartJS = function () {

        /*Line Chart*/
        if ($("#line-chartjs").length) {
            var lineChartData = {
                labels: daysData,
                datasets: [
                    {
                        label: "My First dataset",
                        fillColor: "rgba(63,81,181,0.5)",
                        strokeColor: "rgba(63,81,181,1)",
                        pointColor: "rgba(63,81,181,1)",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(63,81,181,1)",
                        data: monthData,
                    },
                ],
            };

            var ctx = document.getElementById("line-chartjs").getContext("2d");
            window.myLine = new Chart(ctx).Line(lineChartData, {
                responsive: true,
            });
        }

        if ($("#donut-chartjs").length) {
            /* Donut Chart*/
            var doughnutData = [];
            let highlights = ['rgba(250,133,100,0.8)', 'rgba(44,188,108,0.65)', '#e1dcdc', 'rgba(103,58,183,0.8)'];

            countryWiseVisitors.forEach((country, key) => {
                doughnutData.push({
                    value: country.visitor,
                    color: country.color,
                    highlight: highlights[key],
                    label: country.name,
                })
            });

            var ctxd = document.getElementById("donut-chartjs").getContext("2d");
            window.myDoughnut = new Chart(ctxd).Doughnut(doughnutData, {
                responsive: true,
            });
        }
    };

    /*--------------------------------
        Sparkline Chart
     --------------------------------*/
    CRYPTOKIT_SETTINGS.dbSparklineChart = function () {
        if ($.isFunction($.fn.sparkline)) {
            $(".db_dynamicbar").sparkline(
                [
                    6.2, 8.4, 8.8, 8, 9.2, 8.8, 8, 7.5, 5.2, 9.9, 9, 9, 8.4, 9,
                    8.8, 8, 9.5, 9.2, 9.9, 9, 9, 8, 7.1, 9, 9, 9.5, 8, 9.5, 9.8,
                ],
                {
                    type: "bar",
                    barColor: "#e77512",
                    height: "80",
                    barWidth: "10",
                    barSpacing: 1,
                }
            );

            $(".sparklinedash").sparkline(
                [10, 5, 6, 10, 9, 12, 4, 9, 7.5, 5.2, 9.9, 9, 9, 8.4],
                {
                    type: "bar",
                    height: "60",
                    barWidth: "4",
                    resize: true,
                    barSpacing: "5",
                    barColor: "#fb9678",
                }
            );
            $(".sparklinedash2").sparkline(
                [7, 5, 6, 10, 9, 12, 7, 9, 6.2, 8.4, 8.8, 8, 9.2, 8.8],
                {
                    type: "bar",
                    height: "60",
                    barWidth: "4",
                    resize: true,
                    barSpacing: "5",
                    barColor: "#ab8ce4",
                }
            );
            $(".sparkline8").sparkline([2, 4, 4, 6, 8, 5, 6, 4, 8, 6, 6, 2], {
                type: "line",
                width: "100%",
                height: "60",
                lineColor: "#99d683",
                fillColor: "#99d683",
                maxSpotColor: "#99d683",
                highlightLineColor: "rgba(0, 0, 0, 0.2)",
                highlightSpotColor: "#99d683",
            });
            $(".sparkline9").sparkline([0, 2, 8, 6, 8, 5, 6, 4, 8, 6, 6, 2], {
                type: "line",
                width: "100%",
                height: "60",
                lineColor: "#13dafe",
                fillColor: "#13dafe",
                minSpotColor: "#13dafe",
                maxSpotColor: "#13dafe",
                highlightLineColor: "rgba(0, 0, 0, 0.2)",
                highlightSpotColor: "#13dafe",
            });

            $(".watch1").sparkline([2, 4, 4, 6, 8, 5, 6, 4, 8, 6, 6, 2], {
                type: "line",
                width: "100%",
                height: "80",
                lineColor: "#13dafe",
                fillColor: "rgba(19, 218, 254, 0.3)",
                maxSpotColor: "#99d683",
                highlightLineColor: "rgba(0, 0, 0, 0.2)",
                highlightSpotColor: "rgba(0,0,0,.2)",
            });
            $(".watch2").sparkline([0, 13, 10, 14, 15, 10, 18, 15, 19], {
                type: "line",
                width: "100%",
                height: "80",
                lineColor: "#6164c1",
                fillColor: "rgba(97, 100, 193, 0.3)",
                highlightLineColor: "rgba(0,0,0,.1)",
                highlightSpotColor: "rgba(0,0,0,.2)",
            });
            $(".watch3").sparkline([0, 2, 8, 6, 8, 5, 6, 4, 8, 6, 6, 2], {
                type: "line",
                width: "100%",
                height: "80",
                lineColor: "#fa8282",
                fillColor: "rgba(255,211,152,.8)",
                minSpotColor: "#13dafe",
                maxSpotColor: "#13dafe",
                highlightLineColor: "rgba(0, 0, 0, 0.2)",
                highlightSpotColor: "#13dafe",
            });
            $(".watch4").sparkline([3, 7, 5, 6, 8, 7, 6, 7, 8, 6, 6, 9], {
                type: "line",
                width: "100%",
                height: "80",
                lineColor: "#13dafe",
                fillColor: "rgba(153,214,131,.7)",
                minSpotColor: "#13dafe",
                maxSpotColor: "#13dafe",
                highlightLineColor: "rgba(0, 0, 0, 0.2)",
                highlightSpotColor: "#13dafe",
            });
            $(".watch5").sparkline([2, 5, 6, 6, 9, 5, 7, 7, 8, 5, 6, 8], {
                type: "line",
                width: "100%",
                height: "80",
                lineColor: "#fc6180",
                fillColor: "rgba(252, 97, 128, 0.3)",
                maxSpotColor: "#99d683",
                highlightLineColor: "rgba(0, 0, 0, 0.2)",
                highlightSpotColor: "rgba(0,0,0,.2)",
            });

            // Bar + line composite charts
            $(".db_compositebar").sparkline(
                [
                    4, 6, 7, 7, 4, 3, 2, 4, 6, 7, 4, 6, 7, 7, 4, 3, 2, 4, 6, 7,
                    7, 4, 3, 1, 4, 6, 5, 9,
                ],
                {
                    type: "bar",
                    barColor: "#3F51B5",
                    height: "80",
                    barWidth: "10",
                    barSpacing: 1,
                }
            );

            $(".db_compositebar").sparkline(
                [
                    4, 1, 5, 7, 9, 9, 8, 8, 4, 7, 9, 4, 6, 7, 7, 4, 3, 2, 4, 6,
                    7, 9, 8, 8, 4, 2, 5, 6, 7,
                ],
                {
                    composite: true,
                    fillColor: "rgba(103,58,183,0)",
                    type: "line",
                    width: "100%",
                    height: "80",
                    lineWidth: 2,
                    lineColor: "#ffb426",
                    highlightSpotColor: "#E91E63",
                    highlightLineColor: "#ffb426",
                    spotRadius: 3,
                }
            );
        }
    };

    /******************************
     initialize respective scripts
     *****************************/
    $(document).ready(function () {
        CRYPTOKIT_SETTINGS.dbSparklineChart();
    });

    $(window).resize(function () {
        CRYPTOKIT_SETTINGS.dbSparklineChart();
    });

    $(window).load(function () {
        CRYPTOKIT_SETTINGS.chartJS();
    });
});
