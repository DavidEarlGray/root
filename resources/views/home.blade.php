<!DOCTYPE html>
<html lang="en">
<head>
  <title>Student Management</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBw8FzUihZqrVK_ycjqGQi4LpUPni3I7_o&callback=" ></script>

  <style>
    /* 
 * Always set the map height explicitly to define the size of the div element
 * that contains the map. 
 */
#map {
  height: 70%;
  
}
.btn {
  width:100%;
  color:white;
  background-color: #FF7B4C;
  border-color: #FF7B4C;
}
.btn:hover, .btn:active{
  background-color: #CE5D34 !important;
  border-color:#CE5D34  !important;

}
.card-title {
  text-align:center;
}
/* 
 * Optional: Makes the sample page fill the window. 
 */
html,
body {
  height: 100%;
  margin: 0;
  padding: 0;
  overflow-x:hidden;
  overflow-y:hidden;
}
#popup {
  display:flex;
  justify-content:center;
  align-items:center;
  height: 100%;
  width: 100%;
  position: absolute;
  display:none;
}
#filt {
  background-color:black; 
  height:103%;
  width:100%;
  position:absolute;
  z-index:1;
  opacity:25%;
}
#bodyp {
  height:80%;
  width:80%;
  background-color:#FF7B4D;
  padding:10px;
  border-radius:14px;
  opacity: 100%;
  z-index: 2;
  position: absolute;
  

}
#header {
  width:100%;
  height: 20%;
  justify-content:space-between;
  display: flex;
  font-size:1.4rem;
  align-items:center;
  margin-bottom:10px;
 

  

}
#header h1 {
  
  font-size:3em;
  
  color:white;
  
 
}



.gm-style .gm-style-iw-d::-webkit-scrollbar-track, 
.gm-style .gm-style-iw-d::-webkit-scrollbar-track-piece,
.gm-style .gm-style-iw-c,
.gm-style .gm-style-iw-t::after,  .gm-style .gm-style-iw-tc::after, .full-width, .view-link span, .view-link   { 
  background-color:#FF7B4D !important;
  color:white !important;
}
#icon {
  float:right;
  margin-top:auto;


 
}
.footer {
  display: flex;
  align-items:flex-end;
  width: 100vw;
}
.img {
  height: 100%;

  
  align-items:center;
  order:3;
}
.img:hover {
  cursor:pointer;
}
#cards {
  display: flex;
  justify-content: space-around;
  overflow-y:auto;
  flex-wrap:wrap;
  max-height:80%;
  

}
.card {
  height:100%;
}
.navbar {
  background-color: #F16533 !important;
}
.nav-item {
  height:100%;
  width: 19vw;
  margin-left:30px;
  background-color: #FF7B4D;
  padding:10px;
  border-radius:14px

}
select, option  {
  width: 100%;
  height: 100%;
  color:white;
  background-color: #FF7B4D;
  border:0px;
  
 
}
option:hover {
  background-color: #CE6540;
}
.scol:active{
  width: 100%;
  height: 100%;
  color:white;
  background-color: #FF7B4D;
  border:none;
  padding:none;
  
}

.card-title {
  height:10%;
  margin-bottom:15px;
}
.collapse {
  height: 7vh;
}
.navbar-nav{ 
  height:100%;
}
.navbar-text {
  height: 100%;
  padding: 0px;
  padding:10px;
  border-radius:14px;
  background-color: #FF7B4D;
}
.navbar-text button {
  height: 100%;
  width: 10vw;
  color:white;
  background-color: #FF7B4D;
  border:0px;
}
.text-center {
  z-index: -1;



}
.iwb {
  background-color: #E16C43;
  color:white;
  border: 1px;
  margin: 0;
  padding: 5px;
  border-radius:5px !important;
  text-align: inherit;
  font: inherit;
  border-radius: 0;
  appearance: none;


}

