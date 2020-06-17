<?php
//error_reporting(E_ALL);
define('RETURN_OK', '/form_ok');
define('RETURN_FAIL', '/form_fail');

// We use form field names of the form fx, where x is a number. This way, spammers can not know which to fill an which to leave out.
$forms = array(
    "beitritt" => array(
        "fields" => array(
            2 => "Name", 
            4 => "Geburtsdatum", 
            6 => "Adresse", 
            8 => "Telefon", 
            10 => "E-Mail", 
            12 => "E-Mail (Wiederholung)"
        ),
        "notallowed" => array(1, 3, 5, 7, 9, 11),
        "required" => array(2, 4, 6, 8, 10, 12),
        //"receiver" => 'kontakt@cmd-ev.de',
	"receiver" => 'guido.schmitz@cmd-ev.de',
        "subject" => 'Beitrittsantrag'
    ),
    "kontakt" => array(
        "fields" => array(
            2 => "Name", 
            4 => "Nachricht", 
            6 => "Kontakt (Telefon/E-Mail)"
        ),
        "notallowed" => array(1, 3, 5),
        "required" => array(2, 4),
        //"receiver" => 'kontakt@cmd-ev.de',
	"receiver" => 'guido.schmitz@cmd-ev.de',
        "subject" => 'Kontaktanfrage'
    )
);

if (empty($_POST['form_id'])) {
    header('Location: '.RETURN_FAIL);
    exit();
}

$id = $_POST['form_id'];
if (! isset($forms[$id])) {
    header('Location: '.RETURN_FAIL);
    exit();
}

foreach ($forms[$id]['notallowed'] as $na) {
    if (! empty($_POST["f$na"])) {
        header('Location: '.RETURN_FAIL);
        exit();
    }
}

foreach ($forms[$id]['required'] as $req) {
    if (empty($_POST["f$req"])) {
        header('Location: '.RETURN_FAIL);
        exit();
    }
}

$text = "Folgende Informationen wurden im Formular eingegeben:\n";

foreach ($forms[$id]['fields'] as $n => $label) {
    $content = empty($_POST["f$n"]) ? ' - keine Eingabe - ' : $_POST["f$n"];
    $text .= "\n{$label}: {$content}";
}

$headers   = array();
$headers[] = "MIME-Version: 1.0";
$headers[] = "Content-type: text/plain; charset=utf-8";
$success = mail($forms[$id]['receiver'], $forms[$id]['subject'], $text, implode("\r\n",$headers));

if ($success) {
    header('Location: '.RETURN_OK);
    exit();
}

header('Location: '.RETURN_FAIL);


