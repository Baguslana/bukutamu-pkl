</div>
<!-- end Container -->
    


    <!-- Bootstrap core JavaScript-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="assets/js/demo/datatables-demo.js"></script>

<script>
// Particles.js Configuration
document.addEventListener('DOMContentLoaded', function() {
    // Initialize Particles
    if (typeof particlesJS !== 'undefined') {
        particlesJS('particles-stats', {
            "particles": {
                "number": {
                    "value": 50,
                    "density": {
                        "enable": true,
                        "value_area": 800
                    }
                },
                "color": {
                    "value": ["#ffffff", "#e3f2fd", "#bbdefb"]
                },
                "shape": {
                    "type": "circle",
                    "stroke": {
                        "width": 0,
                        "color": "#000000"
                    }
                },
                "opacity": {
                    "value": 0.6,
                    "random": true,
                    "anim": {
                        "enable": true,
                        "speed": 1,
                        "opacity_min": 0.3,
                        "sync": false
                    }
                },
                "size": {
                    "value": 3,
                    "random": true,
                    "anim": {
                        "enable": true,
                        "speed": 2,
                        "size_min": 1,
                        "sync": false
                    }
                },
                "line_linked": {
                    "enable": true,
                    "distance": 150,
                    "color": "#ffffff",
                    "opacity": 0.3,
                    "width": 1
                },
                "move": {
                    "enable": true,
                    "speed": 1.5,
                    "direction": "none",
                    "random": true,
                    "straight": false,
                    "out_mode": "out",
                    "bounce": false,
                    "attract": {
                        "enable": false,
                        "rotateX": 600,
                        "rotateY": 600
                    }
                }
            },
            "interactivity": {
                "detect_on": "canvas",
                "events": {
                    "onhover": {
                        "enable": true,
                        "mode": "grab"
                    },
                    "onclick": {
                        "enable": true,
                        "mode": "push"
                    },
                    "resize": true
                },
                "modes": {
                    "grab": {
                        "distance": 140,
                        "line_linked": {
                            "opacity": 0.8
                        }
                    },
                    "push": {
                        "particles_nb": 4
                    }
                }
            },
            "retina_detect": true
        });
    }

    // Chart Configuration (with updated colors for dark background)
    const canvas = document.getElementById('visitorChart');
    if (!canvas) {
        console.error('Canvas element not found');
        return;
    }

    const ctx = canvas.getContext('2d');
    
    const visitorData = {
        labels: ['Hari Ini', 'Kemarin', 'Minggu Ini', 'Bulan Ini', 'Total'],
        datasets: [{
            label: 'Jumlah Pengunjung',
            data: [
                <?= $hari_ini_count[0] ?>,
                <?= $kemarin_count[0] ?>,
                <?= $seminggu_count[0] ?>,
                <?= $sebulan_count[0] ?>,
                <?= $keseluruhan_count[0] ?>
            ],
            backgroundColor: [
                'rgba(0, 0, 255, 1)',
                'rgba(255, 165, 0)',
                'rgba(25, 251, 125)',
                'rgba(11, 102, 35)',
                'rgba(192, 192, 192)'
            ],
            borderColor: '#ffffff',
            borderWidth: 2,
            borderRadius: 6,
            hoverBackgroundColor: [
                'rgba(0, 0, 255, 1)',
                'rgba(255, 165, 0)',
                'rgba(25, 251, 125)',
                'rgba(11, 102, 35)',
                'rgba(192, 192, 192)'
            ]
        }]
    };

    const config = {
        type: 'bar',
        data: visitorData,
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false
                },
                tooltip: {
                    backgroundColor: 'rgba(0,0,0,0.8)',
                    titleColor: 'white',
                    bodyColor: 'white',
                    cornerRadius: 8,
                    displayColors: true,
                    callbacks: {
                        label: function(context) {
                            return context.label + ': ' + context.parsed.y + ' pengunjung';
                        }
                    }
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        stepSize: 1,
                        color: 'rgba(255, 255, 255, 0.8)',
                        font: {
                            size: 10,
                            weight: 'bold'
                        }
                    },
                    grid: {
                        color: 'rgba(255, 255, 255, 0.2)',
                        drawBorder: false,
                    }
                },
                x: {
                    ticks: {
                        color: 'rgba(255, 255, 255, 0.8)',
                        font: {
                            size: 10,
                            weight: 'bold'
                        },
                        maxRotation: 45,
                        minRotation: 0
                    },
                    grid: {
                        display: false
                    }
                }
            },
            animation: {
                duration: 1500,
                easing: 'easeOutQuart'
            }
        }
    };

    try {
        new Chart(ctx, config);
        console.log('Chart berhasil dibuat');
    } catch (error) {
        console.error('Error creating chart:', error);
    }
});
</script>

</body>

</html>