<section id="contact"><!-- Form -->
    <header>
        <h3>Contact Form</h3>
    </header>
    <article>

        <form id="contact us" method="post" action="<?php echo htmlspecialchars($_SERVER['DOCUMENT_ROOT'].'/contactform.php');?>" accept-charset='UTF-8'>
            <input type="text" name="name" id="name" placeholder="Name" required>
            <input type="email" name="email" id="email" placeholder="Email" required>
            <select value="reason" name="reason">
                <option placeholder="Select Reason">Select reason (optional)</option>
                <option name="reason" value="job">Job</option>
                <option name="reason" value="employer>">Employer</option>
                <option name="reason" value="other>">Other</option>
            </select>
            <textarea name="message" placeholder="Message" rows="3" required></textarea>

            <button type="submit" class="submit" value="submit">Send!</button>
        </form>
    </article>
</section><!-- /contact -->