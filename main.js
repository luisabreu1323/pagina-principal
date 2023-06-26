const listUsers=async()=>{
    try{
        const response= await fetch("https://jsonplaceholder.typicode.com/users");
        const data= await response.json();
        
        let content=``;
        Users.forEach((Users,index)=>{
            content+= `
            <tr>
                <td>${index + 1}</td>
                <td>${Users.name}</td>
                <td>${Users.email}</td>
                <td>${Users.address.city}</td>
                <td>${Users.company.name}</td>

            </tr>`;
          tableBody_any.innerHTML=content;
        })

    }catch(ex){
        alert(ex);
    }
}
window.addEventListener("load",async()=> {
    await listUsers();
});