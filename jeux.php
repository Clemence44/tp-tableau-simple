<!DOCTYPE html>
<html>
<head>
	<title>Jeux</title>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<style>
body{
	margin:0;
	background-image: url("bg.png");
}
.rouge{
		border-color: tomato!important; 
}
.green{
		border-color: green!important; 
		opacity: 0.60;
}
.container{
	padding: 1px;
	margin-top: 60px;
	margin-left: auto;
	margin-right: auto;
	width:672px;
	height:480px;
	background-color:  rgba(200,200,200,0.6);
	/* ombres */
	-webkit-box-shadow: 2px 2px 73px -4px rgba(0,0,0,0.75);
	-moz-box-shadow: 2px 2px 73px -4px rgba(0,0,0,0.75);
	box-shadow: 2px 2px 73px -4px rgba(0,0,0,0.75); 
}
.container div {
	cursor: pointer;
	float:left;
	width:80px;
	height: 116px;
	border-color: #ccc; 
	border-style: solid;
    border-width: 2px;
}
.container div:hover {
	opacity: 0.60;
}
#demo{
	width:100px;
    margin-left: auto;
	margin-right: auto;

}
</style>
<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script>
var tuile = -1;
var position = -1;
var win = 0;
function shuffle(tab){
	tab2 =[];
	for(let i =0;i<tab.length;i++){	
		
		do{
			// je genere un nb alea de 0 à taille du tableau
			x =	Math.floor(Math.random() * tab.length);
		}while(tab2[x] != undefined);
		// tant que l'emplacement n'est pas vide
		tab2[x] = tab[i];
	}
	return tab2;
}
$(document).ready(function(){
	 // créér un tableau de 0 à 41;
	 var tab = [];
	 for(var i=0;i<42;i++){
	 	tab[i]= i;
	 }
	 // je melange ce tableau
	 tab = shuffle(tab);
	 var tab3 =[];
	 // je prends les 16 premieres tuiles
	 for (var i=0;i<16;i++){
	 	tab3[i] = tab[i];
	 }
	 // je duplique mon tableau
	 var tab4 = tab3.concat(tab3);
	 // je mélange à nouveau
	 var tab5 = shuffle(tab4);
	 // j 'affiche mon tableau
	 for (var x of tab5){
		 var str ='<div><img src="./images/'+ x;
		 str += '.jpg" width="80" data-id='+x+'></div>';
		 $('.container').append(str);
	}
	$('.container img').click(function(){
		// quel est le numero de la Tuile ???
		var image  = $(this).attr('data-id');
		//premier clique ???
		if (tuile == -1){
			// je memorise
			tuile = image;
			position = $(this).parent().index();
			$(this).parent().addClass('green');
		}else{
			$('.container div').removeClass('green');
			// 2eme clique
			// je verifie si c'est la mm image
			if (image == tuile){
				//si les position sont différente
				if(position != $(this).parent().index() ){
					$('img[data-id='+image+']').hide();
					win++;
				}
			}
			tuile = -1;

		}
		if (win == 16){
			alert('GAGNE !!!!');
		}
		//$(this).hide();
	});
});		
</script> -->
</head>
<body>
	<?php  include('tableau-simple.php'); ?>
	<div class="container">
		<?php foreach($pair_random_numbers as $number){ ?>
            <div><img width="80" src="images/<?=$number?>.jpg"></div>
        <?php } ?>
	</div>
	<br><br>
	<div id="demo"><button id="btnTricher">Tricher</button></div>

</body>
</html>