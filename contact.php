<section id="contact"><!-- Form -->
    <header>
        <h3>Contact Form</h3>
    </header>
    <article>
        <form id="contact us" method="post" action="<?php echo htmlspecialchars('mailform.php');?>" accept-charset='UTF-8'>
            <input type="text" name="name" id="name" placeholder="Name" required>
            <input type="email" name="email" id="email" placeholder="Email" required>
            <select name="reason" required>
                <option placeholder="Select Reason" selected disabled>Select reason</option>
                <option value="Job">Job</option>
                <option value="Employer">Employer</option>
                <option value="Other">Other</option>
            </select>
            <textarea name="message" placeholder="Message" rows="3" required></textarea>

            <button type="submit" class="submit" value="submit">Send!</button>
        </form>
    </article>
    
</section><!-- /contact -->