

const cargarTipo = async()=>{

    let getTipo = await axios.get("api/tipo/get");
    let tipo = getTipo.data;
    let tipoSelect = document.querySelector("#tipo_select");
    tipo.forEach(t=>{
        let option = document.createElement("option");
        oprion.innerText = t;
        tipoSelect.appendChild(option);
        
    });


};

cargarTipo();