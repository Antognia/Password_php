<?php 

// Regole 
// 1. la pssword lunga lameno 8 caratteri
// 2. pssword contiene almeno un numero
// 3. pssword contiene almeno carattere maisucolo
// 4. pssword contiene almeno un carattere speciale

//readline - come il prompt e ne produce solo strinche anche se inseriamo un nuemro

$password = readline('Inserisci qui la tua password');

echo "password inserita:" . $password;

// password lunga almeno 8 caratteri 
if (strlen($password) >= 8) {
echo "la password è lunga almeno 8 caratteri";
  
}else{
echo "La password deve essere lunga almeno 8 caratteri";
}

// 2. pssword contiene almeno un numero

if (is_numeric($password)){
  echo " La password contiene almeno un numero";
}else{
  echo " La password deve contenere almeno un numero";"
