<!-- New Page for Web Programming course, for the implementatio of JavaScript events -->

<?php
$title = "Trophies Timeline";
include "header.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Trophies Timeline</title>
    <style>
        <?php include('../css/timeline.css'); ?>
    </style>
</head>

<body>
    <section>
        <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
        <section class="section home-5-bg" id="home">
            <div id="particles-js"></div>
            <div class="bg-overlay"></div>
            <div class="home-center">
                <div class="home-desc-center">
                    <div class="container">
                        <div class="justify-content-center row">
                            <div class="col-lg-7">
                                <div class="mt-40 text-center home-5-content">
                                    <div class="home-icon mb-4"><i class="mdi mdi-pinwheel mdi-spin text-white h1"></i>
                                    </div>
                                    <h3 class="text-white font-weight-normal home-5-title mb-0">Real Madrid's Trophy
                                        Cabinet: <br> A Look at the Club's Historic Collection of Titles</h3>

                                    <!-- JavaScript event that changes the font size when mouse is over  -->

                                    <p class="text-white-70 mt-4 f-15 mb-0"><SPAN STYLE=""
                                            onMouseOver="this.style.fontSize = '20px'"
                                            onMouseOut="this.style.fontSize = ''">
                                            Real Madrid is one of the most successful
                                            football clubs in the world, with a long and storied history of winning
                                            titles.
                                            The Spanish giants have won an impressive 13 European Cup/UEFA Champions
                                            League
                                            titles, more than any other club, as well as numerous domestic and
                                            international
                                            honors. In total, Real Madrid has won over 90 trophies across all
                                            competitions,
                                            including 35 La Liga titles, 19 Copa del Rey titles, 4 FIFA Club World Cup
                                            trophies, and the Best Club of the 20th Century FIFA Trophy. The club's
                                            trophy
                                            cabinet is a testament to its sustained success over the years, and its
                                            continued pursuit of excellence on the field.
                                        </SPAN>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <section style="background-color: #72A0C1;">

        <div class="container py-5">
            <div class="main-timeline">
                <div class="timeline left">
                    <div class="card">
                        <div class="card-body p-4 change-color">
                            <h3>European Cup/UEFA Champions League</h3>
                            <h6>1956, 1957, 1958, 1959, 1960, 1966, 1998, 2000, 2002, 2014, 2016, 2017, 2018, 2022</h6
                                tex>
                            <p class="mb-0">Real Madrid is the most successful club in the history of the competition,
                                having won the title 14 times.</p>
                        </div>
                    </div>
                </div>
                <div class="timeline right">
                    <div class="card">
                        <div class="card-body p-4 change-color">
                            <h3>La Liga</h3>
                            <h6>1932, 1933, 1954, 1955, 1957, 1958, 1961, 1962, 1963, 1964, 1965, 1967, 1968, 1969,
                                1972, 1975, 1976, 1978, 1979, 1980, 1986, 1987, 1988, 1989, 1990, 1995, 1997, 2001,
                                2003, 2007, 2008, 2012, 2017, 2020, 2022</h6 tex>
                            <p class="mb-0">Real Madrid is the most successful club in the history of La Liga,
                                having won the title 35 times.</p>
                        </div>
                    </div>
                </div>
                <div class="timeline left" id="left-color">
                    <div class="card">
                        <div class="card-body p-4 change-color">
                            <h3>Copa del Rey</h3>
                            <h6>1905, 1906, 1907, 1908, 1917, 1934, 1936, 1946, 1947, 1962, 1970, 1974, 1975, 1980,
                                1982, 1989, 1993, 2011, 2014</h6 tex>
                            <p class="mb-0">The Copa del Rey is Spain's premier domestic cup competition. Barcelona
                                is the most succesfull club in the history of Copa del Rey, having won the title 31
                                times.</p>
                        </div>
                    </div>
                </div>
                <div class="timeline right">
                    <div class="card">
                        <div class="card-body p-4 change-color">
                            <h3>Spanish Super Cups</h3>
                            <h6>1988, 1989, 1990, 1993, 1997, 2001, 2003, 2008, 2012, 2017, 2019, 2020, 2022</h6 tex>
                            <p class="mb-0">The Spanish Super Cup is a Spanish football competition contested by the
                                winners of La Liga and the Copa del Rey.</p>
                        </div>
                    </div>
                </div>
                <div class="timeline left">
                    <div class="card">
                        <div class="card-body p-4 change-color">
                            <h3>Fifa World Cups</h3>
                            <h6>1960, 1998, 2002, 2014, 2016, 2017, 2018</h6 tex>
                            <p class="mb-0">The FIFA Club World Cup is an international club football tournament
                                contested by the winners of the six continental confederations, as well as the host
                                nation's league champions.</p>
                        </div>
                    </div>
                </div>
                <div class="timeline right">
                    <div class="card">
                        <div class="card-body change-color">
                            <h3>Campeonato Regional Centro</h3>
                            <h6>1904, 1905, 1906, 1907, 1908, 1909, 1913, 1916, 1917, 1918, 1919, 1920, 1921, 1922,
                                1923, 1924, 1926, 1927, 1928, 1929, 1930, 1931, 1933</h6 tex>
                            <p class="mb-0">The Campeonato Regional Centro was a regional football championship
                                contested by teams from the central region of Spain.</p>
                        </div>
                    </div>
                </div>
                <div class="timeline left">
                    <div class="card">
                        <div class="card-body p-4 change-color">
                            <h3>Copa de Castilla</h3>
                            <h6>1916, 1917, 1918, 1919, 1920, 1921, 1922, 1923, 1924, 1926, 1927, 1928, 1929, 1930,
                                1931, 1933, 1934, 1935</h6 tex>
                            <p class="mb-0">The Copa de Castilla was a regional football championship contested by teams
                                from the Castilla region of Spain.</p>
                        </div>
                    </div>
                </div>
                <div class="timeline right">
                    <div class="card">
                        <div class="card-body change-color">
                            <h3>Best club of the 20th century FIFA</h3>
                            <h6>2020</h6 tex>
                            <p class="mb-0">The Best Club of the 20th Century FIFA Trophy was awarded to the world's
                                best club. Real Madrid won, having won numerous titles, including seven European
                                Cup/UEFA Champions League trophies.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>

        // Changing background colour when hovering on the card with Eventlistener
        let colourChange = document.querySelectorAll('.change-color');
        colourChange.forEach(element => {

            element.addEventListener('mouseover', () => {
                element.style.backgroundColor = '#FEBE10';
            });
            element.addEventListener('mouseout', () => {
                element.style.backgroundColor = 'white';
            });
        });


        particlesJS("particles-js", {
            "particles": {
                "number": {
                    "value": 80,
                    "density": {
                        "enable": true,
                        "value_area": 800
                    }
                },
                "color": {
                    "value": "#ffffff"
                },
                "shape": {
                    "type": "circle",
                    "stroke": {
                        "width": 0,
                        "color": "#000000"
                    },
                    "polygon": {
                        "nb_sides": 5
                    },
                    "image": {
                        "src": "img/github.svg",
                        "width": 100,
                        "height": 100
                    }
                },
                "opacity": {
                    "value": 0.5,
                    "random": false,
                    "anim": {
                        "enable": false,
                        "speed": 1,
                        "opacity_min": 0.1,
                        "sync": false
                    }
                },
                "size": {
                    "value": 20,
                    "random": true,
                    "anim": {
                        "enable": false,
                        "speed": 40,
                        "size_min": 0.1,
                        "sync": false
                    }
                },
                "line_linked": {
                    "enable": true,
                    "distance": 150,
                    "color": "#ffffff",
                    "opacity": 0.22,
                    "width": 1
                },
                "move": {
                    "enable": true,
                    "speed": 6,
                    "direction": "none",
                    "random": false,
                    "straight": false,
                    "out_mode": "out",
                    "attract": {
                        "enable": false,
                        "rotateX": 600,
                        "rotateY": 1200
                    }
                }
            },
            "interactivity": {
                "detect_on": "canvas",
                "events": {
                    "onhover": {
                        "enable": true,
                        "mode": "repulse"
                    },
                    "onclick": {
                        "enable": true,
                        "mode": "push"
                    },
                    "resize": true
                },
                "modes": {
                    "grab": {
                        "distance": 400,
                        "line_linked": {
                            "opacity": 1
                        }
                    },
                    "bubble": {
                        "distance": 400,
                        "size": 40,
                        "duration": 2,
                        "opacity": 8,
                        "speed": 3
                    },
                    "repulse": {
                        "distance": 200
                    },
                    "push": {
                        "particles_nb": 4
                    },
                    "remove": {
                        "particles_nb": 2
                    }
                }
            },
            "retina_detect": true,
            "config_demo": {
                "hide_card": false,
                "background_color": "#b61924",
                "background_image": "",
                "background_position": "50% 50%",
                "background_repeat": "no-repeat",
                "background_size": "cover"
            }
        }); 
    </script>

</body>
<?php include "footer.php" ?>

</html>