
let bouton=document.querySelector('#bouton')

const send=()=>{
    console.log("sending")
    let Etablissements=[
        { nom: 'etb1', region: 'centre', ville: 'yaounde', quartier: 'cite-verte' },
        { nom: 'etb2', region: 'littoral', ville: 'douala', quartier: 'ndokoti' },
        { nom: 'etb3', region: 'ouest', ville: 'bafoussam', quartier: 'centre-ville' },
        { nom: 'etb4', region: 'est', ville: 'ayos', quartier: 'anyoumgom' },
        { nom: 'etb5', region: 'sud', ville: 'kribi', quartier: 'stade' },
    ]
    let requestOptions={
        method: 'POST',
        headers: {
            'Accept': 'application/json'
        },
        body: Etablissements,
    }
    fetch('http://127.0.0.1:8000/api/setetablissement', requestOptions)
    .then(response=>response.json()).then(data=>console.log(data))
    .catch(err=>console.log(`err: `, err))
}

bouton.addEventListener('click', send, false)