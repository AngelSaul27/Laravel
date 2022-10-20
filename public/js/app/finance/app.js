const indexGraphis = document.getElementById('myChart');
const labels = ['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'];

const data = {
    labels: labels,
    datasets: [
        {
            label: 'Spending Amount',
            backgroundColor: '#63d3ff',
            borderColor: '#63d3ff',
            data: [0, 20, 50, 12, 20, 80],
        },
        {
            label: 'Income Amount',
            backgroundColor: '#02779e',
            borderColor: '#02779e',
            data: [10, 30, 30, 22, 30, 60],
        }
    ]
};

const options = {
    animations: {
        tension: {
            duration: 2000,
            easing: 'linear',
            from: 1,
            to: 0,
            loop: true
        }
    },
    scales: {
        y: {
            ticks: {
                color: "white", //Color eje X
            }
        },
        x: {
            ticks: {
                color: "white", //Color eje X
            }
        },
    },
    plugins: {
        legend: {
            labels: {
                color: 'white',
            },
            display: false
        },
    },
};

const options_light = {
    animations: {
        tension: {
            duration: 2000,
            easing: 'linear',
            from: 1,
            to: 0,
            loop: true
        }
    },
    scales: {
        y: {
            ticks: {
                color: "#1d253e"
            }
        },
        x: {
            ticks: {
                color: "#1d253e"
            }
        },
    },
    plugins: {
        legend: {
            labels: {
                color: '#1d253e',
            },
            display: false
        }
    }
};

const config = {
    type: 'line',
    data: data,
    options: options
};
const myChart = new Chart(indexGraphis, config);
/*Changue theme to chart*/
$('.theme-toggle').on('click', function () {
    if (localStorage.getItem("color-theme") === "light") {
        myChart.options = options_light;
        myChart.update();
    }else{
        myChart.options = options;
        myChart.update();
    }
});
if (localStorage.getItem("color-theme") === "dark" ||(!("color-theme" in localStorage) &&window.matchMedia("(prefers-color-scheme: dark)").matches)) {
    myChart.options = options;
    myChart.update();
}else{
    myChart.options = options_light;
    myChart.update();
}
/*Slide*/
var splide = new Splide( '.splide',{
    type: 'loop',
    perPage: 1,
    arrows: false,
    autoplay: true,
    interval: 3000,
    pauseOnHover: true,
    clones: 0,
    cloneStatus: false,
});
splide.on('pagination:updated', function ( data ) {
    $('.splide').find('.splide__pagination button').map(function (){
        if($(this).hasClass('is-active')){
            var index = ($(this).attr('aria-controls')).substr(($(this).attr('aria-controls')).lastIndexOf('-')+1);
            $('#slide_panel_container').find('.'+index+'-target').removeClass('hidden').siblings().addClass('hidden');
        }
    });
} );
splide.mount();

