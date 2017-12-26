$( document ).ready(function() {
	
	//FICHE PRESTATION
	//création du cookie
	$("#i_consul").click(function() { document.cookie = "value=consul"; });
	$("#i_imagerie").click(function() {	document.cookie = "value=imagerie";	});
	$("#i_analyses").click(function() {	document.cookie = "value=analyses";	});
	$("#i_chirurgie").click(function() { document.cookie = "value=chirurgie";	});
	$("#i_hosp").click(function() {	document.cookie = "value=hosp";	});
	$("#i_nac").click(function() { document.cookie = "value=nac";	});
	
	//Filtre presta
	$("#p_consul").click(function() {
		$("#consultation").show();
		$("#imagerie").hide();
		$("#analyses").hide();
		$("#chirurgie").hide();
		$("#hospitalisation").hide();
		$("#nac").hide();
	});
	$("#p_imagerie").click(function() {
		$("#consultation").hide();
		$("#imagerie").show();
		$("#analyses").hide();
		$("#chirurgie").hide();
		$("#hospitalisation").hide();
		$("#nac").hide();
	});
	$("#p_analyses").click(function() {
		$("#consultation").hide();
		$("#imagerie").hide();
		$("#analyses").show();
		$("#chirurgie").hide();
		$("#hospitalisation").hide();
		$("#nac").hide();
	});
	$("#p_chirurgie").click(function() {
		$("#consultation").hide();
		$("#imagerie").hide();
		$("#analyses").hide();
		$("#chirurgie").show();
		$("#hospitalisation").hide();
		$("#nac").hide();
	});
	$("#p_hosp").click(function() {
		$("#consultation").hide();
		$("#imagerie").hide();
		$("#analyses").hide();
		$("#chirurgie").hide();
		$("#hospitalisation").show();
		$("#nac").hide();
	});
	$("#p_nac").click(function() {
		$("#consultation").hide();
		$("#imagerie").hide();
		$("#analyses").hide();
		$("#chirurgie").hide();
		$("#hospitalisation").hide();
		$("#nac").show();
	});
	
	//function getCookie récupéré de W3School
	function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
	}
		//Filtre via cookie
		switch(getCookie("value")) {
		case "imagerie":
			$("#consultation").hide();
			$("#imagerie").show();
			$("#analyses").hide();
			$("#chirurgie").hide();
			$("#hospitalisation").hide();
			$("#nac").hide();
			break;
		case "analyses":
			$("#consultation").hide();
			$("#imagerie").hide();
			$("#analyses").show();
			$("#chirurgie").hide();
			$("#hospitalisation").hide();
			$("#nac").hide();
			break;
		case "chirurgie":
			$("#consultation").hide();
			$("#imagerie").hide();
			$("#analyses").hide();
			$("#chirurgie").show();
			$("#hospitalisation").hide();
			$("#nac").hide();
			break;
		case "hosp":
			$("#consultation").hide();
			$("#imagerie").hide();
			$("#analyses").hide();
			$("#chirurgie").hide();
			$("#hospitalisation").show();
			$("#nac").hide();
			break;
		case "nac":
			$("#consultation").hide();
			$("#imagerie").hide();
			$("#analyses").hide();
			$("#chirurgie").hide();
			$("#hospitalisation").hide();
			$("#nac").show();
			break;
    default:
      $("#consultation").show();
			$("#imagerie").hide();
			$("#analyses").hide();
			$("#chirurgie").hide();
			$("#hospitalisation").hide();
			$("#nac").hide();
			break;
	}
	
	
	//VENTE
    $("#croquettes").click(function() {
        if ($("#article-croquettes").css("display") == "none") {
            $("#article-croquettes").css("display", "block");
            $("#article-croquettes").css("display", "block");
        } else {
            $("#article-croquettes").css("display", "none");
        }
    }); 

    $("#vermifuges").click(function() {
        if ($("#article-vermifuges").css("display") == "none") {
            $("#article-vermifuges").css("display", "block");
        } else {
            $("#article-vermifuges").css("display", "none");
        }
    }); 

    $("#shampoings").click(function() {
        if ($("#article-shampoings").css("display") == "none") {
            $("#article-shampoings").css("display", "block");
        } else {
            $("#article-shampoings").css("display", "none");
        }
    }); 

    $("#brosses").click(function() {
        if ($("#article-brosses").css("display") == "none") {
            $("#article-brosses").css("display", "block");
        } else {
            $("#article-brosses").css("display", "none");
        }
    }); 

    $("#colliers").click(function() {
        if ($("#article-colliers").css("display") == "none") {
            $("#article-colliers").css("display", "block");
        } else {
            $("#article-colliers").css("display", "none");
        }
    }); 

	//CONSEILS
	//création du cookies
	$("#i_dents").click(function() { document.cookie = "value=dents";	});
	$("#i_yeux").click(function() {	document.cookie = "value=yeux";	});
	$("#i_pelage").click(function() {	document.cookie = "value=pelage";	});
	$("#i_parasites").click(function() { document.cookie = "value=parasites";	});
	$("#i_vaccinChien").click(function() { document.cookie = "value=vaccinChien";	});
	$("#i_vaccinChat").click(function() {	document.cookie = "value=vaccinChat";	});
	$("#i_identification").click(function() {	document.cookie = "value=identification";	});
	$("#i_education").click(function() { document.cookie = "value=education";	});
	
	//filtre via cookie
	switch(getCookie("value")) {
		case "yeux":
			$("#dents").hide();
			$("#yeux").show();
			$("#pelage").hide();
			$("#parasites").hide();
			$("#vaccinChien").hide();
			$("#vaccinChat").hide();
			$("#identification").hide();
			$("#education").hide();
			break;
		case "pelage":
			$("#dents").hide();
			$("#yeux").hide();
			$("#pelage").show();
			$("#parasites").hide();
			$("#vaccinChien").hide();
			$("#vaccinChat").hide();
			$("#identification").hide();
			$("#education").hide();
			break;
		case "parasites":
			$("#dents").hide();
			$("#yeux").hide();
			$("#pelage").hide();
			$("#parasites").show();
			$("#vaccinChien").hide();
			$("#vaccinChat").hide();
			$("#identification").hide();
			$("#education").hide();
			break;
		case "parasites":
			$("#dents").hide();
			$("#yeux").hide();
			$("#pelage").hide();
			$("#parasites").show();
			$("#vaccinChien").hide();
			$("#vaccinChat").hide();
			$("#identification").hide();
			$("#education").hide();
			break;
		case "vaccinChien":
			$("#dents").hide();
			$("#yeux").hide();
			$("#pelage").hide();
			$("#parasites").hide();
			$("#vaccinChien").show();
			$("#vaccinChat").hide();
			$("#identification").hide();
			$("#education").hide();
			break;
		case "vaccinChat":
			$("#dents").hide();
			$("#yeux").hide();
			$("#pelage").hide();
			$("#parasites").hide();
			$("#vaccinChien").hide();
			$("#vaccinChat").show();
			$("#identification").hide();
			$("#education").hide();
			break;
		case "identification":
			$("#dents").hide();
			$("#yeux").hide();
			$("#pelage").hide();
			$("#parasites").hide();
			$("#vaccinChien").hide();
			$("#vaccinChat").hide();
			$("#identification").show();
			$("#education").hide();
			break;
		case "education":
			$("#dents").hide();
			$("#yeux").hide();
			$("#pelage").hide();
			$("#parasites").hide();
			$("#vaccinChien").hide();
			$("#vaccinChat").hide();
			$("#identification").hide();
			$("#education").show();
			break;
		default:
      	$("#dents").show();
			$("#yeux").hide();
			$("#pelage").hide();
			$("#parasites").hide();
			$("#vaccinChien").hide();
			$("#vaccinChat").hide();
			$("#identification").hide();
			$("#education").hide();
			break;
	}
	
	//filtre conseils
	$("#p_dents").click(function() {
		$("#dents").show();
		$("#yeux").hide();
		$("#pelage").hide();
		$("#parasites").hide();
		$("#vaccinChien").hide();
		$("#vaccinChat").hide();
		$("#identification").hide();
		$("#education").hide();
	});
	$("#p_yeux").click(function() {
		$("#dents").hide();
		$("#yeux").show();
		$("#pelage").hide();
		$("#parasites").hide();
		$("#vaccinChien").hide();
		$("#vaccinChat").hide();
		$("#identification").hide();
		$("#education").hide();
	});
	$("#p_pelage").click(function() {
		$("#dents").hide();
		$("#yeux").hide();
		$("#pelage").show();
		$("#parasites").hide();
		$("#vaccinChien").hide();
		$("#vaccinChat").hide();
		$("#identification").hide();
		$("#education").hide();
	});
	$("#p_parasites").click(function() {
		$("#dents").hide();
		$("#yeux").hide();
		$("#pelage").hide();
		$("#parasites").show();
		$("#vaccinChien").hide();
		$("#vaccinChat").hide();
		$("#identification").hide();
		$("#education").hide();
	});
	$("#p_vaccinChien").click(function() {
		$("#dents").hide();
		$("#yeux").hide();
		$("#pelage").hide();
		$("#parasites").hide();
		$("#vaccinChien").show();
		$("#vaccinChat").hide();
		$("#identification").hide();
		$("#education").hide();
	});
	$("#p_vaccinChat").click(function() {
		$("#dents").hide();
		$("#yeux").hide();
		$("#pelage").hide();
		$("#parasites").hide();
		$("#vaccinChien").hide();
		$("#vaccinChat").show();
		$("#identification").hide();
		$("#education").hide();
	});
	$("#p_identification").click(function() {
		$("#dents").hide();
		$("#yeux").hide();
		$("#pelage").hide();
		$("#parasites").hide();
		$("#vaccinChien").hide();
		$("#vaccinChat").hide();
		$("#identification").show();
		$("#education").hide();
	});
	$("#p_education").click(function() {
		$("#dents").hide();
		$("#yeux").hide();
		$("#pelage").hide();
		$("#parasites").hide();
		$("#vaccinChien").hide();
		$("#vaccinChat").hide();
		$("#identification").hide();
		$("#education").show();
	});
});