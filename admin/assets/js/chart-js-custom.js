!(function (r) {
    "use strict";
    function o() {}
    (o.prototype.respChart = function (o, e, a, t) {
        (Chart.defaults.global.defaultFontColor = "#8791af"), (Chart.defaults.scale.gridLines.color = "rgba(166, 176, 207, 0.1)");
        var n = o.get(0).getContext("2d"),
            i = r(o).parent();
        function l() {
            switch ((o.attr("width", r(i).width()), e)) {
                case "Line":
                    new Chart(n, { type: "line", data: a, options: t });
                    break;
                case "Doughnut":
                    new Chart(n, { type: "doughnut", data: a, options: t });
                    break;
                case "Pie":
                    new Chart(n, { type: "pie", data: a, options: t });
                    break;
                case "Bar":
                    new Chart(n, { type: "bar", data: a, options: t });
                    break;
                case "Radar":
                    new Chart(n, { type: "radar", data: a, options: t });
                    break;
                case "PolarArea":
                    new Chart(n, { data: a, type: "polarArea", options: t });
            }
        }
        r(window).resize(l), l();
    }),
        (o.prototype.init = function () {
            this.respChart(
                r("#lineChart"),
                "Line",
                {
                    labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October"],
                    datasets: [
                        {
                            label: "Sales Analytics",
                            fill: !0,
                            lineTension: 0.5,
                            backgroundColor: "rgba(85, 110, 230, 0.2)",
                            borderColor: "#0652DD",
                            borderCapStyle: "butt",
                            borderDash: [],
                            borderDashOffset: 0,
                            borderJoinStyle: "miter",
                            pointBorderColor: "#0652DD",
                            pointBackgroundColor: "#fff",
                            pointBorderWidth: 1,
                            pointHoverRadius: 5,
                            pointHoverBackgroundColor: "#0652DD",
                            pointHoverBorderColor: "#fff",
                            pointHoverBorderWidth: 2,
                            pointRadius: 1,
                            pointHitRadius: 10,
                            data: [65, 59, 80, 81, 56, 55, 40, 55, 30, 80],
                        },
                        {
                            label: "Monthly Earnings",
                            fill: !0,
                            lineTension: 0.5,
                            backgroundColor: "rgba(252, 185, 44, 0.2)",
                            borderColor: "#fcb92c",
                            borderCapStyle: "butt",
                            borderDash: [],
                            borderDashOffset: 0,
                            borderJoinStyle: "miter",
                            pointBorderColor: "#fcb92c",
                            pointBackgroundColor: "#fff",
                            pointBorderWidth: 1,
                            pointHoverRadius: 5,
                            pointHoverBackgroundColor: "#fcb92c",
                            pointHoverBorderColor: "#eef0f2",
                            pointHoverBorderWidth: 2,
                            pointRadius: 1,
                            pointHitRadius: 10,
                            data: [80, 23, 56, 65, 23, 35, 85, 25, 92, 36],
                        },
                    ],
                },
                { scales: { yAxes: [{ ticks: { max: 100, min: 20, stepSize: 10 } }] } }
            ),
                this.respChart(r("#doughnut"), "Doughnut", {
                    labels: ["Desktops", "Tablets"],
                    datasets: [{ data: [300, 210], backgroundColor: ["#0652DD", "#ebeff2"], hoverBackgroundColor: ["#0652DD", "#ebeff2"], hoverBorderColor: "#fff" }],
                }),
                this.respChart(r("#pie"), "Pie", { labels: ["Desktops", "Tablets"], datasets: [{ data: [300, 180], backgroundColor: ["#6fbe36", "#ebeff2"], hoverBackgroundColor: ["#6fbe36", "#ebeff2"], hoverBorderColor: "#fff" }] }),
                this.respChart(
                    r("#bar"),
                    "Bar",
                    {
                        labels: ["January", "February", "March", "April", "May", "June", "July"],
                        datasets: [
                            {
                                label: "Sales Analytics",
                                backgroundColor: "rgba(6 197 191)",
                                borderColor: "rgba(6 197 191)",
                                borderWidth: 1,
                                hoverBackgroundColor: "rgba(28, 187, 140, 0.9)",
                                hoverBorderColor: "rgba(28, 187, 140, 0.9)",
                                data: [65, 59, 81, 45, 56, 80, 50, 20],
                            },
                        ],
                    },
                    { scales: { xAxes: [{ barPercentage: 0.4 }] } }
                ),
                this.respChart(r("#radar"), "Radar", {
                    labels: ["Eating", "Drinking", "Sleeping", "Designing", "Coding", "Cycling", "Running"],
                    datasets: [
                        {
                            label: "Desktops",
                            backgroundColor: "rgba(252, 185, 44, 0.2)",
                            borderColor: "#fcb92c",
                            pointBackgroundColor: "#fcb92c",
                            pointBorderColor: "#fff",
                            pointHoverBackgroundColor: "#fff",
                            pointHoverBorderColor: "#fcb92c",
                            data: [65, 59, 90, 81, 56, 55, 40],
                        },
                        {
                            label: "Tablets",
                            backgroundColor: "rgba(84, 56, 220, 0.2)",
                            borderColor: "#0652DD",
                            pointBackgroundColor: "#0652DD",
                            pointBorderColor: "#fff",
                            pointHoverBackgroundColor: "#fff",
                            pointHoverBorderColor: "#0652DD",
                            data: [28, 48, 40, 19, 96, 27, 100],
                        },
                    ],
                }),
                this.respChart(r("#polarArea"), "PolarArea", {
                    datasets: [{ data: [11, 16, 7, 18], backgroundColor: ["#fcb92c", "#6fbe36", "#ff5d5d", "#0652DD"], label: "My dataset", hoverBorderColor: "#fff" }],
                    labels: ["Series 1", "Series 2", "Series 3", "Series 4"],
                });
        }),
        (r.ChartJs = new o()),
        (r.ChartJs.Constructor = o);
})(window.jQuery),
    window.jQuery.ChartJs.init();
