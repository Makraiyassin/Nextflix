const key = "e3c5f092e7a4cfc7d09a643f7f665b97";
const poster = "http://image.tmdb.org/t/p/original";

function getMovies(){

    fetch(`https://api.themoviedb.org/3/movie/now_playing?api_key=${key}`)
    .then(response => response.json())
    .then((data) => {
        data.results.forEach(element => {
            document.querySelector("#div1").insertAdjacentHTML("beforeend",`<img src="${poster}${element.poster_path}" width="150px" style="padding-right:5px">`)
        });
    })

    fetch(`https://api.themoviedb.org/3/movie/popular?api_key=${key}`)
    .then(response => response.json())
    .then((data) => {
        data.results.forEach(element => {
            document.querySelector("#div2").insertAdjacentHTML("beforeend",`<img src="${poster}${element.poster_path}" width="150px"style="padding-right:5px">`)
        });
    })

    fetch(`https://api.themoviedb.org/3/movie/upcoming?api_key=${key}`)
    .then(response => response.json())
    .then((data) => {
        data.results.forEach(element => {
            document.querySelector("#div3").insertAdjacentHTML("beforeend",`<img src="${poster}${element.poster_path}" width="150px" style="padding-right:5px">`)
        });
    })
}

getMovies()

document.querySelector("#goSearch").addEventListener("click",function (){
    document.querySelector("#div0").remove();

    let search = document.querySelector("#search").value;

    document.querySelector("nav").insertAdjacentHTML("afterend",
    `
    <div id="div0" class="posters">
        <h1>results of "${search}":</h1>
    </div>
    `)

    fetch(`https://api.themoviedb.org/3/search/movie?api_key=${key}&query=${search}`)
    .then(response => response.json())
    .then((data) => {
        data.results.forEach(element => {
            document.querySelector("#div0").insertAdjacentHTML("beforeend",`<img src="${poster}${element.poster_path}" width="150px" style="padding-right:5px">`)
        });
    })
})














//_________________________________________________________________________

// fetch(`https://api.themoviedb.org/3/genre/movie/list?api_key=${key}`)
// .then(response => response.json())
// .then((data) => {
//     console.log(data);
// })

// let rand = Math.floor(Math.random()*3000)+1
// fetch(`https://api.themoviedb.org/3/movie/${rand}?api_key=${key}&append_to_response=videos`)
// .then(response => response.json())
// .then((data) => {
//     console.log(data);
// })