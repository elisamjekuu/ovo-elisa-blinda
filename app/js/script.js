const imageSources = [
    "../app/images/heroImage2.avif",
    "../app/images/heroImage.avif",
];

let index = 0;
function createSlider() {
    const heroImageSlider1 = document.getElementById('heroImageSlider1');
    const heroImageSlider2 = document.getElementById('heroImageSlider2');
    const heroImageSlider3 = document.getElementById('heroImageSlider3');
    
    heroImageSlider1.srcset = imageSources[index];
    heroImageSlider2.srcset = imageSources[index];
    heroImageSlider3.src = imageSources[index];
    
    index = (index + 1) % imageSources.length;
    setTimeout(createSlider, 2500);
}

createSlider();