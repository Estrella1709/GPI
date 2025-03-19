
function showDetails(nombreEspecialista, nombrePaciente, fecha, hora, tipoCita, estadoCita) {
    document.getElementById('titulo').innerText = nombreEspecialista;
    document.getElementById('lider').innerText = nombrePaciente;
    document.getElementById('integrantes').innerText = fecha;
    document.getElementById('descr').innerText = hora;
    document.getElementById('objetivo').innerText = tipoCita;
    document.getElementById('estado').innerText = estadoCita;
    document.getElementById('profile-picture').src = image || 'img/default-profile.png';;
}


