fetch('check_carrello.php').then(searchResponse).then(searchJson);
function searchResponse(response){
    return response.json();
}
function searchJson(json)
{
    const div=document.querySelector('#annunci');
    div.innerHTML='';
    for (let i in json){
        const annuncio=json[i];
        const id=annuncio.id;
        const user=annuncio.username;
        const nome=annuncio.nome;
        const descrizione=annuncio.descrizione;
        const prezzo=annuncio.prezzo;
        const img=annuncio.foto;
        
        const div_secondario= document.createElement('div');
        div_secondario.classList.add('secondario');
        div.appendChild(div_secondario);

        const id_p=document.createElement('p');
        id_p.textContent=id;
        id_p.classList.add('hidden');
        const h2_user= document.createElement('h2');
        h2_user.textContent = user;
        const h4_nome=document.createElement('h4');
        h4_nome.textContent = nome;
        const p_des=document.createElement('p');
        p_des.textContent = descrizione;
        const p_prezzo=document.createElement('p');
        p_prezzo.textContent = prezzo+'€';
        const img_foto=document.createElement('img');
        img_foto.src=img;

        div_secondario.appendChild(id_p);
        div_secondario.appendChild(h2_user);
        div_secondario.appendChild(h4_nome);
        div_secondario.appendChild(p_des);
        div_secondario.appendChild(img_foto);
        div_secondario.appendChild(p_prezzo);
        
        //creo div per preferiti e per bottone rimuovi
        const div_3= document.createElement('div');
        div_3.classList.add('div3');
        div_secondario.appendChild(div_3);

        //
        const rimuovi=document.createElement('input');
        rimuovi.classList.add('aggiungi');
        rimuovi.type='submit';
        rimuovi.value='rimuovi dal carrello';
        div_3.appendChild(rimuovi);
        rimuovi.addEventListener('click', remove);

        //creo img preferiti
        const img_preferiti=document.createElement('img');
        img_preferiti.src='preferiti_1.jpg';
        img_preferiti.classList.add('preferiti');
        div_3.appendChild(img_preferiti);
    }

}
function remove(event){
    const sub=event.currentTarget;
    div_annunci=sub.parentNode.parentNode;
    const id=div_annunci.querySelector('p').textContent;
    fetch('aggiungi_carrello.php?id='+id+'&action=remove').then(searchResponse).then(OnJson);
    
    div_annunci.innerHTML='';
    div_annunci.classList.add('hidden');

    console.log(div_annunci.parentNode);
    if(div_annunci.parentNode===''){
        console.log('vuoto');
    }
}
function OnJson(json){
    console.log(json);
}