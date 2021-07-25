<html>
   <head></head>
   <body>
      <form>
         <input id="uname" onkeyup="getVal(this)" type="text" placeholder="Username"><br>
         <span id="op"></span><br>
         <input type="password" placeholder="Password"><br>
       </form>
       <button id="btn_g" onclick="viewGoogle()">Login with Google</button>
       <span onmouseover="viewInfo()" onmouseover="hideInfo()">aiub</span>
       <p id="aiub_info" style="display:none;">

       American International University- Bangladesh, commonly known by its  acronym AIUB, is an accredited private univarsity
    </p>
    <form id="g_form" style="display: none;">
        <input type ="text" placeholder="gmail"><br>
        <input type ="Password" placeholder="gmail password"><br>
    </form>
    <script src="myjs.js"></script>
</body>
</html>
var g_status = false;
function getVal(e_uname){
	//var e_name = get ("uname");
	var uname = e_uname.value;
	get("op").innerHTML = uname;
}
function get(id){
	return document.getElementByID(id);
}
function viewGoogle(){
	var g_f =get("g_form");
	var g_b =get("btn_g");

	if(g_status){
		 g_f.style.display="none";
		 btn_g.innerHTML="Login With Google";
		 g_status = true;
	}
	else{
		g_f.style.display = "block";
		btn_g.innerHTML="Hide Google Form";
		g_status = true;
	}
}
function viewInfo(){
	var info = get("aiub_info");
	info.style.display = "block";
}
function hideInfo(){
	var info = get("aiub_info");
	info.style.display = "none";
}


