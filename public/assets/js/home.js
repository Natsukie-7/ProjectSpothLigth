function getData(url) {
    return new Promise((resolve, reject) => {
      var xhr = new XMLHttpRequest();
      xhr.open('GET', url, true);
      xhr.onload = function() {
        if (xhr.status >= 200 && xhr.status < 300) {
            resolve(JSON.parse(xhr.responseText));
        } else {
          reject(xhr.statusText);
        }
      };
      xhr.onerror = function() {
        reject('Network Error');
      };
      xhr.send();
    });
  }
  
getData('/data/artist')
    .then((data) => {
        const artistContainer = document.getElementById('artist-list');

        data.forEach(element => {
            const artistDiv = document.createElement('div');
            const artistImage = document.createElement('img');
            const artistName = document.createElement('label');

            artistImage.src = element.user_picture;
            artistName.textContent = element.nome;

            artistDiv.appendChild(artistImage);
            artistDiv.appendChild(artistName);

            artistContainer.appendChild(artistDiv);
        });

    })
    .catch((error) => {
        console.error('Erro ao buscar dados:', error);
    });
