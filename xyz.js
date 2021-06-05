//alert("hello")
let form=document.querySelector('#form')
let bouton=document.querySelector('#bouton')
console.log(form)
bouton.addEventListener('click', e=>{
    e.preventDefault()
    console.log("le formulaire va etre soumis")
    let formdata=new FormData(form)
    console.log(formdata)
    let requestOption={
        method: 'POST',
        body: formdata
    }
    fetch('http://127.0.0.1:8000/api/importarrondissements', requestOption)
    .then(response=>response.json()).then(data=>console.log(data))
    .catch(err=>console.log(err))
    return false

}, false)