function validation(name, prodi, username, pw, cekpw){
	let span=document.querySelectorAll("#text_error");
	let text_err=document.querySelector(".alert");	
	let nameValidation=30
	let prodiValidation="^[a-z A-Z]+$"
	let usernameValidation=/^(?=.{8,30}$)(?![_.])(?!.*[_.]{2})[a-zA-Z0-9._]+(?<![_.])$/
	let pwValidation=/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;
	if(nama === "" || prodi === "" || username === "" || pw === "" || cekpw === ""){
		text_err.style.display="block";
		setTimeout(function(){
			text_err.style.display="none";
		},3000)
		
		return false
	} 
	if (name >= nameValidation){
		 span[0].style.display="block";
		 span[0].style.color="red";
		return false	
	}else if(prodi.match(prodiValidation) === null){
		span[1].style.display="block";
		span[1].style.color="red";
		return false
	}else if(username.match(usernameValidation) === null){
		span[2].style.display="block";
		span[2].style.color="red";
		return false
	}else if(pw.match(pwValidation) === null){
		span[3].style.display="block";
		span[3].style.color="red";
		return false
	}
	else if(pw !== cekpw){
		span[4].style.display="block";
		span[4].style.color="red";
		return false
	}else{
		alert("Sukses mendaftar")
		return document.location="login.html"
	}

}

function login(username, password){
	let text_err=document.querySelector(".alert");	
	if (username === "informatika_16" && password === "Nice_nf2021"){
		alert("Sukses masuk!")
		document.location="data_alumni.html";
	}else{
		text_err.style.display="block";
	}
}

let nav=document.querySelector(".nav-item");
        let nav_link=nav.getElementsByTagName("a");
        console.log(nav)
        for(var i=0;i<nav_link.length;i++){
            nav_link[i].addEventListener("click",function() {
                var act=document.querySelector(".nav-link.active");
                console.log(act[0])
                act.className=act.className.replace(" active","");
                this.className+=" active"
                console.log(this)
            })
        }