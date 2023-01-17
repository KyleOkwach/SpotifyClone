const collectionContainer = document.querySelector(".songs__collection");

const playBtn = document.querySelector(".playsong"),
songContainer = document.querySelector(".songs__collection"),
songDivs = songContainer.children;
// songId = document.querySelector(".songId");

const fetch_songs = () => {
    let xhr = new XMLHttpRequest;
    
    xhr.open("GET", "../php/songs.php", true);
    
    xhr.onload = () => {
        if(xhr.readyState === XMLHttpRequest.DONE) {
            if(xhr.status === 200) {
                let data = xhr.response;
    
                collectionContainer.innerHTML = data;
                // console.log(data);
                // console.log("hello");
            }
        }
    }

    xhr.send();
}

fetch_songs();

console.log(songContainer);
console.log(songDivs);

setInterval(() => {
    fetch_songs();
    console.log(songContainer);
    console.log(songDivs);
}, 60000);

console.log(songDivs[2]);

for(i = 0; i <= songDivs.length(); i++) {
    console.log(songDivs[i]);
}

// playBtn.onclick = (e) => {
//     e.preventDefault();
//     window.history.replaceState(null, null, songId)
// }