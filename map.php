<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" href="vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/flaticon/flaticon.css">
    <link rel="stylesheet" href="vendors/slick/slick.css">
    <link rel="stylesheet" href="vendors/slick/slick-theme.css">
    <link rel="stylesheet" href="vendors/magnify-pop/magnific-popup.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' rel='stylesheet'>
      <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v1.2.1/mapbox-gl.js'></script>
      <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v1.2.1/mapbox-gl.css' rel='stylesheet' />
    <title>Urim</title>
    <style>
  
        * {
          -webkit-box-sizing:border-box;
          -moz-box-sizing:border-box;
          box-sizing:border-box;
        }

        .sidebar {
          position:absolute;
          margin-top: 220px;
          width:25%;
          height:633px;
          top:520px;
          left:0px;
          overflow:hidden;
          border-right:1px solid rgba(0,0,0,0.25);
        }
        .pad2 {
          padding:20px;
        }

        .map {
          margin-top: 220px;
          position:absolute;
          left:25%;
          width:75%;
          height:633px;
          top:520px;
        }

        h1 {
          font-size:25px;
          margin:0;
          font:400;
          line-height: 20px;
          padding: 20px 2px;
        }

        a {
          color:#404040;
          text-decoration:none;
        }

        a:hover {
          color:#101010;
        }

        .heading {
          background:#fff;
          border-bottom:1px solid #eee;
          min-height:60px;
          line-height:60px;
          padding:0 10px;
          background-color: rgb(223, 238, 240);
          color: #fff;
        }

        .listings {
          height:100%;
          overflow:auto;
          padding-bottom:60px;
        }

        .listings .item {
          display:block;
          border-bottom:1px solid #eee;
          padding:10px;
          text-decoration:none;
        }

        .listings .item:last-child { border-bottom:none; }
        .listings .item .title {
          display:block;
          color:#00853e;
          font-weight:700;
        }

        .listings .item .title small { font-weight:400; }
        .listings .item.active .title,
        .listings .item .title:hover { color:#8cc63f; }
        .listings .item.active {
          background-color:#f8f8f8;
        }

        .marker {
          border: none;
          cursor: pointer;
          height: 32px;
          width: 32px;
          background-image: url(img/marker.png);
          background-color: rgba(0, 0, 0, 0);
        }

        .clearfix { display:block; }
        .clearfix:after {
          content:'.';
          display:block;
          height:0;
          clear:both;
          visibility:hidden;
        }

        /* Marker tweaks */
        .mapboxgl-popup {
          padding-bottom: 50px;
        }

        .mapboxgl-popup-close-button {
          display:none;
        }
        .mapboxgl-popup-content {
          font:400 15px/22px 'Source Sans Pro', 'Helvetica Neue', Sans-serif;
          padding:0;
          width:300px;
        }
        .mapboxgl-popup-content-wrapper {
          padding:1%;
        }
        .mapboxgl-popup-content h3 {
          background:#91c949;
          color:#fff;
          margin:0;
          display:block;
          padding:10px;
          border-radius:3px 3px 0 0;
          font-size: 20px;
          font:100;
          margin-top:-15px;
        }

        .mapboxgl-popup-content h4 {
          margin:0;
          display:block;
          padding: 10px 10px 10px 10px;
          font-size: 15px;
          font-weight:50;
        }

        .mapboxgl-popup-content div {
          padding:10px;
        }

        .mapboxgl-container .leaflet-marker-icon {
          cursor:pointer;
        }

        .mapboxgl-popup-anchor-top > .mapboxgl-popup-content {
          margin-top: 15px;
        }

        .mapboxgl-popup-anchor-top > .mapboxgl-popup-tip {
          border-bottom-color: #91c949;
        }

        .icon {
          position:absolute;
        }
      </style>
</head>

<body>
<nav class="navbar navbar-expand-lg" id="header">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="img/logo.png" alt=""><img src="img/sticky-Logo.png" alt=""></a>
        
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="menu_toggle">
                    <span class="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                    <span class="hamburger-cross">
                        <span></span>
                        <span></span>
                    </span>
                </span>
            </button></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto menu">
                    <li class="nav-item"><a class="nav-link" href="index.php">home</a></li>
                    <li class="nav-item"><a class="nav-link" href="calculator.php">calculator</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.html">recipe</a></li>
                    <li class="nav-item"><a class="nav-link" href="map.php">map</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">contact us</a></li>
                </ul>
    
            </div>
        </div>
    </nav>
    <!--breadcrumb area-->
    <section class="breadcrumb_area parallax_effect"  style="background: url(img/slider_img2.jpg) no-repeat;">
        <div class="overlay_bg"></div>
        <div class="container">
            <div class="breadcrumb_content text-center">
                <h1>Map</h1>
                <ol class="breadcrumb"> 
                    <li><a href="#">0.0</a></li> 
                    <li class="active">blblbla</li> 
                </ol>
            </div>
        </div>
    </section>


    <div class='sidebar'>
      <div class='heading'>
        <h1>places</h1>
      </div>
    <div id='listings' class='listings'></div>
    </div>
    <script src='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.4.1/mapbox-gl-geocoder.min.js'></script>
  <link rel='stylesheet' href='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.4.1/mapbox-gl-geocoder.css' type='text/css' />
    <div id='map' class='map'> 
    </div>
  <script>
  if (!('remove' in Element.prototype)) {
    Element.prototype.remove = function() {
      if (this.parentNode) {
          this.parentNode.removeChild(this);
      }
    };
  }
 mapboxgl.accessToken = 'pk.eyJ1Ijoic2t5bGVvcyIsImEiOiJjazh4YWJxc2gwNDM0M2VtODlkMHNtMGpzIn0.yhcNd5xlxqKfljZx8KhQ_Q';

  // This adds the map
  var map = new mapboxgl.Map({
    // container id specified in the HTML
    container: 'map',
    // style URL
    style: 'mapbox://styles/mapbox/streets-v11',
    // initial position in [long, lat] format
    center: ["144.96681", "-37.818078"],
    // initial zoom
    zoom: 13,
    scrollZoom: true
  });
  var geocoder = new MapboxGeocoder({
    accessToken: mapboxgl.accessToken,
    language: 'en-EN',
    mapboxgl: mapboxgl
});
map.addControl(geocoder, 'top-left');
var place1 = {
   "type": "FeatureCollection",
   "features": [
  {
    "type": "Feature",
    "geometry": {
       "type": "Point",
       "coordinates":  [ 144.9672913,-37.81488558 ]
    },
    "properties": {
    "Theme":"Place Of Assembly",
    "Sub_Theme":"Library",
    "Feature_Name":"The Melbourne Athenaeum Library"
    }
  },
  {
    "type": "Feature",
    "geometry": {
       "type": "Point",
       "coordinates":  [ 144.9654639,-37.80776441 ]
    },
    "properties": {
    "Theme":"Place Of Assembly",
    "Sub_Theme":"Art Gallery / Museum",
    "Feature_Name":"Old Melbourne Gaol Crime & Justice Experience"
    }
  },
  {
    "type": "Feature",
    "geometry": {
       "type": "Point",
       "coordinates":  [ 144.9688362,-37.82166846 ]
    },
    "properties": {
    "Theme":"Place Of Assembly",
    "Sub_Theme":"Theatre Live",
    "Feature_Name":"FairFax Studio"
    }
  },
  {
    "type": "Feature",
    "geometry": {
       "type": "Point",
       "coordinates":  [ 144.9683378,-37.82181246 ]
    },
    "properties": {
    "Theme":"Place Of Assembly",
    "Sub_Theme":"Theatre Live",
    "Feature_Name":"Playhouse"
    }
  },
  {
    "type": "Feature",
    "geometry": {
       "type": "Point",
       "coordinates":  [ 144.9684696,-37.82128063 ]
    },
    "properties": {
    "Theme":"Place Of Assembly",
    "Sub_Theme":"Theatre Live",
    "Feature_Name":"State Theatre"
    }
  },
  {
    "type": "Feature",
    "geometry": {
       "type": "Point",
       "coordinates":  [ 144.9811422,-37.83524295 ]
    },
    "properties": {
    "Theme":"Place Of Assembly",
    "Sub_Theme":"Theatre Live",
    "Feature_Name":"St Martins Youth Arts Centre"
    }
  },
  {
    "type": "Feature",
    "geometry": {
       "type": "Point",
       "coordinates":  [ 144.9723266,-37.81072571 ]
    },
    "properties": {
    "Theme":"Place Of Assembly",
    "Sub_Theme":"Theatre Live",
    "Feature_Name":"Princess Theatre"
    }
  },
  {
    "type": "Feature",
    "geometry": {
       "type": "Point",
       "coordinates":  [ 144.9679167,-37.81600147 ]
    },
    "properties": {
    "Theme":"Place Of Assembly",
    "Sub_Theme":"Theatre Live",
    "Feature_Name":"Regent Theatre"
    }
  },
  {
    "type": "Feature",
    "geometry": {
       "type": "Point",
       "coordinates":  [ 144.9543524,-37.82524551 ]
    },
    "properties": {
    "Theme":"Place Of Assembly",
    "Sub_Theme":"Function / Conference / Exhibition Centre",
    "Feature_Name":"Melbourne Exhibition Centre"
    }
  },
  {
    "type": "Feature",
    "geometry": {
       "type": "Point",
       "coordinates":  [ 144.9522883,-37.82490405 ]
    },
    "properties": {
    "Theme":"Place Of Assembly",
    "Sub_Theme":"Function / Conference / Exhibition Centre",
    "Feature_Name":"Melbourne Convention Centre"
    }
  },
  {
    "type": "Feature",
    "geometry": {
       "type": "Point",
       "coordinates":  [ 144.9534781,-37.82425743 ]
    },
    "properties": {
    "Theme":"Place Of Assembly",
    "Sub_Theme":"Art Gallery / Museum",
    "Feature_Name":"Polly Woodside"
    }
  },
  {
    "type": "Feature",
    "geometry": {
       "type": "Point",
       "coordinates":  [ 144.9672529,-37.82660454 ]
    },
    "properties": {
    "Theme":"Place Of Assembly",
    "Sub_Theme":"Art Gallery / Museum",
    "Feature_Name":"Australian Centre for Contemporary Art"
    }
  },
  {
    "type": "Feature",
    "geometry": {
       "type": "Point",
       "coordinates":  [ 144.9669368,-37.8271768 ]
    },
    "properties": {
    "Theme":"Place Of Assembly",
    "Sub_Theme":"Theatre Live",
    "Feature_Name":"Malthouse Theatre"
    }
  },
  {
    "type": "Feature",
    "geometry": {
       "type": "Point",
       "coordinates":  [ 144.9688373,-37.82199473 ]
    },
    "properties": {
    "Theme":"Place Of Assembly",
    "Sub_Theme":"Art Gallery / Museum",
    "Feature_Name":"Victorian Arts Centre"
    }
  },
  {
    "type": "Feature",
    "geometry": {
       "type": "Point",
       "coordinates":  [ 144.969899,-37.81748314 ]
    },
    "properties": {
    "Theme":"Place Of Assembly",
    "Sub_Theme":"Art Gallery / Museum",
    "Feature_Name":"The Ian Potter Centre: NGV Australia"
    }
  },
  {
    "type": "Feature",
    "geometry": {
       "type": "Point",
       "coordinates":  [ 144.9839701,-37.81886627 ]
    },
    "properties": {
    "Theme":"Place Of Assembly",
    "Sub_Theme":"Art Gallery / Museum",
    "Feature_Name":"Thoroughbred Racing Gallery"
    }
  },
  {
    "type": "Feature",
    "geometry": {
       "type": "Point",
       "coordinates":  [ 144.943475,-37.81651773 ]
    },
    "properties": {
    "Theme":"Place Of Assembly",
    "Sub_Theme":"Function / Conference / Exhibition Centre",
    "Feature_Name":"Central Pier"
    }
  },
  {
    "type": "Feature",
    "geometry": {
       "type": "Point",
       "coordinates":  [ 144.9484967,-37.82137443 ]
    },
    "properties": {
    "Theme":"Place Of Assembly",
    "Sub_Theme":"Art Gallery / Museum",
    "Feature_Name":"Fox Classic Car Collection"
    }
  },
  {
    "type": "Feature",
    "geometry": {
       "type": "Point",
       "coordinates":  [ 144.9716907,-37.80355181 ]
    },
    "properties": {
    "Theme":"Place Of Assembly",
    "Sub_Theme":"Art Gallery / Museum",
    "Feature_Name":"Melbourne Museum"
    }
  },
  {
    "type": "Feature",
    "geometry": {
       "type": "Point",
       "coordinates":  [ 144.9706399,-37.80343156 ]
    },
    "properties": {
    "Theme":"Place Of Assembly",
    "Sub_Theme":"Cinema",
    "Feature_Name":"IMAX Melbourne"
    }
  },
  {
    "type": "Feature",
    "geometry": {
       "type": "Point",
       "coordinates":  [ 144.9681744,-37.82426618 ]
    },
    "properties": {
    "Theme":"Place Of Assembly",
    "Sub_Theme":"Theatre Live",
    "Feature_Name":"MTC Theatre"
    }
  },
  {
    "type": "Feature",
    "geometry": {
       "type": "Point",
       "coordinates":  [ 144.9679921,-37.8199901 ]
    },
    "properties": {
    "Theme":"Place Of Assembly",
    "Sub_Theme":"Theatre Live",
    "Feature_Name":"Hamer Hall"
    }
  },
  {
    "type": "Feature",
    "geometry": {
       "type": "Point",
       "coordinates":  [ 144.9846698,-37.81895449 ]
    },
    "properties": {
    "Theme":"Place Of Assembly",
    "Sub_Theme":"Art Gallery / Museum",
    "Feature_Name":"National Sports Museum"
    }
  },
  {
    "type": "Feature",
    "geometry": {
       "type": "Point",
       "coordinates":  [ 144.9673225,-37.81495435 ]
    },
    "properties": {
    "Theme":"Place Of Assembly",
    "Sub_Theme":"Theatre Live",
    "Feature_Name":"Athanaeum Theatre"
    }
  },
  {
    "type": "Feature",
    "geometry": {
       "type": "Point",
       "coordinates":  [ 144.9687501,-37.79765899 ]
    },
    "properties": {
    "Theme":"Place Of Assembly",
    "Sub_Theme":"Theatre Live",
    "Feature_Name":"Carlton Courthouse Theatre"
    }
  },
  {
    "type": "Feature",
    "geometry": {
       "type": "Point",
       "coordinates":  [ 144.9695202,-37.81099756 ]
    },
    "properties": {
    "Theme":"Place Of Assembly",
    "Sub_Theme":"Theatre Live",
    "Feature_Name":"Her Majesty's Theatre"
    }
  },
  {
    "type": "Feature",
    "geometry": {
       "type": "Point",
       "coordinates":  [ 144.9701331,-37.81020539 ]
    },
    "properties": {
    "Theme":"Place Of Assembly",
    "Sub_Theme":"Theatre Live",
    "Feature_Name":"Comedy Theatre"
    }
  },
  {
    "type": "Feature",
    "geometry": {
       "type": "Point",
       "coordinates":  [ 144.9676695,-37.7991305 ]
    },
    "properties": {
    "Theme":"Place Of Assembly",
    "Sub_Theme":"Theatre Live",
    "Feature_Name":"La Mama Theatre"
    }
  },
  {
    "type": "Feature",
    "geometry": {
       "type": "Point",
       "coordinates":  [ 144.980555,-37.81454075 ]
    },
    "properties": {
    "Theme":"Place Of Assembly",
    "Sub_Theme":"Art Gallery / Museum",
    "Feature_Name":"Sinclair's Cottage"
    }
  },
  {
    "type": "Feature",
    "geometry": {
       "type": "Point",
       "coordinates":  [ 144.95404,-37.82221828 ]
    },
    "properties": {
    "Theme":"Place Of Assembly",
    "Sub_Theme":"Art Gallery / Museum",
    "Feature_Name":"Victoria Police Museum"
    }
  },
  {
    "type": "Feature",
    "geometry": {
       "type": "Point",
       "coordinates":  [ 144.9604268,-37.81917988 ]
    },
    "properties": {
    "Theme":"Place Of Assembly",
    "Sub_Theme":"Art Gallery / Museum",
    "Feature_Name":"Immigration Museum"
    }
  },
  {
    "type": "Feature",
    "geometry": {
       "type": "Point",
       "coordinates":  [ 144.9693866,-37.81648541 ]
    },
    "properties": {
    "Theme":"Place Of Assembly",
    "Sub_Theme":"Theatre Live",
    "Feature_Name":"Forum Theatre"
    }
  },
  {
    "type": "Feature",
    "geometry": {
       "type": "Point",
       "coordinates":  [ 144.9753737,-37.80857613 ]
    },
    "properties": {
    "Theme":"Place Of Assembly",
    "Sub_Theme":"Art Gallery / Museum",
    "Feature_Name":"Fire Services Museum Victoria"
    }
  },
  {
    "type": "Feature",
    "geometry": {
       "type": "Point",
       "coordinates":  [ 144.9641567,-37.79739396 ]
    },
    "properties": {
    "Theme":"Place Of Assembly",
    "Sub_Theme":"Art Gallery / Museum",
    "Feature_Name":"The Ian Potter Museum Of Art"
    }
  },
  {
    "type": "Feature",
    "geometry": {
       "type": "Point",
       "coordinates":  [ 144.9540279,-37.81338543 ]
    },
    "properties": {
    "Theme":"Place Of Assembly",
    "Sub_Theme":"Art Gallery / Museum",
    "Feature_Name":"Koorie Heritage Trust Inc"
    }
  },
  {
    "type": "Feature",
    "geometry": {
       "type": "Point",
       "coordinates":  [ 144.9794713,-37.81446049 ]
    },
    "properties": {
    "Theme":"Place Of Assembly",
    "Sub_Theme":"Art Gallery / Museum",
    "Feature_Name":"Cooks' Cottage"
    }
  },
  {
    "type": "Feature",
    "geometry": {
       "type": "Point",
       "coordinates":  [ 144.9715219,-37.80460262 ]
    },
    "properties": {
    "Theme":"Place Of Assembly",
    "Sub_Theme":"Art Gallery / Museum",
    "Feature_Name":"Royal Exhibition Building"
    }
  },
  {
    "type": "Feature",
    "geometry": {
       "type": "Point",
       "coordinates":  [ 144.9690704,-37.81761073 ]
    },
    "properties": {
    "Theme":"Place Of Assembly",
    "Sub_Theme":"Art Gallery / Museum",
    "Feature_Name":"Australian Centre For The Moving Image (ACMI)"
    }
  },
  {
    "type": "Feature",
    "geometry": {
       "type": "Point",
       "coordinates":  [ 144.9813834,-37.80973741 ]
    },
    "properties": {
    "Theme":"Place Of Assembly",
    "Sub_Theme":"Function / Conference / Exhibition Centre",
    "Feature_Name":"Dallas Brooks Centre"
    }
  },
  {
    "type": "Feature",
    "geometry": {
       "type": "Point",
       "coordinates":  [ 144.9692339,-37.81076861 ]
    },
    "properties": {
    "Theme":"Place Of Assembly",
    "Sub_Theme":"Art Gallery / Museum",
    "Feature_Name":"The Museum Of Australian Chinese History"
    }
  }
]
};
callback();

//remove the popup

//remove the list


buildLocationList(place1);
map.on('load', function (e) {
    // This is where your '.addLayer()' used to be, instead add only the source without styling a layer
    map.addSource("places", {
      "type": "geojson",
      "data": place1
    });
    // Initialize the list
    buildLocationList(place1);
});

  // This is where your interactions with the symbol layer used to be
  // Now you have interactions with DOM markers instead
  place1.features.forEach(function(marker, i) {
    // Create an img element for the marker
    var el = document.createElement('div');
    el.id = "marker-" + i;
    el.className = 'marker';
    // Add markers to the map at all points
    new mapboxgl.Marker(el, {offset: [0, -23]})
        .setLngLat(marker.geometry.coordinates)
        .addTo(map);

    el.addEventListener('click', function(e){
        // 1. Fly to the point
        flyToStore(marker);

        // 2. Close all other popups and display popup for clicked place
        createPopUp(marker);

        // 3. Highlight listing in sidebar (and remove highlight for all other listings)
        var activeItem = document.getElementsByClassName('active');

        e.stopPropagation();
        if (activeItem[0]) {
           activeItem[0].classList.remove('active');
        }

        var listing = document.getElementById('listing-' + i);
        listing.classList.add('active');

    });
  });

function flyToStore(currentFeature) {
    map.flyTo({
        center: currentFeature.geometry.coordinates,
        zoom: 15
      });
  }

//call back the map size, and recenter
  function callback() {
    map.flyTo({
      center: ["144.96681", "-37.818078"],
      zoom: 13
      });
  }

  function createPopUp(currentFeature) {
    var popUps = document.getElementsByClassName('mapboxgl-popup');
    if (popUps[0]) popUps[0].remove();

  var popup = new mapboxgl.Popup({closeOnClick: false})
          .setLngLat(currentFeature.geometry.coordinates)
          .setHTML('<h3>' + currentFeature.properties.Sub_Theme + '</h3>' +
            '<h4>' + currentFeature.properties.Feature_Name + '</h4>')
          .addTo(map);
  }
  function buildLocationList(data) {
    for (i = 0; i < data.features.length; i++) {
      var currentFeature = data.features[i];
      var prop = currentFeature.properties;

      var listings = document.getElementById('listings');
      var listing = listings.appendChild(document.createElement('div'));
      listing.className = 'item';
      listing.id = "listing-" + i;

      var link = listing.appendChild(document.createElement('a'));
      link.href = '#map';
      link.className = 'title';
      link.dataPosition = i;
      link.innerHTML = prop.Sub_Theme;

      var details = listing.appendChild(document.createElement('div'));
      details.innerHTML = prop.Feature_Name;
      if (prop.phone) {
        details.innerHTML += ' &middot; ' + prop.phoneFormatted;
      }

      link.addEventListener('click', function(e){
        // Update the currentFeature to the place associated with the clicked link
        var clickedListing = data.features[this.dataPosition];

        // 1. Fly to the point
        flyToStore(clickedListing);

        // 2. Close all other popups and display popup for clicked place
        createPopUp(clickedListing);

        // 3. Highlight listing in sidebar (and remove highlight for all other listings)
        var activeItem = document.getElementsByClassName('active');

        if (activeItem[0]) {
           activeItem[0].classList.remove('active');
        }
        this.parentNode.classList.add('active');

      });
    }
  }
</script>

    <!--footer_area-->

  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="vendors/bootstrap/js/popper.min.js"></script>
    <script src="vendors/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/jquery.parallax-scroll.js"></script>
    <script src="vendors/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="vendors/isotope/isotope-min.js"></script>
    <script src="vendors/slick/slick.min.js"></script>
    <script src="js/parallaxie.js"></script>
    <script src="vendors/counterup/jquery.counterup.min.js"></script>
    <script src="vendors/counterup/jquery.waypoints.min.js"></script>
    <script src="vendors/magnify-pop/jquery.magnific-popup.min.js"></script>

    <script src="js/main.js"></script>
</body>

</html>