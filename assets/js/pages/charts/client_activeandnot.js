$(function () {
   new Chart(document.getElementById("bar_chart").getContext("2d"), getChartJs('bar'));
   
    
});

function getChartJs(type) {
    var config = null;
    

    if (type === 'bar') {
       
        config = {
             
            type: 'bar',
            data: {
                labels: ["January", "February", "March", "April", "May", "June", "July"],
                datasets: [{
                    label: "Active Members",
                    data: [65, 59, 80, 81, 56, 55, 40],
                    backgroundColor: 'rgba(0, 255, 0, 1)',
                }, {
                     label: "Active Clients",
                        data: [100, 25, 70, 80, 86, 75, 29],
                        backgroundColor: 'rgba(0, 76, 0, 0.8)',
                },
                           {
                        label: "In-Active Members",
                        data: [3, 1, 20, 15, 3, 0, 5],
                        backgroundColor: 'rgba(255, 0, 0, 0.8)',
                    },{
                        label: "In-Active Clients",
                        data: [20, 21, 51, 1, 13, 27, 90],
                        backgroundColor: 'rgba(178, 0, 0, 0.8)',
                        
                        
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