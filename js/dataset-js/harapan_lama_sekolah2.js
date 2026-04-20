 $(function () {
/* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */
 //-------------
    //- LINE CHART -
    //--------------
    var lineChartCanvas          = $('#lineChart').get(0).getContext('2d')
    var lineChart                = new Chart(lineChartCanvas)
    var areaChartData = {
      labels  : ['2012', '2013', '2014', '2015', '2016'],
      datasets: [
        {
          label               : 'Kab. Tanah Laut',
          fillColor           : 'rgba(123, 123, 123, 1)',
          strokeColor         : 'rgba(123, 123, 123, 1)',
          pointColor          : 'rgba(123, 123, 123, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [10.36, 10.83, 11.09, 11.25, 11.50]
        },
        {
          label               : 'Kab. Kotabaru',
          fillColor           : 'rgba(231, 214, 111, 1)',
          strokeColor         : 'rgba(231, 214, 111, 1)',
          pointColor          : 'rgba(231, 214, 111, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [10.84, 10.91, 11.11, 11.41, 11.66]
        },
        {
          label               : 'Kab. Banjar',
          fillColor           : 'rgba(210, 070, 006, 1)',
          strokeColor         : 'rgba(210, 070, 006, 1)',
          pointColor          : 'rgba(210, 070, 006, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [10.57, 10.72, 10.99, 11.16, 11.41]
        },
        {
          label               : 'Kab. Barito Kuala',
          fillColor           : 'rgba(080, 214, 222, 1)',
          strokeColor         : 'rgba(080, 214, 222, 1)',
          pointColor          : 'rgba(080, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [11.22, 11.31, 11.54, 11.72, 11.92]
        },
        {
          label               : 'Kab. Tapin',
          fillColor           : 'rgba(210, 214, 055, 1)',
          strokeColor         : 'rgba(210, 214, 055, 1)',
          pointColor          : 'rgba(210, 214, 055, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [10.74, 10.95, 11.71, 11.21, 11.24]
        },
        {
          label               : 'Kab. HSS',
          fillColor           : 'rgba(012, 214, 121, 1)',
          strokeColor         : 'rgba(012, 214, 121, 1)',
          pointColor          : 'rgba(012, 214, 121, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [11.04, 11.35, 11.68, 11.83, 12.02]
        },
        {
          label               : 'Kab. HST',
          fillColor           : 'rgba(102, 124, 147, 1)',
          strokeColor         : 'rgba(102, 124, 147, 1)',
          pointColor          : 'rgba(102, 124, 147, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [11.23, 11.25, 11.42, 11.94, 12]
        },
        {
          label               : 'Kab. HSU',
          fillColor           : 'rgba(012, 214, 222, 1)',
          strokeColor         : 'rgba(012, 214, 222, 1)',
          pointColor          : 'rgba(012, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [11.52, 11.75, 12.10, 12.78, 12.81]
        },
        {
          label               : 'Kab. Tabalong',
          fillColor           : 'rgba(002, 214, 052, 1)',
          strokeColor         : 'rgba(002, 214, 052, 1)',
          pointColor          : 'rgba(002, 214, 052, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [11.80, 11.90, 11.96, 12.32, 12.46]
        },
        {
          label               : 'Kab. Tanbu',
          fillColor           : 'rgba(123, 010, 222, 1)',
          strokeColor         : 'rgba(123, 010, 222, 1)',
          pointColor          : 'rgba(123, 010, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [10.84, 10.95, 11.20, 11.42, 11.53]
        },
        {
          label               : 'Kab. Balangan',
          fillColor           : 'rgba(070, 101, 100, 1)',
          strokeColor         : 'rgba(070, 101, 100, 1)',
          pointColor          : 'rgba(070, 101, 100, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [10.63, 10.85, 11.03, 11.48, 11.77]
        },
        {
          label               : 'Kota Banjarmasin',
          fillColor           : 'rgba(233, 010, 020, 1)',
          strokeColor         : 'rgba(233, 010, 020, 1)',
          pointColor          : 'rgba(233, 010, 020, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [13.18, 13.58, 13.73, 13.76, 13.79]
        },
        {
          label               : 'Kota Banjarbaru',
          fillColor           : 'rgba(210, 214, 222, 1)',
          strokeColor         : 'rgba(210, 214, 222, 1)',
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [14.55, 14.67, 14.73, 14.75, 14.77]
        }
      ]
    }
    var lineChartOptions         = {
      //Boolean - If we should show the scale at all
      showScale               : true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines      : false,
      //String - Colour of the grid lines
      scaleGridLineColor      : 'rgba(0,0,0,.05)',
      //Number - Width of the grid lines
      scaleGridLineWidth      : 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines  : true,
      //Boolean - Whether the line is curved between points
      bezierCurve             : true,
      //Number - Tension of the bezier curve between points
      bezierCurveTension      : 0.3,
      //Boolean - Whether to show a dot for each point
      pointDot                : false,
      //Number - Radius of each point dot in pixels
      pointDotRadius          : 4,
      //Number - Pixel width of point dot stroke
      pointDotStrokeWidth     : 1,
      //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
      pointHitDetectionRadius : 20,
      //Boolean - Whether to show a stroke for datasets
      datasetStroke           : true,
      //Number - Pixel width of dataset stroke
      datasetStrokeWidth      : 2,
      //Boolean - Whether to fill the dataset with a color
      datasetFill             : true,
      //String - A legend template
      legendTemplate          : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].lineColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
      //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
      maintainAspectRatio     : true,
      //Boolean - whether to make the chart responsive to window resizing
      responsive              : true
    }
    lineChartOptions.datasetFill = false
    lineChart.Line(areaChartData, lineChartOptions)
    //-------------
    //- BAR CHART -
    //-------------
    var barChartCanvas                   = $('#barChart').get(0).getContext('2d')
    var barChart                         = new Chart(barChartCanvas)
    var barChartData = {
      labels  : ['2012', '2013', '2014', '2015', '2016'],
      datasets: [
        {
          label               : 'Kab. Tanah Laut',
          fillColor           : 'rgba(210, 214, 222, 1)',
          strokeColor         : 'rgba(210, 214, 222, 1)',
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [69.11, 64.82, 68.22, 68.62, 68.76]
        },
        {
          label               : 'Kab. Kotabaru',
          fillColor           : 'rgba(210, 214, 222, 1)',
          strokeColor         : 'rgba(210, 214, 222, 1)',
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [66.15, 69.29, 68.14, 68.49, 68.61]
        },
        {
          label               : 'Kab. Banjar',
          fillColor           : 'rgba(210, 214, 222, 1)',
          strokeColor         : 'rgba(210, 214, 222, 1)',
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [66.12, 66.45, 65.32, 65.97, 66.17]
        },
        {
          label               : 'Kab. Barito Kuala',
          fillColor           : 'rgba(210, 214, 222, 1)',
          strokeColor         : 'rgba(210, 214, 222, 1)',
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [62.76, 66.18, 64.49, 64.94, 65.14]
        }/*,
        {
          label               : 'Digital Goods',
          fillColor           : 'rgba(60,141,188,0.9)',
          strokeColor         : 'rgba(60,141,188,0.8)',
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [28, 48, 40, 19, 86, 27, 90]
        }*/
      ]
    }
    barChartData.datasets[1].fillColor   = '#00a65a'
    barChartData.datasets[1].strokeColor = '#00a65a'
    barChartData.datasets[1].pointColor  = '#00a65a'
    var barChartOptions                  = {
      //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
      scaleBeginAtZero        : false,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines      : true,
      //String - Colour of the grid lines
      scaleGridLineColor      : 'rgba(0,0,0,.05)',
      //Number - Width of the grid lines
      scaleGridLineWidth      : 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines  : true,
      //Boolean - If there is a stroke on each bar
      barShowStroke           : true,
      //Number - Pixel width of the bar stroke
      barStrokeWidth          : 2,
      //Number - Spacing between each of the X value sets
      barValueSpacing         : 5,
      //Number - Spacing between data sets within X values
      barDatasetSpacing       : 1,
      //String - A legend template
      legendTemplate          : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].fillColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
      //Boolean - whether to make the chart responsive
      responsive              : true,
      maintainAspectRatio     : true
    }

    barChartOptions.datasetFill = false
    barChart.Bar(barChartData, barChartOptions)
})