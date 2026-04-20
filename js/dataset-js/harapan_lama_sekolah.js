$(function () {
    /*Data Nasional*/
    var speedCanvas = document.getElementById("speedChart");

    Chart.defaults.global.defaultFontFamily = "Lato";
    Chart.defaults.global.defaultFontSize = 12;

    var dataFirst = {
        label: "Kalsel",
        data: [
        <?php $h1 = HarapanLamaSekolah::model()->findAll(array('group'=>'tahun'));
          foreach($h1 as $hdp) {
            $hdp = HarapanLamaSekolah::model()->findByAttributes(array('id_lokasi'=>101,'tahun'=>$hdp->tahun));
            echo $hdp->angka.',';
          }
        ?>],
        lineTension: 0.3,
        fill: false,
        borderColor: 'red',
        backgroundColor: 'transparent',
        pointBorderColor: 'red',
      };

    var dataSecond = {
        label: "Kalbar",
        data: [11.11,11.6,11.89,12.25,12.37],
        lineTension: 0.3,
        fill: false,
        borderColor: 'purple',
        backgroundColor: 'transparent',
        pointBorderColor: 'purple',
      };

      var dataThird = {
          label: "Kalteng",
          data: [11.22,11.71,11.93,12.22,12.33],
          lineTension: 0.3,
          fill: false,
          borderColor: 'green',
          backgroundColor: 'transparent',
          pointBorderColor: 'green',
        };


        var dataFourth = {
            label: "Kaltim",
            data: [12.46,12.85,13.17,13.18,13.35],
            lineTension: 0.3,
            fill: false,
            borderColor: 'blue',
            backgroundColor: 'transparent',
            pointBorderColor: 'blue',
          };


        var dataFifth = {
            label: "Kaltara",
            data: [11.86,12.3,12.52,12.54,12.59],
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
        data: [10.84, 10.95, 11.2, 11.42, 11.53],
        lineTension: 0.3,
        fill: false,
        borderColor: 'red',
        backgroundColor: 'transparent',
        pointBorderColor: 'red',
      };

    var data2 = {
        label: "Kotabaru", 
        data: [10.84, 10.91, 11.11, 11.41, 11.66],
        lineTension: 0.3,
        fill: false,
        borderColor: 'purple',
        backgroundColor: 'transparent',
        pointBorderColor: 'purple',
      };

      var data3 = {
          label: "Banjar",
          data: [10.57, 10.72, 10.99, 11.16, 11.41],
          lineTension: 0.3,
          fill: false,
          borderColor: 'green',
          backgroundColor: 'transparent',
          pointBorderColor: 'green',
        };

        var data4 = {
            label: "Barito Kuala",
            data: [11.22, 11.31, 11.54, 11.72, 11.92],
            lineTension: 0.3,
            fill: false,
            borderColor: 'blue',
            backgroundColor: 'transparent',
            pointBorderColor: 'blue',
          };


        var data5 = {
            label: "Tapin",
            data: [10.74, 10.95, 11.17, 11.21, 11.24],
            lineTension: 0.3,
            fill: false,
            borderColor: 'orange',
            backgroundColor: 'transparent',
            pointBorderColor: 'orange',
          };

        var data6 = {
            label: "HSS",
            data: [11.04, 11.35, 11.68, 11.83, 12.02],
            lineTension: 0.3,
            fill: false,
            borderColor: 'yellow',
            backgroundColor: 'transparent',
            pointBorderColor: 'yellow',
          };

        var data7 = {
            label: "HST",
            data: [11.23,11.25,11.42,11.94,12],
            lineTension: 0.3,
            fill: false,
            borderColor: 'grey',
            backgroundColor: 'transparent',
            pointBorderColor: 'grey',
          };

        var data8 = {
            label: "HSU",
            data: [11.52,11.75,12.1,12.78,12.81],
            lineTension: 0.3,
            fill: false,
            borderColor: 'brown',
            backgroundColor: 'transparent',
            pointBorderColor: 'brown',
          };

        var data9 = {
            label: "Tabalong",
            data: [11.8,11.9,11.96,12.32,12.46],
            lineTension: 0.3,
            fill: false,
            borderColor: 'olive',
            backgroundColor: 'transparent',
            pointBorderColor: 'olive',
          };

        var data10 = {
            label: "Tanah Bumbu",
            data: [10.84,10.95,11.2,11.42,11.53],
            lineTension: 0.3,
            fill: false,
            borderColor: 'maroon',
            backgroundColor: 'transparent',
            pointBorderColor: 'maroon',
          };

        var data11 = {
            label: "Balangan",
            data: [10.63,10.85,11.03,11.48,11.77],
            lineTension: 0.3,
            fill: false,
            borderColor: 'magenta',
            backgroundColor: 'transparent',
            pointBorderColor: 'magenta',
          };


          var data12 = {
              label: "Banjarmasin",
              data: [13.18,13.58,13.73,13.76,13.79],
              lineTension: 0.3,
              fill: false,
              borderColor: 'black',
              backgroundColor: 'transparent',
              pointBorderColor: 'black',
            };

            var data13 = {
                label: "Banjarbaru",
                data: [14.55,14.67,14.73,14.75,14.77],
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