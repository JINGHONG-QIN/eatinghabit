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

    <link rel="stylesheet" href="vendors/animation/animate.css">
    <!-- yemian CSS -->
    <link rel="stylesheet" href="vendors/swiper/css/swiper.min.css">
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <style type="text/css">

    #autoBox

    {

      margin: 0px;

      padding: 0px;

      border: 1px solid #CCCCCC;

      width: 200px;

    }

    #autoBox li

    {

      clear: both;

      background-color: white;

      color: black;

      position: relative;

      top: 0px;

      left: 0px;

      line-height: 25px;

      width:200px;

      text-align: left;

      overflow: hidden;

    }

    #autoBox li:hover

    {

      background-color: gray;

      color: yellow;

      cursor: pointer;

    }

  </style>
    <title>never too late</title>
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
    <section class="breadcrumb_area parallax_effect"  style="background: url(img/slider_img2.jpg) no-repeat;">
        <div class="overlay_bg"></div>
        <div class="container">
            <div class="breadcrumb_content text-center">
                <h1>calculator</h1>
                <ol class="breadcrumb"> 
                    <li><a href="#">0.0</a></li> 
                    <li class="active">introduce</li> 
                </ol>
            </div>
        </div>
    </section>
    <div class="input-group col-md-12" style="margin-top:0px positon:relative">

<input type="text" class="form-control"placeholder="Search" id="stuSearch" name="stuSearch"/ >

     <span class="input-group-btn">


        <button class="btn btn-info btn-search" style="margin-left:3px" onclick="add()">add</button>

     </span>

</div>
<ul id="autoBox">
</ul>
<input style="display:none;" id="idcount" type="text" value="0"></input>
<table class="table table-bordered col-md-12" id="tb">
	<caption></caption>
	<thead>
		<tr>
			<th>ShortDescrip</th>
			<th>Energy_kcal </th>
			<th>Protein_g</th>
            <th>Fat_g </th>
            <th>Carb_g</th>
            <th>Sugar_g</th>
            <th>Fiber_g</th>
            <th>VitA_mcg</th>
            <th>VitC_mg</th>
            <th>VitE_mg </th>
            <th>Calcium_mg </th>
            <th>Number_g </th>
		</tr>
	</thead>
	<tbody id="tablebody">

	</tbody>
</table>

        <button class="btn btn-info btn-search" style="margin-left:3px" onclick="count()">count</button>
        <p id="tatal">total:</p>

    <footer class="footer_area">

        <div class="footer_bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-6">
                        <p>Copyright © 2020 All Rights Reserved.</p>
                    </div>
                    <div class="col-lg-7 col-md-6 text-right">
                        <ul class="list-unstyled f_menu">
                            <li><a href="#">Inicio</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">calculator </a></li>
                            <li><a href="#">recipe</a></li>
                            <li><a href="map.php">map</a></li>
                            <li><a href="#">Contact us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--footer_area-->
    <!--search_boxs-->
    <form class="search_boxs" role="search">
        <div class="search_box_inner">
            <div class="close_icon">
                ×
            </div>
            <div class="input-group">
                <input type="text" name="search" class="form_control search-input" placeholder="Recipient's username" autofocus="">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button"><i class="flaticon-search"></i></button>
                </div>
            </div>
        </div>
    </form>
    <!--search_boxs-->
    <script src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript">

  $(function(){

    $.ajaxSetup({cache:false}) ; //不缓存

   

    $("#autoBox").hide(); 

    $("#stuSearch").keyup(function(){ 
      $("#autoBox").html(""); 
      if($("#stuSearch").val().length>0) 
      {


   $.ajax({ 
          type:"post",

          url:"stuSearch.php",

          dataType:"json",
        
          data:{keywords:$("#stuSearch").val()},
        
          success:function(feedbackdata)

            {
            
              $("#autoBox").show();
              for(i=0;i<feedbackdata.length;i++)

              {
            
                $("#autoBox").append("<li>"+feedbackdata[i]['Descrip']+"</li>");

              }

              $("#autoBox li").on("click",function(){ 
                $("#stuSearch").val($(this).text());
                $("#autoBox").hide();
              })

              $("#autoBox").append("<li style='text-align:right'>close</li>");

              $("#autoBox li:last").on("click",function(){

                $("#autoBox").hide();

              })

            }
          

        });

      }

    })

  })

