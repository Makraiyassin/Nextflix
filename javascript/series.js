const key = "e3c5f092e7a4cfc7d09a643f7f665b97";
const poster = "http://image.tmdb.org/t/p/original";
const video = "https://www.youtube.com/watch?v=";

function getseries(){

    fetch(`https://api.themoviedb.org/3/tv/top_rated?api_key=${key}`)
    .then(response => response.json())
    .then((data) => {
        data.results.forEach(element => {
            document.querySelector("#div1").insertAdjacentHTML("beforeend",`<img id=${element.id} src="${poster}${element.poster_path}" width="150px" style="padding-right:5px">`)
            // fetch(`https://api.themoviedb.org/3/tv/${element.id}/videos?api_key=${key}`)
            // .then(response => response.json())
            // .then((data) => {
            //     console.log(data);
            //     document.querySelector(`#${element.id}`).addEventListener('click',function(){
            //         document.querySelector(`#${element.id}`).insertAdjacentElement("afterend",`
            //             <dialog id="video" open> 
            //                 <iframe width="250px"src="https://www.youtube.com/embed/${data.results[0].key}"></iframe>                        
            //             </dialog> 
            //         `)
            //     })
            // })
        });
    })

    fetch(`https://api.themoviedb.org/3/tv/popular?api_key=${key}`)
    .then(response => response.json())
    .then((data) => {
        data.results.forEach(element => {
            document.querySelector("#div2").insertAdjacentHTML("beforeend",`<img data-id=${element.id} src="${poster}${element.poster_path}" width="150px"style="padding-right:5px">`)
        });
    })

    fetch(`https://api.themoviedb.org/3/tv/on_the_air?api_key=${key}`)
    .then(response => response.json())
    .then((data) => {
        data.results.forEach(element => {
            document.querySelector("#div3").insertAdjacentHTML("beforeend",`<img data-id=${element.id} src="${poster}${element.poster_path}" width="150px" style="padding-right:5px">`)
        });
    })
}

getseries()

document.querySelector("#goSearch").addEventListener("click",function (){
    document.querySelector("#div0").remove();

    let search = document.querySelector("#search").value;

    document.querySelector("nav").insertAdjacentHTML("afterend",
    `
    <div id="div0" class="posters">
        <h1>results of "${search}":</h1>
    </div>
    `)

    fetch(`https://api.themoviedb.org/3/search/tv?api_key=${key}&query=${search}`)
    .then(response => response.json())
    .then((data) => {
        data.results.forEach(element => {
            document.querySelector("#div0").insertAdjacentHTML("beforeend",`<img data-id=${element.id} src="${poster}${element.poster_path}" width="150px" style="padding-right:5px">`)
        });
    })
})


