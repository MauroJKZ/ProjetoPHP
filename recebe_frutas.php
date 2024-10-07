<?php 

$resposta = $_POST['resposta'] ;


if($resposta > 5 || $resposta < 1){

echo "Você não escolheu nenhum produto da lista";
} elseif($resposta == 1){

echo "Você escolheu Banana";

} else if($resposta == 2){

	echo "Você escolheu Manga";

} else if($resposta == 3){

	echo "Você escolheu Kiwi";

} else if($resposta == 4){

	echo "Você escolheu Caqui";

} else if($resposta == 5){

	echo "Você escolheu Uva";
}

?>