<!-- Span JS  -->
<script type="text/javascript" src="assets/js/jquery-min.js"></script>
<script type="text/javascript" src="assets/js/modernizrr.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="assets/js/nivo-lightbox.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.mixitup.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.appear.js"></script>
<script type="text/javascript" src="assets/js/count-to.js"></script>
<script type="text/javascript" src="assets/js/jquery.parallax.js"></script>
<script type="text/javascript" src="assets/js/smooth-scroll.js"></script>
<script type="text/javascript" src="assets/js/jquery.slicknav.js"></script>
<script type="text/javascript" src="assets/js/main.js"></script>
<!-- Revelosition slider js -->
<script src="assets/js/jquery.themepunch.revolution.min.js"></script>
<script src="assets/js/jquery.themepunch.tools.min.js"></script>


<!-- Contact Form Scripts -->
<script type="text/javascript" src="assets/js/form-validator.min.js"></script>
<script type="text/javascript" src="assets/js/contact-form-script.js"></script>
<!-- Google Maps API -->
<script src="https://maps.googleapis.com/maps/api/js?v=3.expsensor=false">
</script>
<!-- Google Maps JS Only for Contact Pages -->
<script type="text/javascript">
    var map;
    var plain = new google.maps.LatLng(-33.885429, 151.210081);
    var mapCoordinates = new google.maps.LatLng(-33.885429, 151.210081);


    var markers = [];
    var image = new google.maps.MarkerImage(
            'assets/img/map-marker.png',
            new google.maps.Size(84, 70),
            new google.maps.Point(0, 0),
            new google.maps.Point(60, 60)
    );

    function addMarker() {
        markers.push(new google.maps.Marker({
                    position: plain,
                    raiseOnDrag: false,
                    icon: image,
                    map: map,
                    draggable: false
                }
        ));

    }

    function initialize() {
        var mapOptions = {
                    backgroundColor: "#ffffff",
                    zoom: 15,
                    disableDefaultUI: true,
                    center: mapCoordinates,
                    zoomControl: false,
                    scaleControl: false,
                    scrollwheel: false,
                    disableDoubleClickZoom: true,
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    styles: [{
                        "featureType": "landscape.natural",
                        "elementType": "geometry.fill",
                        "stylers": [{
                            "color": "#ffffff"
                        }
                        ]
                    }
                        , {
                            "featureType": "landscape.man_made",
                            "stylers": [{
                                "color": "#ffffff"
                            }
                                , {
                                    "visibility": "off"
                                }
                            ]
                        }
                        , {
                            "featureType": "water",
                            "stylers": [{
                                "color": "#80C8E5"
                            }
                                , {
                                    "saturation": 0
                                }
                            ]
                        }
                        , {
                            "featureType": "road.arterial",
                            "elementType": "geometry",
                            "stylers": [{
                                "color": "#999999"
                            }
                            ]
                        }
                        , {
                            "elementType": "labels.text.stroke",
                            "stylers": [{
                                "visibility": "off"
                            }
                            ]
                        }
                        , {
                            "elementType": "labels.text",
                            "stylers": [{
                                "color": "#333333"
                            }
                            ]
                        }

                        , {
                            "featureType": "road.local",
                            "stylers": [{
                                "color": "#dedede"
                            }
                            ]
                        }
                        , {
                            "featureType": "road.local",
                            "elementType": "labels.text",
                            "stylers": [{
                                "color": "#666666"
                            }
                            ]
                        }
                        , {
                            "featureType": "transit.station.bus",
                            "stylers": [{
                                "saturation": -57
                            }
                            ]
                        }
                        , {
                            "featureType": "road.highway",
                            "elementType": "labels.icon",
                            "stylers": [{
                                "visibility": "off"
                            }
                            ]
                        }
                        , {
                            "featureType": "poi",
                            "stylers": [{
                                "visibility": "off"
                            }
                            ]
                        }

                    ]

                }
                ;
        map = new google.maps.Map(document.getElementById('google-map'), mapOptions);
        addMarker();

    }
    google.maps.event.addDomListener(window, 'load', initialize);
</script>