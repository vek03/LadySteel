//RELATORIO 1
function first(mad, man, tar, noi){
    var dataValues = [mad, man, tar, noi]  
    var labels = ['Madrugada', 'Manhã', 'Tarde', 'Noite'];
    
    const data = 
    {
        labels: labels,
        datasets: 
        [
            {
                label: 'N° de Denúncias Acatadas',
                backgroundColor: 
                [
                    '#FECDD3',
                    '#FDA4AF',
                    '#FB7185',
                    '#F43F5E'
                ],
                data: dataValues,
            }
        ]
    };
     
    const config = 
    {
        type: 'bar',
        data,
        options: {},
    };
            
    const myChartOne = new Chart(document.getElementById('myChart'),
    config
    );
    
    // Instantly assign Chart.js version
    const chartVersion = document.getElementById('chartVersion');
    chartVersion.innerText = Chart.version;
}

//==========================================================================

//RELATORIO 2
function second(dom, seg, ter, qua, qui, sex, sab){
    // setup 
    var dataValues = [dom, seg, ter, qua, qui, sex, sab]  
    const data = 
    {
        labels: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sab'],
        datasets: 
        [
            {
                label: 'N° de Denúncias Acatadas',
                data: dataValues,
                backgroundColor: 
                [
                    '#FECDD3',
                    '#FDA4AF',
                    '#FB7185',
                    '#F43F5E',
                    '#E11D48',
                    '#BE123C',
                    '#9F1239'
                ],
        
            }

        ]
        
    }

    // config 
    const config = 
    {
        type: 'bar',
        data,
        options: 
        {
            scales: 
            {
                y: 
                {
                    beginAtZero: true
                }
            }
        }
    };

    // render init block
    const myChartTwo = new Chart(document.getElementById('myChart'),
    config
    );

    // Instantly assign Chart.js version
    const chartVersion = document.getElementById('chartVersion');
    chartVersion.innerText = Chart.version;
}

//==========================================================================

//RELATORIO 3
function third(jan, fev, mar, abr, mai, jun, jul, ago, set, out, nov, dez){
    var dataValues = [jan, fev, mar, abr, mai, jun, jul, ago, set, out, nov, dez]   
    const labels = 
    [
        'Jan',
        'Fev',
        'Mar',
        'Abr',
        'Mai',
        'Jun',
        'Jul',
        'Ago',
        'Set',
        'Out',
        'Nov',
        'Dez'
    ];
    
    const data = 
    {
        labels: labels,
        datasets: 
        [
            {
                label: 'N° de Denúncias Acatadas',
                data: dataValues,
                backgroundColor: 
                [
                    '#FECDD3',
                    '#FDA4AF',
                    '#FB7185',
                    '#F43F5E',
                    '#E11D48',
                    '#BE123C',
                    '#FECDD3',
                    '#FDA4AF',
                    '#FB7185',
                    '#F43F5E',
                    '#E11D48',
                    '#BE123C'
                ],
            }
        ]
    };
     
    const config = 
    {
        type: 'bar',
        data,
        options: {},
    };
            
    var myChartThree = new Chart(document.getElementById('myChart'),
    config
    );
    
    // Instantly assign Chart.js version
    const chartVersion = document.getElementById('chartVersion');
    chartVersion.innerText = Chart.version;
}