<section id="contact"><!-- Form -->
    <header>
        <h3>Contact Form</h3>
    </header>
    <article>
        <form id="contact_us" method="post" action=" " accept-charset='UTF-8'>
            <input type="text" name="name" id="name" placeholder="Name" maxlength="30" minlength="2" type="text" required>
              
            <input type="email" name="email" placeholder="Email" id="email" required>

            <select name="subject" required>
                <option placeholder="Select Reason" selected disabled>Select reason</option>
                <option value="Job">Job</option>
                <option value="Employer">Employer</option>
                <option value="Other">Other</option>
            </select>
            <textarea name="message" placeholder="Message" id="message" rows="3" required></textarea>
              
            <button type="submit" class="submit" value="submit">Send!</button>
        </form>
        <script>
        $("#inquiryForm").validate();
        </script>
    </article>
    
    
    
</section><!-- /contact -->