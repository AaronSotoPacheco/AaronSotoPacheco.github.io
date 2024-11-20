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