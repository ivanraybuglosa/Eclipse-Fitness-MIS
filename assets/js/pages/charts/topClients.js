
$(function () {
   new Chart(document.getElementById("top_clients").getContext("2d"), getChartJs('bar'));
   
    
});

function getChartJs(type) {
    var config = null;
    

    if (type === 'bar') {
       
        config = {
             
            type: 'bar',
            data: {
                labels: ["Ivan Bulosa", "Patrick Legislador", "Brix Nessia", "Nina Garcia", "Miriam Gayoba"],
                datasets: [{
                    
                    data: [10,14, 15, 9, 3],
                    backgroundColor: ['rgba(255, 0, 0, 1)', 'rgba(255, 255, 0, 1)','rgba(255, 0, 255, 1)','rgba(255, 255, 156, 1)','rgba(100, 255, 156, 1)'],
					
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