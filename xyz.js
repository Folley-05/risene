//alert("hello")
let form=document.querySelector('#form')
let bouton=document.querySelector('#bouton')
console.log(form)
form.addEventListener('click', e=>{
    e.preventDefault()
    console.log("le formulaire va etre soumis")
    let file=e.target.files[0]
    let form=new FormData()
    form.append('file', file, file.name)
    axios.post('http://127.0.0.1:8000/api/importarrondissements', form).then(response=>console.log(response)).catch(err=>console.log(`err : `, err))
    return false

}, false)