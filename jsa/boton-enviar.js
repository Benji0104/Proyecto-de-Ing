document.getElementById("botonenviar").addEventListener("click", function(e) {
    e.preventDefault();
    console.log("funciona el boton")
    
    let formData = new FormData();
    formData.append("envio", "Hola mundo");
    formData.append("reporterName", document.getElementById("reporterName").value);
    formData.append("contactNumber", document.getElementById("contactNumber").value);
    formData.append("reportDate", document.getElementById("reportDate").value);
    formData.append("animalType", document.getElementById("animalType").value);
    formData.append("description", document.getElementById("description").value);
    formData.append("location", document.getElementById("location").value);
    formData.append("comment", document.getElementById("comment").value);

    fetch("../php/guardar_formulario.php", {
        method: "POST",
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        alert("Reporte enviado exitosamente");
        console.log(data);
    })
    .catch(error => {
        console.error("Error:", error);
    });
});