<?php require_once "views/partials/header.php"; ?>
<div class="content">
    <h1>Contact us</h1>
    <form action="/contact-submit" method="POST">
        <div class="form-group reduceSize">
            <label for="subject">Subject</label>
            <input type="text" name="subject" id="subject" class="form-control">
        </div>
        <div class="form-group reduceSize">
            <label for="message">Message</label>
            <textarea name="message" id="message" class="form-control"></textarea>
        </div>
        <div>
            <button type="submit" class="btn btn-secondary">Send</button>
        </div>
    </form>
</div>
<?php require_once "views/partials/footer.php"; ?>