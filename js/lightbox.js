let images = document.querySelectorAll('article img');
let textes = document.querySelectorAll('article p');

for (let i = 0; i < images.length; i++) {
    images[i].addEventListener('click', function () {
        let img = this.getAttribute('src');
        let texte = textes[i].innerHTML;

        let div = document.createElement('div');
        div.setAttribute('id', 'lightbox');

        let nouvelleimage = document.createElement('img');
        nouvelleimage.setAttribute('src', img);

        let p = document.createElement('p');
        p.innerHTML = texte;

        div.appendChild(nouvelleimage);
        div.appendChild(fermeture);
        div.appendChild(p);

        document.body.appendChild(div);

        fermeture.addEventListener('click', () => {
            document.body.removeChild(div);
        });
    });
}