.iwb:hover {
  background-color: #CE6540;
  transition-timing-function: ease-in;
  transition:.3s;
}
.card-img-top {
  height:10em;
  width:auto;
}
.card {
  background-color:#F16533;
  color:white ;
  border-color:#F16533;
  margin-bottom:10px;
}
.card-subtitle {
  color:white !important;
  font-weight:normal;
}
.collaps {
  height:inherit;
}
.p-3 {
  width:100%;
  bottom:0%;
  border-top:1px solid black
}
.img-container {
  width:100%;
  display: flex;
  justify-content:center;
}
@media only screen and (max-width: 992px) {
  .collapse {
    height:auto;
  }
  .nav-item {
    width:100%;
    margin-bottom:10px;
    margin-left:0px;
  }
  .collaps {
    width:100%;
    display:flex;
    justify-content:center;
  }
  .navbar-text button {
 width:30vw
}
}
@media only screen and (max-width: 1050px) {
  #header h1 {
  
  font-size:2.5em;
  
  color:white;
  
 
}
}
@media only screen and (max-width: 650px) {
  #header h1 {
  
  font-size:1.5em;
  margin-left:10px;
  
  color:white;
  
 
}
#title {
  font-size: .5em
}

}



.footer {
  height: 17%;
}
 option:hover{
 background-color:black !important;


}
option {
  width:100%;
  height:100%;
}
    </style>
</head>
<body>
<div id="popup">
  <div id="bodyp"><div id="header"> <img src="{{url('storage/images/logopas.png')}}" style="float:left" alt="" width="auto" height="100%"> <div class="img"><img id="icon" src="{{url('storage/images/x.svg')}}"></div></div><div id="cards"></div></div>
  <div id="filt"></div>
</div>


<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
  <a class="navbar-brand" href="#">
      <img src="{{url('storage/images/logopas.png')}}" alt="" width="100" height="100">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
        <select class="scol selectpicker" id="scol" onchange="filter()"> <option value="-"> Alege o scoala</option>  <?php 
 foreach (array_unique($scol) as $s ) {
  echo '<option value="',$s.'"><div>', $s. "</div></option>";
  # code...
 }
?> </select>

        </li>
        <li class="nav-item">
        <select id="cat" onchange="filter()"> <option value="-"> Fara categorie</option>  <?php 
 foreach (array_unique($cat) as $c ) {
  echo '<option value="',$c.'">', $c. "</option>";
  # code...
 }
?> </select>
        </li>
        <li class="nav-item">
        <Select id="mont" onchange="filter()">
  <option value="-"> Alege o luna</option><option value="Ianuarie">Ianuarie</option><option value="Februarie">Februarie</option><option value="Martie">Martie</option><option value="Aprilie">Aprilie</option><option value="Mai">Mai</option><option value="Iunie">Iunie</option>
<option value="Iulie">Iulie</option><option value="August">August</option><option value="Septembrie">Septembrie</option><option value="Octombrie">Octombrie</option><option value="Noiembrie">Noiembrie</option><option value="Decembrie">Decembrie</option>
</select>
        </li>
      </ul>

    </div>
  </div>
</nav>
<div id="title"></div>








<div id="map"> </div>
<script> 
var id = <?php echo json_encode($ids)?>;
var adds= <?php echo json_encode($address)?> 
var adrs = [...new Set(adds)]
var nms= <?php echo json_encode($names)?> 
console.log(nms)
var pics= <?php echo json_encode($pic)?> 

var cats= <?php echo json_encode($cat)?> 
var scols = <?php echo json_encode($scol)?> 
var scl =[...new Set(scols)]
var dates = <?php echo json_encode($dates)?> 
var markers = [];
var projects = [];
var onMarker = false
var onInfo = false
var markerid 
var pinfowindow
var adz
var vis = []
class Project {
  constructor(name,adress,cat,scol,dates,pic,view, id) { 
    this.name = name
    this.adress = adress
    this.cat = cat 
    this.scol = scol
    this.dates = dates
    this.pic = pic
    this.view = view
    this.id = id 
 

  }
}

$('.img').click(()=> {
  $("#cards").empty()
  $("h1").remove('#title')
  $("#popup").hide()
})

