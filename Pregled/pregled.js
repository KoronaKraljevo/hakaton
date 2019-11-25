function getWeather(city){

    for(i = 2; i < 50; i++){
        fetch('https://jsonplaceholder.typicode.com/photos/' + i)
        .then(response => response.json())
        .then(json => { /*console.log(json);*/
            console.log(json.url);
            document.getElementById("pretty_pictures").innerHTML = document.getElementById("pretty_pictures").innerHTML + 
            '<img class="generatedImages" src="'+json.url+'"/>';
        })
    }
}