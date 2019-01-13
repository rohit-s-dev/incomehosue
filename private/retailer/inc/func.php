
<?php
// post request
function is_post_request() {
    return $_SERVER['REQUEST_METHOD'] == 'POST';
}

// get request
function is_get_request() {
    return $_SERVER['REQUEST_METHOD'] == 'GET';
}

// Form Validation
function is_blank($value) {
    return !isset($value) || trim($value) === '';
}


function less_than($value , $max) {
    $length = strlen($value);
    return $length < $max ;
}
// header url
function msg_show($location) {
    header("Location: ". $location);
    exit;
}

// error show msg 
function err_msg($msg, $msg_text) {
    if(isset($_GET[$msg])) {
        echo $msg_text;
    }
}

function h($string="") {
    return htmlspecialchars($string);
}


// Move uploaded file
// MSME Move Uploaded files
function msme_m_u_f($tempfile, $filename) {
    // $filename = strtolower($filename);
   return move_uploaded_file($tempfile, "images/uploads/msme/$filename");
}

// Trademark individual Move Uploaded files
function trad_ind_m_u_f($tempfile, $filename) {
    // $filename = strtolower($filename);
   return move_uploaded_file($tempfile, "images/uploads/trademark/individual/$filename");
}

// Trademark individual Move Uploaded files
function trad_comp_m_u_f($tempfile, $filename) {
    // $filename = strtolower($filename);
   return move_uploaded_file($tempfile, "images/uploads/trademark/company/$filename");
}


// Proprietorship Move Uploaded files
function prop_m_u_f($tempfile, $filename) {
    // $filename = strtolower($filename);
   return move_uploaded_file($tempfile, "images/uploads/proprietorship_doc/$filename");
}

// Digital signature move uploaded files
function dsc_m_u_f($tempfile, $filename) {
    // $filename = strtolower($filename);
   return move_uploaded_file($tempfile, "images/uploads/digital_signature/$filename");
}

// is string
function str($value) {
    return is_string($value);
}
// is numeric
function int($value) {
    return is_numeric($value);
}

// remove white spaces and find value less than 3
function trim_space($value) {
    $result = preg_replace('/\s+/', '', $value);
    if(strlen($result) < 3) {
        return $msg;
    }
}

// 

// email validation preg
function e_valid($value) {
    $match = '/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix';
    if(preg_match($match, $value)) {
        return  true;
    } else {
        return false;
    }
}

// mobile_number validation
function m_numb($value) {
    $match = '/^[0-9]{10}+$/';
    if(preg_match($match, $value)) {
        return  true;
    }  else {
        return false;
    }
}

function sendto() {
    return $send_to = 'support@utglobe.com';
}

// multi mail function
function multi_attach_mail($to, $subject, $message, $senderMail, $senderName, $files){
    $to = sendto();
    $senderName = 'Incomehouse Webiste Portal';
    $from = $senderName." <".$senderMail.">"; 
    $headers = "From: $from";

    // boundary 
    $semi_rand = md5(time()); 
    $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x"; 

    // headers for attachment 
    $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\""; 

    // multipart boundary 
    $message = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" .
    "Content-Transfer-Encoding: 7bit\n\n" . $message . "\n\n"; 

    // preparing attachments
    if(count($files) > 0){
        for($i=0;$i<count($files);$i++){
            if(is_file($files[$i])){
                $message .= "--{$mime_boundary}\n";
                $fp =    @fopen($files[$i],"rb");
                $data =  @fread($fp,filesize($files[$i]));
                @fclose($fp);
                $data = chunk_split(base64_encode($data));
                $message .= "Content-Type: application/octet-stream; name=\"".basename($files[$i])."\"\n" . 
                "Content-Description: ".basename($files[$i])."\n" .
                "Content-Disposition: attachment;\n" . " filename=\"".basename($files[$i])."\"; size=".filesize($files[$i]).";\n" . 
                "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
            }
        }
    }

    $message .= "--{$mime_boundary}--";
    $returnpath = "-f" . $senderMail;

    //send email
    $mail = @mail($to, $subject, $message, $headers, $returnpath); 

    //function return true, if email sent, otherwise return false
    if($mail){ return TRUE; } else { return FALSE; }

}

// // single mail attachements
// function s_m($to, $subject, $message, $senderMail, $senderName, $files) {
//     $to = sendto();
//     $senderName = 'Incomehouse Webiste Portal';
//     //header for sender info
//     $header = "From : " . 'incomehouse' .  "\r\n". "<br>";
//     $header .= "Reply To : " .'do not reply'. "\r\n". "<br>";

//     //boundary 
//     $semi_rand = md5(time()); 
//     $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x"; 

//     //headers for attachment 
//     $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\""; 

//     //multipart boundary 
//     $message = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" .
//     "Content-Transfer-Encoding: 7bit\n\n" . $htmlContent . "\n\n"; 

//     //preparing attachment
//     if(!empty($file) > 0){
//         if(is_file($file)){
//             $message .= "--{$mime_boundary}\n";
//             $fp =    @fopen($file,"rb");
//             $data =  @fread($fp,filesize($file));

//             @fclose($fp);
//             $data = chunk_split(base64_encode($data));
//             $message .= "Content-Type: application/octet-stream; name=\"".basename($file)."\"\n" . 
//             "Content-Description: ".basename($file)."\n" .
//             "Content-Disposition: attachment;\n" . " filename=\"".basename($file)."\"; size=".filesize($file).";\n" . 
//             "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
//         }
//     }
//     $message .= "--{$mime_boundary}--";
//     $returnpath = "-f";

//     //send email
//     $mail = @mail($to, $subject, $message, $headers, $returnpath); 
//     if($mail){ return TRUE; } else { return FALSE; }
// }