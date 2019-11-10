
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
<title>Portal académico</title>

<meta name="description" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}" />
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="stylesheet" href="{{asset('css/ace.min.css')}}" class="ace-main-stylesheet" id="main-ace-style" />
<link rel="stylesheet" href="{{asset('css/flexslider.css')}}" type="text/css" media="screen" />
<script src="{{asset('js/ace-extra.min.js')}}"></script>
<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
<link rel="stylesheet" href="{{asset('css/slider-pro.min.css')}}">
<link rel="stylesheet" href="{{asset('css/jquery.bxslider.min.css')}}">
 
 
 <link rel="stylesheet" type="text/css" href="{{asset('css/slider-pro.min1.css')}}" media="screen"/>

 
 <link href="{{asset('css/calendario.css')}}" type="text/css" rel="stylesheet">
<script src="{{asset('js/calendar.js')}}" type="text/javascript"></script>
<script src="{{asset('js/calendar-es.js')}}" type="text/javascript"></script>
<script src="{{asset('js/calendar-setup.js')}}" type="text/javascript"></script>

<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.left{
    float: left;
    background:write
}
.right{
    float: right;
    background:writete
}
.center{
    background:write;
    }
.topnav {
  overflow: hidden;
  background-color: #9dd2d6;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
</style>

<script type="text/javascript">
  $( document ).ready(function( $ ) {
    $( '#example5' ).sliderPro({
      width: 490,
      height: 300,
      orientation: 'vertical',
      loop: false,
      arrows: true,
      buttons: false,
      thumbnailsPosition: 'right',
      thumbnailPointer: true,
      thumbnailWidth: 290,
      breakpoints: {
        800: {
          thumbnailsPosition: 'bottom',
          thumbnailWidth: 270,
          thumbnailHeight: 100
        },
        500: {
          thumbnailsPosition: 'bottom',
          thumbnailWidth: 120,
          thumbnailHeight: 50
        }
      }
    });
  });
</script>
