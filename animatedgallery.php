<html>
    <head>
        <title>Wildlife</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css">
       <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
			  crossorigin="anonymous"></script>
        <script src="js/bootstrap.js" type="text/javascript"></script>
    </head>
    <body>
<style>
/*************************Section Gallery******************************************************/
.section_gallerypage {
   
      background: -webkit-gradient(
        linear,
        left top, right top,
        from(#2f955d),
        to(#DAA520)
      );
      background: linear-gradient(
        to right,
        #2f955d,
        #DAA520
      );
    padding-bottom: 50px;
    padding-top: 50px;
    margin-bottom: -20px;
}

.section_gallerypage .card{
    border: none;
    -webkit-box-shadow: 0px 0px 10px 3px rgba(0,0,0,0.75);
    -moz-box-shadow: 0px 0px 10px 3px rgba(0,0,0,0.75);
    box-shadow: 0px 0px 10px 3px rgba(0,0,0,0.75);
     animation-name: mymove;
    animation-duration: 2s;
    animation-iteration-count: 1;
    animation-direction: alternate;
    animation-timing-function: ease-in-out;
    width: 300px;
}

@keyframes mymove {
    0% {
       transform: rotate(-5deg);
    }
    50% {
        transform: rotate(5deg);
    }
    100% {
        transform: rotate(0deg);
    }
}

.section_gallerypage .card img{
    border: none;
    height: 200px;
    width: 100%
}
.section_gallerypage .card .pushpin{
    width: 17%;
    height: 22%;
    position: absolute;
    left: 40%;
}

.section_gallerypage .card .card-body{
    padding: 0px;
}

.section_gallerypage .col-md-3{
    margin-top: 10px;
}

#myModal{
    max-height: 600px;
}
</style>

<div class="section_gallerypage">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <img src="image/pushpin.png" class="pushpin">
                        <img src="image/gallery/1.jpg" class="img-thumbnail" data-toggle="modal" data-target="#myModal">
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <img src="image/pushpin.png" class="pushpin">
                        <img src="image/gallery/2.jpg" class="img-thumbnail" data-toggle="modal" data-target="#myModal">
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <img src="image/pushpin.png" class="pushpin">
                        <img src="image/gallery/2.jpg" class="img-thumbnail" data-toggle="modal" data-target="#myModal">
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <img src="image/pushpin.png" class="pushpin">
                        <img src="image/gallery/4.jpg" class="img-thumbnail" data-toggle="modal" data-target="#myModal">
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <img src="image/pushpin.png" class="pushpin">
                        <img src="image/gallery/5.jpg" class="img-thumbnail" data-toggle="modal" data-target="#myModal">
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <img src="image/pushpin.png" class="pushpin">
                        <img src="image/gallery/6.jpg" class="img-thumbnail" data-toggle="modal" data-target="#myModal">
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <img src="image/pushpin.png" class="pushpin">
                        <img src="image/gallery/7.jpg" class="img-thumbnail" data-toggle="modal" data-target="#myModal">
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <img src="image/pushpin.png" class="pushpin">
                        <img src="image/gallery/8.jpg" class="img-thumbnail" data-toggle="modal" data-target="#myModal">
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <img src="image/pushpin.png" class="pushpin">
                        <img src="image/gallery/10.jpg" class="img-thumbnail" data-toggle="modal" data-target="#myModal">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    Open modal
  </button>
-->

  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header" style="padding: 0px 17px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body" style="padding: 5px">
          <img src="" class="img-fluid" id="modalimg">
        </div>
        <!-- Modal footer -->
      </div>
    </div>
  </div>
<script>
    $(document).ready(function(){
         $(".img-thumbnail").click(function(){
            $url=$(this).attr("src");
             $("#modalimg").attr("src",$url);
        });
    });
</script>
