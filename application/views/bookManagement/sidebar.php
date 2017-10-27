

<html>
<head>

  <?php include("myfiles.php"); ?>


	<title></title>

	<style type="text/css">
  
  .w3-sidebar{background-color: #009688; color: white; }
  #main{background-color: #009688; color: black; }
  .w3-sidebar a{margin-top: 15px;}
  .w3-bar-block .w3-bar-item  {padding: 15px;} 

.w3-text-black, .w3-hover-text-black:hover {
    color: white!important; 
}


.w3-button:hover {
    color: white !important;
    background-color: #006666 !important;

}
  

   #main {
    background-color: #009688;
    color: white;
}


	</style>
</head>
<body>







<div class="w3-sidebar w3-bar-block w3-collapse w3-card-2   " style="width:200px;" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large w3-hide-large" onclick="w3_close()">Close &times;</button>
  <br><br>
  <a href="http://localhost:8080/book-management/ci/manage" class="w3-bar-item w3-button w3-text-black"> <img src="http://localhost:8080/book-management/ci/assets/home.png" height="40px">&nbsp; Home</a>

  <a href="http://localhost:8080/book-management/ci/manage/addRecord" class="w3-bar-item w3-button w3-text-black"> <img src="http://localhost:8080/book-management/ci/assets/ad.png" height="40px">&nbsp; Add Record </a>

  <a href="http://localhost:8080/book-management/ci/manage/edit" class="w3-bar-item w3-button w3-text-black"> <img src="http://localhost:8080/book-management/ci/assets/update.png" height="40px">&nbsp; Edit Record</a>

  <a href="http://localhost:8080/book-management/ci/manage/viewrecords" class="w3-bar-item w3-button w3-text-black"> <img src="http://localhost:8080/book-management/ci/assets/view01.png" height="40px">&nbsp;  View Record</a>

  <a href="http://localhost:8080/book-management/ci/manage/delete" class="w3-bar-item w3-button w3-text-black"> <img src="http://localhost:8080/book-management/ci/assets/delete.png" height="40px"> &nbsp; Delete Record </a>
</div>


  <div class="w3-main" style="margin-left:205px">
    <div  id="main">
  <button class="w3-button  w3-xlarge w3-hide-large" onclick="w3_open()">&#9776;</button>
  <div class="w3-container">
   <center> <h1 style="font-weight:bold;"> <img src="http://localhost:8080/book-management/ci/assets/bk.png" height="50px"> &nbsp; Book Management System </h1> </center> 
  </div>
</div>




<script>
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
}
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
}
</script>








</body>
</html>