function getDataPeserta() {
    fetch('http://everytime.id/api/peserta')
    .then(response => response.json())
    .then(data => {
        console.log(data)
        data.data.forEach(function(item) {
            dataPeserta += '<tr>'
            dataPeserta += '<td>'+ item.nip + '</td>'
            dataPeserta += '<td>'+ item.nama + '</td>'
            dataPeserta += '<td>'+ item.asal_sekolah + '</td>'
            dataPeserta += '<td>'+ item.email + '</td>'
            dataPeserta += '<td>'+ item.rumpun + '</td>'
            dataPeserta += '</tr>'
        })
        document.getElementById("table-Peserta").innerHTML = dataPeserta
    })
    .catch(err => {
        console.log(err)
    });
}
$('#search-button').on('click', function () {
    searchpeserta();
});

$('#search-input').on('keyup', function (e) {
    if(e.which === 13) {
        searchpeserta();
    }
});