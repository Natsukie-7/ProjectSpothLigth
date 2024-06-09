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
  
getData('/data/artist') /* Pega os aartistas */
    .then((data) => {
        const artistContainer = document.getElementById('artist-list');

        data.forEach(element => {
          const artistFolder = document.createElement('div');
          const artistPicture = document.createElement('div');
          const artistImage = document.createElement('img');
          const artistLabel = document.createElement('div');
          const artistName = document.createElement('label');
      
          artistFolder.classList.add('artist-folder');
          artistPicture.classList.add('artist-picture');
          artistLabel.classList.add('artist-label');
      
          artistImage.src = element.user_picture;
          artistName.textContent = element.nome;
      
          artistPicture.appendChild(artistImage);
          artistLabel.appendChild(artistName);
          artistFolder.appendChild(artistPicture);
          artistFolder.appendChild(artistLabel);
      
          artistContainer.appendChild(artistFolder);
      });

    })
    .catch((error) => {
        console.error('Erro ao buscar dados:', error);
    });

getData('/data/content') /* Pega as músicas */
  .then((data) => {
      const contentContainer = document.getElementById('music-list');
      data.forEach(content => {
        const title = content.nome;
        const thumbnail = content.thumbnail;
        const id = content.id;
    
        const contentFolder = document.createElement('div');
        contentFolder.classList.add('content-folder');
    
        const contentLink = document.createElement('a');
        contentLink.href = `/content?${id}`;
    
        const contentPicture = document.createElement('div');
        contentPicture.classList.add('content-picture');
    
        const contentImage = document.createElement('img');
        contentImage.src = thumbnail;
    
        const contentLabel = document.createElement('div');
        contentLabel.classList.add('content-label');
    
        const contentTitle = document.createElement('label');
        contentTitle.textContent = title;
    
        contentLink.appendChild(contentImage);
        contentLink.appendChild(contentTitle);
    
        contentPicture.appendChild(contentLink);
    
        contentFolder.appendChild(contentPicture);
        contentFolder.appendChild(contentLabel);
    
        contentContainer.appendChild(contentFolder);
    });
    
  })
  .catch((error) => {
      console.error('Erro ao obter os dados:', error);
  });
