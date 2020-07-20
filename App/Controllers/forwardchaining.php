<?php

namespace Controllers;

use Dedelang\View\View;

import java.io.File;
import java.io.FileInputStream;
import java.util.List;
import java.util.Properties;


 public class forwardchainingController{

		String bahan= null;
		String jenis= null;

	public static void main (String [] args) {


		var bahan = document.getElementByName('bahan').checked;

		if (bahan == null) {
			alert ('Sila Pilih Bahan Masakan Anda');
			return false;
		}

		 if ( bahan==ayam )  {
			 alert ("%Ayam%");
		 } else if ( bahan == "ayam" && bahan == "tepung" && bahan == "serbukcili"
	 		|| bahan == "ciliapi") {
			 alert ("Ayam Goreng%");
		 } else if ( bahan == "ayam" && bahan == "madu" && bahan == "sostiram"
		 && bahan == "limaukasturi"){
			 alert("%Ayam Madu%");
		 } else if (bahan == "ayam" && bahan == "madu" && bahan == "serbukcili"
		 && bahan == "soskorea"){
			 alert("%Korean Chicken%");
		 } else if (bahan == "ayam" && bahan == "serai" || bahan == "ciliapi"
		 && bahan == "santan" || bahan == "asamjawa" || bahanmasakan == "kerisik"
		 || bahanmasakan == "gulamelaka" || bahan == "cilikering"){
			 alert ("%Rendang Ayam%");
		 } else if (bahan == "ayam" || bahan == "kentang" || bahan == "tomato"
		 && bahan == "ciliapi" && bahan == "kicapmanis" && bahan == "sostiram"
		 || bahan == "ladasulah"){
			 alert ("%Ayam Masak Kicap%");
		 } else if (bahan == "ayam" && bahan == "lemon" && bahan == "kicapmanis"
		 && bahan == "ladahitam" && bahan == "tepungjagung" && bahan == "madu"
	 	 && bahan == "tepunggandum" || bahanmasakan == "bijan" || bahanmasakan == "cuka"){
			 alert ("%Ayam Masak Lemon%");
		 } else if (bahan == "ayam" || bahan == "tepungjagung" || bahan == "tepunggandum"
		 && bahan == "daunkari" || bahan == "susucair" || bahan == "sususegar"){
			 alert ("%Chicken Buttermilk%");
		 } else if (bahan == "ayam" && bahan == "kentang" || bahan == "daunsup" &&
	 	 || bahanmasakan == "rempahsup"){
			 alert ("%Sup Ayam%");
		 } else if (bahan == "ayam" || bahan == "serai" && bahan == "cilikering" &&
		 || bahan == "kicapmanis"){
			 alert ("%Ayam Sambal%");
		 } else if (bahan == "ayam" || bahan == "kentang" && bahan == "ciliapi" &&
			|| bahan == "santan" || bahan == "susucair"){
			alert ("%Ayam Masak Lemak%");
		 } else {
			 alert ("Tiada Resepi Yang Dijumpai");
		 }

		 if ( bahan == "daging" ) {
			 alert ("%Daging%");
		 } else if ( bahan == "daging" && bahan == "serai" && bahanmasakan == "asamjawa"
	 	 || bahan == "cilikering" || bahan == "kicapmanis" || bahanmasakan == "gulamerah"
	 	 || bahanmasakan == "kerisik" || bahan == "kicapmanis" || bahan == "santan") {
			 alert ("%Daging Hitam%");
		 } else if ( bahan == "daging" && bahan == "serai" && bahan == "sostiram"
		 && bahan == "kicapmanis" || bahan == "cilikering"){
			 alert ("%Daging Masak Hitam%");
		 } else if ( bahan == "daging" || bahan == "cilibesar" && bahan == "sostiram"
		&& bahan == "soscili" && bahan == "sostomato" || bahan == "daunlimaupurut"){
			alert ("%Daging Masak Merah%");
		} else if ( bahan == "daging" && bahan == "kentang" && bahan == "serai"
		|| bahan == "santan" || bahan == "susucair"){
			alert ("%Daging Masak Lemak%");
		} else if ( bahan == "daging" || bahan == "ladahitam" || bahan == "kicapmanis"
		|| bahan == "soscili" || bahan == "ciliapi" || bahan == "sostiram"
		|| bahan == "serai" || bahan == "cilibesar"){
			alert ("%Daging Goreng%");
		} else if ( bahan == "daging" && bahan == "kicapmanis" && bahan == "sostiram"
		&& bahan == "ladahitam" || bahan == "tepungjagung" || bahan == "kentang"){
			alert ("%Daging Black Pepper%");
		} else if ( bahan == "daging" && bahan == "kicapmanis" && bahan == "sostiram"
		|| bahan == "madu" && bahan == "ladahitam" || bahan == "cilibesar"
		&& bahan == "limaunipis"){
			alert ("%Daging Bakar%");
		 } else {
			 alert ("Tiada Resepi Yang Dijumpai");
		 }

		 if ( bahan == "ikan" ) {
			 alert ("%Ikan%");
		 } else if ( bahan == "ikan" && bahan == "serai" && bahan == "cilikering"
	 	 || bahanmasakan == "asamjawa" || bahan == "daunlimaupurut"
		 || bahan == "tomato" || bahan == "daunkesum") {
			 alert ("Asam Pedas%");
		 } else if ( bahan == "ikan" && bahan == "ciliapi" || bahan == "santan"
		 || bahan == "susucair" && bahan == "limaukasturi" && bahan == "tomato"
	 	 || bahanmasakan == "bendi"){
			 alert ("%Lemak Cili Api%");
		 } else if ( bahan == "ikan" && bahan == "serbukkari" && bahan == "daunkari"
		 || bahanmasakan == "bendi" || bahan == "ciliapi" && bahan == "tomato"
	 	 || bahan == "santan" || bahan == "susucair" || bahanmasakan == "asamjawa"
	 	 || bahan == "serbukcili"){
			 alert ("%Kari%");
		 } else if ( bahan == "ikan" || bahan == "ciliapi" || bahan == "kentang"
		 && bahan == "cilikering" && bahanmasakan == "asamjawa"
		 || bahanmasakan == "petai" || bahan == "sostiram"){
			 alert ("%Sambal%");
		 } else {
			 alert ("Tiada Resepi Yang Dijumpai");
		 }

		 if ( bahan == "udang" ) {
			 alert ("%Udang%");
		 } else if ( bahan == "udang" || bahan == "santan" || bahan == "susucair"
	 	 || bahan == "daunkunyit" || bahan == "serai" && bahan == "ciliapi"
	 	 ) {
			 alert ("Masak Lemak&");
		 } else if ( bahan == "udang" && bahan == "serai" && bahan == "daunlimaupurut"
		 && bahan == "tomato" && bahan == "limaunipis" && bahan == "ciliapi"){
			 alert ("%Tom Yam%");
		 } else if ( bahan == "udang" || bahan == "cilikering" || bahan == "sostiram"
		 || bahan == "soscili" || bahanmasakan == "cuka" && bahan == "ciliapi"
	 	 || bahan == "butter" || bahan == "telur" ){
			 alert ("%Udang Goreng%");
		 } else if ( bahan == "udang" || bahan == "serbukkari" || bahan == "daunkari"
		 && bahan == "cilikering" || bahan == "tomato"){
			 alert ("%Sambal%");
		 } else {
			 alert ("Tiada Resepi Yang Dijumpai");
		 }

		 if ( bahan == "sotong" ) {
			 alert ("%Sotong%");
		 } else if ( bahan == "sotong" && bahan == "serai" && bahan == "daunlimaupurut"
		 && bahan == "tomato" && bahan == "limaunipis" && bahan == "ciliapi"){
			 alert ("%Tom Yam%");
		 } else if ( bahan == "sotong" && bahan == "cilikering" || bahan == "sostomato"
	 	 || bahan == "daunlimaupurut" || bahan == "serai" || bahan == "limaunipis"
	 	 || bahan == "telur" || bahan == "santan" || bahan == "susucair") {
			 alert ("%Sambal%");
		 } else if ( bahan == "sotong" || bahan == "serai" || bahan == "sostiram"
		 || bahan == "daunkari" || bahan == "cilikering" || bahan == "tomato"
	 	 || bahan == "kicapmanis" || bahan == "soscili" || bahan == "ciliapi"
	 	 || bahan == "serbukkunyit" || bahan == "ladahitam" || bahan == "daunkunyit"
	 	 || bahan == "santan" || bahan == "susucair"){
			 alert ("%Sotong Masak%");
		 } else {
			 alert ("Tiada Resepi Yang Dijumpai");
		 }

		 if ( bahan == "nasi" ) {
			 alert ("%Nasi%");
		 } else if ( bahan == "nasi" && bahan == "cilikering") {
			 alert ("Nasi Goreng Kampung%");
		 } else if ( bahan == "nasi" && bahan == "ciliapi"
		 || bahanmasakan == "kacangpanjang" && bahanmasakan == "lobak" && bahan == "telur"
	 	 || bahan == "kicapmanis") {
			 alert ("Nasi Goreng Cili%");
		 } else if ( bahan == "nasi" && bahan == "ladasulah" && bahan == "kicapmanis"
	 	 && bahan == "telur" || bahan == "udang" || bahan == "ayam" && bahan == "ciliapi") {
			 alert ("Nasi Goreng Pattaya%");
		 } else if ( bahan == "nasi" && bahan == "telur" || bahan == "udang"
	 	 || bahan == "ayam" && bahan == "ladasulah") {
			 alert ("Nasi Goreng Cina%");
		 } else if ( bahan == "nasi" && bahan == "telur" || bahan == "ciliapi" || bahan == "kicapmanis"
	 	 bahan == "ayam" || bahan == "udang" || bahan == "udang" || bahan == "cilikering") {
			 alert ("Nasi Goreng%");
		 } else if ( bahan == "nasi" && bahan == "santan" || bahanmasakan == "daunpandan"){
			 alert ("%Nasi Lemak%");
		 } else if ( bahan == "nasi" && bahan == "kentang" && bahan == "ladahitam"
		 && bahan == "ciliapi" && bahan == "kicapmasin"){
			 alert ("%Bubur Nasi%");
		 } else if ( bahan == "nasi" && bahan == "butter" && bahanmasakan == "daunpandan"){
			alert ("%Nasi Ayam%");
		} else if ( bahan == "nasi" && bahanmasakan == "minyaksapi" && bahan == "tomato"
		 && bahan == "serbukunyit" && bahan == "serbukcili" && bahanmasakan == "kismis"){
		 alert ("%Nasi Arab%");
	   } else if ( bahan == "nasi" && bahanmasakan == "rempahberiani"
	   || bahan == "tomato" && bahanmasakan == "minyaksapi"){
		 alert ("%Nasi Beriani%");
		 } else {
			 alert ("Tiada Resepi Yang Dijumpai");
		 }
	 }
 }

?>
