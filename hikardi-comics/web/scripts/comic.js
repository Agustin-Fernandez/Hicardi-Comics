const buttonNext = document.getElementById('NextButt')
const buttonPrev = document.getElementById('PrevButt')
const commicImage = document.getElementById('commicImage')

// imageIdx
// images

buttonPrev.addEventListener('click', () => {
    if(imageIdx === 0) return;
    commicImage.src = images[imageIdx - 1]
    imageIdx -= 1
})


buttonNext.addEventListener('click', () => {
    if(imageIdx === images.length - 1) return;
    commicImage.src = images[imageIdx + 1]
    imageIdx += 1
})


