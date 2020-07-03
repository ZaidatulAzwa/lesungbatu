function resepi() {
	var ayam = document.getElementById('ayam').checked;
	var daging = document.getElementById('daging').checked;
	var ikan = document.getElementById('ikan').checked;
	var sotong = document.getElementById('sotong').checked;
	var udang = document.getElementById('udang').checked;
	var ketam = document.getElementById('ketam').checked;
	var telur = document.getElementById('telur').checked;
	var madu = document.getElementById('madu').checked;
	var keju = document.getElementById('keju').checked;
	var tomato = document.getElementById('tomato').checked;
	var lemon = document.getElementById('lemon').checked;
	var kentang = document.getElementById('kentang').checked;
	var cendawan = document.getElementById('cendawan').checked;
	var cilikering = document.getElementById('cilikering').checked;
	var ciliapi = document.getElementById('ciliapi').checked;
	var cilibesar = document.getElementById('cilibesar').checked;
	var serbukcili = document.getElementById('serbukcili').checked;
	var serbukkari = document.getElementById('serbukkari').checked;
	var perencahsup = document.getElementById('perencahsup').checked;
	var daunkesum = document.getElementById('daunkesum').checked;
	var daunkari = document.getElementById('daunkari').checked;
	var daunlimaupurut = document.getElementById('daunlimaupurut').checked;
	var daunsup = document.getElementById('daunsup').checked;
	var daunkunyit = document.getElementById('daunkunyit').checked;
	var serai = document.getElementById('serai').checked;
	var susucair = document.getElementById('susucair').checked;
	var santan = document.getElementById('santan').checked;
	var sususegar = document.getElementById('sususegar').checked;
	var butter = document.getElementById('butter').checked;
	var kicapmasin = document.getElementById('kicapmasin').checked;
	var kicapmanis= document.getElementById('kicapmanis').checked;
	var kicaplemak = document.getElementById('kicaplemak').checked;
	var soscili = document.getElementById('soscili').checked;
	var sostomato = document.getElementById('sostomato').checked;
	var sostiram = document.getElementById('sostiram').checked;
	var ladahitam = document.getElementById('ladahitam').checked;
	var ladasulah = document.getElementById('ladasulah').checked;
	var limaikasturi = document.getElementById('limaikasturi').checked;
	var limaunipis = document.getElementById('limaunipis').checked;
	var asamjawa = document.getElementById('asamjawa').checked;
	var tepunggandum = document.getElementById('tepunggandum').checked;
	var tepungjagung = document.getElementById('tepungjagung').checked;
	var tepungberas = document.getElementById('tepungberas').checked;

	if (ayam==false && daging==false && ikan==false && sotong==false && udang==false && ketam==false
	&& telur==false && madu==false && keju==false && tomato==false && lemon==false && kentang==false
	&& cendawan==false && cilikering==false && ciliapi==false && cilibesar==false && serbukcili==false && serbukkari==false
	&& perencahsup==false && daunkesum==false && daunkari==false && daunlimaupurut==false && daunsup==false && daunkunyit==false
	&& serai==false && susucair==false && santan==false && sususegar==false && butter==false && kicapmasin==false
	&& kicapmanis==false && kicaplemak==false && soscili==false && sostomato==false && sostiram==false && ladahitam==false
	&& ladasulah==false && limaukasturi==false && limaunipis==false && asamjawa==false && tepunggandum==false && tepungjagung==false
	&& tepungberas==false) {
		alert ('Sila Pilih Bahan Masakan Anda');
		return false;
	}
	else {
		return true;
	}
}
	<?php foreach ($dataResult as $recipe_id)
	 if ( ayam==true )  {
		 echo "<td> $recipe_id->recipe_title </td>" ?>;
	 } else if ( bahan == "ayam" && bahan == "tepung" && bahan == "serbukcili"
 		|| bahan == "ciliapi") {
		 System.out.println("Ayam Goreng%");
	 } else if ( bahan == "ayam" && bahan == "madu" && bahan == "sostiram"
	 && bahan == "limaukasturi"){
		 System.out.println("%Ayam Madu%");
	 } else if (bahan == "ayam" && bahan == "madu" && bahan == "serbukcili"
	 && bahan == "soskorea"){
		 System.out.println("%Korean Chicken%");
	 } else if (bahan == "ayam" && bahan == "serai" || bahan == "ciliapi"
	 && bahan == "santan" || bahan == "asamjawa" || bahanmasakan == "kerisik"
	 || bahanmasakan == "gulamelaka" || bahan == "cilikering"){
		 System.out.println("%Rendang Ayam%");
	 } else if (bahan == "ayam" || bahan == "kentang" || bahan == "tomato"
	 && bahan == "ciliapi" && bahan == "kicapmanis" && bahan == "sostiram"
	 || bahan == "ladasulah"){
		 System.out.println("%Ayam Masak Kicap%");
	 } else if (bahan == "ayam" && bahan == "lemon" && bahan == "kicapmanis"
	 && bahan == "ladahitam" && bahan == "tepungjagung" && bahan == "madu"
 	 && bahan == "tepunggandum" || bahanmasakan == "bijan" || bahanmasakan == "cuka"){
		 System.out.println("%Ayam Masak Lemon%");
	 } else if (bahan == "ayam" || bahan == "tepungjagung" || bahan == "tepunggandum"
	 && bahan == "daunkari" || bahan == "susucair" || bahan == "sususegar"){
		 System.out.println("%Chicken Buttermilk%");
	 } else if (bahan == "ayam" && bahan == "kentang" || bahan == "daunsup" &&
 	 || bahanmasakan == "rempahsup"){
		 System.out.println("%Sup Ayam%");
	 } else if (bahan == "ayam" || bahan == "serai" && bahan == "cilikering" &&
	 || bahan == "kicapmanis"){
		 System.out.println("%Ayam Sambal%");
	 } else if (bahan == "ayam" || bahan == "kentang" && bahan == "ciliapi" &&
		|| bahan == "santan" || bahan == "susucair"){
		System.out.println("%Ayam Masak Lemak%");
	 } else {
		 System.out.println("Tiada Resepi Yang Dijumpai");
	 }

	 if ( bahan == "daging" ) {
		 System.out.println("%Daging%");
	 } else if ( bahan == "daging" && bahan == "serai" && bahanmasakan == "asamjawa"
 	 || bahan == "cilikering" || bahan == "kicapmanis" || bahanmasakan == "gulamerah"
 	 || bahanmasakan == "kerisik" || bahan == "kicapmanis" || bahan == "santan") {
		 System.out.println("%Daging Hitam%");
	 } else if ( bahan == "daging" && bahan == "serai" && bahan == "sostiram"
	 && bahan == "kicapmanis" || bahan == "cilikering"){
		 System.out.println("%Daging Masak Hitam%");
	 } else if ( bahan == "daging" || bahan == "cilibesar" && bahan == "sostiram"
	&& bahan == "soscili" && bahan == "sostomato" || bahan == "daunlimaupurut"){
		System.out.println("%Daging Masak Merah%");
	} else if ( bahan == "daging" && bahan == "kentang" && bahan == "serai"
	|| bahan == "santan" || bahan == "susucair"){
		System.out.println("%Daging Masak Lemak%");
	} else if ( bahan == "daging" || bahan == "ladahitam" || bahan == "kicapmanis"
	|| bahan == "soscili" || bahan == "ciliapi" || bahan == "sostiram"
	|| bahan == "serai" || bahan == "cilibesar"){
		System.out.println("%Daging Goreng%");
	} else if ( bahan == "daging" && bahan == "kicapmanis" && bahan == "sostiram"
	&& bahan == "ladahitam" || bahan == "tepungjagung" || bahan == "kentang"){
		System.out.println("%Daging Black Pepper%");
	} else if ( bahan == "daging" && bahan == "kicapmanis" && bahan == "sostiram"
	|| bahan == "madu" && bahan == "ladahitam" || bahan == "cilibesar"
	&& bahan == "limaunipis"){
		System.out.println("%Daging Bakar%");
	 } else {
		 System.out.println("Tiada Resepi Yang Dijumpai");
	 }

	 if ( bahan == "ikan" ) {
		 System.out.println("%Ikan%");
	 } else if ( bahan == "ikan" && bahan == "serai" && bahan == "cilikering"
 	 || bahanmasakan == "asamjawa" || bahan == "daunlimaupurut"
	 || bahan == "tomato" || bahan == "daunkesum") {
		 System.out.println("Asam Pedas%");
	 } else if ( bahan == "ikan" && bahan == "ciliapi" || bahan == "santan"
	 || bahan == "susucair" && bahan == "limaukasturi" && bahan == "tomato"
 	 || bahanmasakan == "bendi"){
		 System.out.println("%Lemak Cili Api%");
	 } else if ( bahan == "ikan" && bahan == "serbukkari" && bahan == "daunkari"
	 || bahanmasakan == "bendi" || bahan == "ciliapi" && bahan == "tomato"
 	 || bahan == "santan" || bahan == "susucair" || bahanmasakan == "asamjawa"
 	 || bahan == "serbukcili"){
		 System.out.println("%Kari%");
	 } else if ( bahan == "ikan" || bahan == "ciliapi" || bahan == "kentang"
	 && bahan == "cilikering" && bahanmasakan == "asamjawa"
	 || bahanmasakan == "petai" || bahan == "sostiram"){
		 System.out.println("%Sambal%");
	 } else {
		 System.out.println("Tiada Resepi Yang Dijumpai");
	 }

	 if ( bahan == "udang" ) {
		 System.out.println("%Udang%");
	 } else if ( bahan == "udang" || bahan == "santan" || bahan == "susucair"
 	 || bahan == "daunkunyit" || bahan == "serai" && bahan == "ciliapi"
 	 ) {
		 System.out.println("Masak Lemak&");
	 } else if ( bahan == "udang" && bahan == "serai" && bahan == "daunlimaupurut"
	 && bahan == "tomato" && bahan == "limaunipis" && bahan == "ciliapi"){
		 System.out.println("%Tom Yam%");
	 } else if ( bahan == "udang" || bahan == "cilikering" || bahan == "sostiram"
	 || bahan == "soscili" || bahanmasakan == "cuka" && bahan == "ciliapi"
 	 || bahan == "butter" || bahan == "telur" ){
		 System.out.println("%Udang Goreng%");
	 } else if ( bahan == "udang" || bahan == "serbukkari" || bahan == "daunkari"
	 && bahan == "cilikering" || bahan == "tomato"){
		 System.out.println("%Sambal%");
	 } else {
		 System.out.println("Tiada Resepi Yang Dijumpai");
	 }

	 if ( bahan == "sotong" ) {
		 System.out.println("%Sotong%");
	 } else if ( bahan == "sotong" && bahan == "serai" && bahan == "daunlimaupurut"
	 && bahan == "tomato" && bahan == "limaunipis" && bahan == "ciliapi"){
		 System.out.println("%Tom Yam%");
	 } else if ( bahan == "sotong" && bahan == "cilikering" || bahan == "sostomato"
 	 || bahan == "daunlimaupurut" || bahan == "serai" || bahan == "limaunipis"
 	 || bahan == "telur" || bahan == "santan" || bahan == "susucair") {
		 System.out.println("%Sambal%");
	 } else if ( bahan == "sotong" || bahan == "serai" || bahan == "sostiram"
	 || bahan == "daunkari" || bahan == "cilikering" || bahan == "tomato"
 	 || bahan == "kicapmanis" || bahan == "soscili" || bahan == "ciliapi"
 	 || bahan == "serbukkunyit" || bahan == "ladahitam" || bahan == "daunkunyit"
 	 || bahan == "santan" || bahan == "susucair"){
		 System.out.println("%Sotong Masak%");
	 } else {
		 System.out.println("Tiada Resepi Yang Dijumpai");
	 }

	 if ( bahan == "nasi" ) {
		 System.out.println("%Nasi%");
	 } else if ( bahan == "nasi" && bahan == "cilikering") {
		 System.out.println("Nasi Goreng Kampung%");
	 } else if ( bahan == "nasi" && bahan == "ciliapi"
	 || bahanmasakan == "kacangpanjang" && bahanmasakan == "lobak" && bahan == "telur"
 	 || bahan == "kicapmanis") {
		 System.out.println("Nasi Goreng Cili%");
	 } else if ( bahan == "nasi" && bahan == "ladasulah" && bahan == "kicapmanis"
 	 && bahan == "telur" || bahan == "udang" || bahan == "ayam" && bahan == "ciliapi") {
		 System.out.println("Nasi Goreng Pattaya%");
	 } else if ( bahan == "nasi" && bahan == "telur" || bahan == "udang"
 	 || bahan == "ayam" && bahan == "ladasulah") {
		 System.out.println("Nasi Goreng Cina%");
	 } else if ( bahan == "nasi" && bahan == "telur" || bahan == "ciliapi" || bahan == "kicapmanis"
 	 bahan == "ayam" || bahan == "udang" || bahan == "udang" || bahan == "cilikering") {
		 System.out.println("Nasi Goreng%");
	 } else if ( bahan == "nasi" && bahan == "santan" || bahanmasakan == "daunpandan"){
		 System.out.println("%Nasi Lemak%");
	 } else if ( bahan == "nasi" && bahan == "kentang" && bahan == "ladahitam"
	 && bahan == "ciliapi" && bahan == "kicapmasin"){
		 System.out.println("%Bubur Nasi%");
	 } else if ( bahan == "nasi" && bahan == "butter" && bahanmasakan == "daunpandan"){
		System.out.println("%Nasi Ayam%");
	} else if ( bahan == "nasi" && bahanmasakan == "minyaksapi" && bahan == "tomato"
	 && bahan == "serbukunyit" && bahan == "serbukcili" && bahanmasakan == "kismis"){
	 System.out.println("%Nasi Arab%");
   } else if ( bahan == "nasi" && bahanmasakan == "rempahberiani"
   || bahan == "tomato" && bahanmasakan == "minyaksapi"){
	 System.out.println("%Nasi Beriani%");
	 } else {
		 System.out.println("Tiada Resepi Yang Dijumpai");
	 }
 }
 }

}
