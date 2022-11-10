
window.addEventListener('load', () => {
    let galleriesRaw = '{"gal1": {"title": "Desert", "images": ["image-1.jpg","image-2.jpg","image-3.jpg","image-4.jpg","image-5.jpg","image-6.jpg","image-7.jpg","image-8.jpg"]}}';
    let galleries = JSON.parse(galleriesRaw);
    let searchParams = new URLSearchParams(window.location.search);

    if(searchParams.has('id')){
        let galId = searchParams.get('id');
        let galleryToDisplay = galleries[galId];
        let rootUl = document.querySelector('#singleGallery ul');
        let galTitle = document.querySelector('#singleGallery h1');
        galTitle.innerHTML = galleryToDisplay.title;
        for (let i = 0; i < galleryToDisplay.images.length; i++){
            let theLi = document.createElement('li');
            let theImg = document.createElement('img');
            theImg.src = `image/${galleryToDisplay.images[i]}`;
            theImg.addEventListener("click", showSinglePict, false);
            theImg.style.cursor = 'pointer';
            theLi.appendChild(theImg);
            rootUl.appendChild(theLi);
        }
    } else {
        window.location.pathname = 'view_galeriess.php';
    }
    
}, false);


function showSinglePict(e){
    let image = e.target;
    let imageContainer = document.getElementById('galleryContainer');
    let bigImage = imageContainer.querySelector('img');
    bigImage.src = image.src;
    imageContainer.classList.toggle('visible');
    imageContainer.addEventListener('click', closeSinglePict, false);
}

function closeSinglePict(){
    let imageContainer = document.getElementById('galleryContainer');
    imageContainer.classList.toggle('visible');
}
