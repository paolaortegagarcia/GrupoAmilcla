document
    .getElementById("formulario")
    .addEventListener("submit", function (event) {
        event.preventDefault();

        const formData = new FormData(document.getElementById("formulario"));

        fetch("email.php", {
            method: "POST",
            body: formData,
        })
            .then((response) => {
                if (!response.ok) {
                    throw new Error("Error al enviar el formulario");
                }
                return response.text();
            })
            .then((data) => {
                Swal.fire({
                    title: "¡Formulario enviado correctamente!",
                    text: "Gracias por contactarnos",
                    icon: "success",
                });
            })
            .catch((error) => {
                console.error("Error:", error);
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "Ocurrió un error al enviar el formulario",
                });
            });
    });
