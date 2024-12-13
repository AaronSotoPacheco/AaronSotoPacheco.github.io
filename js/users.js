document.getElementById("btnSafe").onclick=(evt)=>{
    //evt.preventDefault()
    document.getElementById("form").classList.add('was-validated')
    Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, save it!"
      }).then((result) => {
        if (result.isConfirmed) {
          Swal.fire({
            title: "Saved!",
            text: "Your file has been saved.",
            icon: "success"
          });
        }
      });
}
var botones = document.getElementsByClassName("btnEditar");

for (var i = 0; i < botones.length; i++) {
  botones[i].onclick = (evt) => {
    var btn = evt.target;
    
    // Obtener los valores de los atributos data- del botón
    var name = btn.getAttribute("data-name");
    var game = btn.getAttribute("data-game");
    var estatus = btn.getAttribute("data-status");
    var date = btn.getAttribute("data-date");
    var id = btn.getAttribute("data-id");
    var ruleset = btn.getAttribute("data-ruleset");
    var image = btn.getAttribute("data-image"); // Si tienes un atributo 'data-image'

    // Asignar estos valores a los campos del formulario en el modal
    document.getElementById("editName").value = name;
    document.getElementById("editGame").value = game;
    document.getElementById("editStatus").value = estatus;
    document.getElementById("editDate").value = date; 
    document.getElementById("editId").value = id;
    document.getElementById("editRuleset").value = ruleset;
    document.getElementById("editImg").value = image; // Asegúrate de que este campo esté en el formulario
  }
}
