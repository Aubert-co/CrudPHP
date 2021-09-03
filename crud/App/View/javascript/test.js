const Btn = document.querySelector('.delete')
const results = document.querySelector("#test")

Btn.addEventListener('click',()=>{
    fetch('http://crud/crud/App/view/select',{
        method:'POST',
        body:JSON.stringify({value:'deu certo',delete:'ola'})
    }).then(async(val)=>{
        const text =  await val.text()
        
        window.onload(text)
    })

})