function add(){
    if (document.getElementById("total")!=null){
        totaldelete()
    }
 
    $.ajaxSetup({cache:false}) ;
    $.ajax({ 

type:"post",

url:"tableadd.php",

dataType:"json",

data:{keywords:$("#stuSearch").val()},

success:function(feedbackdata)

  {
    for(i=0;i<feedbackdata.length;i++) 

{  
    var countofid = $("#idcount").val();
    var b = parseFloat(countofid)
    var j = b + 1; 
    $("#idcount").val(j);
    x="<tr id = 'table"+j+"'><td>"+feedbackdata[i]['Descrip']+"</td>"+"<td>" +feedbackdata[i]['Energy_kcal']+ "</td>"+"<td>" +feedbackdata[i]['Protein_g'] 
    + "</td>"+"<td>" +feedbackdata[i]['Fat_g'] + "</td>"+"<td>" +feedbackdata[i]['Carb_g']+ "</td>"+"<td>" +feedbackdata[i]['Sugar_g']
    + "</td>"+"<td>" +feedbackdata[i]['Fiber_g']
    + "</td>"+"<td>" +feedbackdata[i]['VitA_mcg']+ "</td>"+"<td>" +feedbackdata[i]['VitC_mg']
    + "</td>"+"<td>" +feedbackdata[i]['VitE_mg']+ "</td>"+"<td>" +feedbackdata[i]['Calcium_mg']
    + "</td>"+"<td>" +"<input type='text' id ='food"+j+ "' />"+ "</td><td>"
    + "<button class='btn btn-info btn-search' id ='"+j+ "' style='margin-left:3px' onclick='tabledelete("+j +")'>delete</button>"  +  "</td></tr>";
     $("#tb").append(x);


}

  }


});

}
function count(){
    var mytable = document.getElementById("tb");
    var data = [];
    for(var i=1,rows=mytable.rows.length; i<rows; i++){
        for(var j=1,cells=mytable.rows[i].cells.length; j<cells; j++){
            if(!data[i-1]){
                data[i-1] = new Array();
            }
            if(j==11){
                var number = "#food"
                number = number + i
                data[i-1][j-1] = $(number).val();
            }
            else{
                data[i-1][j-1] = mytable.rows[i].cells[j].innerHTML;
            }
           
        }
    }
    console.log(data);
    var Energy_kcal = 0.0;
    var Protein_g = 0.0;
    var Fat_g = 0.0;
    var Carb_g = 0.0;
    var Sugar_g = 0.0;
    var Fiber_g = 0.0;
    var VitA_mcg = 0.0;
    var VitC_mg = 0.0;
    var VitE_mg = 0.0;
    var Calcium_mg = 0.0;
    for(var i=0,rows=data.length; i<rows; i++){
        for(var j=0,cells=data[i].length; j<cells; j++){
        var number = data[i][10];
        var nu = parseFloat(number)
        if (!nu){
            alert("you must input number")
            return
        }
        if(j==0){
            var kcal = parseFloat(data[i][0])
            Energy_kcal = Energy_kcal+ kcal*nu/1000;
       }
       else if (j==1)
       {
        var count = parseFloat(data[i][1])
        Protein_g = Protein_g+ count*nu/1000;
       }
       else if (j==2)
       {
        var count = parseFloat(data[i][2])
        Fat_g = Fat_g + count*nu/1000;
       }
       else if (j==3)
       {
        var count = parseFloat(data[i][3])
        Carb_g = Carb_g+ count*nu/1000;
       }
       else if (j==4)
       {
        var count = parseFloat(data[i][4])
        Sugar_g = Sugar_g+ count*nu/1000;
       }
       else if (j==5)
       {
        var count = parseFloat(data[i][5])
        Fiber_g = Fiber_g + count*nu/1000;
       }
       else if (j==6)
       {
        var count = parseFloat(data[i][6])
        VitA_mcg = VitA_mcg+ count*nu/1000;
       }
       else if (j==7)
       {
        var count = parseFloat(data[i][7])
        VitC_mg  = VitC_mg + count*nu/1000;
       }
       else if (j==8)
       {
        var count = parseFloat(data[i][8])
        VitE_mg = VitE_mg+ count*nu/1000;
       }
       else if (j==9)
       {
        var count = parseFloat(data[i][9])
        Calcium_mg = Calcium_mg+ count*nu/1000;
       }

    }

}
x="<tr id = 'total"+"'><td>"+"total"+"</td>"+"<td>" +Energy_kcal+ "</td>"+"<td>" +Protein_g 
    + "</td>"+"<td>" +Fat_g + "</td>"+"<td>" +Carb_g+ "</td>"+"<td>" +Sugar_g
    + "</td>"+"<td>" +Fiber_g
    + "</td>"+"<td>" +VitA_mcg+ "</td>"+"<td>" +VitC_mg
    + "</td>"+"<td>" +VitE_mg+ "</td>"+"<td>" +Calcium_mg
    + "</td></tr>";
 $("#tb").append(x);
}
function totaldelete(){
    var parent=document.getElementById("tablebody");
    var child=document.getElementById("total");
    parent.removeChild(child);
}
function tabledelete(x){
    var table = "table"+x;
    var parent=document.getElementById("tablebody");
    var child=document.getElementById(table);
    parent.removeChild(child);
}

</script>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   
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
    <script src="vendors/swiper/js/swiper.min.js"></script>
    <script src="vendors/wow/wow.min.js"></script>
    <!--Contact Form-->
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/contact.js"></script>
    
    <script src="js/main.js"></script>
</body>

</html>