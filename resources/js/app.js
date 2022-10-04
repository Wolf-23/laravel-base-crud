require('./bootstrap');


window.confirmDelete = function () {
    let result = confirm("Vuoi confermare l'eliminazione?");
    if(result) {
        console.log('true');
        return true;
    } else {
        console.log('false');
        return false;
    }

}