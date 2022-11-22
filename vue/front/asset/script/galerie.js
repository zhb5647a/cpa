window.addEventListener('load', () => {
let gallerie = '{"gal1": {"title": "Desert", "images": ["image-1.jpg","image-2.jpg","image-3.jpg","image-4.jpg","image-5.jpg","image-6.jpg","image-7.jpg","image-8.jpg"]}}'
let galleries = JSON.parse(gallerie);
let searchParams = new URLSearchParams(window.location.search);

if(searchParams.has('id')){
    let galId = searchParams.get('id');
    let galleryToDisplay = galleries[galId];
    let rootCard = document.getElementById('#card')
    let galTitle = document.querySelector('#card-body h5');
    galTitle.innerHTML = galleryToDisplay.title;
    for(let i=0; i <galleryToDisplay.image.length; i++){

        let theDiv = document.createElement('div');
        let theImg = document.createElement('img');
        theImg.src = `image/${galleryToDisplay.images[i]}`;
        theImg.addEventListener("click", showSinglePict, false);
        theImg.style.cursor = 'pointer';
        theDiv.appendChild(theImg);
        rootCard.appendChild(theDiv);
    }
} else {
    window.location.pathname = 'view_galeriess.php';

}
},false);