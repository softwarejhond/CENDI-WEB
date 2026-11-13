<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir los datos del formulario
    $nombre = $_POST['name'];
    $email = $_POST['email'];
    $direccion = $_POST['adress'];
    $telefono = $_POST['phone'];
    $celular = $_POST['cellphone'];
    $ciudad = $_POST['city'];
    $cargo = $_POST['employ'];
    
    // Configurar el destinatario y el asunto
    $to = "rhumanos@cendiacademico.edu.co"; // Cambia esto por el correo al que quieres que lleguen las solicitudes
    $subject = "Nueva solicitud de trabajo - CENDI";
    
    // Crear el mensaje
    $message = "
    <html>
    <head>
        <title>Nueva Solicitud de Trabajo</title>
        <style>
            body { font-family: Arial, sans-serif; }
            .container { padding: 20px; }
            .header { background-color: #f08006; color: white; padding: 10px; }
            .content { margin: 20px 0; }
            .field { margin: 10px 0; }
            .label { font-weight: bold; }
        </style>
    </head>
    <body>
        <div class='container'>
            <div class='header'>
                <h2>Nueva Solicitud de Trabajo - CENDI</h2>
            </div>
            <div class='content'>
                <div class='field'>
                    <span class='label'>Nombre completo:</span> $nombre
                </div>
                <div class='field'>
                    <span class='label'>Correo electrónico:</span> $email
                </div>
                <div class='field'>
                    <span class='label'>Dirección:</span> $direccion
                </div>
                <div class='field'>
                    <span class='label'>Teléfono:</span> $telefono
                </div>
                <div class='field'>
                    <span class='label'>Celular:</span> $celular
                </div>
                <div class='field'>
                    <span class='label'>Ciudad:</span> $ciudad
                </div>
                <div class='field'>
                    <span class='label'>Cargo al que aspira:</span> $cargo
                </div>
            </div>
        </div>
    </body>
    </html>
    ";
    
    // Configurar los headers para enviar HTML
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    $headers .= "From: $email\r\n";
    
    // Manejar el archivo adjunto
    if(isset($_FILES['cv']) && $_FILES['cv']['error'] == 0) {
        $attachment = chunk_split(base64_encode(file_get_contents($_FILES['cv']['tmp_name'])));
        $filename = $_FILES['cv']['name'];
        
        $headers .= "Content-Type: multipart/mixed; boundary=\"mixed-".md5(time())."\"\r\n";
        
        $message = "--mixed-".md5(time())."\r\n"
                 . "Content-Type: text/html; charset=UTF-8\r\n"
                 . "Content-Transfer-Encoding: 7bit\r\n\r\n"
                 . $message . "\r\n\r\n"
                 . "--mixed-".md5(time())."\r\n"
                 . "Content-Type: application/octet-stream; name=\"".$filename."\"\r\n"
                 . "Content-Transfer-Encoding: base64\r\n"
                 . "Content-Disposition: attachment; filename=\"".$filename."\"\r\n\r\n"
                 . $attachment . "\r\n\r\n"
                 . "--mixed-".md5(time())."--";
    }
    
    // Enviar el correo
    $success = mail($to, $subject, $message, $headers);
    
    // Preparar la respuesta
    $response = array(
        'success' => $success,
        'message' => $success ? 'Solicitud enviada correctamente' : 'Error al enviar la solicitud'
    );
    
    // Enviar respuesta como JSON
    header('Content-Type: application/json');
    echo json_encode($response);
    exit;
}
?>