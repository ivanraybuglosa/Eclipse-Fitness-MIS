$(function () {
new Chart(document.getElementById("Attendance_Chart").getContext("2d"), getChartJs('line'));
   
    
});

function getChartJs(type) {
    var config = null;
    

    if (type === 'line') {
       
        config = {
             
            type: 'line',
            data: {
                
               
                labels: ["January", "February", "March", "April", "May", "June", "July"],
                datasets: [{
                    label: "MEMBERS",
                    labelColor: 'rgba(0, 188, 212, 0.75)',
                    data: [200, 150, 180, 21, 88, 50, 10],
                    borderColor: 'rgba(0, 188, 212, 0.75)',
                    backgroundColor: 'rgba(0, 0, 0, 0)',
                    pointBorderColor: 'rgba(0, 0, 0,0)',
                    pointBackgroundColor: 'rgba(0, 0, 0, 0.5)',
                    lineTension: 0,
                    pointBorderWidth: 1
                }, {
                        label: "WALK-IN CLIENTS",
                        labelColor: 'rgba(233, 30, 99, 0.75)',
                       
                        data: [300, 70, 180, 80, 10, 70, 90],
                        borderColor: 'rgba(233, 30, 99, 0.75)',
                        backgroundColor: 'rgba(0, 0, 0, 0)',
                        pointBorderColor: 'rgba(0, 0, 0, 0)',
                        pointBackgroundColor: 'rgba(0, 0, 0, 0.5)',
                        lineTension: 0,
                        pointBorderWidth: 1
                    }]
            },
                    
            options: {
                responsive: true,
                scaleBeginAtZero: true,
                legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>"
                
            }
            
        }
                    
    }
    
    
    return config;
}