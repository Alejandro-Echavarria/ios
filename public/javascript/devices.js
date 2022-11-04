window.addEventListener('load', (event) => {
    
    devices();
    llamar();
});

const llamar = () => {

    setInterval(devices, 10000);
}

const devices = () => {

    fetch(`${base_url+'/devices'}`, {
                    
        method: 'get'
    })
    .then(response => response.json())
    .then(async result => {

        const table = document.querySelector('#ramonTable').getElementsByTagName('tbody')[0];
        limpiar();
        result.forEach(record => {

            let row = table.insertRow();
            let cell0 = row.insertCell(0);
            let cell1 = row.insertCell(1);
            let cell2 = row.insertCell(2);
            let cell3 = row.insertCell(3);
            let cell4 = row.insertCell(4);
            let cell5 = row.insertCell(5);
            let cell6 = row.insertCell(6);
            let cell7 = row.insertCell(7);

            cell0.innerHTML = record.id;
            cell1.innerHTML = record.ubicación;
            cell2.innerHTML = record.clima;
            cell3.innerHTML = record.distancia;
            cell4.innerHTML = record.created_at;
            cell5.innerHTML = record.comentario;
            cell6.innerHTML = record.estado;
            cell7.innerHTML = record.updated_at;
        });
        
    });
}

const limpiar = () => {

    const deleteTable = document.getElementById('ramonTable').getElementsByTagName('tbody')[0];
    deleteTable.innerHTML = '';
}
