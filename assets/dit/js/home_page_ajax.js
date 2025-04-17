document.getElementById('EnqForm').addEventListener('submit', function (e) {
  e.preventDefault();
  document.getElementById('url_source').value = window.location.href;
  const formUrl = baseurly + 'LiveLead/allenquiryldsubmit';
  const formData = new FormData(this);
  document.getElementById('enqform-overlay').style.display = 'block';

  fetch(formUrl, {
    method: 'POST',
    body: formData
  })
    .then((response) => response.json())
    .then((data) => {
      if (data.message === 'error') {
        alert(removeTags(data.response));
        document.getElementById('enqform-overlay').style.display = 'none';
      } else if (data.message === 'success') {
        document.getElementById('enqform-overlay').style.display = 'none';
        const stucessmsgMsg = document.getElementById('success-msg');
        stucessmsgMsg.innerHTML = data.response;
        setTimeout(() => {
          stucessmsgMsg.style.display = 'none';
        }, 15000);
        document.getElementById('EnqForm').reset();
      } else {
        const sterrorMsg = document.getElementById('error-msg');
        sterrorMsg.style.display = 'block';
        sterrorMsg.innerHTML = data.response;
        setTimeout(() => {
          sterrorMsg.style.display = 'none';
        }, 15000);
      }
    });
});

//   30 sept
// popup relaod
