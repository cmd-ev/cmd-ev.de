/*

Title: Mitglied werden
*/

# Treten Sie dem CMD e.V. bei!

Als Mitglied im CMD e.V. unterstützen Sie den Verein fördernd
(z.B. durch Mitgliedsbeiträge und Spenden) und/oder aktiv. Sie sind in
die Organisation und Durchführung der Veranstaltungen des Vereins
eingebunden und entscheiden darüber mit, wie der Verein seine Ziele
erreicht.

Sie können auch das
[Beitrittsformular (PDF)](/assets/files/AntragaufMitgliedschaft.pdf)
ausfüllen und uns per Post oder eingescannt als E-Mail schicken.

Wenn Sie noch Fragen zur Mitgliedschaft haben, zögern Sie nicht uns zu
[kontaktieren](/kontakt)!

<hr>

Hiermit beantrage ich,...
<form action="/send-form.php" method="post">
	<input type="hidden" name="form_id" value="beitritt" />
	<div class="form-row odd">
		Füllen Sie bitte <emph>nur jede zweite Zeile</emph> aus, beginnen Sie bei der zweiten.
		<label for="f1">Name</label>
		<input type="text" name="f1" id="f1" placeholder="Vorname, Name">
	</div>
	<div class="form-row even">
		<label for="f2">Name</label>
		<input type="text" name="f2" id="f2" placeholder="Vorname, Name">
	</div>
	<div class="form-row odd">
		<label for="f3">Geburtsdatum</label>
		<input type="text" name="f3" id="f3" placeholder="DD.MM.YYYY">
	</div>
	<div class="form-row even">
		<label for="f4">Geburtsdatum</label>
		<input type="text" name="f4" id="f4" placeholder="DD.MM.YYYY">
	</div>
	<div class="form-row odd">
		<label for="f5">Adresse</label>
		<textarea name="f5" id="f5" placeholder="Strasse Hausnummer, Postleitzahl, Ort"></textarea>
	</div>
	<div class="form-row even">
		<label for="f6">Adresse</label>
		<textarea name="f6" id="f6" placeholder="Strasse Hausnummer, Postleitzahl, Ort"></textarea>
	</div>
	<div class="form-row odd">
		<label for="f7">Telefon</label>
		<input type="text" name="f7" id="f7" placeholder="Telefonnummer">
	</div>
	<div class="form-row even">
		<label for="f8">Telefon</label>
		<input type="text" name="f8" id="f8" placeholder="Telefonnummer">
	</div>
	<div class="form-row odd">
		<label for="f9">E-Mail-Adresse</label>
		<input type="text" name="f9" id="f9" placeholder="max@mustermann.example">
	</div>
	<div class="form-row even">
		<label for="f10">E-Mail-Adresse</label>
		<input type="text" name="f10" id="f10" placeholder="max@mustermann.example">
	</div>
	<div class="form-row odd">
		<label for="f11">E-Mail-Adresse (Wiederholung)</label>
		<input type="text" name="f11" id="f11" placeholder="max@mustermann.example">
	</div>
	<div class="form-row even">
		<label for="f12">E-Mail-Adresse (Wiederholung)</label>
		<input type="text" name="f12" id="f12" placeholder="max@mustermann.example">
	</div>
	<div class="form-row">
		...den Beitritt zum Verein "CMD - Computer, Menschen, Dinge e.V." mit Sitz in Trier zum nächstmöglichen Zeitpunkt. Den Mitgliedsbeitrag von derzeit 12 Euro jährlich werde ich entsprechend der aktuellen Mitgliedsbeitragsordnung auf das Konto überweisen, welches mir nach Empfang dieses Antrags vom Vorstand mitgeteilt wird.
	</div>
	<div class="form-row">
		<strong>Ich bin mit der Erhebung, Verarbeitung und Nutzung folgender personenbezogener Daten durch den Verein zur Mitgliederverwaltung im Wege der elektronischen Daten-verarbeitung einverstanden: Name, Anschrift, Geburtsdatum, Telefonnummer, E-Mail-Adresse. Mir ist bekannt, dass dem Aufnahmeantrag ohne dieses Einverständnis nicht stattgegeben werden kann.</strong>
	</div>
	<div class="form-row">
		<emph>Alle Formularfelder sind erforderlich. Bei offensichtlich falschen oder fehlenden Angaben behält sich der Verein vor, diesen Mitgliedsantrag als nichtig zu erachten. Eine Rückmeldung erfolgt dann nicht.</emph>
	</div>

	<button type="submit">Beitritt (kostenpflichtig) beantragen</button>
</form>
<script>
$('form').isHappy({
    fields: {
      // reference the field you're talking about, probably by `id`
      // but you could certainly do $('[name=name]') as well.
      '#f2': {
        required: true,
        message: 'Bitte geben Sie Ihren Namen an'
      },
      '#f4': {
        required: true,
        message: 'Bitte geben Sie Ihr Geburtsdatum ein'
      },
      '#f6': {
        required: true,
        message: 'Bitte geben Sie Ihre Adresse ein'
      },
      '#f8': {
        required: true,
        message: 'Bitte geben Sie Ihre Telefonnummer ein'
      },
      '#f10': {
        required: true,
        message: 'Bitte geben Sie Ihre E-Mail-Adresse ein'
      },
      '#f12': {
        required: true,
        message: 'Bitte geben Sie Ihre E-Mail-Adresse nochmals ein'
      }
    }
  });
</script>
