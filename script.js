const container = document.querySelector('.container');
const mainImage = document.querySelector('.mainImage');
const thumbnail = document.querySelectorAll('.thumbnail');

container.addEventListener('click', function (evt) {
    if (evt.target.className == 'thumbnail') {
        mainImage.src = evt.target.src;
        mainImage.classList.add('fade');
        setTimeout(function () {
            mainImage.classList.remove('fade');
        }, 500);
        thumbnail.forEach(function (thumb) {
            thumb.className = 'thumbnail';
        });
        evt.target.classList.add('active');
    }
});