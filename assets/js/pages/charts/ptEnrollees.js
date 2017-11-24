$(function () {
   new Chart(document.getElementById("pt_chart").getContext("2d"), getChartJs('bar'));
   
    
});

function getChartJs(type) {
    var config = null;
    

    if (type === 'bar') {
       
        config = {
             
            type: 'bar',
            data: {
                labels: ["January", "February", "March", "April", "May", "June", "July"],
                datasets: [{
                    label: "Male",
                    data: [65, 59, 80, 81, 56, 55, 40],
                    backgroundColor: 'rgba(0, 0, 128, 0.8)',
                }, {
                     label: "FEMALE",
                        data: [100, 25, 70, 80, 86, 75, 29],
                        backgroundColor: 'rgba(255, 105, 180, 0.8)',
                }]
            },
                    
           options: {
                responsive: true,
                legend: false,
                
            }
            
        }
                    
    }
    
    
    return config;
}