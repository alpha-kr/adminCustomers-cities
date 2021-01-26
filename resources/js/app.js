
window.myAlert = require('./alerts');

window.deleteResource = async (endPoint, id, reload = true) => {
    let result = await myAlert.Confirmation()
    if (result.isConfirmed) {
        let req = await fetch(endPoint + '/' + id, {
            method: 'delete',
            headers: {
                'X-CSRF-TOKEN': document.querySelector("meta[name=csrf-token]").content,
                'accept': 'application/json',
            }
        });

        if (req.ok) {
            if (reload) {
                window.location.reload();
            }
            return true
        } else {

            alert('Error al eliminar')
            return false
        }
    }

}

