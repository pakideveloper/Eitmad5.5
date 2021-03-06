    @include('frontend.ecommerce.dashboards.vendor.include.header')
    <script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
  animationEnabled: true,
  theme: "light2",
  title: {
    text: "Monthly Sales Data"
  },
  axisX: {
    valueFormatString: "MMM"
  },
  axisY: {
    prefix: "Rs. ",
    labelFormatter: addSymbols
  },
  toolTip: {
    shared: true
  },
  legend: {
    cursor: "pointer",
    itemclick: toggleDataSeries
  },
  data: [
  {
    type: "column",
    name: "Actual Sales",
    showInLegend: true,
    xValueFormatString: "MMMM YYYY",
    yValueFormatString: "Rs#,##0",
    dataPoints: [
      // { x: new Date(2016, 0), y: 20000 },
      // { x: new Date(2016, 1), y: 30000 },
      // { x: new Date(2016, 2), y: 25000 },
      // { x: new Date(2016, 3), y: 70000, indexLabel: "High Renewals" },
      // { x: new Date(2016, 4), y: 50000 },
      // { x: new Date(2016, 5), y: 35000 },
      // { x: new Date(2016, 6), y: 30000 },
      // { x: new Date(2016, 7), y: 43000 },
      // { x: new Date(2016, 8), y: 35000 },
      // { x: new Date(2016, 9), y:  30000},
      // { x: new Date(2016, 10), y: 40000 },
      // { x: new Date(2016, 11), y: 50000 }
      @foreach($graphData as $oneData)
        { x: new Date({{$oneData['year']}}, {{$oneData['month']}}), y: {{$oneData['sale']}} },
      @endforeach
    ]
  }, 
  {
    type: "line",
    // name: "Expected Sales",
    showInLegend: true,
    yValueFormatString: "$#,##0",
    dataPoints: [
      // { x: new Date(2016, 0), y: 40000 },
      // { x: new Date(2016, 1), y: 42000 },
      // { x: new Date(2016, 2), y: 45000 },
      // { x: new Date(2016, 3), y: 45000 },
      // { x: new Date(2016, 4), y: 47000 },
      // { x: new Date(2016, 5), y: 43000 },
      // { x: new Date(2016, 6), y: 42000 },
      // { x: new Date(2016, 7), y: 43000 },
      // { x: new Date(2016, 8), y: 41000 },
      // { x: new Date(2016, 9), y: 45000 },
      // { x: new Date(2016, 10), y: 42000 },
      // { x: new Date(2016, 11), y: 50000 }
    ]
  },
  {
    type: "area",
    // name: "Profit",
    markerBorderColor: "white",
    markerBorderThickness: 2,
    showInLegend: true,
    yValueFormatString: "$#,##0",
    dataPoints: [
      // { x: new Date(2016, 0), y: 5000 },
      // { x: new Date(2016, 1), y: 7000 },
      // { x: new Date(2016, 2), y: 6000},
      // { x: new Date(2016, 3), y: 30000 },
      // { x: new Date(2016, 4), y: 20000 },
      // { x: new Date(2016, 5), y: 15000 },
      // { x: new Date(2016, 6), y: 13000 },
      // { x: new Date(2016, 7), y: 20000 },
      // { x: new Date(2016, 8), y: 15000 },
      // { x: new Date(2016, 9), y:  10000},
      // { x: new Date(2016, 10), y: 19000 },
      // { x: new Date(2016, 11), y: 22000 }
    ]
  }]
});
chart.render();

function addSymbols(e) {
  var suffixes = ["", "K", "M", "B"];
  var order = Math.max(Math.floor(Math.log(e.value) / Math.log(1000)), 0);

  if(order > suffixes.length - 1)                 
    order = suffixes.length - 1;

  var suffix = suffixes[order];      
  return CanvasJS.formatNumber(e.value / Math.pow(1000, order)) + suffix;
}

function toggleDataSeries(e) {
  if (typeof (e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
    e.dataSeries.visible = false;
  } else {
    e.dataSeries.visible = true;
  }
  e.chart.render();
}

}
</script>
    <div id="dashboard_app">
    <div class="container-fluid">
      <div class="row">
        
        @include('frontend.ecommerce.dashboards.vendor.include.left-sidebar')

        
          
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <div id="chartContainer" style="height: 370px; max-width: 920px; margin: 0px auto; margin-top: 20px"></div>
<script src="{{URL::to('public/dashboard/ecommerce/vendor/graph/')}}/canvasjs.min.js"></script>

            </main>
        
        </div>
      </div>
    </div>
    @include('frontend.ecommerce.dashboards.vendor.include.footer')
