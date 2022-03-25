document.addEventListener('DOMContentLoaded', function () {
  var myChart = Highcharts.chart('container', {
      chart: {
          type: 'line',
          borderColor: 'rgba(255,26,61,1)'
      },
      title: {
          text: '大型小売店業態別販売額'
      },
      xAxis: {
          categories: ['1993年','1994年','1995年','1996年','1997年','1998年','1999年','2000年','2001年','2002年']
      },
      yAxis: {
          title: {
              text: '販売額（兆円）'
          }
      },
      series: [{
          name: '百貨店',
          data: [11.2, 11.0, 10.8, 11.0, 11.1, 10.7, 10.3, 10.0, 9.6, 9.4]
      }, {
          name: 'スーパー',
          data: [10.3,	10.8,	11.5,	11.9,	12.3,	12.6,	12.8,	12.6,	12.7,	12.7]
      }]
  });
});
$(document).ready(function () {
  $('#smpleTable').DataTable({
    // 日本語表示
    "language": {
        "url": "http://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Japanese.json"
    }
});
});