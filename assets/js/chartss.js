var Charts = function () {
    //function to initiate jQRangeSlider
    //There are plenty of options you can set to control the precise looks of your plot. 
    //You can control the ticks on the axes, the legend, the graph type, etc.
    //For more information, please visit http://www.flotcharts.org/
    var runCharts = function () {
        // Basic Chart 
        var d1 = [];
        for (var i = 0; i < Math.PI * 2; i += 0.25) {
            d1.push([i, Math.sin(i)]);
        }
        var d2 = [];
        for (var i = 0; i < Math.PI * 2; i += 0.25) {
            d2.push([i, Math.cos(i)]);
        }
        var d3 = [];
        for (var i = 0; i < Math.PI * 2; i += 0.1) {
            d3.push([i, Math.tan(i)]);
        }
        /*$.plot("#placeholder", [{
            label: "sin(x)",
            data: d1
        }, {
            label: "cos(x)",
            data: d2
        }, {
            label: "tan(x)",
            data: d3
        }], {
            series: {
                lines: {
                    show: true
                },
                points: {
                    show: true
                }
            },
            xaxis: {
                ticks: [0, [Math.PI / 2, "\u03c0/2"],
                    [Math.PI, "\u03c0"],
                    [Math.PI * 3 / 2, "3\u03c0/2"],
                    [Math.PI * 2, "2\u03c0"]
                ]
            },
            yaxis: {
                ticks: 10,
                min: -2,
                max: 2,
                tickDecimals: 3
            },
            grid: {
                backgroundColor: {
                    colors: ["#fff", "#eee"]
                },
                borderWidth: {
                    top: 1,
                    right: 1,
                    bottom: 2,
                    left: 2
                }
            }
        });*/
        // Toggling Series 
        

        //Real Time 
        // We use an inline data source in the example, usually data would
        // be fetched from a server
        var data = [],
            totalPoints = 300;

        function getRandomData() {
            if (data.length > 0)
                data = data.slice(1);
            // Do a random walk
            while (data.length < totalPoints) {
                var prev = data.length > 0 ? data[data.length - 1] : 50,
                    y = prev + Math.random() * 10 - 5;
                if (y < 0) {
                    y = 0;
                } else if (y > 100) {
                    y = 100;
                }
                data.push(y);
            }
            // Zip the generated y values with the x values
            var res = [];
            for (var i = 0; i < data.length; ++i) {
                res.push([i, data[i]]);
            }
            return res;
        }
        // Set up the control widget
        var updateInterval = 30;
        $("#updateInterval").val(updateInterval).change(function () {
            var v = $(this).val();
            if (v && !isNaN(+v)) {
                updateInterval = +v;
                if (updateInterval < 1) {
                    updateInterval = 1;
                } else if (updateInterval > 2000) {
                    updateInterval = 2000;
                }
                $(this).val("" + updateInterval);
            }
        });
        /*var plot = $.plot("#placeholder4", [getRandomData()], {
            series: {
                shadowSize: 0 // Drawing is faster without shadows
            },
            yaxis: {
                min: 0,
                max: 100
            },
            xaxis: {
                show: false
            }
        });*/

        function update() {
            plot.setData([getRandomData()]);
            // Since the axes don't change, we don't need to call plot.setupGrid()
            plot.draw();
            setTimeout(update, updateInterval);
        }
        //update();
        //Categories 
        var data_category = [
            ["January", 10],
            ["February", 8],
            ["March", 4],
            ["April", 13],
            ["May", 17],
            ["June", 9]
        ];
        /*$.plot("#placeholder5", [data_category], {
            series: {
                bars: {
                    show: true,
                    barWidth: 0.6,
                    align: "center",
                    fillColor: "#4DBEF4",
                    lineWidth: 0,
                }
            },
            xaxis: {
                mode: "categories",
                tickLength: 0
            }
        });*/
        // Annotations
        var d_1 = [];
        for (var i = 0; i < 20; ++i) {
            d_1.push([i, Math.sin(i)]);
        }
        var data_annotation = [{
            data: d_1,
            label: "Pressure",
            color: "#333"
        }];
        var markings = [{
            color: "#f6f6f6",
            yaxis: {
                from: 1
            }
        }, {
            color: "#f6f6f6",
            yaxis: {
                to: -1
            }
        }, {
            color: "#000",
            lineWidth: 1,
            xaxis: {
                from: 2,
                to: 2
            }
        }, {
            color: "#000",
            lineWidth: 1,
            xaxis: {
                from: 8,
                to: 8
            }
        }];
        /*//var placeholder = $("#placeholder6");
        var plot_annotation = $.plot(placeholder, data_annotation, {
            bars: {
                show: true,
                barWidth: 0.5,
                fill: 0.9
            },
            xaxis: {
                ticks: [],
                autoscaleMargin: 0.02
            },
            yaxis: {
                min: -2,
                max: 2
            },
            grid: {
                markings: markings
            }
        });
        var o = plot_annotation.pointOffset({
            x: 2,
            y: -1.2
        });
        // Append it to the placeholder that Flot already uses for positioning
        placeholder.append("<div style='position:absolute;left:" + (o.left + 4) + "px;top:" + o.top + "px;color:#666;font-size:smaller'>Warming up</div>");
        o = plot_annotation.pointOffset({
            x: 8,
            y: -1.2
        });
        placeholder.append("<div style='position:absolute;left:" + (o.left + 4) + "px;top:" + o.top + "px;color:#666;font-size:smaller'>Actual measurements</div>");
        // Draw a little arrow on top of the last label to demonstrate canvas
        // drawing
        var ctx = plot_annotation.getCanvas().getContext("2d");
        ctx.beginPath();
        o.left += 4;
        ctx.moveTo(o.left, o.top);
        ctx.lineTo(o.left, o.top - 10);
        ctx.lineTo(o.left + 10, o.top - 5);
        ctx.lineTo(o.left, o.top);
        ctx.fillStyle = "#000";
        ctx.fill();*/
        // Default Pie 
        var data_pie = [],
            series = Math.floor(Math.random() * 6) + 3;
        for (var i = 0; i < series; i++) {
            data_pie[i] = {
                label: "Series" + (i + 1),
                data: Math.floor(Math.random() * 100) + 1
            };
        }
        /*$.plot('#placeholder7', data_pie, {
            series: {
                pie: {
                    show: true
                }
            }
        });
        // Label Formatter 
        $.plot('#placeholder8', data_pie, {
            series: {
                pie: {
                    show: true,
                    radius: 1,
                    label: {
                        show: true,
                        radius: 1,
                        formatter: labelFormatter,
                        background: {
                            opacity: 0.8
                        }
                    }
                }
            },
            legend: {
                show: false
            }
        });*/

        // Rectangular Pie





        // Tilted Pie 
        /*$.plot('#placeholder11', data_pie, {
            series: {
                pie: {
                    show: true,
                    radius: 1,
                    tilt: 0.5,
                    label: {
                        show: true,
                        radius: 1,
                        formatter: labelFormatter,
                        background: {
                            opacity: 0.8
                        }
                    },
                    combine: {
                        color: '#999',
                        threshold: 0.1
                    }
                }
            },
            legend: {
                show: false
            }
        });
        // Interactivity Pie
        $.plot('#placeholder12', data_pie, {
            series: {
                pie: {
                    show: true
                }
            },
            grid: {
                hoverable: true,
                clickable: true
            }
        });*/
        $("#placeholder12").bind("plotclick", function (event, pos, obj) {
            if (!obj) {
                return;
            }
            percent = parseFloat(obj.series.percent).toFixed(2);
            alert("" + obj.series.label + ": " + percent + "%");
        });

        
    };
    return {
        //main function to initiate template pages
        init: function () {
            runCharts();
        }
    };
}();