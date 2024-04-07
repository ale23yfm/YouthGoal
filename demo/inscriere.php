<?php require_once('header.php'); ?>

<div class="forms">
    <h1>Jobs</h1>
    <form action="/action_page.php">
        <label for="fname">Nume</label>
        <input type="text" id="fname" name="firstname" placeholder="Nume"><br></br>

        <label for="lname">Prenume</label>
        <input type="text" id="lname" name="lastname" placeholder="Prenume"><br></br>

        <label for="class" class="varsta">Vârsta</label>
        <input type="number" name="number" min="16" max="24"><br></br>

        <label for="lname">Număr de telefon</label>
        <input type="tel" id="phone" name="phone" placeholder="07xxxxxxxx" pattern="07[0-9]{2} [0-9]{3} [0-9]{3}" required><br><br>

        <label for="country">Firmă</label>
        <select id="firma" name="Firmă">
            <option value="Alege">Alege</option>
            <option value="Dedeman">Dedeman</option>
            <option value="DM">DM</option>
            <option value="EMob">EMob</option>
            <option value="Lost Escape Room">Lost Escape Room</option>
            <option value="Primăria Piatra Neamț">Primăria Piatra Neamț</option>
            <option value="TPN">TPN</option>
            <option value="Vulp’s Wooden Toys & Playroom Design">Vulp’s Wooden Toys & Playroom Design</option>
        </select><br></br>

        <input type="submit" value="Trimite"><br></br>
    </form>
</div>

<div class="forms">
    <h1>Meditații</h1>
    <form action="/action_page.php">
        <label for="fname">Nume</label>
        <input type="text" id="fname" name="Nume" placeholder="Nume"><br></br>

        <label for="lname">Prenume</label>
        <input type="text" id="lname" name="Prenume" placeholder="Prenume"><br></br>

        <label for="lname">Specializare</label>
        <input type="text" id="lname" name="lastname" placeholder="Specializare"><br></br>

        <label for="lname">Adresa de e-mail</label>
        <input type="email" class="form-control" placeholder="Adresa de e-mail..." aria-label="Input group example" aria-describedby="btnGroupAddon" /><br></br>

        <label for="class">Vârsta</label>
        <input type="number" name="number" min="16" max="24"><br></br>

        <label for="lname">Număr de telefon</label>
        <input type="tel" id="phone" name="phone" placeholder="07xxxxxxxx" pattern="07[0-9]{8}" required><br><br>

        <a class="submit">
            <link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
            <script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript" async></script>
            <a href="" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/aleifrim79/30min'});return false;">Schedule time with me</a>
        </a>
        <input type="submit" value="Trimite"><br></br>

    </form>
</div>

<?php require_once('footer.php'); ?>