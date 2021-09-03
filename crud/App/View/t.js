const Btn = document.querySelector('#delete')
const results = document.querySelector("#test")

Btn.addEventListener('click',()=>{
   /* $.ajax({
        method:'POST',
        url:'index.php',
        data:{value:'here',delete:'delete'},
        success:function(data){
          document.body.innerHTML = data
        }
    })*/
    fetch('http://crud/crud/App/view/select',{
        method:'POST',
        body:JSON.stringify({value:'deu certo',delete:'ola'})
    }).then(async(val)=>{
        const text =  await val.text()
        
        document.body.innerHTML = text
    })

})
