queryString=window.location.search; 
console.log(queryString);// récupère tout ce qu'il y a écrit après le ? (avec le "? "inclu) quand on écrit dans l'adresse un ? suivi de variables


const urlParams=new URLSearchParams (queryString);

//const snap=urlParams.get('snapshot-url') // récupère la 1ère variable après le ?
//console.log(snap);

//const type=urlParams.get('snapshot-url-type') // récupère la 2ème variable après le ? qui est juste après le &
//console.log(type);

const

keys=urlParams.keys(),
values=urlParams.values(),
entries=urlParams.entries();

//for (const key of keys) console.log(key);

//for(const value of values) console.log(value);

for(const entry of entries){

  console.log(`${entry[0]}`);
  var code_pdb=entry[0] //stocke la valeur du code pdb dans la variable cod_pdb
  
 }
 
 console.log(code_pdb)
