function DeleteFunc(id){

    $.ajax({
        method:'POST',
        url:'index.php',
        data:{data:id,delete:'delete'},
        success:function(datas){
            $('.layout').load('index.php')
        }
    })
    $(".divForm").hide()
}


function ChangeFunc(id,name,email,job){
    document.querySelector(".divForm").id = "test"
    const divFormInsert = $(".divForm")
    divFormInsert.show()
    divFormInsert.id = "test"
  
    const inputName = $('#inputName')
    const inputEmail = $("#inputEmail")
    const inputJob = $("#inputJob")
    const BtnSend = $("#btnSend")
    const contents = $(".contents")
    contents.fadeTo("slow",0.1)

    inputName.val(name)
    inputEmail.val(email)
    inputJob.val(job)
    const Form = $("form").each((ind,elem)=>{
        elem.click((e)=>e.preventDefault())
    })
    


    const BtnCancel = $("#cancel").click(()=>{
        inputName.val("")
        inputEmail.val("")
        inputJob.val("")
        id = ""
        name = ""
        quantit=""
        job = ""
        $(".divForm").hide()
        contents.fadeTo("slow",1)
    })

   
    BtnSend.click((e)=>{
        const data = {
            id,
            name:inputName.val(),
            email:inputEmail.val(),
            job:inputJob.val(),
            update:'update'
        }
        $.ajax({
        method:'POST',
        url:'index.php',
        data,
        })
        .done((datas)=>{
            $('.layout').load('index.php')
            id = ""
            $(".divForm").hide()
            contents.fadeTo("slow",1)
        })
       
    })
}
function SendValues(){
   
    let name = $("#name")
    let email = $("#email")
    let job = $("#job")
    let data = {
        name:name.val(),email:email.val(),job:job.val(),insert:'insert'
    }
    $.ajax({
        method:'POST',
        url:'index.php',
        data,
    }).done((datas)=>{
        $('.layout').load('index.php')
    })
    console.log(data)
    name.val("")
    email.val("")
    job.val("")
}