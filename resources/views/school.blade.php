<html>
    <head><title>School Page</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.css" media="screen">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.pkgd.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
<style>
a, a:hover {
  color:white;
  text-decoration:none;
}
.navbar {
  background-color: #F16533 !important;
  display: flex;
  justify-content:space-between;
}
.nav-item {
  height:100%;
  
  margin-left:30px;
  background-color: #FF7B4D;
  padding:10px;
  border-radius:14px;
  color:white;
  border:0px;
  transition: .2s ease-in;

}
* {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}
.span {
  float: right;
  margin-right:10px;
  
}
.nav-item:hover {
  background-color: #CE5D34;

}
.navbar-brand {
  margin-left:10px;
}
.w-30 {
  width:40% !important
}
.carousel {
  margin-top:30px;
  background: white;
}

.carousel-cell {
  width: 40%;
  height: 200px;
  margin-left: 20px;
  margin-right: 20px;
 
  /* flex-box, center image in cell */
  display: -webkit-box;
  display: -webkit-flex;
  display:         flex;
  -webkit-box-pack: center;
  -webkit-justify-content: center;
          justify-content: center;
  -webkit-align-items: center;
          align-items: center;
}

.carousel-cell img {
  display: block;
  max-width: 100%;
  max-height: 100%;
  /* dim unselected */
  opacity: 0.7;
  -webkit-transform: scale(0.85);
          transform: scale(0.85);
  -webkit-filter: blur(5px);
          filter: blur(5px);
  -webkit-transition: opacity 0.3s, -webkit-transform 0.3s, transform 0.3s, -webkit-filter 0.3s, filter 0.3s;
          transition: opacity 0.3s, transform 0.3s, filter 0.3s;
}

/* brighten selected image */
.carousel-cell.is-selected img {
  opacity: 1;
  -webkit-transform: scale(1);
          transform: scale(1);
  -webkit-filter: none;
          filter: none;
}

@media screen and ( min-width: 768px ) {
  .carousel-cell {
    height: 400px;
  }
}

@media screen and ( min-width: 960px ) {
  .carousel-cell {
    width: 60%;
  }
}

/* buttons, no circle */
.flickity-prev-next-button {
  width: 60px;
  height: 60px;
  background: transparent;
  opacity: 0.6;
}
.flickity-prev-next-button:hover {
  background: transparent;
  opacity: 1;
}
/* arrow color */
.flickity-prev-next-button .arrow {
  fill: white;
}
.flickity-prev-next-button.no-svg {
  color: white;
}
/* closer to edge */
.flickity-prev-next-button.previous { left: 0; }
.flickity-prev-next-button.next { right: 0; }
/* hide disabled button */
.flickity-prev-next-button:disabled {
  display: none;
}
.downloads {
  width:100%;
  display: flex;
  justify-content: space-between;
	bottom: 10px;
  left:0px;
  

}
.download {
  width:20%;
  display:flex;
  justify-content:center;
  flex-wrap:wrap;
  margin-left:10px;
}
.cards {
  margin-bottom: 20px;
  display: flex;
  justify-content: space-around;
  margin-top:50px;

}
.card {
  
  background-color: #F16533 !important;
  border:0px;
  border-radius:19px;
  color:white;
  
}
.c {
  max-width: 1000px;
  margin:auto;
}
.ds {
    text-decoration:none;
    color:white;
    font-weight:bold;
    padding:20%;
    font-size:80%;
    background-color:#CF572C;
    border-radius:15px;
    transition: .2s ease-in;
  }
  .ds:hover {
    color:white;
    text-decoration:none;
    background-color:#A5421E;

  }
  .img-container {
    width:100%;
    height:45%;
    display: flex;
    justify-content:center;
  }
  .img-container img{
    width:100%;
    height:auto;
  }
@media only screen and ( max-width: 1000px ) {
 
  .ds {
    font-size:60%;
    padding:10%;                                                                                                   
   }
  

 
 
 


}
@media only screen and ( max-width: 1670px ) {
  .card {
    width:60vw !important;
    margin-bottom:10px;
    display: block;
    
  }
  .cards {
    flex-wrap:wrap !important;
  }
  .download {
    width: 10%;
  }

  
}
@media only screen and ( max-width: 550px ) {
  .card {
    width:90vw !important;
    margin-bottom:10px;
    display: block;
    
  }
}


</style>
</head>
    <body class="d" onload="senddata()">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"> <img src="{{url('storage/images/logopas.png')}}" alt="" width="100" height="100"> </a>
  <span class='span'><button class="nav-item"><a href="/home">Inapoi acasa</a></button></span> 

   

</nav>
<div class="c">
<h1 class="title" style="text-align:center; font-size:4em; margin-bottom:20px" ></h1>
<h1 class="sub" style="text-align:left; font-size:1em; margin-left:20px" ></h1>
<h1 class="sub1" style="text-align:left; font-size:1em; margin-left:20px" ></h1>
<div id='c-container'></div>
<div class="cards"></div>

  <!-- images from unsplash.com -->
  
</div>

        <script>
       
        

  
       
        
        function senddata() {
          let params = new URLSearchParams(location.search);
          var data = params.get('id')
          var carousel = $('<div class="carousel"></div>');
         
         
  $.ajax({
                url: 'posts/{id}',
                type: 'GET',
                data: {id: data},
                success: function(response)
                {
                  {
                      $('.title').text(response.name)
                      $('.sub').text('Categorie: ' + response.cat)
                      $('.sub1').text('Perioada de desfasurare: ' + response.start + '/' + response.endd)
                       var pictures = response.Pictures
                       for(var x = 0; x< pictures.length; x++) {
                        var element = $(`<div class="carousel-cell"><img src="${pictures[x]}"></div>`);
                        carousel.append(element)
                       
                      
                       }
                      $('#c-container').append(carousel)
                      var flkty = new Flickity('.carousel', {
     wrapAround: true,autoPlay: 1500 
  });

        }
        content = ''
                for(var x =0; x<response.Materials.length; x++) {
                  content += `<div class="download" ><img src="/storage/images/filei.png" style="width:100%; height:auto; diplay:block;"><a class="ds" style="text-align:center;"href="${response.Materials[x]}" download>Download</a></div>`
                }

                  $('.cards').append(`<div class="card" style="width: 25vw;">
  <div class="card-body">
    <h5 class="card-title">Desfasurare si rezultate</h5>
    <p class="card-text">${response.desc}</p>
    <div class="downloads">${content}</div>
  </div>
</div>`)
$('.cards').append(`<div class="card" style="width: 25vw;">

  <div class="card-body">
    <h5 class="card-title">Profesor Coordonator si Scoala Proiectului</h5>
    <p class="card-text"><b>Nume Profesor:</b> ${response.teacher_n}</p>
    <p class="card-text"><b>Adresa de Email:</b> ${response.teacher_a}</p>
    <p class="card-text"><b>Numar de telefon:</b> ${response.teacher_p}</p>
    <p class="card-text"><b>Nume Scoala:</b> ${response.school_n}</p>
    <p class="card-text"><b>Adresa Scoala:</b> ${response.school_a}</p>
  <img class="card-img-top"  src="${response.teacher_pp}" alt="Card image cap">
    
  
  </div>
</div>`)    
                }
            });
    }
 </script>

<footer class="footer text-center text-white" style="background-color: #21081a; border-top:1px solid black">
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