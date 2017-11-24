
$(function () {
new Chart(document.getElementById("newMember").getContext("2d"), getChartJs('line'));
   
    
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