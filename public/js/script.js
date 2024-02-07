document.addEventListener("DOMContentLoaded", function(){
    document.querySelector("form").addEventListener("submit", function(e){
      e.preventDefault(); // Verhindert das Neuladen der Seite
  
      let nachname = document.getElementById('nachname').value;
      let vorname = document.getElementById('vorname').value;
  
      let formData = new FormData();
      formData.append('nachname', nachname);
      formData.append('vorname', vorname);
  
      fetch('../php/insertData.php', {
        method: 'POST',
        body: formData
      })
      .then(response => response.text())
      .then(data => {
        console.log(data); // Verarbeitung der Antwort
      })
      .catch(error => {
        console.error('Fehler:', error);
      });
    });
  });