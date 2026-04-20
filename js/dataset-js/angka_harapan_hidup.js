  $(function () {
		/*Data Nasional*/
		var speedCanvas = document.getElementById("speedChart");

		Chart.defaults.global.defaultFontFamily = "Lato";
		Chart.defaults.global.defaultFontSize = 12;

		var dataFirst = {
		    label: "Kalsel",
		    data: [66.68, 67.17, 67.63, 68.38, 69.05],
		    lineTension: 0.3,
		    fill: false,
		    borderColor: 'red',
		    backgroundColor: 'transparent',
		    pointBorderColor: 'red',
		  };

		var dataSecond = {
		    label: "Kalbar",
		    data: [63.41,64.3,64.89,65.59,65.88],
		    lineTension: 0.3,
		    fill: false,
		    borderColor: 'purple',
		    backgroundColor: 'transparent',
		    pointBorderColor: 'purple',
		  };

		  var dataThird = {
		      label: "Kalteng",
		      data: [66.66,67.41,67.77,68.53,69.13],
		      lineTension: 0.3,
		      fill: false,
		      borderColor: 'green',
		      backgroundColor: 'transparent',
		      pointBorderColor: 'green',
		    };


		    var dataFourth = {
		        label: "Kalteng",
		        data: [72.62,73.21,73.82,74.17,74.59],
		        lineTension: 0.3,
		        fill: false,
		        borderColor: 'blue',
		        backgroundColor: 'transparent',
		        pointBorderColor: 'blue',
		      };


		    var dataFifth = {
		        label: "Kalteng",
		        data: [67.7,68.31,68.9,69.55,70.18],
		        lineTension: 0.3,
		        fill: false,
		        borderColor: 'orange',
		        backgroundColor: 'transparent',
		        pointBorderColor: 'orange',
		      };


		var speedData = {
		  labels: [2012,2013,2014,2015,2016],
		  datasets: [dataFirst, dataSecond, dataThird, dataFourth, dataFifth]
		};

		var chartOptions = {
		  legend: {
		    display: true,
		    position: 'bottom',
		    labels: {
		      boxWidth: 20,
		      fontColor: 'black'
		    }
		  }
		};

		var lineChart = new Chart(speedCanvas, {
		  type: 'line',
		  data: speedData,
		  options: chartOptions
		});



		var speedCanvas2 = document.getElementById("speedChart2");

		Chart.defaults.global.defaultFontFamily = "Lato";
		Chart.defaults.global.defaultFontSize = 12;

		var data1 = {
		    label: "Tanah Bumbu",
		    data: [65.16, 66.11, 66.5, 66.99, 67.44],
		    lineTension: 0.3,
		    fill: false,
		    borderColor: 'red',
		    backgroundColor: 'transparent',
		    pointBorderColor: 'red',
		  };

		var data2 = {
		    label: "Kotabaru", 
		    data: [64.87, 65.41, 65.76, 66.61, 67.1],
		    lineTension: 0.3,
		    fill: false,
		    borderColor: 'purple',
		    backgroundColor: 'transparent',
		    pointBorderColor: 'purple',
		  };

		  var data3 = {
		      label: "Banjar",
		      data: [65.04, 65.36, 65.71, 66.39, 66.87],
		      lineTension: 0.3,
		      fill: false,
		      borderColor: 'green',
		      backgroundColor: 'transparent',
		      pointBorderColor: 'green',
		    };

		    var data4 = {
		        label: "Barito Kuala",
		        data: [61.62,62.12,62.56,63.53,64.33],
		        lineTension: 0.3,
		        fill: false,
		        borderColor: 'blue',
		        backgroundColor: 'transparent',
		        pointBorderColor: 'blue',
		      };


		    var data5 = {
		        label: "Tapin",
		        data: [65.92,66.84,66.99,67.67,68.05],
		        lineTension: 0.3,
		        fill: false,
		        borderColor: 'orange',
		        backgroundColor: 'transparent',
		        pointBorderColor: 'orange',
		      };

		    var data6 = {
		        label: "HSS",
		        data: [64.03,64.59,65.35,66.31,67.52],
		        lineTension: 0.3,
		        fill: false,
		        borderColor: 'yellow',
		        backgroundColor: 'transparent',
		        pointBorderColor: 'yellow',
		      };

		    var data7 = {
		        label: "HST",
		        data: [64.34,64.63,65.37,65.56,67.07],
		        lineTension: 0.3,
		        fill: false,
		        borderColor: 'grey',
		        backgroundColor: 'transparent',
		        pointBorderColor: 'grey',
		      };

		    var data8 = {
		        label: "HSU",
		        data: [60.12,60.77,61.32,62.49,63.38],
		        lineTension: 0.3,
		        fill: false,
		        borderColor: 'brown',
		        backgroundColor: 'transparent',
		        pointBorderColor: 'brown',
		      };

		    var data9 = {
		        label: "Tabalong",
		        data: [67.36,68.08,68.36,69.35,70.07],
		        lineTension: 0.3,
		        fill: false,
		        borderColor: 'olive',
		        backgroundColor: 'transparent',
		        pointBorderColor: 'olive',
		      };

		    var data10 = {
		        label: "Tanah Bumbu",
		        data: [66.13,66.51,66.94,67.58,68.28],
		        lineTension: 0.3,
		        fill: false,
		        borderColor: 'maroon',
		        backgroundColor: 'transparent',
		        pointBorderColor: 'maroon',
		      };

		    var data11 = {
		        label: "Balangan",
		        data: [63.69,64.03,64.44,65.34,66.25],
		        lineTension: 0.3,
		        fill: false,
		        borderColor: 'magenta',
		        backgroundColor: 'transparent',
		        pointBorderColor: 'magenta',
		      };


		      var data12 = {
		          label: "Banjarmasin",
		          data: [73.45,75.59,74.94,75.41,75.94],
		          lineTension: 0.3,
		          fill: false,
		          borderColor: 'black',
		          backgroundColor: 'transparent',
		          pointBorderColor: 'black',
		        };

		        var data13 = {
		            label: "Banjarbaru",
		            data: [76.67,77.1,77.3,77.56,77.96],
		            lineTension: 0.3,
		            fill: false,
		            borderColor: 'cyan',
		            backgroundColor: 'transparent',
		            pointBorderColor: 'cyan',
		          };


		var speedData2 = {
		  labels: [2012,2013,2014,2015,2016],
		  datasets: [data1,data2,data3,data4,data5,data6,data7,data8,data9,data10,data11,data12,data13]
		};

		var chartOptions2 = {
		  legend: {
		    display: true,
		    position: 'bottom',
		    labels: {
		      boxWidth: 20,
		      fontColor: 'black'
		    }
		  }
		};

		var lineChart2 = new Chart(speedCanvas2, {
		  type: 'line',
		  data: speedData2,
		  options: chartOptions2
		});
})