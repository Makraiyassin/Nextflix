
fetch(`https://api.themoviedb.org/3/tv/83097/videos?api_key=${key}`)
.then(response => response.json())
.then((data) => {
})

let images = Array.from(document.querySelectorAll("#div1 img"));
// console.log(Array.from(document.querySelectorAll("#div1 img")));
images.forEach(image => {
    // console.log(image);
    // image.addEventListener("click", function() {
    //     image.insertAdjacentElement("afterend",`
    //         <dialog id="video" open> 
    //             <iframe width="250px"src="https://www.youtube.com/embed/c0Yp-a425N8"></iframe>                        
    //         </dialog> 
    //     `)
    // })
});