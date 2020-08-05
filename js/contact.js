function contact () {
    var full_name = document.getElementById('full_name').value;
    var email = document.getElementById('email').value;
    var phone = document.getElementById('phone').value;
    var subject = document.getElementById('subject').value;
    var message = document.getElementById('message').value;

    var xhr = createRequest();
    var url = './includes/contact.php';
    var form_data = new FormData();
    form_data.append('full_name',full_name);
    form_data.append('email',email);
    form_data.append('phone',phone);
    form_data.append('subject',subject);
    form_data.append('message',message);

    xhr.onreadystatechange = function () {
        if (this.readyState == 1 || this.readyState == 2 || this.readyState == 3) {
            document.getElementById('send_btn').value = 'Please Wait';
        }
        else if (this.readyState == 4) {
            document.getElementById('send_btn').value = 'SEND';
            if (this.status == 200) {
                console.log(this.responseText);
                var json_response = JSON.parse(this.responseText);
                if (json_response.reply.trim() === 'done') {
                    swal({
                        text: 'Your message has been received.',
                        icon: 'success'
                    }).then(value => {
                        document.getElementById('full_name').value = "";
                        document.getElementById('email').value = "";
                        document.getElementById('phone').value = "";
                        document.getElementById('subject').value = "";
                        document.getElementById('message').value = ""; 
                    });
                }
                else {
                    swal({
                        text: 'Failed to send your message, please try again.',
                        icon: 'warning'
                    });
                }
            }
            else {
                swal({
                    text: 'Sorry, failed to send your message.',
                    icon: 'warning'
                }).then(value=>{
                    console.log(this.responseText); 
                });
            }
        }
    }
    xhr.open('POST',url,true);
    xhr.send(form_data);
}