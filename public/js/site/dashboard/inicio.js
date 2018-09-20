$(document).ready(function(){
    google.charts.load('current', {'packages':['gauge']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

        var data = google.visualization.arrayToDataTable([
            ['Label', 'Value'],
            ['Humedad', 80],
            ['Temperatura', 55]
        ]);

        var options = {
            width: 400, height: 250,
            redFrom: 90, redTo: 100,
            yellowFrom:75, yellowTo: 90,
            minorTicks: 5
        };

        var chart = new google.visualization.Gauge(document.getElementById('medidores'));
        var chart2 = new google.visualization.Gauge(document.getElementById('medidores2'));

        chart.draw(data, options);
        chart2.draw(data, options);

        setInterval(function() {
            data.setValue(0, 1, 40 + Math.round(60 * Math.random()));
            data.setValue(1, 1, 40 + Math.round(60 * Math.random()));
            chart.draw(data, options);
            chart2.draw(data, options);
        }, 1300);
    }
});
