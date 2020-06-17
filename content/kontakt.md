/*

Title: Kontakt
*/

# Schreiben Sie uns!


Sie können uns auch gerne per E-Mail kontaktieren ([kontakt@cmd-ev.de](mailto:kontakt@cmd-ev.de)) oder [per Post oder Telefon](/impressum).

<form action="/send-form.php" method="post">
	<input type="hidden" name="form_id" value="kontakt" />
	<div class="form-row odd">
		Füllen Sie bitte <emph>nur jede zweite Zeile</emph> aus, beginnen Sie bei der zweiten.
		<label for="f1">Ihr Name</label>
		<input type="text" name="f1" id="f1" placeholder="Ihr Name">
	</div>
	<div class="form-row even">
		<label for="f2">Ihr Name</label>
		<input type="text" name="f2" id="f2" placeholder="Ihr Name">
	</div>
	<div class="form-row odd">
		<label for="f3">Ihre Nachricht</label>
		<textarea name="f3" id="f3" placeholder="Ihre Nachricht"></textarea>
	</div>
	<div class="form-row even">
		<label for="f4">Ihre Nachricht</label>
		<textarea name="f4" id="f4" placeholder="Ihre Nachricht"></textarea>
	</div>
	<div class="form-row odd">
		<label for="f5">Wie erreichen wir Sie?</label>
		<input type="text" name="f5" id="f5" placeholder="Ihre E-Mail-Adresse oder Telefonnummer">
	</div>
	<div class="form-row even">
		<label for="f6">Wie erreichen wir Sie?</label>
		<input type="text" name="f6" id="f6" placeholder="Ihre E-Mail-Adresse oder Telefonnummer">
	</div>
	<button type="submit">Absenden</button>
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
        message: 'Bitte geben Sie eine Nachricht ein'
      },
      '#f6': {
        required: true,
        message: 'Bitte teilen Sie uns mit, wie wir Sie erreichen können.'
      }
    }
  });
</script>
