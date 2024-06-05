function removeLoginActionsContainer() {
  const element = document.querySelector('#login-actions-container');
  if (element) {
    element.remove();
  }
}

function removeFinalizarSecao() {
  const element = document.querySelector('#finalizar-secao');
  if (element) {
    element.remove();
  }
}

function handleSuccess(xhr) {
  if (xhr.status >= 200 && xhr.status < 300) {
    const response = JSON.parse(xhr.responseText);
    if (response.logged) {
      removeLoginActionsContainer();
    } else {
      removeFinalizarSecao();
    }

    const userPicture = response.userPicture;

    if (userPicture) {
        const imgElement = document.querySelector('#user-picture');
        imgElement.setAttribute('src', userPicture);
    }


  } else {
    console.error('Erro ao fazer a requisição:', xhr.statusText);
  }
}

function handleNetworkError() {
  console.error('Erro de rede');
}

var xhr = new XMLHttpRequest();
xhr.open('GET', '/login/status', true);
xhr.onload = function() {
  handleSuccess(xhr);
};
xhr.onerror = function() {
  handleNetworkError();
};
xhr.send();
