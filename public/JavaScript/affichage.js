async function clearCache() {
    const cacheNames = await window.caches.keys();
    for (const cacheName of cacheNames) {
        await window.caches.delete(cacheName);
        console.log("Cache Clear" + cacheName)
    }
}

//Lecture de la valuer du fichier
function readFile() {
    clearCache();
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "file.txt", true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            var value = xhr.responseText;
            //console.log(value);
            affichage(value);
        }
    };
    xhr.send();
}

// On relance la lecture du fichier
setInterval(readFile, 1000); // Appelez la fonction toutes les secondes


function affichage(value) {
    switch (value) {
        case "1":
            console.log("c'est un 1");
            break;
        case "2":
            console.log("c'est un 2");
            break;
        case "3":
            console.log("c'est un 3");
            break;
        case "4":
            console.log("c'est un 4");
            break;
        case "5":
            console.log("c'est un 5");
            break;
        default:
    }
}