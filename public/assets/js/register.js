function convertImageToBase64() {
    const fileInput = document.getElementById('pictureInput');
    const file = fileInput.files[0];
    const reader = new FileReader();
    
    reader.onload = function(event) {
        const base64String = event.target.result;
        document.getElementById('pictureBase64').value = base64String;
    };

    console.log(reader)
    
    reader.readAsDataURL(file);
}