function initMap() {
    var mapOptions = {
      center: new google.maps.LatLng('45.7620','21.2087'),
      zoom: 12.6
    }
    var map = new google.maps.Map(document.getElementById('map'), mapOptions)



    for(var x = 0; x < adds.length; x++) {
      console.log("h")
      cot= '<div class="infow"><h5>'+ scl[x] +'</h5><button class="iwb" id="'+ scl[x]+'" onClick="popup(this.id)">Vezi mai multe</button></div>';
      adz = scl[x]
      const inf = {name: scl[x]}
      const infoWindow = new google.maps.InfoWindow({
                      content: cot,
                      ariaLabel: scol[x]
                    });
      
      console.log(adds[x])
      var geocoder = new google.maps.Geocoder()
      geocoder.geocode({ 'address': adrs[x] }, function(results, status,) {
        
                    if (status === 'OK' && results[0]) {
                         var marker = new google.maps.Marker({
                            position: results[0].geometry.location,
                            map: map,
                            id: x,
                            title:inf.name,
                            open: false
                            

                           
                            
                        })
                        markers.push(marker); 
                       
                     
                      
                        

                        marker.metadata = {type: "point"};
                       
                        
                        marker.addListener("click", () => {
                        try {
                          pinfowindow.close()
                        }
                        catch {
                          
                        }
                        infoWindow.open({
                          anchor: marker,
                          map,
                        });
                        pinfowindow = infoWindow
                       
                    
                      
                       
                        })
                      };
                      
                    })
    

    }
   
   
  
    for(var x =0; x <adds.length; x++) {
     
       
      console.log()                    
      var proj = new Project(nms[x], adds[x], cats[x], scols[x],dates[x],pics[x],true, id[x])
      projects.push(proj) 
              }
  
    

  }
  initMap()
 function showhide(arr,markers) {
  markers.forEach((marker) => {
    if(arr.includes(marker.title) == true) {
      marker.setVisible(true)
    }
    else {
      marker.setVisible(false)
    }
  })
  

 }


function infopage(data) {
  url = `/school?id=${data}`
  window.open(url)
}
















 function filter() {
  vis = []
  var scoala = $('#scol').val()
  console.log('Filter school is: ' + scoala)
  var cat = $('#cat').val()
  var mont = $('#mont').val()
  console.log(projects )
  console.log(markers)
// console.log(cat, mont , scoala)
  for(var x=0; x <projects.length; x++) {
    
    cs = projects[x].scol
    cc = projects[x].cat
    cm = projects[x].dates

    console.log(cc,cm,cs)
    
      if (scoala == "-") {
        cs = "-"
        console.log(scoala, 'scol')
      }

      if ( cat == "-") {
        cc = "-"
        console.log(cat, 'cat')
      }
      if (mont == "-") {
        cm = ["-"]
        console.log(mont, 'mont')
      }
      // console.log('-------------------------- filter options')
      // console.log(scoala, "-Scol")
      // console.log(cat, '-Cat')
      // console.log(mont, '-Mont')
      // console.log('--------------------------  current in index')
      // console.log(cs, "-School")
      // console.log(cc, "-Category")
      // console.log(cm, "-Month")
      // console.log('--------------------------  ')
      // console.log(scoala)
      //   console.log(cat)
      //   console.log(mont)
        // console.log(cc,cm,cs)
        // console.log(projects)
      if (scoala == cs && cat == cc && cm.includes(mont) == true) {
        if(vis.includes(projects[x].scol) == false) {
          vis.push(projects[x].scol)
          console.log('hh')
        }
         projects[x].view = true
      }
      else {
        projects[x].view = false
      }
      
  }
  // console.log(markers)
  showhide(vis, markers)
 }



 function popup(scol) {
  console.log('ddd')
   active_projects = []
   $('#header').append('<h1 id="title">'+scol+'</h1>')
   for(x=0; x < projects.length; x++) {
    if (projects[x].view == true &&  projects[x].scol == scol) {
      active_projects.push(projects[x])
      pict = projects[x].pic
      name = projects[x].name
      console.log(pict)
      content = `<div class="card" style="width:25em"> <div class="card-body"><h5 class="card-title">${projects[x].name}</h5>  <h6 class="card-subtitle mb-2 text-muted"><p style="font-size:inherit; font-weight:bold; margin:0px;">Perioada de desfasurare: </p> ${projects[x].dates}</h6><h6 class="card-subtitle mb-2 text-muted"><p style="font-size:inherit; font-weight:bold; margin:0px;">Categorie: </p>${ projects[x].cat}</h6> <div class="img-container"><img class="card-img-top"  src="${pict}" alt="Card image cap"> </div><p class="card-text" style="height:15%; overflow-y:auto">Some quick example text to build on the card title and make up the bulk of the cards content.</p><button id="${projects[x].id}" onclick="infopage(this.id)" class="btn">Vezi mai multe</button></div></div`
      $('#cards').append(content)
     
    }
   }
   $('#popup').css('display','flex')
   console.log(active_projects)


 }

</script> 











 






<footer class="text-center text-white footer">
  <!-- Grid container -->

  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="color:black; background-color:white; text-align:left !important;">
  Copyright © 2023 LA PAS Toate drepturile rezervate.
  </div>
  <!-- Copyright -->
</footer>


</body>
</html>